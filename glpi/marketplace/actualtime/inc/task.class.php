<?php
/*
 -------------------------------------------------------------------------
 ActualTime plugin for GLPI
 Copyright (C) 2018-2022 by the TICgal Team.
 https://www.tic.gal/
 -------------------------------------------------------------------------
 LICENSE
 This file is part of the ActualTime plugin.
 ActualTime plugin is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 3 of the License, or
 (at your option) any later version.
 ActualTime plugin is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
 You should have received a copy of the GNU General Public License
 along withOneTimeSecret. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
 @package   ActualTime
 @author    the TICgal team
 @copyright Copyright (c) 2018-2022 TICgal team
 @license   AGPL License 3.0 or (at your option) any later version
            http://www.gnu.org/licenses/agpl-3.0-standalone.html
 @link      https://www.tic.gal/
 @since     2018-2022
 ----------------------------------------------------------------------
*/

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

include_once('config.class.php');
/**
 *
 */
class PluginActualtimeTask extends CommonDBTM
{

   public static $rightname = 'task';
   const AUTO = 1;
   const WEB = 2;
   const ANDROID = 3;

   static function getTypeName($nb = 0)
   {
      return __('ActualTime', 'Actualtime');
   }

   static public function rawSearchOptionsToAdd()
   {

      $tab['actualtime'] = 'ActualTime';

      $tab['7000'] = [
         'table' => self::getTable(),
         'field' => 'actual_actiontime',
         'name' => __('Total duration'),
         'datatype' => 'specific',
         'joinparams' => [
            'beforejoin' => [
               'table' => 'glpi_tickettasks',
               'joinparams' => [
                  'jointype' => 'child'
               ]
            ],
            'jointype' => 'child',
         ],
         'type' => 'total'
      ];
      $tab['7001'] = [
         'table' => self::getTable(),
         'field' => 'actual_actiontime',
         'name' => __("Duration Diff", "actiontime"),
         'datatype' => 'specific',
         'joinparams' => [
            'beforejoin' => [
               'table' => 'glpi_tickettasks',
               'joinparams' => [
                  'jointype' => 'child'
               ]
            ],
            'jointype' => 'child',
         ],
         'type' => 'diff'
      ];
      $tab['7002'] = [
         'table' => self::getTable(),
         'field' => 'actual_actiontime',
         'name' => __("Duration Diff", "actiontime") . " (%)",
         'datatype' => 'specific',
         'joinparams' => [
            'beforejoin' => [
               'table' => 'glpi_tickettasks',
               'joinparams' => [
                  'jointype' => 'child'
               ]
            ],
            'jointype' => 'child',
         ],
         'type' => 'diff%'
      ];

      return $tab;
   }

   static function getSpecificValueToDisplay($field, $values, array $options = [])
   {
      global $DB;
      if (!is_array($values)) {
         $values = [$field => $values];
      }

      switch ($field) {
         case 'actual_actiontime':
            $actual_totaltime = 0;
            $ticket = new Ticket();
            $ticket->getFromDB($options['raw_data']['id']);
            $total_time = $ticket->getField('actiontime');
            $query = [
               'SELECT' => [
                  'glpi_tickettasks.id',
               ],
               'FROM' => 'glpi_tickettasks',
               'WHERE' => [
                  'tickets_id' => $options['raw_data']['id'],
               ]
            ];
            foreach ($DB->request($query) as $id => $row) {
               $actual_totaltime += self::totalEndTime($row['id']);
            }
            switch ($options['searchopt']['type']) {
               case 'diff':
                  $diff = $total_time - $actual_totaltime;
                  return HTML::timestampToString($diff);
                  break;

               case 'diff%':
                  if ($total_time == 0) {
                     $diffpercent = 0;
                  } else {
                     $diffpercent = 100 * ($total_time - $actual_totaltime) / $total_time;
                  }
                  return round($diffpercent, 2) . "%";
                  break;

               case 'task':
                  $query = [
                     'SELECT' => [
                        'actual_actiontime'
                     ],
                     'FROM' => self::getTable(),
                     'WHERE' => [
                        'tickettasks_id' => $options['raw_data']['id']
                     ]
                  ];
                  $task_time = 0;
                  foreach ($DB->request($query) as $actiontime) {
                     $task_time += $actiontime["actual_actiontime"];
                  }
                  return HTML::timestampToString($task_time);
                  break;

               default:
                  return HTML::timestampToString($actual_totaltime);
                  break;
            }
            break;
      }
      return parent::getSpecificValueToDisplay($field, $values, $options);
   }

