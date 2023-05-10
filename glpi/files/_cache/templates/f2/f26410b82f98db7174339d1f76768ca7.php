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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_29457c28ecf1a4069beda3484596b6d1 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 53
        echo "
";
        // line 70
        echo "
";
        // line 82
        echo "

";
        // line 103
        echo "

";
        // line 125
        echo "

";
        // line 154
        echo "

";
        // line 179
        echo "

";
        // line 194
        echo "

";
        // line 275
        echo "
";
        // line 306
        echo "
";
        // line 339
        echo "
";
        // line 373
        echo "
";
        // line 401
        echo "
";
        // line 414
        echo "
";
        // line 419
        echo "
";
        // line 441
        echo "
";
        // line 466
        echo "
";
        // line 494
        echo "
";
        // line 506
        echo "
";
        // line 527
        echo "
";
        // line 549
        echo "
";
        // line 570
        echo "
";
        // line 590
        echo "
";
        // line 613
        echo "
";
        // line 624
        echo "
";
        // line 644
        echo "
";
        // line 665
        echo "
";
        // line 697
        echo "
";
        // line 708
        echo "
";
        // line 743
        echo "
";
        // line 754
        echo "
";
        // line 764
        echo "

";
        // line 782
        echo "

";
        // line 841
        echo "

";
        // line 872
        echo "

