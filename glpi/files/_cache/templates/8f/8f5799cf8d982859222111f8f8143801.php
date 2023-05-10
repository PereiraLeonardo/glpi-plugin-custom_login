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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_43921e563aeced18a96007aecf418e08 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 34)->unwrap();
        // line 35
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 37
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 38
($context["canupdate"] ?? null), "add_field_class" => ((        // line 39
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 41
        echo "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 44
        echo "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 49
        echo ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 52);
        echo "
            </span>
            <span class=\"item-title\">
                ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 55), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 59
        echo ((($context["main_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

            ";
        // line 64
        if (Session::isMultiEntitiesMode()) {
            // line 65
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 65)) {
                // line 66
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,                 // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), twig_array_merge(                // line 71
($context["field_options"] ?? null), ["entity" =>                 // line 72
($context["userentities"] ?? null), "on_change" => "this.form.submit()"])], 66, $context, $this->getSourceContext());
                // line 75
                echo "
               ";
            } else {
                // line 77
                echo "                  ";
                ob_start(function () { return ''; });
                // line 78
                echo "                     ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameById", [0 => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null)]);
                echo "
                  ";
                $context["entity_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                echo "
                  ";
                // line 81
                echo twig_call_macro($macros["fields"], "macro_field", ["",                 // line 83
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), twig_array_merge(                // line 85
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])], 81, $context, $this->getSourceContext());
                // line 88
                echo "
               ";
            }
            // line 90
            echo "
               ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_recursive"], "method", false, false, false, 91)) {
                // line 92
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,                 // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 96
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
                // line 97
                echo "
               ";
            }
            // line 99
            echo "            ";
        }
        // line 100
        echo "
            ";
        // line 101
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date"] ?? null) : null), __("Opening date"),         // line 105
($context["field_options"] ?? null)], 101, $context, $this->getSourceContext());
        // line 106
        echo "

            ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 108) != "Ticket")) {
            // line 109
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 111
($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 113
($context["field_options"] ?? null)], 109, $context, $this->getSourceContext());
            // line 114
            echo "
            ";
        }
        // line 116
        echo "
            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [0 => true], "method", false, false, false, 117)) {
            // line 118
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["solvedate", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 120
($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["solvedate"] ?? null) : null), __("Resolution date"),             // line 122
($context["field_options"] ?? null)], 118, $context, $this->getSourceContext());
            // line 123
            echo "
            ";
        }
        // line 125
        echo "
            ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 126)) {
            // line 127
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 129
($context["item"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["closedate"] ?? null) : null), __("Close date"),             // line 131
($context["field_options"] ?? null)], 127, $context, $this->getSourceContext());
            // line 132
            echo "
            ";
        }
        // line 134
        echo "
            ";
        // line 135
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 135) == "Ticket")) {
            // line 136
            echo "               ";
            $context["type_params"] = twig_array_merge(["value" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 137
($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 140
($context["field_options"] ?? null));
            // line 141
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 141)) {
                // line 142
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 143
                echo "               ";
            } else {
                // line 144
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 145
                echo "               ";
            }
            // line 146
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,             // line 148
($context["item"] ?? null), "dropdownType", [0 => "type", 1 => ($context["type_params"] ?? null)], "method", false, false, false, 148), _n("Type", "Types", 1),             // line 150
($context["field_options"] ?? null)], 146, $context, $this->getSourceContext());
            // line 151
            echo "
            ";
        }
        // line 153
        echo "
            ";
        // line 154
        $context["cat_params"] = twig_array_merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,         // line 155