   static public function postForm($params)
   {
      global $CFG_GLPI;

      $item = $params['item'];

      switch ($item->getType()) {
         case 'TicketTask':
            if ($item->getID()) {

               $config = new PluginActualtimeConfig();

               $task_id = $item->getID();
               $rand = mt_rand();
               $buttons = ($item->fields['users_id_tech'] == Session::getLoginUserID() && $item->can($task_id, UPDATE));
               $time = self::totalEndTime($task_id);
               $text_restart = "<i class='fa-solid fa-forward'></i>";
               $text_pause = "<i class='fa-solid fa-pause'></i>";
               $html = '';
               $html_buttons = '';
               $script = <<<JAVASCRIPT
$(document).ready(function() {
JAVASCRIPT;

               // Only task user
               $timercolor = 'black';
               if ($buttons) {

                  $value1 = "<i class='fa-solid fa-play'></i>";
                  $action1 = '';
                  $color1 = 'gray';
                  $disabled1 = 'disabled';
                  $action2 = '';
                  $color2 = 'gray';
                  $disabled2 = 'disabled';

                  if ($item->getField('state') == 1) {

                     if (self::checkTimerActive($task_id)) {

                        $value1 = $text_pause;
                        $action1 = 'pause';
                        $color1 = 'orange';
                        $disabled1 = '';
                        $action2 = 'end';
                        $color2 = 'red';
                        $disabled2 = '';
                        $timercolor = 'red';
                     } else {

                        if ($time > 0) {
                           $value1 = $text_restart;
                           $action2 = 'end';
                           $color2 = 'red';
                           $disabled2 = '';
                        }

                        $action1 = 'start';
                        $color1 = 'green';
                        $disabled1 = '';
                     }
                  }

                  $html_buttons .= "<button type='button' class='btn btn-primary m-2' id='actualtime_button_{$task_id}_1_{$rand}' action='$action1' style='background-color:$color1;color:white' $disabled1><span class='d-none d-md-block'>$value1</span></button>";
                  $html_buttons .= "<button type='button' class='btn btn-primary m-2' id='actualtime_button_{$task_id}_2_{$rand}' action='$action2' style='background-color:$color2;color:white' $disabled2><span class='d-none d-md-block'><i class='fa-solid fa-stop'></i></span></button>";

                  // Only task user have buttons
                  $script .= <<<JAVASCRIPT
   $("#actualtime_button_{$task_id}_1_{$rand}").click(function(event) {
      window.actualTime.pressedButton($task_id, $(this).attr('action'));
   });

   $("#actualtime_button_{$task_id}_2_{$rand}").click(function(event) {
      window.actualTime.pressedButton($task_id, $(this).attr('action'));
   });

JAVASCRIPT;
               }

               // Task user (always) or Standard interface (always)
               // or Helpdesk inteface (only if config allows)
               if (
                  $buttons
                  || (Session::getCurrentInterface() == "central")
                  || $config->showInHelpdesk()
               ) {

                  $html .= "<div class='row center'>";
                  $html .= "<div class='col-12 col-md-7'>";
                  $html .= "<div class='b'>" . __("Actual Duration", 'actualtime') . "</div>";
                  $html .= "<div id='actualtime_timer_{$task_id}_{$rand}' style='color:{$timercolor}'></div>";
                  $html .= "</div>";
                  $html .= "<div class='col-12 col-md-5'>";
                  $html .= "<div class='btn-group'>";
                  $html .= $html_buttons;
                  $html .= "</div>";
                  $html .= "</div>";
                  $html .= "</div>";
                  $html .= "<div class='row center b'>";
                  $html .= "<div class='col-12 col-md-7'>" . __("Start date") . "</div>";
                  $html .= "<div class='col-12 col-md-5'>" . __("Partial actual duration", 'actualtime') . "</div>";
                  $html .= "</div>";

                  $html .= "<div id='actualtime_segment_{$task_id}_{$rand}'>";
                  $html .= self::getSegment($item->getID());
                  $html .= "</div>";

                  echo $html;

                  // Finally, fill the actual total time in all timers
                  $script .= <<<JAVASCRIPT

   window.actualTime.fillCurrentTime($task_id, $time);

});
JAVASCRIPT;
                  echo Html::scriptBlock($script);
               }
            } else {
               //echo Html::scriptBlock('');
               $div = "<div id='actualtime_autostart' class='form-field row col-12 mb-2'><label class='col-form-label col-2 text-xxl-end' for='autostart'><i class='fas fa-stopwatch fa-fw me-1' title='" . __('Autostart') . "'></i></label><div class='col-10 field-container'><label class='form-check form-switch pt-2'><input type='hidden' name='autostart' value='0'><input type='checkbox' id='autostart' name='autostart' value='1' class='form-check-input'></label></div></div>";
               $script = <<<JAVASCRIPT
               $(document).ready(function() {
                  if($("#actualtime_autostart").length==0){
                     $("#new-TicketTask-block div.itiltask form div.row:first div.row").last().append("{$div}");
                  }
               });
JAVASCRIPT;
               echo Html::scriptBlock($script);
            }
            break;
      }
   }