";
    }

    // line 34
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 35
            echo "   ";
            $context["margins"] = "mt-3";
            // line 36
            echo "   ";
            if (($context["first"] ?? null)) {
                // line 37
                echo "      ";
                $context["margins"] = "mt-n2";
                // line 38
                echo "   ";
            }
            // line 39
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 40
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 42
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 43
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 44
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 45
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 56
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 57
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 59
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 60
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 61
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 62
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 72
            echo "   ";
            $context["tpl_value"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 73
            echo "   ";
            $context["tplmark"] = "";
            // line 74
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 74)) {
                echo " ";
                // line 75
                echo "      ";
                $context["tplmark"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [0 => ($context["name"] ?? null), 1 => ["withtemplate" => ($context["withtemplate"] ?? null)], 2 => ($context["tpl_value"] ?? null)], "method", false, false, false, 75);
                // line 76
                echo "   ";
            }
            // line 77
            echo "   ";
            $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)), 1 => ($context["name"] ?? null), 2 => (($context["withtemplate"] ?? null) == 2), 3 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 77), 4 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null)]);
            // line 78
            echo "   ";
            $context["label"] = twig_sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 79
            echo "
   ";
            // line 80
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 80, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 84
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 85
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "text"], ($context["options"] ?? null));
            // line 86
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 86), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 86)) {
                // line 87
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 88
                echo "   ";
            }
            // line 89
            echo "
   ";
            // line 90
            ob_start(function () { return ''; });
            // line 91
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 91), "html", null, true);
            echo "\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 93
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 94
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, ("maxlenght=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 94)), "html", null, true))) : (print ("")));
            echo "
             ";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 95)) ? ("readonly") : (""));
            echo "
             ";
            // line 96
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 96)) ? ("disabled") : (""));
            echo "
             ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 97)) ? ("multiple") : (""));
            echo " ";
            // line 98
            echo "             ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 98)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            echo "
   ";
            // line 101
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 101, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 105
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 106
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 106), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 106)) {
                // line 107
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 108
                echo "   ";
            }
            // line 109
            echo "
   ";
            // line 110
            $context["options"] = twig_array_merge(["center" => true],             // line 112
($context["options"] ?? null));
            // line 113
            echo "
   ";
            // line 114
            ob_start(function () { return ''; });
            // line 115
            echo "      <input type=\"hidden\"   name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
            // line 116
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
            // line 117
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
             ";
            // line 118
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 118)) ? ("readonly") : (""));
            echo "
             ";
            // line 119
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 119)) ? ("required") : (""));
            echo "
             ";
            // line 120
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 120)) ? ("disabled") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 122
            echo "
   ";
            // line 123
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 123, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 127
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 128
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 128), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 128)) {
                // line 129
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true],                 // line 131
($context["options"] ?? null));
                // line 132
                echo "   ";
            }
            // line 133
            echo "   ";
            $context["options"] = twig_array_merge(["no_value" => 0, "yes_value" => 1],             // line 136
($context["options"] ?? null));
            // line 137
            echo "
   ";
            // line 138
            ob_start(function () { return ''; });
            // line 139
            echo "      <label class=\"form-check form-switch pt-2\">
         <input type=\"hidden\"   name=\"";
            // line 140
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 140), "html", null, true);
            echo "\" />
         <input type=\"checkbox\" name=\"";
            // line 141
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 141), "html", null, true);
            echo "\" class=\"form-check-input\" id=\"%id%\"
                ";
            // line 142
            echo (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            echo "
                ";
            // line 143
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 143)) ? ("readonly") : (""));
            echo "
                ";
            // line 144
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 144)) ? ("required") : (""));
            echo "
                ";
            // line 145
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 145)) ? ("disabled") : (""));
            echo " />
         ";
            // line 146
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 146)) {
                // line 147
                echo "            <span class=\"form-check-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 147), "html", null, true);
                echo "</span>
         ";
            }
            // line 149
            echo "      </label>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 151
            echo "
   ";
            // line 152
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 152, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 156
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 157
            echo "   ";
            if (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 157) != "any") && (twig_round(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 157), 0, "floor") != twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 157)))) {
                // line 158
                echo "      ";
                // line 159
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [0 => ($context["value"] ?? null), 1 => true]);
                // line 160
                echo "   ";
            }
            // line 161
            echo "
   ";
            // line 162
            if ((($context["value"] ?? null) == "")) {
                // line 163
                echo "      ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 163)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 163)) : (0));
                // line 164
                echo "   ";
            }
            // line 165
            echo "
   ";
            // line 166
            ob_start(function () { return ''; });
            // line 167
            echo "      <input type=\"number\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 169
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 170
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 170)) ? ("readonly") : (""));
            echo "
         ";
            // line 171
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 171)) ? ("disabled") : (""));
            echo "
         ";
            // line 172
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 172)) ? ("required") : (""));
            echo "
         ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 173)) {
                echo "min=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 173), "html", null, true);
                echo "\"";
            }
            // line 174
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 174)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 174), "html", null, true);
                echo "\"";
            }
            // line 175
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 175)) {
                echo "step=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 175), "html", null, true);
                echo "\"";
            }
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 177
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 177, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 181
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 182
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["readonly" => true]);
            // line 183
            echo "   ";
            ob_start(function () { return ''; });
            // line 184
            echo "      <span class=\"form-control\" readonly>
         ";
            // line 185
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 186
                echo "            &nbsp;
         ";
            } else {
                // line 188
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                echo "
         ";
            }
            // line 190
            echo "      </span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 192
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 192, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 196
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 197
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "enable_mentions" => false, "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => []],             // line 205
($context["options"] ?? null));
            // line 206
            echo "
   ";
            // line 207
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 207), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 207)) {
                // line 208
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 209
                echo "   ";
            }
            // line 210
            echo "   ";
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 210)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 210)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 210))));
            // line 211
            echo "
   ";
            // line 212
            ob_start(function () { return ''; });
            // line 213
            echo "      ";
            // line 214
            echo "      <textarea class=\"form-control\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
            // line 216
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 216)) ? ("disabled") : (""));
            echo "
                ";
            // line 217
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 217)) ? ("readonly") : (""));
            echo "
                ";
            // line 218
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 218)) ? ("required") : (""));
            echo ">";
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 218)) ? (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null))))) : (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true))));
            echo "</textarea>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 220
            echo "
   ";
            // line 221
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 221)) {
                // line 222
                echo "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [0 =>                 // line 223
($context["id"] ?? null), 1 => twig_get_attribute($this->env, $this->source,                 // line 224
($context["options"] ?? null), "rand", [], "any", false, false, false, 224), 2 => true, 3 => ((twig_get_attribute($this->env, $this->source,                 // line 226
($context["options"] ?? null), "disabled", [], "any", true, true, false, 226)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 226), false)) : (false))]);
                // line 228
                echo "   ";
            }
            // line 229
            echo "
   ";
            // line 230
            $context["add_html"] = "";
            // line 231
            echo "   ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 231) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 231))) {
                // line 232
                echo "      ";
                ob_start(function () { return ''; });
                // line 233
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 234
($context["id"] ?? null), "multiple" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 236
($context["options"] ?? null), "uploads", [], "any", false, false, false, 236), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 237
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 237), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 237)]]);
                // line 239
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 240
                echo "   ";
            } elseif (((( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 240) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 240)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 240)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 240))) {
                // line 241
                echo "      ";
                ob_start(function () { return ''; });
                // line 242
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 243
($context["id"] ?? null), "name" =>                 // line 244
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 246
($context["options"] ?? null), "uploads", [], "any", false, false, false, 246), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 247
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 247), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 247)]]);
                // line 249
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 250
                echo "   ";
            }
            // line 251
            echo "
   ";
            // line 252
            if ((($context["add_html"] ?? null) != "")) {
                // line 253
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 253)) {
                    // line 254
                    echo "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 254));
                    // line 255
                    echo "      ";
                }
                // line 256
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 257
                echo "   ";
            }
            // line 258
            echo "
   ";
            // line 259
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 259, $context, $this->getSourceContext());
            echo "
   ";
            // line 260
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 260) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 261
                echo "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 265
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "'),
                  ";
                // line 266
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 266), "html", null, true);
                echo ",
                  '";
                // line 267
                echo twig_escape_filter($this->env, Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 267)]), "html", null, true);
                echo "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 276
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 277
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 277), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 277)) {
                // line 278
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 279
                echo "   ";
            }
            // line 280
            echo "
   ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 281)) {
                // line 282
                echo "      ";
                if ((twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i:s") < twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"))) {
                    // line 283
                    echo "         ";
                    $context["class"] = "warn";
                    // line 284
                    echo "      ";
                }
                // line 285
                echo "   ";
            } else {
                // line 286
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 286)) {
                    // line 287
                    echo "         ";
                    $context["class"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 287);
                    // line 288
                    echo "      ";
                } else {
                    // line 289
                    echo "         ";
                    $context["class"] = "";
                    // line 290
                    echo "      ";
                }
                // line 291
                echo "   ";
            }
            // line 292
            echo "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 293), "html", null, true);
            echo "\">
      ";
            // line 295
            echo "      ";
            // line 296
            echo "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" data-input
             name=\"";
            // line 297
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 298
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 298)) ? ("required") : (""));
            echo "
             ";
            // line 299
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 299)) ? ("readonly") : (""));
            echo "
             ";
            // line 300
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 300)) ? ("disabled") : (""));
            echo " />
      ";
            // line 301
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 301)) {
                // line 302
                echo "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 304
            echo "   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 307
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 308
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 309
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 309))], ($context["options"] ?? null));
            // line 310
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 311
            echo "
   ";
            // line 312
            ob_start(function () { return ''; });
            // line 313
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 313, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$(\"#";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 316), "html", null, true);
            echo "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            allowInput: ";
            // line 323
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 323)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 324
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 324)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale(\"";
            // line 325
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["locale"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["language"] ?? null) : null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["region"] ?? null) : null), "html", null, true);
            echo "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 336
            echo "
   ";
            // line 337
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 337, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 340
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 341
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 342
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 342))], ($context["options"] ?? null));
            // line 343
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 344
            echo "
   ";
            // line 345
            ob_start(function () { return ''; });
            // line 346
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 346, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$('#";
            // line 349
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 349), "html", null, true);
            echo "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
            // line 352
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            allowInput: ";
            // line 357
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 357)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 358
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 358)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale('";
            // line 359
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["language"] ?? null) : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["region"] ?? null) : null), "html", null, true);
            echo "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 370
            echo "
   ";
            // line 371
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 371, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 374
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 375
            echo "   ";
            ob_start(function () { return ''; });
            // line 376
            echo "      <input id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 378
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 379
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 379)) ? ("readonly") : (""));
            echo "
         ";
            // line 380
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 380)) ? ("disabled") : (""));
            echo "
         ";
            // line 381
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 381)) ? ("required") : (""));
            echo " />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            change: function(color) {
                if (color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 399
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 399, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 402
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 403
            echo "   ";
            $context["options"] = twig_array_merge(["autocomplete" => "new-password"], ($context["options"] ?? null));
            // line 404
            echo "   ";
            ob_start(function () { return ''; });
            // line 405
            echo "      <input type=\"password\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 407
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 408
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 408)) ? ("readonly") : (""));
            echo "
         ";
            // line 409
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 409)) ? ("disabled") : (""));
            echo "
         ";
            // line 410
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 410)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 412
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 412, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 415
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 416
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "email"], ($context["options"] ?? null));
            // line 417
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 417, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 420
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 421
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "name" =>             // line 423
($context["name"] ?? null), "simple" => false],             // line 425
($context["options"] ?? null));
            // line 426
            echo "   ";
            ob_start(function () { return ''; });
            // line 427
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 427)) {
                // line 428
                echo "        <input type=\"file\" id=\"%id%\"
               class=\"form-control\"
               name=\"";
                // line 430
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
               ";
                // line 431
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mulitple", [], "any", false, false, false, 431)) ? ("multiple") : (""));
                echo "
               ";
                // line 432
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 432)) ? ("readonly") : (""));
                echo "
               ";
                // line 433
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 433)) ? ("disabled") : (""));
                echo "
               ";
                // line 434
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 434)) ? ("required") : (""));
                echo " />
      ";
            } else {
                // line 436
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ($context["options"] ?? null)]);
                // line 437
                echo "      ";
            }
            // line 438
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 439
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 439, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 442
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 443
            echo "   ";
            ob_start(function () { return ''; });
            // line 444
            echo "      <div class=\"img-overlay-wrapper position-relative\">
         ";
            // line 445
            $context["clearable"] = (($__internal_compile_7 = ($context["options"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["clearable"] ?? null) : null);
            // line 446
            echo "         ";
            $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 446) &&  !(null === (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["url"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)) : (null));
            // line 447
            echo "         ";
            $context["options"] = twig_array_filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
            // line 448
            echo "         ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 449
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["link_options"] ?? null)]);
                echo ">
         ";
            }
            // line 451
            echo "               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\" ";
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["options"] ?? null)]);
            echo " />
         ";
            // line 452
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 453
                echo "            </a>
         ";
            }
            // line 455
            echo "         ";
            if (($context["clearable"] ?? null)) {
                // line 456
                echo "            <input type=\"hidden\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                // line 457
                echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
                echo "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                // line 458
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
            }
            // line 462
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 464
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 464, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 467
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 468
            echo "   ";
            ob_start(function () { return ''; });
            // line 469
            echo "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                // line 471
                echo "            <div style=\"position: relative; width: fit-content\">
               ";
                // line 472
                echo twig_call_macro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_10 =                 // line 475
