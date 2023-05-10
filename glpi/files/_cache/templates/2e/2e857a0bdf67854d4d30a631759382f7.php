<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_c4f23adda1886ddb6d8a4196e9c8bf32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 35
        echo "
<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto\">
    ";
        // line 37
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 38
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        } else {
            // line 40
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 43
        echo "
   ";
        // line 44
        $context["status_closed"] = twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 44));
        // line 45
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeline"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 46
            echo "      ";
            $context["entry_i"] = (($__internal_compile_1 = $context["entry"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item"] ?? null) : null);
            // line 47
            echo "      ";
            $context["entry_object"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($__internal_compile_2 = $context["entry"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null));
            // line 48
            echo "      ";
            $context["users_id"] = (($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["users_id"] ?? null) : null);
            // line 49
            echo "      ";
            $context["is_private"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 49) &&  !(null === (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_private"] ?? null) : null)))) ? ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_private"] ?? null) : null)) : (false));
            // line 50
            echo "      ";
            $context["date_creation"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date_creation"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_creation"] ?? null) : null)) : ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date"] ?? null) : null)));
            // line 51
            echo "      ";
            $context["date_mod"] = (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_mod"] ?? null) : null);
            // line 52
            echo "      ";
            $context["entry_rand"] = twig_random($this->env);
            // line 53
            echo "      ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 54
            echo "      ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_user"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 55
            echo "
      ";
            // line 57
            echo "      ";
            if (((($__internal_compile_11 = $context["entry"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["type"] ?? null) : null) === "Solution")) {
                // line 58
                echo "         ";
                $context["entry"] = twig_array_merge($context["entry"], ["type" => "ITILSolution"]);
                // line 59
                echo "      ";
            }
            // line 60
            echo "
      ";
            // line 61
            $context["can_edit_i"] = (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["can_edit"] ?? null) : null);
            // line 62
            echo "      ";
            $context["can_promote"] = (((((($__internal_compile_13 = $context["entry"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == "ITILFollowup") || ((($__internal_compile_14 = $context["entry"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == "TicketTask")) && ($context["can_edit_i"] ?? null)) &&  !($context["status_closed"] ?? null));
            // line 63
            echo "      ";
            $context["is_promoted"] = (($context["can_promote"] ?? null) && ((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["sourceof_items_id"] ?? null) : null) > 0));
            // line 64
            echo "
      ";
            // line 65
            $context["timeline_position"] = (($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["timeline_position"] ?? null) : null);
            // line 66
            echo "      ";
            $context["item_position"] = "t-left";
            // line 67
            echo "      ";
            if ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 68
                echo "         ";
                $context["item_position"] = "t-left";
                // line 69
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 70
                echo "         ";
                $context["item_position"] = "t-left t-middle";
                // line 71
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 72
                echo "         ";
                $context["item_position"] = "t-right t-middle";
                // line 73
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 74
                echo "         ";
                $context["item_position"] = "t-right";
                // line 75
                echo "      ";
            }
            // line 76
            echo "
      ";
            // line 77
            $context["itiltype"] = ((twig_get_attribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 77)) ? (("ITIL" . (($__internal_compile_17 = $context["entry"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["itiltype"] ?? null) : null))) : ((($__internal_compile_18 = $context["entry"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["type"] ?? null) : null)));
            // line 78
            echo "
      ";
            // line 79
            $context["state_class"] = "";
            // line 80
            echo "      ";
            if (((($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["state"] ?? null) : null) === constant("Planning::INFO"))) {
                // line 81
                echo "         ";
                $context["state_class"] = "info";
                // line 82
                echo "      ";
            }
            // line 83
            echo "      ";
            if (((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 84
                echo "         ";
                $context["state_class"] = "todo";
                // line 85
                echo "      ";
            }
            // line 86
            echo "      ";
            if (((($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 87
                echo "         ";
                $context["state_class"] = "done";
                // line 88
                echo "      ";
            }
            // line 89
            echo "
      ";
            // line 90
            $context["solution_class"] = "";
            // line 91
            echo "      ";
            if ((($context["itiltype"] ?? null) == "ITILSolution")) {
                // line 92
                echo "         ";
                if (((($__internal_compile_22 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["status"] ?? null) : null) === constant("CommonITILValidation::WAITING"))) {
                    // line 93
                    echo "            ";
                    $context["solution_class"] = "waiting";
                    // line 94
                    echo "         ";
                }
                // line 95
                echo "         ";
                if (((($__internal_compile_23 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["status"] ?? null) : null) === constant("CommonITILValidation::ACCEPTED"))) {
                    // line 96
                    echo "            ";
                    $context["solution_class"] = "accepted";
                    // line 97
                    echo "         ";
                }
                // line 98
                echo "         ";
                if (((($__internal_compile_24 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["status"] ?? null) : null) === constant("CommonITILValidation::REFUSED"))) {
                    // line 99
                    echo "            ";
                    $context["solution_class"] = "refused";
                    // line 100
                    echo "         ";
                }
                // line 101
                echo "      ";
            }
            // line 102
            echo "
      <div class=\"timeline-item mb-3 ";
            // line 103
            echo twig_escape_filter($this->env, ($context["itiltype"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["state_class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_compile_25 = $context["entry"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["class"] ?? null) : null), "html", null, true);
            echo " ";
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            echo "\"
            data-itemtype=\"";
            // line 104
            echo twig_escape_filter($this->env, (($__internal_compile_26 = $context["entry"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["type"] ?? null) : null), "html", null, true);
            echo "\" data-items-id=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_27 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["id"] ?? null) : null), "html", null, true);
            echo "\"
            ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 105)) {
                echo "data-item-action=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_28 = $context["entry"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["item_action"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">

         ";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "

         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 110
            echo ((twig_in_filter("left", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            echo "\">
               ";
            // line 111
            if (((($__internal_compile_29 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 112
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 113
                    echo "                     <span class=\"state state_1\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_30 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 115
                    echo "                     <span class=\"state state_1\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 117
                echo "               ";
            } elseif (((($__internal_compile_31 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 118
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 119
                    echo "                     <span class=\"state state_2\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_32 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 121
                    echo "                     <span class=\"state state_2\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 123
                echo "               ";
            }
            // line 124
            echo "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 126
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            echo "\">
               ";
            // line 127
            $context["avatar_rand"] = twig_random($this->env);
            // line 128
            echo "               ";
            // line 129
            echo "               ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))) : (null));
            // line 130
            echo "               ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 131
                echo "                  ";
                $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 131);
                // line 132
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 132))]);
                // line 133
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 133)]);
                // line 134
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\">
                     ";
                // line 135
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 136
($context["users_id"] ?? null), "enable_anonymization" =>                 // line 137
($context["anonym_user"] ?? null)], false);
                // line 138
                echo "
                  </span>
                  ";
                // line 140
                if ( !($context["anonym_user"] ?? null)) {
                    // line 141
                    echo "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 143
($context["user_fields"] ?? null), "enable_anonymization" => false], false), 1 => ["applyto" => ("timeline-avatar" .                     // line 146
($context["avatar_rand"] ?? null))]]);
                    // line 148
                    echo "                  ";
                }
                // line 149
                echo "               ";
            } else {
                // line 150
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 152
            echo "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <span class=\"mt-2 timeline-content ";
            // line 154
            echo twig_escape_filter($this->env, ($context["solution_class"] ?? null), "html", null, true);
            echo " flex-grow-1 ";
            echo twig_escape_filter($this->env, ($context["item_position"] ?? null), "html", null, true);
            echo " card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     ";
            // line 156
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig");
            echo "

                     ";
            // line 158
            if (twig_in_filter(($context["itiltype"] ?? null), twig_array_column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 159
                echo "                        ";
                $context["matching_types"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 159) == ($context["itiltype"] ?? null)); });
                // line 160
                echo "                        ";
                if ((twig_length_filter($this->env, ($context["matching_types"] ?? null)) > 0)) {
                    // line 161
                    echo "                           ";
                    $context["timeline_itemtype"] = twig_first($this->env, ($context["matching_types"] ?? null));
                    // line 162
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 162)) {
                        // line 163
                        echo "                              ";
                        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 163), ["form_mode" => "view"]);
                        echo "
                           ";
                    }
                    // line 165
                    echo "                        ";
                }
                // line 166
                echo "                     ";
            } else {
                // line 167
                echo "                        <div class=\"read-only-content\">
                           ";
                // line 168
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($__internal_compile_33 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["content"] ?? null) : null));
                echo "
                        </div>
                     ";
            }
            // line 171
            echo "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </span>

               ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 177)) {
                // line 178
                echo "                  ";
                echo twig_include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 179
($context["item"] ?? null), "entry" =>                 // line 180
$context["entry"]]);
                // line 181
                echo "
               ";
            }
            // line 183
            echo "            </div>
         </div>

         ";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "
    ";
        // line 190
        if (($context["is_timeline_reversed"] ?? null)) {
            // line 191
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        }
        // line 193
        echo "
    <div class=\"timeline-item tasks-title d-none\">
        <h3>";
        // line 195
        echo twig_escape_filter($this->env, _n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 198
        echo twig_include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        echo "

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>";
        // line 201
        echo twig_escape_filter($this->env, _n("Validation", "Validations", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 204
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 205
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 206
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 208
        echo "
</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        echo "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 227), "html", null, true);
        echo "',
            '";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 228), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 228)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["id"] ?? null) : null), "html", null, true);
        echo ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 228,  547 => 227,  541 => 224,  523 => 208,  518 => 206,  513 => 205,  511 => 204,  505 => 201,  499 => 198,  493 => 195,  489 => 193,  483 => 191,  481 => 190,  478 => 189,  461 => 186,  456 => 183,  452 => 181,  450 => 180,  449 => 179,  447 => 178,  445 => 177,  437 => 171,  431 => 168,  428 => 167,  425 => 166,  422 => 165,  416 => 163,  413 => 162,  410 => 161,  407 => 160,  404 => 159,  402 => 158,  397 => 156,  390 => 154,  386 => 152,  380 => 150,  377 => 149,  374 => 148,  372 => 146,  371 => 143,  369 => 141,  367 => 140,  363 => 138,  361 => 137,  360 => 136,  359 => 135,  354 => 134,  351 => 133,  348 => 132,  345 => 131,  342 => 130,  339 => 129,  337 => 128,  335 => 127,  331 => 126,  327 => 124,  324 => 123,  318 => 121,  310 => 119,  307 => 118,  304 => 117,  298 => 115,  290 => 113,  287 => 112,  285 => 111,  281 => 110,  275 => 107,  266 => 105,  260 => 104,  250 => 103,  247 => 102,  244 => 101,  241 => 100,  238 => 99,  235 => 98,  232 => 97,  229 => 96,  226 => 95,  223 => 94,  220 => 93,  217 => 92,  214 => 91,  212 => 90,  209 => 89,  206 => 88,  203 => 87,  200 => 86,  197 => 85,  194 => 84,  191 => 83,  188 => 82,  185 => 81,  182 => 80,  180 => 79,  177 => 78,  175 => 77,  172 => 76,  169 => 75,  166 => 74,  163 => 73,  160 => 72,  157 => 71,  154 => 70,  151 => 69,  148 => 68,  145 => 67,  142 => 66,  140 => 65,  137 => 64,  134 => 63,  131 => 62,  129 => 61,  126 => 60,  123 => 59,  120 => 58,  117 => 57,  114 => 55,  111 => 54,  108 => 53,  105 => 52,  102 => 51,  99 => 50,  96 => 49,  93 => 48,  90 => 47,  87 => 46,  69 => 45,  67 => 44,  64 => 43,  59 => 41,  54 => 40,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/timeline.html.twig");
    }
}
