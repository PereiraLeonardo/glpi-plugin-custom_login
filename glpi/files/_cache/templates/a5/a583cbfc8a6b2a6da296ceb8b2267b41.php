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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_3c69a8fb2a9214b3126c5ed3092273ef extends Template
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
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 35
        $context["form_btns_cls"] = ((($context["is_expanded"] ?? null)) ? (($context["right_expanded_cls"] ?? null)) : ("col-lg"));
        // line 36
        $context["switch_btn_cls"] = "fa-caret-left";
        // line 37
        if (($context["is_expanded"] ?? null)) {
            // line 38
            echo "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 39
            echo "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 40
            echo "    ";
            $context["switch_btn_cls"] = "fa-caret-right";
        }
        // line 42
        echo "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
      <div class=\"col ";
        // line 45
        echo twig_escape_filter($this->env, ($context["timeline_btns_cls"] ?? null), "html", null, true);
        echo " ps-3 timeline-buttons\">
         ";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 46)) {
            // line 47
            echo "            ";
            $context["default_action_data"] = twig_first($this->env, ($context["timeline_itemtypes"] ?? null));
            // line 48
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 48) && (($context["default_action_data"] ?? null) != false))) {
                // line 49
                echo "               ";
                if ((twig_length_filter($this->env, ($context["timeline_itemtypes"] ?? null)) > 1)) {
                    // line 50
                    echo "                  <div class=\"btn-group me-2 main-actions\" style=\"";
                    echo (((($context["load_kb_sol"] ?? null) > 0)) ? ("display:none;") : (""));
                    echo "\">
               ";
                } else {
                    // line 52
                    echo "                  ";
                    // line 53
                    echo "                  <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 55
                echo "                  <button class=\"btn btn-primary answer-action\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 55), "html", null, true);
                echo "-block\">
                     <i class=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 56), "html", null, true);
                echo "\"></i>
                     <span>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 57), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 60
                $context["main_actions_itemtypes"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ( !twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", true, true, false, 60) || (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", false, false, false, 60) != true)); });
                // line 61
                echo "                  ";
                if ((twig_length_filter($this->env, ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 62
                    echo "                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <span class=\"visually-hidden\">";
                    // line 63
                    echo twig_escape_filter($this->env, __("View other actions"), "html", null, true);
                    echo "</span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["main_actions_itemtypes"] ?? null));
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
                    foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                        // line 67
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 67) > 0)) {
                            // line 68
                            echo "                            <li><a class=\"dropdown-item action-";
                            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                            echo " answer-action\" href=\"#\"
                                data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                            // line 69
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 69), "html", null, true);
                            echo "-block\">
                                <i class=\"";
                            // line 70
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 70), "html", null, true);
                            echo "\"></i>
                                <span>";
                            // line 71
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 71), "html", null, true);
                            echo "</span>
                            </a></li>
                            ";
                        }
                        // line 74
                        echo "                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                    </ul>
                  ";
                }
                // line 77
                echo "               </div>
            ";
            }
            // line 79
            echo "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 81
            echo ((array_key_exists("legacy_timeline_actions", $context)) ? (_twig_default_filter(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            echo "
            </ul>
            ";
            // line 83
            echo twig_include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
            echo "
         ";
        }
        // line 85
        echo "     </div>

      <div class=\"form-buttons ";
        // line 87
        echo twig_escape_filter($this->env, ($context["form_btns_cls"] ?? null), "html", null, true);
        echo " d-flex justify-content-between ms-auto ms-lg-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
         <span class=\"d-none d-lg-block ms-n3\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, __("Toggle panels width"), "html", null, true);
        echo "\">
            <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary px-0\">
               <i class=\"fas ";
        // line 91
        echo twig_escape_filter($this->env, ($context["switch_btn_cls"] ?? null), "html", null, true);
        echo "\"></i>
            </button>
            <button type=\"button\" class=\"collapse-panel btn btn-icon btn-ghost-secondary px-0 mr-1\">
               <i class=\"fas fa-caret-right\"></i>
            </button>
         </span>

         <span>
         ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 99)) {
            // line 100
            echo "            <button class=\"btn btn-primary\" type=\"submit\" name=\"add\" form=\"itil-form\"
                  title=\"";
            // line 101
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "\">
               <i class=\"fas fa-plus\"></i>
               <span class=\"d-none d-lg-block\">";
            // line 103
            echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
            echo "</span>
            </button>
         ";
        } else {
            // line 106
            echo "
            <div class=\"btn-group\" role=\"group\">
               ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 108)) {
                // line 109
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 109)) {
                    // line 110
                    echo "                     <button class=\"btn btn-outline-secondary\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                           title=\"";
                    // line 111
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "\">
                        <i class=\"fas fa-trash-restore-alt\"></i>
                        <span class=\"d-none d-lg-block\">";
                    // line 113
                    echo twig_escape_filter($this->env, _x("button", "Restore"), "html", null, true);
                    echo "</span>
                     </button>

                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                           title=\"";
                    // line 117
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "\"
                           onclick=\"return confirm('";
                    // line 118
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"ti ti-trash\"></i>
                        <span class=\"d-none d-lg-block\">";
                    // line 120
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                } else {
                    // line 123
                    echo "                     <button class=\"btn btn-outline-danger\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                           title=\"";
                    // line 124
                    echo twig_escape_filter($this->env, _x("button", "Put in trashbin"), "html", null, true);
                    echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-trash\"></i>
                     </button>
                  ";
                }
                // line 129
                echo "               ";
            }
            // line 130
            echo "
               ";
            // line 131
            if (($context["canupdate"] ?? null)) {
                // line 132
                echo "                  ";
                echo twig_include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                // line 134
                echo "
               ";
            }
            // line 136
            echo "
               ";
            // line 137
            $context["is_locked"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 137) && (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["locked"] ?? null) : null));
            // line 138
            echo "               ";
            $context["display_save_btn"] = ( !($context["is_locked"] ?? null) && ((((($context["canupdate"] ?? null) || ($context["can_requester"] ?? null)) || ($context["canpriority"] ?? null)) || ($context["canassign"] ?? null)) || ($context["canassigntome"] ?? null)));
            // line 139
            echo "               ";
            if (($context["display_save_btn"] ?? null)) {
                // line 140
                echo "                  <button class=\"btn btn-primary\" type=\"submit\" name=\"update\" form=\"itil-form\"
                        title=\"";
                // line 141
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "\">
                     <i class=\"far fa-save\"></i>
                     <span class=\"d-none d-xl-block\">";
                // line 143
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>
               ";
            }
            // line 146
            echo "            </div>

         ";
        }
        // line 149
        echo "         </span>
      </div>
   </div>