($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["clearable"] ?? null) : null), "no_label" => true]], 472, $context, $this->getSourceContext());
                // line 477
                echo "
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 480
            echo "      </div>
      ";
            // line 481
            echo twig_call_macro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 481, $context, $this->getSourceContext());
            // line 484
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 486
            echo "
   ";
            // line 487
            $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 487)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 487)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 487))));
            // line 488
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 488, $context, $this->getSourceContext());
            echo "
   ";
            // line 489
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 489, $context, $this->getSourceContext());
            // line 492
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 495
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 496
            echo "   ";
            ob_start(function () { return ''; });
            // line 497
            echo "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 499
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 500
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 500)) ? ("readonly") : (""));
            echo "
         ";
            // line 501
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 501)) ? ("disabled") : (""));
            echo "
         ";
            // line 502
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 502)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 504
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 504, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 507
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 508
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 509
            echo "
   ";
            // line 510
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 510)) {
                // line 511
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 512
                echo "   ";
            }
            // line 513
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 513), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 513)) {
                // line 514
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 515
                echo "   ";
            }
            // line 516
            echo "
   ";
            // line 517
            ob_start(function () { return ''; });
            // line 518
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 519
($context["value"] ?? null), "rand" =>             // line 520
($context["rand"] ?? null), "width" => "100%"],             // line 522
($context["options"] ?? null))]);
            // line 523
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 524
            echo "
   ";
            // line 525
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 525))])], 525, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 528
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 529
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 530
            echo "
   ";
            // line 531
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 531)) {
                // line 532
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 533
                echo "   ";
            }
            // line 534
            echo "
   ";
            // line 535
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 535), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 535)) {
                // line 536
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 537
                echo "   ";
            }
            // line 538
            echo "
   ";
            // line 539
            ob_start(function () { return ''; });
            // line 540
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [0 => ($context["name"] ?? null), 1 => ($context["elements"] ?? null), 2 => twig_array_merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(            // line 541
($context["value"] ?? null)), "rand" =>             // line 542
($context["rand"] ?? null), "width" => "100%"],             // line 544
($context["options"] ?? null))]);
            // line 545
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 546
            echo "
   ";
            // line 547
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 547))])], 547, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 550
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 551
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 552
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 552), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 552)) {
                // line 553
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 554
                echo "   ";
            }
            // line 555
            echo "
   ";
            // line 556
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 556)) {
                // line 557
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 558
                echo "   ";
            }
            // line 559
            echo "
   ";
            // line 560
            ob_start(function () { return ''; });
            // line 561
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 562
($context["value"] ?? null), "rand" =>             // line 563
($context["rand"] ?? null), "width" => "100%"],             // line 565
($context["options"] ?? null))]);
            // line 566
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 567
            echo "
   ";
            // line 568
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 568))])], 568, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 571
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 572
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 573
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 573), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 573)) {
                // line 574
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 575
                echo "   ";
            }
            // line 576
            echo "
   ";
            // line 577
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 577)) {
                // line 578
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 579
                echo "   ";
            }
            // line 580
            echo "
   ";
            // line 581
            ob_start(function () { return ''; });
            // line 582
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 =>  -1, 3 => twig_array_merge(["rand" =>             // line 583
($context["rand"] ?? null), "width" => "100%"],             // line 585
($context["options"] ?? null))]);
            // line 586
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 587
            echo "
   ";
            // line 588
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 588))])], 588, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 591
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 592
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 593
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 593), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 593)) {
                // line 594
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 595
                echo "   ";
            }
            // line 596
            echo "
   ";
            // line 597
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 597)) {
                // line 598
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 599
                echo "   ";
            }
            // line 600
            echo "
   ";
            // line 601
            $context["types"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 601)) ? (_twig_default_filter((($__internal_compile_11 = ($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["types"] ?? null) : null), [])) : ([]));
            // line 602
            echo "
   ";
            // line 603
            ob_start(function () { return ''; });
            // line 604
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [0 => ($context["name"] ?? null), 1 => ($context["types"] ?? null), 2 => twig_array_merge(["rand" =>             // line 605
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 607
($context["value"] ?? null)],             // line 608
($context["options"] ?? null))]);
            // line 609
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 610
            echo "
   ";
            // line 611
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 611))])], 611, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 614
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 615
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)],             // line 617
($context["options"] ?? null));
            // line 618
            echo "
   ";
            // line 619
            ob_start(function () { return ''; });
            // line 620
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [0 => ($context["options"] ?? null)]);
            // line 621
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 622
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 622))])], 622, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 625
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 626
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 627
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 627), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 627)) {
                // line 628
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 629
                echo "   ";
            }
            // line 630
            echo "
   ";
            // line 631
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 631)) {
                // line 632
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 633
                echo "   ";
            }
            // line 634
            echo "
   ";
            // line 635
            ob_start(function () { return ''; });
            // line 636
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 => (twig_constant("GLPI_ROOT") . "/pics/icones"), 3 => twig_array_merge(["rand" =>             // line 637
($context["rand"] ?? null), "width" => "100%"],             // line 639
($context["options"] ?? null))]);
            // line 640
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 641
            echo "
   ";
            // line 642
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 642))])], 642, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 645
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 646
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 647
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 647), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 647)) {
                // line 648
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 649
                echo "   ";
            }
            // line 650
            echo "
   ";
            // line 651
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 651)) {
                // line 652
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 653
                echo "   ";
            }
            // line 654
            echo "
   ";
            // line 655
            ob_start(function () { return ''; });
            // line 656
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["rand" =>             // line 657
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 659
($context["value"] ?? null)],             // line 660
($context["options"] ?? null))]);
            // line 661
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 662
            echo "
   ";
            // line 663
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 663))])], 663, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 666
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 667
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 667)) {
                // line 668
                echo "      ";
                // line 669
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 670
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 673
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 674
                echo "   ";
            }
            // line 675
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 676
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 676), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 676)) {
                // line 677
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 678
                echo "   ";
            }
            // line 679
            echo "
   ";
            // line 680
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 680)) {
                // line 681
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 682
                echo "   ";
            }
            // line 683
            echo "
   ";
            // line 684
            ob_start(function () { return ''; });
            // line 685
            echo "      ";
            echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), twig_array_merge(["name" =>             // line 686
($context["name"] ?? null), "value" =>             // line 687
($context["value"] ?? null), "rand" =>             // line 688
($context["rand"] ?? null), "width" => "100%"],             // line 690
($context["options"] ?? null)));
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 692
            echo "
   ";
            // line 693
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 694
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 694))])], 694, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 698
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 699
            echo "   ";
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 700
                echo "      ";
                $context["value"] = "&nbsp;";
                // line 701
                echo "   ";
            }
            // line 702
            echo "
   ";
            // line 703
            ob_start(function () { return ''; });
            // line 704
            echo "      <span class=\"form-control-plaintext\">";
            echo ($context["value"] ?? null);
            echo "</span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 706
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 706, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 709
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 710
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => []],             // line 717
($context["options"] ?? null));
            // line 718
            echo "
   ";
            // line 719
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 719), ($context["name"] ?? null), [], "array", true, true, false, 719)) {
                // line 720
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 720)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["name"] ?? null)] ?? null) : null)]);
                // line 721
                echo "   ";
            } elseif (twig_in_filter(($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 721))) {
                // line 722
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true]);
                // line 723
                echo "   ";
            }
            // line 724
            echo "
   ";
            // line 725
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 725)) {
                // line 726
                echo "      ";
                echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
                echo "
   ";
            } else {
                // line 728
                echo "      ";
                $context["id"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 728)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 728)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 728))));
                // line 729
                echo "      ";
                $context["field"] = twig_replace_filter(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 730
                echo "      ";
                $context["add_field_html"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 730)) > 0)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 730)) : (""));
                // line 731
                echo "
      ";
                // line 732
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 732) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 732), "isHiddenField", [0 => ($context["name"] ?? null)], "method", false, false, false, 732))) {
                    // line 733
                    echo "         ";
                    if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 733)) {
                        // line 734
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 734, $context, $this->getSourceContext());
                        echo "
         ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 735
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 735)) {
                        // line 736
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 736, $context, $this->getSourceContext());
                        echo "
         ";
                    } else {
                        // line 738
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 738, $context, $this->getSourceContext());
                        echo "
         ";
                    }
                    // line 740
                    echo "      ";
                }
                // line 741
                echo "   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 744
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 745
            echo "   ";
            ob_start(function () { return ''; });
            // line 746
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"form-field-ajax\">
         ";
            // line 747
            if ( !(null === ($context["value"] ?? null))) {
                // line 748
                echo "            ";
                echo ($context["value"] ?? null);
                echo "
         ";
            }
            // line 750
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 752
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 752))])], 752, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 755
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 756
            echo "   ";
            $context["options"] = twig_array_merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 757
            echo "
   ";
            // line 758
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 758)) {
                // line 759
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 759, $context, $this->getSourceContext());
                echo "
   ";
            } else {
                // line 761
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 761, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 766
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 767
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-3"],             // line 770
($context["options"] ?? null));
            // line 771
            echo "
   ";
            // line 772
            $context["class"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 772) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 772)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 772)) : ("col-12 col-sm-6"));
            // line 773
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 773)) {
                // line 774
                echo "      ";
                $context["class"] = "col-12";
                // line 775
                echo "   ";
            }
            // line 776
            echo "
   <div class=\"";
            // line 777
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 777), "html", null, true);
            echo "\">
      ";
            // line 778
            echo ($context["field"] ?? null);
            echo "
      ";
            // line 779
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 784
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 785
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "label_class" => "col-xxl-5", "input_class" => "col-xxl-7", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 796
($context["options"] ?? null));
            // line 797
            echo "
   ";
            // line 798
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 798)) {
                // line 799
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 802
                echo "
      ";
                // line 803
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 803)) {
                    // line 804
                    echo "         ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]);
                    // line 808
                    echo "      ";
                }
                // line 809
                echo "   ";
            }
            // line 810
            echo "
   ";
            // line 811
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 811)) {
                // line 812
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-2", "input_class" => "col-10"]);
                // line 816
                echo "   ";
            }
            // line 817
            echo "
   ";
            // line 818
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 818)) {
                // line 819
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => (twig_get_attribute($this->env, $this->source,                 // line 820
($context["options"] ?? null), "label_class", [], "any", false, false, false, 820) . " text-xxl-end")]);
                // line 822
                echo "   ";
            }
            // line 823
            echo "
   ";
            // line 824
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 824))) {
                // line 825
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 825)]);
                // line 826
                echo "   ";
            } else {
                // line 827
                echo "      ";
                $context["extra_attribs"] = "";
                // line 828
                echo "   ";
            }
            // line 829
            echo "
   <div class=\"form-field row ";
            // line 830
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 830), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 830), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 830), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 831
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 831))], 831, $context, $this->getSourceContext());
            echo "
      ";
            // line 832
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 832)) {
                // line 833
                echo "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 834
                echo "      ";
            }
            // line 835
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 835), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["flex_class"] ?? null), "html", null, true);
            echo " field-container\">
         ";
            // line 836
            echo ($context["field"] ?? null);
            echo "
         ";
            // line 837
            echo ($context["add_field_html"] ?? null);
            echo "
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 843
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 844
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 850
($context["options"] ?? null));
            // line 851
            echo "
   ";
            // line 852
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 852)) {
                // line 853
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 856
                echo "   ";
            }
            // line 857
            echo "
   ";
            // line 858
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 858))) {
                // line 859
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 859)]);
                // line 860
                echo "   ";
            } else {
                // line 861
                echo "      ";
                $context["extra_attribs"] = "";
                // line 862
                echo "   ";
            }
            // line 863
            echo "
   <div class=\"form-field ";
            // line 864
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 864), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 864), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 864), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 865
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 865))], 865, $context, $this->getSourceContext());
            echo "
      <div class=\"";
            // line 866
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 866), "html", null, true);
            echo " field-container\">
         ";
            // line 867
            echo ($context["field"] ?? null);
            echo "
      </div>
      ";
            // line 869
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 874
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 875
            echo "    ";
            $context["options"] = twig_array_merge(["locked" => false, "locked_value" => null],             // line 878
($context["options"] ?? null));
            // line 879
            echo "
   ";
            // line 880
            $context["required_mark"] = "";
            // line 881
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 881), "isMandatoryField", [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 881)], "method", false, false, false, 881) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 881))) {
                // line 882
                echo "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 883
                echo "   ";
            }
            // line 884
            echo "
   ";
            // line 885
            $context["helper"] = "";
            // line 886
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 886)) {
                // line 887
                echo "      ";
                ob_start(function () { return ''; });
                // line 888
                echo "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                // line 889
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 889), "html", null, true);
                echo "\">
            ?
         </span>
      ";
                $context["helper"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 893
                echo "   ";
            }
            // line 894
            echo "
   ";
            // line 895
            $context["locked_mark"] = "";
            // line 896
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 896)) {
                // line 897
                echo "      ";
                ob_start(function () { return ''; });
                // line 898
                echo "        ";
                ob_start(function () { return ''; });
                echo twig_escape_filter($this->env, __("Field will not be updated from inventory"), "html", null, true);
                $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 899
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 899))) {
                    // line 900
                    echo "            ";
                    ob_start(function () { return ''; });
                    echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, ((__("Last inventory value was:") . " ") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 900)), "html", null, true);
                    $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 901
                    echo "        ";
                }
                // line 902
                echo "        <i class=\"ti ti-lock\"
           title=\"";
                // line 903
                echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                echo "\"
           data-bs-toggle=\"tooltip\"></i>
      ";
                $context["locked_mark"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 906
                echo "   ";
            }
            // line 907
            echo "
   <label class=\"";
            // line 908
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 909
            echo ($context["label"] ?? null);
            echo "
      ";
            // line 910
            echo ($context["locked_mark"] ?? null);
            echo "
      ";
            // line 911
            echo ($context["required_mark"] ?? null);
            echo "
      ";
            // line 912
            echo ($context["helper"] ?? null);
            echo "
   </label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2879 => 912,  2875 => 911,  2871 => 910,  2867 => 909,  2861 => 908,  2858 => 907,  2855 => 906,  2849 => 903,  2846 => 902,  2843 => 901,  2836 => 900,  2833 => 899,  2828 => 898,  2825 => 897,  2822 => 896,  2820 => 895,  2817 => 894,  2814 => 893,  2807 => 889,  2804 => 888,  2801 => 887,  2798 => 886,  2796 => 885,  2793 => 884,  2790 => 883,  2787 => 882,  2784 => 881,  2782 => 880,  2779 => 879,  2777 => 878,  2775 => 875,  2759 => 874,  2747 => 869,  2742 => 867,  2738 => 866,  2734 => 865,  2724 => 864,  2721 => 863,  2718 => 862,  2715 => 861,  2712 => 860,  2709 => 859,  2707 => 858,  2704 => 857,  2701 => 856,  2698 => 853,  2696 => 852,  2693 => 851,  2691 => 850,  2689 => 844,  2672 => 843,  2659 => 837,  2655 => 836,  2648 => 835,  2645 => 834,  2642 => 833,  2640 => 832,  2636 => 831,  2626 => 830,  2623 => 829,  2620 => 828,  2617 => 827,  2614 => 826,  2611 => 825,  2609 => 824,  2606 => 823,  2603 => 822,  2601 => 820,  2599 => 819,  2597 => 818,  2594 => 817,  2591 => 816,  2588 => 812,  2586 => 811,  2583 => 810,  2580 => 809,  2577 => 808,  2574 => 804,  2572 => 803,  2569 => 802,  2566 => 799,  2564 => 798,  2561 => 797,  2559 => 796,  2557 => 785,  2540 => 784,  2528 => 779,  2524 => 778,  2518 => 777,  2515 => 776,  2512 => 775,  2509 => 774,  2506 => 773,  2504 => 772,  2501 => 771,  2499 => 770,  2497 => 767,  2481 => 766,  2468 => 761,  2462 => 759,  2460 => 758,  2457 => 757,  2454 => 756,  2441 => 755,  2429 => 752,  2425 => 750,  2419 => 748,  2417 => 747,  2412 => 746,  2409 => 745,  2393 => 744,  2383 => 741,  2380 => 740,  2374 => 738,  2368 => 736,  2366 => 735,  2361 => 734,  2358 => 733,  2356 => 732,  2353 => 731,  2350 => 730,  2347 => 729,  2344 => 728,  2338 => 726,  2336 => 725,  2333 => 724,  2330 => 723,  2327 => 722,  2324 => 721,  2321 => 720,  2319 => 719,  2316 => 718,  2314 => 717,  2312 => 710,  2296 => 709,  2284 => 706,  2278 => 704,  2276 => 703,  2273 => 702,  2270 => 701,  2267 => 700,  2264 => 699,  2248 => 698,  2235 => 694,  2233 => 693,  2230 => 692,  2225 => 690,  2224 => 688,  2223 => 687,  2222 => 686,  2220 => 685,  2218 => 684,  2215 => 683,  2212 => 682,  2209 => 681,  2207 => 680,  2204 => 679,  2201 => 678,  2198 => 677,  2195 => 676,  2192 => 675,  2189 => 674,  2186 => 673,  2180 => 670,  2177 => 669,  2175 => 668,  2172 => 667,  2155 => 666,  2144 => 663,  2141 => 662,  2138 => 661,  2136 => 660,  2135 => 659,  2134 => 657,  2132 => 656,  2130 => 655,  2127 => 654,  2124 => 653,  2121 => 652,  2119 => 651,  2116 => 650,  2113 => 649,  2110 => 648,  2107 => 647,  2104 => 646,  2088 => 645,  2077 => 642,  2074 => 641,  2071 => 640,  2069 => 639,  2068 => 637,  2066 => 636,  2064 => 635,  2061 => 634,  2058 => 633,  2055 => 632,  2053 => 631,  2050 => 630,  2047 => 629,  2044 => 628,  2041 => 627,  2038 => 626,  2022 => 625,  2010 => 622,  2007 => 621,  2004 => 620,  2002 => 619,  1999 => 618,  1997 => 617,  1995 => 615,  1980 => 614,  1969 => 611,  1966 => 610,  1963 => 609,  1961 => 608,  1960 => 607,  1959 => 605,  1957 => 604,  1955 => 603,  1952 => 602,  1950 => 601,  1947 => 600,  1944 => 599,  1941 => 598,  1939 => 597,  1936 => 596,  1933 => 595,  1930 => 594,  1927 => 593,  1924 => 592,  1908 => 591,  1897 => 588,  1894 => 587,  1891 => 586,  1889 => 585,  1888 => 583,  1886 => 582,  1884 => 581,  1881 => 580,  1878 => 579,  1875 => 578,  1873 => 577,  1870 => 576,  1867 => 575,  1864 => 574,  1861 => 573,  1858 => 572,  1842 => 571,  1831 => 568,  1828 => 567,  1825 => 566,  1823 => 565,  1822 => 563,  1821 => 562,  1819 => 561,  1817 => 560,  1814 => 559,  1811 => 558,  1808 => 557,  1806 => 556,  1803 => 555,  1800 => 554,  1797 => 553,  1794 => 552,  1791 => 551,  1775 => 550,  1764 => 547,  1761 => 546,  1758 => 545,  1756 => 544,  1755 => 542,  1754 => 541,  1752 => 540,  1750 => 539,  1747 => 538,  1744 => 537,  1741 => 536,  1739 => 535,  1736 => 534,  1733 => 533,  1730 => 532,  1728 => 531,  1725 => 530,  1722 => 529,  1705 => 528,  1694 => 525,  1691 => 524,  1688 => 523,  1686 => 522,  1685 => 520,  1684 => 519,  1682 => 518,  1680 => 517,  1677 => 516,  1674 => 515,  1671 => 514,  1668 => 513,  1665 => 512,  1662 => 511,  1660 => 510,  1657 => 509,  1654 => 508,  1638 => 507,  1626 => 504,  1621 => 502,  1617 => 501,  1613 => 500,  1607 => 499,  1603 => 497,  1600 => 496,  1584 => 495,  1574 => 492,  1572 => 489,  1567 => 488,  1565 => 487,  1562 => 486,  1558 => 484,  1556 => 481,  1553 => 480,  1545 => 477,  1543 => 475,  1542 => 472,  1539 => 471,  1535 => 470,  1532 => 469,  1529 => 468,  1513 => 467,  1501 => 464,  1497 => 462,  1490 => 458,  1486 => 457,  1481 => 456,  1478 => 455,  1474 => 453,  1472 => 452,  1465 => 451,  1457 => 449,  1454 => 448,  1451 => 447,  1448 => 446,  1446 => 445,  1443 => 444,  1440 => 443,  1423 => 442,  1411 => 439,  1408 => 438,  1405 => 437,  1402 => 436,  1397 => 434,  1393 => 433,  1389 => 432,  1385 => 431,  1381 => 430,  1377 => 428,  1374 => 427,  1371 => 426,  1369 => 425,  1368 => 423,  1366 => 421,  1350 => 420,  1338 => 417,  1335 => 416,  1319 => 415,  1307 => 412,  1302 => 410,  1298 => 409,  1294 => 408,  1290 => 407,  1286 => 405,  1283 => 404,  1280 => 403,  1264 => 402,  1252 => 399,  1231 => 381,  1227 => 380,  1223 => 379,  1217 => 378,  1213 => 376,  1210 => 375,  1194 => 374,  1183 => 371,  1180 => 370,  1164 => 359,  1160 => 358,  1156 => 357,  1148 => 352,  1142 => 349,  1135 => 346,  1133 => 345,  1130 => 344,  1127 => 343,  1124 => 342,  1121 => 341,  1105 => 340,  1094 => 337,  1091 => 336,  1075 => 325,  1071 => 324,  1067 => 323,  1060 => 319,  1054 => 316,  1047 => 313,  1045 => 312,  1042 => 311,  1039 => 310,  1036 => 309,  1033 => 308,  1017 => 307,  1007 => 304,  1003 => 302,  1001 => 301,  997 => 300,  993 => 299,  989 => 298,  983 => 297,  978 => 296,  976 => 295,  972 => 293,  969 => 292,  966 => 291,  963 => 290,  960 => 289,  957 => 288,  954 => 287,  951 => 286,  948 => 285,  945 => 284,  942 => 283,  939 => 282,  937 => 281,  934 => 280,  931 => 279,  928 => 278,  925 => 277,  909 => 276,  892 => 267,  888 => 266,  884 => 265,  878 => 261,  876 => 260,  872 => 259,  869 => 258,  866 => 257,  863 => 256,  860 => 255,  857 => 254,  854 => 253,  852 => 252,  849 => 251,  846 => 250,  843 => 249,  841 => 247,  840 => 246,  839 => 244,  838 => 243,  836 => 242,  833 => 241,  830 => 240,  827 => 239,  825 => 237,  824 => 236,  823 => 234,  821 => 233,  818 => 232,  815 => 231,  813 => 230,  810 => 229,  807 => 228,  805 => 226,  804 => 224,  803 => 223,  801 => 222,  799 => 221,  796 => 220,  789 => 218,  785 => 217,  781 => 216,  773 => 214,  771 => 213,  769 => 212,  766 => 211,  763 => 210,  760 => 209,  757 => 208,  755 => 207,  752 => 206,  750 => 205,  748 => 197,  732 => 196,  720 => 192,  716 => 190,  710 => 188,  706 => 186,  704 => 185,  701 => 184,  698 => 183,  695 => 182,  679 => 181,  667 => 177,  657 => 175,  650 => 174,  644 => 173,  640 => 172,  636 => 171,  632 => 170,  626 => 169,  622 => 167,  620 => 166,  617 => 165,  614 => 164,  611 => 163,  609 => 162,  606 => 161,  603 => 160,  600 => 159,  598 => 158,  595 => 157,  579 => 156,  568 => 152,  565 => 151,  561 => 149,  555 => 147,  553 => 146,  549 => 145,  545 => 144,  541 => 143,  537 => 142,  531 => 141,  525 => 140,  522 => 139,  520 => 138,  517 => 137,  515 => 136,  513 => 133,  510 => 132,  508 => 131,  506 => 129,  503 => 128,  487 => 127,  476 => 123,  473 => 122,  468 => 120,  464 => 119,  460 => 118,  456 => 117,  452 => 116,  447 => 115,  445 => 114,  442 => 113,  440 => 112,  439 => 110,  436 => 109,  433 => 108,  430 => 107,  427 => 106,  411 => 105,  400 => 101,  397 => 100,  391 => 98,  388 => 97,  384 => 96,  380 => 95,  376 => 94,  370 => 93,  364 => 91,  362 => 90,  359 => 89,  356 => 88,  353 => 87,  350 => 86,  347 => 85,  331 => 84,  320 => 80,  317 => 79,  314 => 78,  311 => 77,  308 => 76,  305 => 75,  301 => 74,  298 => 73,  295 => 72,  278 => 71,  263 => 65,  257 => 62,  254 => 61,  252 => 60,  248 => 59,  243 => 57,  240 => 56,  237 => 55,  223 => 54,  208 => 48,  202 => 45,  199 => 44,  197 => 43,  193 => 42,  188 => 40,  185 => 39,  182 => 38,  179 => 37,  176 => 36,  173 => 35,  158 => 34,  152 => 872,  148 => 841,  144 => 782,  140 => 764,  137 => 754,  134 => 743,  131 => 708,  128 => 697,  125 => 665,  122 => 644,  119 => 624,  116 => 613,  113 => 590,  110 => 570,  107 => 549,  104 => 527,  101 => 506,  98 => 494,  95 => 466,  92 => 441,  89 => 419,  86 => 414,  83 => 401,  80 => 373,  77 => 339,  74 => 306,  71 => 275,  67 => 194,  63 => 179,  59 => 154,  55 => 125,  51 => 103,  47 => 82,  44 => 70,  41 => 53,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/fields_macros.html.twig", "/var/www/html/glpi/templates/components/form/fields_macros.html.twig");
    }
}