($context["item"] ?? null), "fields", [], "any", false, false, false, 155)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "disabled" =>  !(        // line 156
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 158
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 158)) {
            // line 159
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 162
            echo "            ";
        }
        // line 163
        echo "            ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 163) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "itilcategories_id"], "method", false, false, false, 163)) && ((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 163)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itilcategories_id"] ?? null) : null) > 0))) {
            // line 164
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 167
            echo "            ";
        }
        // line 168
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 168) == "Ticket")) {
            // line 169
            echo "               ";
            if (((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 169)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
                // line 170
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 171
                echo "               ";
            } elseif (((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
                // line 172
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 173
                echo "               ";
            }
            // line 174
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 174) == "Problem")) {
            // line 175
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 176
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 176) == "Change")) {
            // line 177
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 178
            echo "            ";
        }
        // line 179
        echo "            <span id=\"category_block_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 180
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,         // line 183
($context["item"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 185
($context["cat_params"] ?? null)], 180, $context, $this->getSourceContext());
        // line 186
        echo "
            </span>

            ";
        // line 189
        echo twig_include($this->env, $context, "components/itilobject/fields/status.html.twig");
        echo "

            ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "requesttypes_id"], "method", false, false, false, 191)) {
            // line 192
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 195
($context["item"] ?? null), "fields", [], "any", false, false, false, 195)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), twig_array_merge(            // line 197
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], 192, $context, $this->getSourceContext());
            // line 203
            echo "
            ";
        }
        // line 205
        echo "
            ";
        // line 206
        echo twig_include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        echo "

            ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 208)) {
            // line 209
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 212
($context["item"] ?? null), "fields", [], "any", false, false, false, 212)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 214
($context["field_options"] ?? null), ["hide_if_no_elements" => true])], 209, $context, $this->getSourceContext());
            // line 217
            echo "
            ";
        }
        // line 219
        echo "
            ";
        // line 220
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 220) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 220) == "Ticket"))) {
            // line 221
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((twig_get_attribute($this->env, $this->source,             // line 224
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 224)) ? (_twig_default_filter((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), twig_array_merge(            // line 226
($context["field_options"] ?? null), ["entity" => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source,             // line 227
($context["item"] ?? null), "fields", [], "any", false, false, false, 227)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true])], 221, $context, $this->getSourceContext());
            // line 231
            echo "
            ";
        }
        // line 233
        echo "
            ";
        // line 234
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 234) != "Ticket") || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 234))) {
            // line 235
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,             // line 237
($context["item"] ?? null), "fields", [], "any", false, false, false, 237)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["actiontime"] ?? null) : null), __("Total duration"),             // line 239
($context["field_options"] ?? null)], 235, $context, $this->getSourceContext());
            // line 240
            echo "
            ";
        }
        // line 242
        echo "
            ";
        // line 243
        echo twig_include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        echo "

            ";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>
      </div>
   </div>

   ";
        // line 250
        $context["actors_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 250) || ((($__internal_compile_21 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 251
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 252
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 253
        echo ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 256
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 259), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 263
        echo ((($context["actors_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 265
        echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig");
        echo "
         </div>
      </div>
   </div>

   ";
        // line 270
        if ((array_key_exists("item_ticket", $context) &&  !(null === ($context["item_ticket"] ?? null)))) {
            // line 271
            echo "      ";
            $context["items_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 271) || ((($__internal_compile_22 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 272
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 273
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 274
            echo ((($context["items_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 277
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               ";
            // line 280
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "items_id"], "method", false, false, false, 280)) {
                // line 281
                echo "                  <span class=\"required\">*</span>
               ";
            }
            // line 283
            echo "            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 285
            echo ((($context["items_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item_ticket"] ?? null), "itemAddForm", [0 => ($context["item"] ?? null), 1 => ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))], "method", false, false, false, 287), "html", null, true);
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 292
        echo "
   ";
        // line 293
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 293) == "Ticket")) {
            // line 294
            echo "      ";
            ob_start(function () { return ''; });
            // line 295
            echo "         ";
            echo twig_include($this->env, $context, "components/itilobject/service_levels.html.twig");
            echo "
      ";
            $context["la_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
      ";
            // line 298
            if ((twig_length_filter($this->env, twig_trim_filter(($context["la_content"] ?? null))) > 0)) {
                // line 299
                echo "         ";
                $context["nb_la"] = (((((((($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 299)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 299)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 299)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 299)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 300
                echo "         ";
                $context["servicelevels_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 300) && ((($__internal_compile_27 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 301
                echo "         <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 302
                echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 303
                echo ((($context["servicelevels_show"] ?? null)) ? ("") : ("collapsed"));
                echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm me-1\"></i>
                  <span class=\"item-title\">
                     ";
                // line 306
                echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                echo "
                  </span>
                  ";
                // line 308
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 309
                    echo "                     <span class=\"badge bg-secondary ms-2\">";
                    echo twig_escape_filter($this->env, ($context["nb_la"] ?? null), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 311
                echo "               </button>
            </h2>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 313
                echo ((($context["servicelevels_show"] ?? null)) ? ("show") : (""));
                echo "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 315
                echo twig_escape_filter($this->env, ($context["la_content"] ?? null), "html", null, true);
                echo "
               </div>
            </div>
         </div>
      ";
            }
            // line 320
            echo "   ";
        }
        // line 321
        echo "
   ";
        // line 322
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 322), [0 => "Problem", 1 => "Change"])) {
            // line 323
            echo "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 329
            echo "
      ";
            // line 330
            $context["nb_analysis"] = 0;
            // line 331
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 332
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 332) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 332)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 333
                    echo "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 334
                    echo "         ";
                }
                // line 335
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 336
            echo "      ";
            $context["analysis_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 336) && ((($__internal_compile_29 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 337
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 338
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 339
            echo ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 342
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "
               </span>
               ";
            // line 344
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 345
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_analysis"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 347
            echo "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 349
            echo ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 352
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 352)) {
                    // line 353
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 354
$context["analysis_field"], (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,                     // line 355
($context["item"] ?? null), "fields", [], "any", false, false, false, 355)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["analysis_field"]] ?? null) : null),                     // line 356
$context["label"], twig_array_merge(                    // line 357
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 353, $context, $this->getSourceContext());
                    // line 361
                    echo "
                  ";
                }
                // line 363
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 368
        echo "
   ";
        // line 369
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 369) == "Change")) {
            // line 370
            echo "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 375
            echo "
      ";
            // line 376
            $context["nb_plans"] = 0;
            // line 377
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 378
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 378) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 378)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 379
                    echo "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 380
                    echo "         ";
                }
                // line 381
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 382
            echo "
      ";
            // line 383
            $context["plans_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 383) && ((($__internal_compile_32 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 384
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 385
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 386
            echo ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 389
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "
               </span>
               ";
            // line 391
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 392
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_plans"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 394
            echo "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 396
            echo ((($context["plans_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 399
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 399)) {
                    // line 400
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 401
$context["plans_field"], (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,                     // line 402
($context["item"] ?? null), "fields", [], "any", false, false, false, 402)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[$context["plans_field"]] ?? null) : null),                     // line 403
$context["label"], twig_array_merge(                    // line 404
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 400, $context, $this->getSourceContext());
                    // line 408
                    echo "
                  ";
                }
                // line 410
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 411
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 415
        echo "
   ";
        // line 416
        if (($context["ticket_ticket"] ?? null)) {
            // line 417
            echo "      ";
            $context["linked_tickets_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_tickets", [], "array", true, true, false, 417) && ((($__internal_compile_34 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["linked_tickets"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 418
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"linked_tickets-heading\" title=\"";
            // line 419
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 420
            echo ((($context["linked_tickets_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_tickets\" aria-expanded=\"true\" aria-controls=\"linked_tickets\">
               <i class=\"ti ti-link me-1\"></i>
               ";
            // line 422
            $context["linked_tickets"] = twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [0 => (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 422)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null)], "method", false, false, false, 422);
            // line 423
            echo "               ";
            $context["nb_linked_tickets"] = twig_length_filter($this->env, ($context["linked_tickets"] ?? null));
            // line 424
            echo "               ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 424) && ((($__internal_compile_36 = (($__internal_compile_37 = ($context["params"] ?? null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["_link"] ?? null) : null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["tickets_id_2"] ?? null) : null) > 0))) {
                // line 425
                echo "                  ";
                $context["nb_linked_tickets"] = 1;
                // line 426
                echo "               ";
            }
            // line 427
            echo "               <span class=\"item-title\">
                    ";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            echo "
               </span>
               ";
            // line 430
            if ((($context["nb_linked_tickets"] ?? null) > 0)) {
                // line 431
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_linked_tickets"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 433
            echo "            </button>
         </h2>
         <div id=\"linked_tickets\" class=\"accordion-collapse collapse ";
            // line 435
            echo ((($context["linked_tickets_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"linked_tickets-heading\">
            <div class=\"accordion-body\">
               ";
            // line 437
            echo twig_include($this->env, $context, "components/itilobject/linked_tickets.html.twig");
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 442
        echo "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 462
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .field-container').load(
        '";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        echo "',
        {
            'type': type,
            'entity_restrict': ";
        // line 466
        echo twig_escape_filter($this->env, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 466)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["entities_id"] ?? null) : null), "html", null, true);
        echo ",
            'value': ";
        // line 467
        echo twig_escape_filter($this->env, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 467)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["itilcategories_id"] ?? null) : null), "html", null, true);
        echo ",
        }
    );
};
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  848 => 467,  844 => 466,  838 => 463,  834 => 462,  812 => 442,  804 => 437,  799 => 435,  795 => 433,  789 => 431,  787 => 430,  782 => 428,  779 => 427,  776 => 426,  773 => 425,  770 => 424,  767 => 423,  765 => 422,  760 => 420,  756 => 419,  753 => 418,  750 => 417,  748 => 416,  745 => 415,  739 => 411,  733 => 410,  729 => 408,  727 => 404,  726 => 403,  725 => 402,  724 => 401,  722 => 400,  719 => 399,  715 => 398,  710 => 396,  706 => 394,  700 => 392,  698 => 391,  693 => 389,  687 => 386,  683 => 385,  680 => 384,  678 => 383,  675 => 382,  669 => 381,  666 => 380,  663 => 379,  660 => 378,  655 => 377,  653 => 376,  650 => 375,  647 => 370,  645 => 369,  642 => 368,  636 => 364,  630 => 363,  626 => 361,  624 => 357,  623 => 356,  622 => 355,  621 => 354,  619 => 353,  616 => 352,  612 => 351,  607 => 349,  603 => 347,  597 => 345,  595 => 344,  590 => 342,  584 => 339,  580 => 338,  577 => 337,  574 => 336,  568 => 335,  565 => 334,  562 => 333,  559 => 332,  554 => 331,  552 => 330,  549 => 329,  546 => 323,  544 => 322,  541 => 321,  538 => 320,  530 => 315,  525 => 313,  521 => 311,  515 => 309,  513 => 308,  508 => 306,  502 => 303,  498 => 302,  495 => 301,  492 => 300,  489 => 299,  487 => 298,  484 => 297,  478 => 295,  475 => 294,  473 => 293,  470 => 292,  462 => 287,  457 => 285,  453 => 283,  449 => 281,  447 => 280,  441 => 277,  435 => 274,  431 => 273,  428 => 272,  425 => 271,  423 => 270,  415 => 265,  410 => 263,  403 => 259,  397 => 256,  391 => 253,  387 => 252,  384 => 251,  382 => 250,  374 => 245,  369 => 243,  366 => 242,  362 => 240,  360 => 239,  359 => 237,  357 => 235,  355 => 234,  352 => 233,  348 => 231,  346 => 227,  345 => 226,  344 => 224,  342 => 221,  340 => 220,  337 => 219,  333 => 217,  331 => 214,  330 => 212,  328 => 209,  326 => 208,  321 => 206,  318 => 205,  314 => 203,  312 => 197,  311 => 195,  309 => 192,  307 => 191,  302 => 189,  297 => 186,  295 => 185,  294 => 183,  293 => 180,  288 => 179,  285 => 178,  282 => 177,  279 => 176,  276 => 175,  273 => 174,  270 => 173,  267 => 172,  264 => 171,  261 => 170,  258 => 169,  255 => 168,  252 => 167,  249 => 164,  246 => 163,  243 => 162,  240 => 159,  237 => 158,  235 => 156,  234 => 155,  233 => 154,  230 => 153,  226 => 151,  224 => 150,  223 => 148,  221 => 146,  218 => 145,  215 => 144,  212 => 143,  209 => 142,  206 => 141,  204 => 140,  203 => 137,  201 => 136,  199 => 135,  196 => 134,  192 => 132,  190 => 131,  189 => 129,  187 => 127,  185 => 126,  182 => 125,  178 => 123,  176 => 122,  175 => 120,  173 => 118,  171 => 117,  168 => 116,  164 => 114,  162 => 113,  161 => 111,  159 => 109,  157 => 108,  153 => 106,  151 => 105,  150 => 103,  149 => 101,  146 => 100,  143 => 99,  139 => 97,  137 => 96,  136 => 94,  134 => 92,  132 => 91,  129 => 90,  125 => 88,  123 => 85,  122 => 83,  121 => 81,  118 => 80,  112 => 78,  109 => 77,  105 => 75,  103 => 72,  102 => 71,  101 => 69,  99 => 66,  96 => 65,  94 => 64,  89 => 62,  83 => 59,  76 => 55,  70 => 52,  64 => 49,  60 => 47,  58 => 46,  54 => 44,  52 => 43,  50 => 42,  47 => 41,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "/var/www/html/glpi/templates/components/itilobject/fields_panel.html.twig");
    }
}