</div>

";
        // line 154
        $context["openfollowup"] = (((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 154) &&  !(null === (($__internal_compile_1 = ($context["_get"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_2 = ($context["_get"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["_openfollowup"] ?? null) : null)) : (false));
        // line 155
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 156
        echo "
<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();

      // hide answer button after clicking on it
      \$(this).closest(\".main-actions\").hide();
   });

   // when close button of new answer block is clicked, show again the new answer button
   \$(document).on(\"click\", \"#new-itilobject-form .close-itil-answer\", function() {
      \$(\"#itil-footer .main-actions\").show();
   });

   var scrollToTimelineStart = function() {
        // scroll body to ensure we are at bottom (useful for responsive display)
        \$('html, body').animate({
        scrollTop: ";
        // line 174
        echo ((($context["is_timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "\$(document).height()
        }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
                scrollTop: ";
        // line 179
        echo ((($context["is_timeline_reversed"] ?? null)) ? ("-") : (""));
        echo "timeline.prop('scrollHeight')
            }, 'slow');
        });
   };

   ";
        // line 184
        if (($context["openfollowup"] ?? null)) {
            // line 185
            echo "      // trigger for reopen, show followup form in timeline
      var myCollapse = document.getElementById('new-ITILFollowup-block')
      var bsCollapse = new bootstrap.Collapse(myCollapse);
      bsCollapse.show();

      scrollToTimelineStart();
   ";
        }
        // line 192
        echo "});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 192,  379 => 185,  377 => 184,  369 => 179,  361 => 174,  341 => 156,  339 => 155,  337 => 154,  330 => 149,  325 => 146,  319 => 143,  314 => 141,  311 => 140,  308 => 139,  305 => 138,  303 => 137,  300 => 136,  296 => 134,  293 => 132,  291 => 131,  288 => 130,  285 => 129,  277 => 124,  274 => 123,  268 => 120,  263 => 118,  259 => 117,  252 => 113,  247 => 111,  244 => 110,  241 => 109,  239 => 108,  235 => 106,  229 => 103,  224 => 101,  221 => 100,  219 => 99,  208 => 91,  203 => 89,  198 => 87,  194 => 85,  189 => 83,  184 => 81,  180 => 79,  176 => 77,  172 => 75,  158 => 74,  152 => 71,  148 => 70,  144 => 69,  139 => 68,  136 => 67,  119 => 66,  113 => 63,  110 => 62,  107 => 61,  105 => 60,  99 => 57,  95 => 56,  90 => 55,  86 => 53,  84 => 52,  78 => 50,  75 => 49,  72 => 48,  69 => 47,  67 => 46,  63 => 45,  58 => 42,  54 => 40,  51 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/footer.html.twig", "/var/www/html/glpi/templates/components/itilobject/footer.html.twig");
    }
}