   static function checkTech($task_id)
   {
      global $DB;

      $query = [
         'FROM' => 'glpi_tickettasks',
         'WHERE' => [
            'id' => $task_id,
            'users_id_tech' => Session::getLoginUserID(),
         ]
      ];
      $req = $DB->request($query);
      if ($row = $req->current()) {
         return true;
      } else {
         return false;
      }
   }

   static function checkTimerActive($task_id)
   {
      global $DB;

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            'tickettasks_id' => $task_id,
            [
               'NOT' => ['actual_begin' => null],
            ],
            'actual_end' => null,
         ]
      ];
      $req = $DB->request($query);
      if ($row = $req->current()) {
         return true;
      } else {
         return false;
      }
   }

   static function totalEndTime($task_id)
   {
      global $DB;

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            'tickettasks_id' => $task_id,
            [
               'NOT' => ['actual_begin' => null],
            ],
            [
               'NOT' => ['actual_end' => null],
            ],
         ]
      ];

      $seconds = 0;
      foreach ($DB->request($query) as $id => $row) {
         $seconds += $row['actual_actiontime'];
      }

      $querytime = [
         'FROM' => self::getTable(),
         'WHERE' => [
            'tickettasks_id' => $task_id,
            [
               'NOT' => ['actual_begin' => null],
            ],
            'actual_end' => null,
         ]
      ];

      $req = $DB->request($querytime);
      if ($row = $req->current()) {
         $seconds += (strtotime("now") - strtotime($row['actual_begin']));
      }

      return $seconds;
   }

   static function checkUser($task_id, $user_id)
   {
      global $DB;

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            'tickettasks_id' => $task_id,
            [
               'NOT' => ['actual_begin' => null],
            ],
            'actual_end' => null,
            'users_id' => $user_id,
         ]
      ];
      $req = $DB->request($query);
      if ($row = $req->current()) {
         return true;
      } else {
         return false;
      }
   }

   /**
    * Check if the technician is free (= not active in any task)
    *
    * @param $user_id  Long  ID of technitian logged in
    *
    * @return Boolean (true if technitian IS NOT ACTIVE in any task)
    * (opposite behaviour from original version until 1.1.0)
    **/
   static function checkUserFree($user_id)
   {
      global $DB;

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            [
               'NOT' => ['actual_begin' => null],
            ],
            'actual_end' => null,
            'users_id' => $user_id,
         ]
      ];
      $req = $DB->request($query);
      if ($row = $req->current()) {
         return false;
      } else {
         return true;
      }
   }

   static function getTicket($user_id)
   {
      if ($task_id = self::getTask($user_id)) {
         $task = new TicketTask();
         $task->getFromDB($task_id);
         return $task->fields['tickets_id'];
      }
      return false;
   }

   static function getTask($user_id)
   {
      global $DB;

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            [
               'NOT' => ['actual_begin' => null],
            ],
            'actual_end' => null,
            'users_id' => $user_id,
         ]
      ];
      $req = $DB->request($query);
      if ($row = $req->current()) {
         return $row['tickettasks_id'];
      } else {
         return 0;
      }
   }

   static function getActualBegin($task_id)
   {
      global $DB;

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            'tickettasks_id' => $task_id,
            'actual_end' => null,
         ]
      ];
      $req = $DB->request($query);
      $row = $req->current();
      return $row['actual_begin'];
   }

   static public function showStats(Ticket $ticket)
   {
      global $DB;

      $config = new PluginActualtimeConfig();
      if ((Session::getCurrentInterface() == "central")
         || $config->showInHelpdesk()
      ) {

         $total_time = $ticket->getField('actiontime');
         $ticket_id = $ticket->getID();
         $actual_totaltime = 0;
         $query = [
            'SELECT' => [
               'glpi_tickettasks.id',
            ],
            'FROM' => 'glpi_tickettasks',
            'WHERE' => [
               'tickets_id' => $ticket_id,
            ]
         ];
         foreach ($DB->request($query) as $id => $row) {
            $actual_totaltime += self::totalEndTime($row['id']);
         }
         $html = "<table class='tab_cadre_fixe'>";
         $html .= "<tr><th colspan='2'>ActualTime</th></tr>";

         $html .= "<tr class='tab_bg_2'><td>" . __("Total duration") . "</td><td>" . HTML::timestampToString($total_time) . "</td></tr>";
         $html .= "<tr class='tab_bg_2'><td>ActualTime - " . __("Total duration") . "</td><td>" . HTML::timestampToString($actual_totaltime) . "</td></tr>";

         $diff = $total_time - $actual_totaltime;
         if ($diff < 0) {
            $color = 'red';
         } else {
            $color = 'black';
         }
         $html .= "<tr class='tab_bg_2'><td>" . __("Duration Diff", "actiontime") . "</td><td style='color:" . $color . "'>" . HTML::timestampToString($diff) . "</td></tr>";
         if ($total_time == 0) {
            $diffpercent = 0;
         } else {
            $diffpercent = 100 * ($total_time - $actual_totaltime) / $total_time;
         }
         $html .= "<tr class='tab_bg_2'><td>" . __("Duration Diff", "actiontime") . " (%)</td><td style='color:" . $color . "'>" . round($diffpercent, 2) . "%</td></tr>";

         $html .= "</table>";

         $html .= "<table class='tab_cadre_fixe'>";
         $html .= "<tr><th colspan='5'>ActualTime - " . __("Technician") . "</th></tr>";
         $html .= "<tr><th>" . __("Technician") . "</th><th>" . __("Total duration") . "</th><th>ActualTime - " . __("Total duration") . "</th><th>" . __("Duration Diff", "actiontime") . "</th><th>" . __("Duration Diff", "actiontime") . " (%)</th></tr>";

         $tasktable = TicketTask::getTable();
         $query = [
            'SELECT' => [
               'actiontime',
               'id',
               'users_id_tech',
            ],
            'FROM' => $tasktable,
            'WHERE' => [
               'tickets_id' => $ticket_id,
            ],
            'ORDER' => 'users_id_tech',
         ];
         $list = [];
         foreach ($DB->request($query) as $id => $row) {
            $list[$row['users_id_tech']]['name'] = getUserName($row['users_id_tech']);
            if (isset($list[$row['users_id_tech']]['total'])) {
               $list[$row['users_id_tech']]['total'] += $row['actiontime'];
            } else {
               $list[$row['users_id_tech']]['total'] = $row['actiontime'];
            }
            $qtime = [
               'SELECT' => [
                  'SUM' => 'actual_actiontime AS actual_total'
               ],
               'FROM' => self::getTable(),
               'WHERE' => [
                  'tickettasks_id' => $row['id'],
               ],
            ];
            $req = $DB->request($qtime);
            if ($time = $req->current()) {
               $actualtotal = $time['actual_total'];
            } else {
               $actualtotal = 0;
            }

            if (isset($list[$row['users_id_tech']]['actual_total'])) {
               $list[$row['users_id_tech']]['actual_total'] += $actualtotal;
            } else {
               $list[$row['users_id_tech']]['actual_total'] = $actualtotal;
            }
         }

         foreach ($list as $key => $value) {
            $html .= "<tr class='tab_bg_2'><td>" . $value['name'] . "</td>";

            $html .= "<td>" . HTML::timestampToString($value['total']) . "</td>";

            $html .= "<td>" . HTML::timestampToString($value['actual_total']) . "</td>";
            if (($value['total'] - $value['actual_total']) < 0) {
               $color = 'red';
            } else {
               $color = 'black';
            }
            $html .= "<td style='color:" . $color . "'>" . HTML::timestampToString($value['total'] - $value['actual_total']) . "</td>";
            if ($value['total'] == 0) {
               $html .= "<td style='color:" . $color . "'>0%</td></tr>";
            } else {
               $html .= "<td style='color:" . $color . "'>" . round(100 * ($value['total'] - $value['actual_total']) / $value['total']) . "%</td></tr>";
            }
         }
         $html .= "</table>";

         $script = <<<JAVASCRIPT
$(document).ready(function(){
   $("div.dates_timelines:last").append("{$html}");
});
JAVASCRIPT;
         echo Html::scriptBlock($script);
      }
   }

   static function getSegment($task_id)
   {
      global $DB;

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            'tickettasks_id' => $task_id,
            [
               'NOT' => ['actual_begin' => null],
            ],
            [
               'NOT' => ['actual_end' => null],
            ],
         ]
      ];
      $html = "";
      foreach ($DB->request($query) as $id => $row) {
         $html .= "<div class='row center'><div class='col-12 col-md-7'>" . $row['actual_begin'] . "</div><div class='col-12 col-md-5'>" . HTML::timestampToString($row['actual_actiontime']) . "</div></div>";
      }
      return $html;
   }

   static function afterAdd(TicketTask $item)
   {
      global $DB;
      $config = new PluginActualtimeConfig();
      $plugin = new Plugin();
      if (isset($item->input['autostart']) && $item->input['autostart']) {
         if ($item->getField('state') == 1 && $item->getField('users_id_tech') == Session::getLoginUserID() && $item->fields['id']) {
            $task_id = $item->fields['id'];
            if ($plugin->isActivated('tam')) {
               if (PluginTamLeave::checkLeave(Session::getLoginUserID())) {
                  $result['mensage'] = __("Today is marked as absence you can not initialize the timer", 'tam');
                  Session::addMessageAfterRedirect(
                     __("Today is marked as absence you can not initialize the timer", 'tam'),
                     true,
                     WARNING
                  );
                  return;
               } else {
                  $timer_id = PluginTamTam::checkWorking(Session::getLoginUserID());
                  if ($timer_id == 0) {
                     Session::addMessageAfterRedirect(
                        "<a href='" . $CFG_GLPI['root_doc'] . "/front/preference.php?forcetab=PluginTamTam$1'>" . __("Timer has not been initialized", 'tam') . "</a>",
                        true,
                        WARNING
                     );
                     return;
                  }
               }
            }
            if (PluginActualtimeTask::checkTimerActive($task_id)) {

               // action=start, timer=on
               $result = [
                  'mensage' => __("A user is already performing the task", 'actualtime'),
                  'type'   => WARNING,
               ];
            } else {

               // action=start, timer=off
               if (!PluginActualtimeTask::checkUserFree(Session::getLoginUserID())) {

                  // action=start, timer=off, current user is alerady using timer
                  $ticket_id = PluginActualtimeTask::getTicket(Session::getLoginUserID());
                  $result = [
                     'mensage' => __("You are already doing a task", 'actualtime') . " <a onclick='window.actualTime.showTaskForm(event)' href='/front/ticket.form.php?id=" . $ticket_id . "'>" . __("Ticket") . "$ticket_id</a>",
                     'type'   => WARNING,
                  ];
               } else {

                  // action=start, timer=off, current user is free
                  $DB->insert(
                     'glpi_plugin_actualtime_tasks',
                     [
                        'tickettasks_id'     => $task_id,
                        'actual_begin' => date("Y-m-d H:i:s"),
                        'users_id'     => Session::getLoginUserID(),
                        'origin_start' => PluginActualtimetask::WEB,
                     ]
                  );
                  $result = [
                     'mensage'   => __("Timer started", 'actualtime'),
                     'title'     => __('Information'),
                     'class'     => 'info_msg',
                     'ticket_id' => PluginActualtimetask::getTicket(Session::getLoginUserID()),
                     'time'      => abs(PluginActualtimeTask::totalEndTime($task_id)),
                     'type'      => INFO
                  ];

                  if ($plugin->isActivated('gappextended')) {
                     PluginGappextendedPush::sendActualtime(PluginActualtimetask::getTicket(Session::getLoginUserID()), $task_id, $result, Session::getLoginUserID(), true);
                  }
               }
            }
            Session::addMessageAfterRedirect(
               $result['mensage'],
               true,
               $result['type']
            );
         }
      }
   }

   static function preUpdate(TicketTask $item)
   {
      global $DB, $CFG_GLPI;

      $config = new PluginActualtimeConfig();
      if (array_key_exists('state', $item->input)) {
         if ($item->input['state'] != 1) {
            if (self::checkTimerActive($item->input['id'])) {
               $actual_begin = self::getActualBegin($item->input['id']);
               $seconds = (strtotime(date("Y-m-d H:i:s")) - strtotime($actual_begin));
               $DB->update(
                  'glpi_plugin_actualtime_tasks',
                  [
                     'actual_end'      => date("Y-m-d H:i:s"),
                     'actual_actiontime'      => $seconds,
                  ],
                  [
                     'tickettasks_id' => $item->input['id'],
                     [
                        'NOT' => ['actual_begin' => null],
                     ],
                     'actual_end' => null,
                  ]
               );
               if ($config->autoUpdateDuration()) {
                  $item->input['actiontime'] = ceil(self::totalEndTime($item->input['id']) / ($CFG_GLPI["time_step"] * MINUTE_TIMESTAMP)) * ($CFG_GLPI["time_step"] * MINUTE_TIMESTAMP);
               }
            } elseif (self::totalEndTime($item->input['id']) > 0 && $config->autoUpdateDuration()) {
               $item->input['actiontime'] = ceil(self::totalEndTime($item->input['id']) / ($CFG_GLPI["time_step"] * MINUTE_TIMESTAMP)) * ($CFG_GLPI["time_step"] * MINUTE_TIMESTAMP);
            }
         }
      }
      if (array_key_exists('users_id_tech', $item->input)) {
         if ($item->input['users_id_tech'] != $item->fields['users_id_tech']) {
            if (self::checkTimerActive($item->input['id'])) {
               $actual_begin = self::getActualBegin($item->input['id']);
               $seconds = (strtotime(date("Y-m-d H:i:s")) - strtotime($actual_begin));
               $DB->update(
                  'glpi_plugin_actualtime_tasks',
                  [
                     'actual_end'      => date("Y-m-d H:i:s"),
                     'actual_actiontime'      => $seconds,
                  ],
                  [
                     'tickettasks_id' => $item->input['id'],
                     [
                        'NOT' => ['actual_begin' => null],
                     ],
                     'actual_end' => null,
                  ]
               );
               if ($config->autoUpdateDuration()) {
                  $item->input['actiontime'] = ceil(self::totalEndTime($item->input['id']) / ($CFG_GLPI["time_step"] * MINUTE_TIMESTAMP)) * ($CFG_GLPI["time_step"] * MINUTE_TIMESTAMP);
               }
            }
         }
      }
   }

   static function postShowTab($params)
   {
      if ($ticket_id = PluginActualtimetask::getTicket(Session::getLoginUserID())) {
         $script = <<<JAVASCRIPT
$(document).ready(function(){
   window.actualTime.showTimerPopup($ticket_id);
});
JAVASCRIPT;
         echo Html::scriptBlock($script);
      }
   }

   static function postShowItem($params)
   {
      global $DB;

      $item = $params['item'];
      if (!is_object($item) || !method_exists($item, 'getType')) {
         // Sometimes, params['item'] is just an array, like 'Solution'
         return;
      }
      switch ($item->getType()) {
         case 'TicketTask':

            $config = new PluginActualtimeConfig();
            $task_id = $item->getID();
            // Auto open needs to use correct item randomic number
            $rand = $params['options']['rand'];

            // Show timer in closed task box in:
            // Standard interface (always)
            // or Helpdesk inteface (only if config allows)
            if (
               $config->showTimerInBox() &&
               ((Session::getCurrentInterface() == "central")
                  || $config->showInHelpdesk())
            ) {

               $time = self::totalEndTime($task_id);
               $fa_icon = ($time > 0 ? ' fa-clock' : '');
               $timercolor = (self::checkTimerActive($task_id) ? 'red' : 'black');
               // Anchor to find correct span, even when user has no update
               // right on status checkbox
               $icon = "<span class='badge text-wrap ms-1 d-none d-md-block' style='color:{$timercolor}'><i id='actualtime_faclock_{$task_id}_{$rand}' class='fa{$fa_icon}'></i> <span id='actualtime_timer_{$task_id}_box_{$rand}'></span></span>";
               echo "<div id='actualtime_anchor_{$task_id}_{$rand}'></div>";
               $script = <<<JAVASCRIPT
$(document).ready(function() {
   if ($("[id^='actualtime_faclock_{$task_id}_']").length == 0) {
      $("div[data-itemtype='TicketTask'][data-items-id='{$task_id}'] div.card-body div.timeline-header div.creator")
         .append("{$icon}");
         if ($time > 0) {
         window.actualTime.fillCurrentTime($task_id, $time);
      }
   }
});
JAVASCRIPT;
               echo Html::scriptBlock($script);
            }

            if ($config->autoOpenRunning() && self::checkUser($task_id, Session::getLoginUserID())) {
               // New created task or user has running timer on this task
               // Open edit window automatically
               $ticket_id = $item->fields['tickets_id'];
               $div = "<div id='actualtime_autoEdit_{$task_id}_{$rand}' onclick='javascript:viewEditSubitem$ticket_id$rand(event, \"TicketTask\", $task_id, this, \"viewitemTicketTask$task_id$rand\")'></div>";
               echo $div;
               $script = <<<JAVASCRIPT
$(document).ready(function() {
   $("div[data-itemtype='TicketTask'][data-items-id='{$task_id}'] div.card-body a.edit-timeline-item").trigger('click');
});
JAVASCRIPT;

               print_r(Html::scriptBlock($script));
            }
            break;
      }
   }

   static function populatePlanning($options = [])
   {
      global $DB, $CFG_GLPI;

      $default_options = [
         'genical' => false,
         'color' => '',
         'event_type_color' => '',
         'display_done_events' => true,
      ];

      $options = array_merge($default_options, $options);
      $interv = [];

      if (!isset($options['begin']) || ($options['begin'] == 'NULL') || !isset($options['end']) || ($options['end'] == 'NULL')) {
         return $interv;
      }
      if (!$options['display_done_events']) {
         return $interv;
      }

      $who      = $options['who'];
      $whogroup = $options['whogroup'];
      $begin    = $options['begin'];
      $end      = $options['end'];

      $ASSIGN = "";

      $query = [
         'FROM' => self::getTable(),
         'WHERE' => [
            'actual_begin' => ['<=', $end],
            'actual_end' => ['>=', $begin]
         ],
         'ORDER' => [
            'actual_begin ASC'
         ]
      ];

      if ($whogroup === "mine") {
         if (isset($_SESSION['glpigroups'])) {
            $whogroup = $_SESSION['glpigroups'];
         } elseif ($who > 0) {
            $whogroup = array_column(Group_User::getUserGroups($who), 'id');
         }
      }
      if ($who > 0) {
         $query['WHERE'][] = ["users_id" => $who];
      }
      if ($whogroup > 0) {
         $query['WHERE'][] = ["groups_id" => $whogroup];
      }

      foreach ($DB->request($query) as $id => $row) {
         $key = $row["actual_begin"] . "$$" . "PluginActualtimeTask" . $row["id"];
         $interv[$key]['color']            = $options['color'];
         $interv[$key]['event_type_color'] = $options['event_type_color'];
         $interv[$key]['itemtype']         = self::getType();
         $interv[$key]['id']               = $row['id'];
         $interv[$key]["users_id"]         = $row["users_id"];
         $interv[$key]["name"]             = self::getTypeName();
         $interv[$key]["content"]          = Html::timestampToString($row['actual_actiontime']);

         $task = new TicketTask();
         $task->getFromDB($row['tickettasks_id']);
         $url_id = $task->fields['tickets_id'];
         if (!$options['genical']) {
            $interv[$key]["url"] = Ticket::getFormURLWithID($url_id);
         } else {
            $interv[$key]["url"] = $CFG_GLPI["url_base"] . Ticket::getFormURLWithID($url_id, false);
         }
         $interv[$key]["ajaxurl"] = $CFG_GLPI["root_doc"] . "/ajax/planning.php" .
            "?action=edit_event_form" .
            "&itemtype=" . $task->getType() .
            "&parentitemtype=" . Ticket::getType() .
            "&parentid=" . $task->fields['tickets_id'] .
            "&id=" . $row['tickettasks_id'] .
            "&url=" . $interv[$key]["url"];

         $interv[$key]["begin"] = $row['actual_begin'];
         $interv[$key]["end"] = $row['actual_end'];

         $interv[$key]["editable"] = $task->canUpdateITILItem();
      }

      return $interv;
   }

   static function displayPlanningItem(array $val, $who, $type = "", $complete = 0)
   {

      $html = "<strong>" . $val["name"] . "</strong>";
      $html .= "<br><strong>" . sprintf(__('By %s'), getUserName($val["users_id"])) . "</strong>";
      $html .= "<br><strong>" . __('Start date') . "</strong> : " . Html::convdatetime($val["begin"]);
      $html .= "<br><strong>" . __('End date') . "</strong> : " . Html::convdatetime($val["end"]);
      $html .= "<br><strong>" . __('Total duration') . "</strong> : " . $val["content"];

      return $html;
   }

   static function install(Migration $migration)
   {
      global $DB;

      $default_charset = DBConnection::getDefaultCharset();
      $default_collation = DBConnection::getDefaultCollation();
      $default_key_sign = DBConnection::getDefaultPrimaryKeySignOption();

      $table = self::getTable();

      if (!$DB->tableExists($table)) {
         $migration->displayMessage("Installing $table");

         $query = "CREATE TABLE IF NOT EXISTS $table (
            `id` int {$default_key_sign} NOT NULL auto_increment,
            `tickettasks_id` int {$default_key_sign} NOT NULL,
            `actual_begin` TIMESTAMP NULL DEFAULT NULL,
            `actual_end` TIMESTAMP NULL DEFAULT NULL,
            `users_id` int {$default_key_sign} NOT NULL,
            `actual_actiontime` int {$default_key_sign} NOT NULL DEFAULT 0,
            `origin_start` INT {$default_key_sign} NOT NULL,
            `origin_end` INT {$default_key_sign} NOT NULL DEFAULT 0,
            PRIMARY KEY (`id`),
            KEY `tickettasks_id` (`tickettasks_id`),
            KEY `users_id` (`users_id`)
         ) ENGINE=InnoDB  DEFAULT CHARSET={$default_charset} COLLATE={$default_collation} ROW_FORMAT=DYNAMIC;";
         $DB->query($query) or die($DB->error());
      } else {

         $migration->changeField($table, 'tasks_id', 'tickettasks_id', 'int');
         $migration->dropField($table, 'latitude_start');
         $migration->dropField($table, 'longitude_start');
         $migration->dropField($table, 'latitude_end');
         $migration->dropField($table, 'longitude_end');
         $migration->changeField($table, 'origin_end', 'origin_end', 'int', ['value' => 0]);

         $migration->migrationOneTable($table);
      }
   }

   static function uninstall(Migration $migration)
   {

      $table = self::getTable();
      $migration->displayMessage("Uninstalling $table");
      $migration->dropTable($table);
   }
}
