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

/* generic_show_form.html.twig */
class __TwigTemplate_1206e44ce76377ecea69a8fc30b920a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "generic_show_form.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (_twig_default_filter(($context["no_header"] ?? null), ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false))))) : (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 36), false)) : (false)))));
        // line 37
        $context["bg"] = "";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 38)) {
            // line 39
            echo "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 41
        echo "
<div class=\"asset ";
        // line 42
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 43
        echo twig_include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        echo "

   ";
        // line 45
        $context["rand"] = twig_random($this->env);
        // line 46
        echo "   ";
        $context["params"] = (($context["params"]) ?? ([]));
        // line 47
        echo "   ";
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 47) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 47)));
        // line 48
        echo "   ";
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 48) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["withtemplate"] ?? null) : null)) : (""));
        // line 49
        echo "   ";
        $context["item_type"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 49);
        // line 50
        echo "   ";
        $context["item_has_pictures"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasItemtypeOrModelPictures", [], "method", false, false, false, 50);
        // line 51
        echo "   ";
        $context["field_options"] = ["locked_fields" => twig_get_attribute($this->env, $this->source,         // line 52
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 52)];
        // line 54
        echo "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-";
        // line 56
        echo ((($context["item_has_pictures"] ?? null)) ? ("9") : ("12"));
        echo " flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  ";
        // line 60
        $this->displayBlock('form_fields', $context, $blocks);
        // line 656
        echo "               </div> ";
        // line 657
        echo "            </div> ";
        // line 658
        echo "         </div> ";
        // line 659
        echo "      </div>
      ";
        // line 660
        if (($context["item_has_pictures"] ?? null)) {
            // line 661
            echo "         <div class=\"col-12 col-xxl-3 flex-column\">
            <div class=\"flex-row asset-pictures\">
               ";
            // line 663
            echo twig_include($this->env, $context, "components/form/pictures.html.twig", ["gallery_type" => ""]);
            echo "
            </div>
         </div>
      ";
        }
        // line 667
        echo "   </div> ";
        // line 668
        echo "
   ";
        // line 669
        if ((($context["item_type"] ?? null) == "Contract")) {
            // line 670
            echo "      ";
            echo twig_include($this->env, $context, "components/form/support_hours.html.twig");
            echo "
   ";
        }
        // line 672
        echo "   ";
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
   ";
        // line 673
        if (( !array_key_exists("no_inventory_footer", $context) || (($context["no_inventory_footer"] ?? null) == false))) {
            // line 674
            echo "      ";
            echo twig_include($this->env, $context, "components/form/inventory_info.html.twig");
            echo "
   ";
        }
        // line 676
        echo "
   ";
        // line 677
        if (((null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["formfooter"] ?? null) : null)) || ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["formfooter"] ?? null) : null) == true))) {
            // line 678
            echo "      <div class=\"card-footer mx-n2 mb-n2 mt-4\">
         ";
            // line 679
            echo twig_include($this->env, $context, "components/form/dates.html.twig");
            echo "
      </div>
   ";
        }
        // line 682
        echo "</div>
";
    }

    // line 60
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "name"], "method", false, false, false, 61)) {
            // line 62
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["name",             // line 64
($context["item"] ?? null), (((            // line 65
($context["item_type"] ?? null) == "Contact")) ? (__("Surname")) : (__("Name"))),             // line 66
($context["withtemplate"] ?? null),             // line 67
($context["field_options"] ?? null)], 62, $context, $this->getSourceContext());
            // line 68
            echo "
                     ";
        }
        // line 70
        echo "
                     ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "firstname"], "method", false, false, false, 71)) {
            // line 72
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["firstname",             // line 74
($context["item"] ?? null), __("First name"),             // line 76
($context["withtemplate"] ?? null),             // line 77
($context["field_options"] ?? null)], 72, $context, $this->getSourceContext());
            // line 78
            echo "
                     ";
        }
        // line 80
        echo "
                     ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 81)) {
            // line 82
            echo "                        ";
            if (( !twig_test_empty(($context["withtemplate"] ?? null)) || (($context["withtemplate"] ?? null) == 1))) {
                // line 83
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_hiddenField", ["is_active", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 83)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_active"] ?? null) : null), __("Is active"), ["add_field_html" => __("No")]], 83, $context, $this->getSourceContext());
                // line 85
                echo "
                        ";
            } else {
                // line 87
                echo "                        ";
            }
            // line 88
            echo "                     ";
        }
        // line 89
        echo "
                     ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "states_id"], "method", false, false, false, 90)) {
            // line 91
            echo "                        ";
            $context["condition"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 91), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("state_types"))) ? ([("is_visible_" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 91))) => 1]) : ([]));
            // line 92
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["State", "states_id", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 95
($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["states_id"] ?? null) : null), __("Status"), twig_array_merge(            // line 97
($context["field_options"] ?? null), ["entity" => (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 98
($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["entities_id"] ?? null) : null), "condition" =>             // line 99
($context["condition"] ?? null)])], 92, $context, $this->getSourceContext());
            // line 101
            echo "
                     ";
        }
        // line 103
        echo "
                     ";
        // line 104
        $context["fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 104);
        // line 105
        echo "                     ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["fk"] ?? null)], "method", false, false, false, 105) && (($context["item_type"] ?? null) != "Software"))) {
            // line 106
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 107
($context["item_type"] ?? null),             // line 108
($context["fk"] ?? null), (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 109
($context["item"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["fk"] ?? null)] ?? null) : null), __("As child of"), twig_array_merge(            // line 111
($context["field_options"] ?? null), ["entity" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 112
($context["item"] ?? null), "fields", [], "any", false, false, false, 112)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null)])], 106, $context, $this->getSourceContext());
            // line 114
            echo "
                     ";
        }
        // line 116
        echo "
                     ";
        // line 117
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_helpdesk_visible"], "method", false, false, false, 117))) {
            // line 118
            echo "                        ";
            // line 119
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_helpdesk_visible", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 121
($context["item"] ?? null), "fields", [], "any", false, false, false, 121)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["is_helpdesk_visible"] ?? null) : null), __("Associable to a ticket"),             // line 123
($context["field_options"] ?? null)], 119, $context, $this->getSourceContext());
            // line 124
            echo "
                     ";
        }
        // line 126
        echo "
                     ";
        // line 127
        $context["dc_breadcrumbs"] = (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\DCBreadcrumb")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getDcBreadcrumb", [], "method", false, false, false, 127)) : ([]));
        // line 128
        echo "                     ";
        if ((twig_length_filter($this->env, ($context["dc_breadcrumbs"] ?? null)) > 0)) {
            // line 129
            echo "                        ";
            ob_start(function () { return ''; });
            // line 130
            echo "                           <ol class=\"breadcrumb breadcrumb-arrows\" aria-label=\"breadcrumbs\">
                              ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["dc_breadcrumbs"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["dc_item"]) {
                // line 132
                echo "                                 <li class=\"breadcrumb-item text-nowrap\">";
                echo $context["dc_item"];
                echo "</li>
                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dc_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                           </ol>
                        ";
            $context["dc_breadcrumbs"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 136
            echo "
                        ";
            // line 137
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["",             // line 139
($context["dc_breadcrumbs"] ?? null), __("Data center position")], 137, $context, $this->getSourceContext());
            // line 141
            echo "

                        ";
            // line 143
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 143, $context, $this->getSourceContext());
            echo " ";
            // line 144
            echo "                     ";
        }
        // line 145
        echo "
                     ";
        // line 146
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 146)) {
            // line 147
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 150
($context["item"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 152
($context["field_options"] ?? null), ["entity" => (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 153
($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["entities_id"] ?? null) : null)])], 147, $context, $this->getSourceContext());
            // line 155
            echo "
                     ";
        }
        // line 157
        echo "
                     ";
        // line 158
        if (((($context["item_type"] ?? null) == "Unmanaged") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "item_type"], "method", false, false, false, 158))) {
            // line 159
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["item_type", (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 161
($context["item"] ?? null), "fields", [], "any", false, false, false, 161)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["itemtype"] ?? null) : null), _n("Type", "Types", 1), [0 => "Computer", 1 => "NetworkEquipment", 2 => "Printer", 3 => "Peripheral", 4 => "Phone"],             // line 166
($context["field_options"] ?? null)], 159, $context, $this->getSourceContext());
            // line 167
            echo "
                     ";
        }
        // line 169
        echo "
                     ";
        // line 170
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_domaincreation"], "method", false, false, false, 170)) {
            // line 171
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_domaincreation", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["date_domaincreation"] ?? null) : null), __("Registration date")], 171, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 173
        echo "
                     ";
        // line 174
        $context["type_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeClass", [], "method", false, false, false, 174);
        // line 175
        echo "                     ";
        $context["type_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeForeignKeyField", [], "method", false, false, false, 175);
        // line 176
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["type_fk"] ?? null)], "method", false, false, false, 176)) {
            // line 177
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 178
($context["type_itemtype"] ?? null),             // line 179
($context["type_fk"] ?? null), (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 180
($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[($context["type_fk"] ?? null)] ?? null) : null), _n("Type", "Types", 1),             // line 182
($context["field_options"] ?? null)], 177, $context, $this->getSourceContext());
            // line 183
            echo "
                     ";
        }
        // line 185
        echo "
                     ";
        // line 186
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "usertitles_id"], "method", false, false, false, 186)) {
            // line 187
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["UserTitle", "usertitles_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 190
($context["item"] ?? null), "fields", [], "any", false, false, false, 190)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["usertitles_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("UserTitle"), twig_array_merge(            // line 192
($context["field_options"] ?? null), ["entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 193
($context["item"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)])], 187, $context, $this->getSourceContext());
            // line 195
            echo "
                     ";
        }
        // line 197
        echo "
                     ";
        // line 198
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "registration_number"], "method", false, false, false, 198)) {
            // line 199
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["registration_number",             // line 201
($context["item"] ?? null), (((is_string($__internal_compile_19 =             // line 202
($context["item_type"] ?? null)) && is_string($__internal_compile_20 = "User") && ('' === $__internal_compile_20 || 0 === strpos($__internal_compile_19, $__internal_compile_20)))) ? (_x("user", "Administrative number")) : (_x("infocom", "Administrative number"))),             // line 203
($context["withtemplate"] ?? null),             // line 204
($context["field_options"] ?? null)], 199, $context, $this->getSourceContext());
            // line 205
            echo "
                     ";
        }
        // line 207
        echo "
                     ";
        // line 208
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone"], "method", false, false, false, 208)) {
            // line 209
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone",             // line 211
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 213
($context["withtemplate"] ?? null),             // line 214
($context["field_options"] ?? null)], 209, $context, $this->getSourceContext());
            // line 215
            echo "
                     ";
        }
        // line 217
        echo "
                     ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phone2"], "method", false, false, false, 218)) {
            // line 219
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phone2",             // line 221
($context["item"] ?? null), __("Phone 2"),             // line 223
($context["withtemplate"] ?? null),             // line 224
($context["field_options"] ?? null)], 219, $context, $this->getSourceContext());
            // line 225
            echo "
                     ";
        }
        // line 227
        echo "
                     ";
        // line 228
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "phonenumber"], "method", false, false, false, 228)) {
            // line 229
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["phonenumber",             // line 231
($context["item"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Phone"),             // line 233
($context["withtemplate"] ?? null),             // line 234
($context["field_options"] ?? null)], 229, $context, $this->getSourceContext());
            // line 235
            echo "
                     ";
        }
        // line 237
        echo "
                     ";
        // line 238
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "mobile"], "method", false, false, false, 238)) {
            // line 239
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["mobile",             // line 241
($context["item"] ?? null), __("Mobile phone"),             // line 243
($context["withtemplate"] ?? null),             // line 244
($context["field_options"] ?? null)], 239, $context, $this->getSourceContext());
            // line 245
            echo "
                     ";
        }
        // line 247
        echo "
                     ";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "fax"], "method", false, false, false, 248)) {
            // line 249
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["fax",             // line 251
($context["item"] ?? null), __("Fax"),             // line 253
($context["withtemplate"] ?? null),             // line 254
($context["field_options"] ?? null)], 249, $context, $this->getSourceContext());
            // line 255
            echo "
                     ";
        }
        // line 257
        echo "
                     ";
        // line 258
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "website"], "method", false, false, false, 258)) {
            // line 259
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["website",             // line 261
($context["item"] ?? null), __("Website"),             // line 263
($context["withtemplate"] ?? null),             // line 264
($context["field_options"] ?? null)], 259, $context, $this->getSourceContext());
            // line 265
            echo "
                     ";
        }
        // line 267
        echo "
                     ";
        // line 268
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "email"], "method", false, false, false, 268)) {
            // line 269
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["email",             // line 271
($context["item"] ?? null), _n("Email", "Emails", 1),             // line 273
($context["withtemplate"] ?? null),             // line 274
($context["field_options"] ?? null)], 269, $context, $this->getSourceContext());
            // line 275
            echo "
                     ";
        }
        // line 277
        echo "
                     ";
        // line 278
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "address"], "method", false, false, false, 278)) {
            // line 279
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["address", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 279)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["address"] ?? null) : null), __("Address")], 279, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 281
        echo "
                     ";
        // line 282
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postalcode"], "method", false, false, false, 282)) {
            // line 283
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postalcode",             // line 285
($context["item"] ?? null), __("Postal code"),             // line 287
($context["withtemplate"] ?? null),             // line 288
($context["field_options"] ?? null)], 283, $context, $this->getSourceContext());
            // line 289
            echo "
                     ";
        }
        // line 291
        echo "
                     ";
        // line 292
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "town"], "method", false, false, false, 292)) {
            // line 293
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["town",             // line 295
($context["item"] ?? null), __("City"),             // line 297
($context["withtemplate"] ?? null),             // line 298
($context["field_options"] ?? null)], 293, $context, $this->getSourceContext());
            // line 299
            echo "
                     ";
        }
        // line 301
        echo "
                     ";
        // line 303
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "postcode"], "method", false, false, false, 303)) {
            // line 304
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["postcode",             // line 306
($context["item"] ?? null), __("Postal code"),             // line 308
($context["withtemplate"] ?? null),             // line 309
($context["field_options"] ?? null)], 304, $context, $this->getSourceContext());
            // line 310
            echo "
                     ";
        }
        // line 312
        echo "
                     ";
        // line 313
        if (((($context["item_type"] ?? null) == "Supplier") || (($context["item_type"] ?? null) == "Contact"))) {
            // line 314
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["state",             // line 316
($context["item"] ?? null), _x("location", "State"),             // line 318
($context["withtemplate"] ?? null),             // line 319
($context["field_options"] ?? null)], 314, $context, $this->getSourceContext());
            // line 320
            echo "
                     ";
        }
        // line 322
        echo "
                     ";
        // line 323
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "country"], "method", false, false, false, 323)) {
            // line 324
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["country",             // line 326
($context["item"] ?? null), __("Country"),             // line 328
($context["withtemplate"] ?? null),             // line 329
($context["field_options"] ?? null)], 324, $context, $this->getSourceContext());
            // line 330
            echo "
                     ";
        }
        // line 332
        echo "
                     ";
        // line 333
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "date_expiration"], "method", false, false, false, 333)) {
            // line 334
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Certificate")) {
                // line 335
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 335)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["date_expiration"] ?? null) : null), __("Expiration date"), twig_array_merge(["helper" => __("Empty for infinite"), "checkIsExpired" => false, "expiration_class" => twig_get_attribute($this->env, $this->source,                 // line 338
($context["params"] ?? null), "expiration_class", [], "any", false, false, false, 338)],                 // line 339
($context["field_options"] ?? null))], 335, $context, $this->getSourceContext());
                echo "
                        ";
            } elseif ((            // line 340
($context["item_type"] ?? null) == "ComputerAntivirus")) {
                // line 341
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_dateField", ["date_expiration", (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 341)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["date_expiration"] ?? null) : null), __("Expiration date"), twig_array_merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                 // line 344
($context["field_options"] ?? null))], 341, $context, $this->getSourceContext());
                echo "
                        ";
            } else {
                // line 346
                echo "                           ";
                echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date_expiration", (($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 346)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["date_expiration"] ?? null) : null), __("Expiration date"), twig_array_merge(["helper" => __("Empty for infinite"), "checkIsExpired" => true],                 // line 349
($context["field_options"] ?? null))], 346, $context, $this->getSourceContext());
                echo "
                        ";
            }
            // line 351
            echo "                     ";
        }
        // line 352
        echo "
                     ";
        // line 353
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ref"], "method", false, false, false, 353)) {
            // line 354
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["ref", (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 356
($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["ref"] ?? null) : null), __("Reference"),             // line 358
($context["field_options"] ?? null)], 354, $context, $this->getSourceContext());
            // line 359
            echo "
                     ";
        }
        // line 361
        echo "
                     ";
        // line 362
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id_tech"], "method", false, false, false, 362)) {
            // line 363
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 366
($context["item"] ?? null), "fields", [], "any", false, false, false, 366)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["users_id_tech"] ?? null) : null), __("Technician in charge of the hardware"), twig_array_merge(            // line 368
($context["field_options"] ?? null), ["entity" => (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 369
($context["item"] ?? null), "fields", [], "any", false, false, false, 369)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["entities_id"] ?? null) : null), "right" => "own_ticket"])], 363, $context, $this->getSourceContext());
            // line 372
            echo "
                     ";
        }
        // line 374
        echo "
                     ";
        // line 375
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "manufacturers_id"], "method", false, false, false, 375)) {
            // line 376
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Manufacturer", "manufacturers_id", (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 379
($context["item"] ?? null), "fields", [], "any", false, false, false, 379)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["manufacturers_id"] ?? null) : null), (((is_string($__internal_compile_29 =             // line 380
($context["item_type"] ?? null)) && is_string($__internal_compile_30 = "Software") && ('' === $__internal_compile_30 || 0 === strpos($__internal_compile_29, $__internal_compile_30)))) ? (__("Publisher")) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Manufacturer"))),             // line 381
($context["field_options"] ?? null)], 376, $context, $this->getSourceContext());
            // line 382
            echo "
                     ";
        }
        // line 384
        echo "
                     ";
        // line 385
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "groups_id_tech"], "method", false, false, false, 385)) {
            // line 386
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,             // line 389
($context["item"] ?? null), "fields", [], "any", false, false, false, 389)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["groups_id_tech"] ?? null) : null), __("Group in charge of the hardware"), twig_array_merge(            // line 391
($context["field_options"] ?? null), ["entity" => (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,             // line 392
($context["item"] ?? null), "fields", [], "any", false, false, false, 392)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["entities_id"] ?? null) : null), "condition" => ["is_assign" => 1]])], 386, $context, $this->getSourceContext());
            // line 395
            echo "
                     ";
        }
        // line 397
        echo "
                     ";
        // line 398
        $context["model_itemtype"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelClass", [], "method", false, false, false, 398);
        // line 399
        echo "                     ";
        $context["model_fk"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getModelForeignKeyField", [], "method", false, false, false, 399);
        // line 400
        echo "                     ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => ($context["model_fk"] ?? null)], "method", false, false, false, 400)) {
            // line 401
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [            // line 402
($context["model_itemtype"] ?? null),             // line 403
($context["model_fk"] ?? null), (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 404
($context["item"] ?? null), "fields", [], "any", false, false, false, 404)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[($context["model_fk"] ?? null)] ?? null) : null), _n("Model", "Models", 1),             // line 406
($context["field_options"] ?? null)], 401, $context, $this->getSourceContext());
            // line 407
            echo "
                     ";
        }
        // line 409
        echo "
                     ";
        // line 410
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "contact_num"], "method", false, false, false, 410))) {
            // line 411
            echo "                        ";
            // line 412
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["contact_num", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 414
($context["item"] ?? null), "fields", [], "any", false, false, false, 414)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["contact_num"] ?? null) : null), __("Alternate username number"),             // line 416
($context["field_options"] ?? null)], 412, $context, $this->getSourceContext());
            // line 417
            echo "
                     ";
        }
        // line 419
        echo "
                     ";
        // line 420
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "serial"], "method", false, false, false, 420)) {
            // line 421
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["serial", (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 423
($context["item"] ?? null), "fields", [], "any", false, false, false, 423)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["serial"] ?? null) : null), __("Serial number"),             // line 425
($context["field_options"] ?? null)], 421, $context, $this->getSourceContext());
            // line 426
            echo "
                     ";
        }
        // line 428
        echo "
                     ";
        // line 429
        if (((($context["item_type"] ?? null) != "SoftwareLicense") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "contact"], "method", false, false, false, 429))) {
            // line 430
            echo "                        ";
            // line 431
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["contact", (($__internal_compile_36 = twig_get_attribute($this->env, $this->source,             // line 433
($context["item"] ?? null), "fields", [], "any", false, false, false, 433)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["contact"] ?? null) : null), __("Alternate username"),             // line 435
($context["field_options"] ?? null)], 431, $context, $this->getSourceContext());
            // line 436
            echo "
                     ";
        }
        // line 438
        echo "
                     ";
        // line 439
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "otherserial"], "method", false, false, false, 439)) {
            // line 440
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["otherserial",             // line 442
($context["item"] ?? null), __("Inventory number"),             // line 444
($context["withtemplate"] ?? null),             // line 445
($context["field_options"] ?? null)], 440, $context, $this->getSourceContext());
            // line 446
            echo "
                     ";
        }
        // line 448
        echo "
                     ";
        // line 449
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "sysdescr"], "method", false, false, false, 449)) {
            // line 450
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["sysdescr", (($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 450)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["sysdescr"] ?? null) : null), __("Sysdescr")], 450, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 452
        echo "
                     ";
        // line 453
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "snmpcredentials_id"], "method", false, false, false, 453)) {
            // line 454
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SNMPCredential", "snmpcredentials_id", (($__internal_compile_38 = twig_get_attribute($this->env, $this->source,             // line 457
($context["item"] ?? null), "fields", [], "any", false, false, false, 457)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["snmpcredentials_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SNMPCredential"),             // line 459
($context["field_options"] ?? null)], 454, $context, $this->getSourceContext());
            // line 460
            echo "
                     ";
        }
        // line 462
        echo "
                     ";
        // line 463
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "users_id"], "method", false, false, false, 463)) {
            // line 464
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id", (($__internal_compile_39 = twig_get_attribute($this->env, $this->source,             // line 467
($context["item"] ?? null), "fields", [], "any", false, false, false, 467)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), twig_array_merge(            // line 469
($context["field_options"] ?? null), ["entity" => (($__internal_compile_40 = twig_get_attribute($this->env, $this->source,             // line 470
($context["item"] ?? null), "fields", [], "any", false, false, false, 470)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["entities_id"] ?? null) : null), "right" => "all"])], 464, $context, $this->getSourceContext());
            // line 473
            echo "
                     ";
        }
        // line 475
        echo "
                     ";
        // line 476
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_global"], "method", false, false, false, 476)) {
            // line 477
            echo "                        ";
            $context["management_restrict"] = 0;
            // line 478
            echo "                        ";
            if ((($context["item_type"] ?? null) == "Monitor")) {
                // line 479
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("monitors_management_restrict");
                // line 480
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Peripheral")) {
                // line 481
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("peripherals_management_restrict");
                // line 482
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Phone")) {
                // line 483
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("phones_management_restrict");
                // line 484
                echo "                        ";
            } elseif ((($context["item_type"] ?? null) == "Printer")) {
                // line 485
                echo "                           ";
                $context["management_restrict"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("printers_management_restrict");
                // line 486
                echo "                        ";
            } else {
                // line 487
                echo "                           ";
                $context["management_restrict"] = 0;
                // line 488
                echo "                        ";
            }
            // line 489
            echo "                        ";
            ob_start(function () { return ''; });
            // line 490
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showGlobalSwitch", [0 => (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 490)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["id"] ?? null) : null), 1 => ["withtemplate" =>             // line 491
($context["withtemplate"] ?? null), "value" => (($__internal_compile_42 = twig_get_attribute($this->env, $this->source,             // line 492
($context["item"] ?? null), "fields", [], "any", false, false, false, 492)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["is_global"] ?? null) : null), "management_restrict" =>             // line 493
($context["management_restrict"] ?? null), "target" =>             // line 494
($context["target"] ?? null), "width" => "100%"]]);
            // line 497
            echo "                        ";
            $context["dd_globalswitch"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 498
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["is_global",             // line 500
($context["dd_globalswitch"] ?? null), __("Management type")], 498, $context, $this->getSourceContext());
            // line 502
            echo "
                     ";
        }
        // line 504
        echo "
                     ";
        // line 505
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "size"], "method", false, false, false, 505)) {
            // line 506
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["size", (($__internal_compile_43 = twig_get_attribute($this->env, $this->source,             // line 508
($context["item"] ?? null), "fields", [], "any", false, false, false, 508)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["size"] ?? null) : null), __("Size"), twig_array_merge(            // line 510
($context["field_options"] ?? null), ["min" => 0, "step" => 0.01])], 506, $context, $this->getSourceContext());
            // line 514
            echo "
                     ";
        }
        // line 516
        echo "
                     ";
        // line 517
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "networks_id"], "method", false, false, false, 517)) {
            // line 518
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Network", "networks_id", (($__internal_compile_44 = twig_get_attribute($this->env, $this->source,             // line 521
($context["item"] ?? null), "fields", [], "any", false, false, false, 521)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["networks_id"] ?? null) : null), _n("Network", "Networks", 1),             // line 523
($context["field_options"] ?? null)], 518, $context, $this->getSourceContext());
            // line 524
            echo "
                     ";
        }
        // line 526
        echo "
                     ";
        // line 527
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "groups_id"], "method", false, false, false, 527)) {
            // line 528
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id", (($__internal_compile_45 = twig_get_attribute($this->env, $this->source,             // line 531
($context["item"] ?? null), "fields", [], "any", false, false, false, 531)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), twig_array_merge(            // line 533
($context["field_options"] ?? null), ["entity" => (($__internal_compile_46 = twig_get_attribute($this->env, $this->source,             // line 534
($context["item"] ?? null), "fields", [], "any", false, false, false, 534)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["entities_id"] ?? null) : null), "condition" => ["is_itemgroup" => 1]])], 528, $context, $this->getSourceContext());
            // line 537
            echo "
                     ";
        }
        // line 539
        echo "
                     ";
        // line 540
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "uuid"], "method", false, false, false, 540)) {
            // line 541
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["uuid", (($__internal_compile_47 = twig_get_attribute($this->env, $this->source,             // line 543
($context["item"] ?? null), "fields", [], "any", false, false, false, 543)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["uuid"] ?? null) : null), __("UUID"),             // line 545
($context["field_options"] ?? null)], 541, $context, $this->getSourceContext());
            // line 546
            echo "
                     ";
        }
        // line 548
        echo "
                     ";
        // line 549
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "version"], "method", false, false, false, 549)) {
            // line 550
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_autoNameField", ["version",             // line 552
($context["item"] ?? null), _n("Version", "Versions", 1),             // line 554
($context["withtemplate"] ?? null),             // line 555
($context["field_options"] ?? null)], 550, $context, $this->getSourceContext());
            // line 556
            echo "
                     ";
        }
        // line 558
        echo "
                     ";
        // line 559
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "comment"], "method", false, false, false, 559)) {
            // line 560
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", (($__internal_compile_48 = twig_get_attribute($this->env, $this->source,             // line 562
($context["item"] ?? null), "fields", [], "any", false, false, false, 562)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 564
($context["field_options"] ?? null)], 560, $context, $this->getSourceContext());
            // line 565
            echo "
                     ";
        }
        // line 567
        echo "
                     ";
        // line 568
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "ram"], "method", false, false, false, 568)) {
            // line 569
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_numberField", ["ram", (($__internal_compile_49 = twig_get_attribute($this->env, $this->source,             // line 571
($context["item"] ?? null), "fields", [], "any", false, false, false, 571)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["ram"] ?? null) : null), twig_sprintf(__("%1\$s (%2\$s)"), _n("Memory", "Memories", 1), __("Mio")),             // line 573
($context["field_options"] ?? null)], 569, $context, $this->getSourceContext());
            // line 574
            echo "
                     ";
        }
        // line 576
        echo "
                     ";
        // line 577
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "alarm_threshold"], "method", false, false, false, 577)) {
            // line 578
            echo "                        ";
            ob_start(function () { return ''; });
            // line 579
            echo "                           ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => "alarm_threshold", 1 => twig_array_merge(["value" => (($__internal_compile_50 = twig_get_attribute($this->env, $this->source,             // line 580
($context["item"] ?? null), "fields", [], "any", false, false, false, 580)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50["alarm_threshold"] ?? null) : null), "rand" =>             // line 581
($context["rand"] ?? null), "width" => "100%", "min" => 0, "max" => 100, "step" => 1, "toadd" => ["-1" => __("Never")]],             // line 587
($context["params"] ?? null))]);
            // line 588
            echo "                        ";
            $context["dd_alarm_treshold"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 589
            echo "                        ";
            ob_start(function () { return ''; });
            // line 590
            echo "                           <span class=\"text-muted\">
                              ";
            // line 591
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", [0 => ($context["item_type"] ?? null), 1 => (($__internal_compile_51 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 591)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51["id"] ?? null) : null)]);
            // line 592
            echo "                           </span>
                        ";
            $context["last_alert_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 594
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["alarm_threshold",             // line 596
($context["dd_alarm_treshold"] ?? null), __("Alert threshold"), twig_array_merge(            // line 598
($context["field_options"] ?? null), ["add_field_html" =>             // line 599
($context["last_alert_html"] ?? null)])], 594, $context, $this->getSourceContext());
            // line 601
            echo "
                     ";
        }
        // line 603
        echo "
                     ";
        // line 604
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "brand"], "method", false, false, false, 604)) {
            // line 605
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["brand", (($__internal_compile_52 = twig_get_attribute($this->env, $this->source,             // line 607
($context["item"] ?? null), "fields", [], "any", false, false, false, 607)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52["brand"] ?? null) : null), __("Brand"),             // line 609
($context["field_options"] ?? null)], 605, $context, $this->getSourceContext());
            // line 610
            echo "
                     ";
        }
        // line 612
        echo "
                     ";
        // line 613
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "begin_date"], "method", false, false, false, 613)) {
            // line 614
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dateField", ["begin_date", (($__internal_compile_53 = twig_get_attribute($this->env, $this->source,             // line 616
($context["item"] ?? null), "fields", [], "any", false, false, false, 616)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53["begin_date"] ?? null) : null), __("Start date"),             // line 618
($context["field_options"] ?? null)], 614, $context, $this->getSourceContext());
            // line 619
            echo "
                     ";
        }
        // line 621
        echo "
                     ";
        // line 622
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "autoupdatesystems_id"], "method", false, false, false, 622)) {
            // line 623
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["AutoUpdateSystem", "autoupdatesystems_id", (($__internal_compile_54 = twig_get_attribute($this->env, $this->source,             // line 626
($context["item"] ?? null), "fields", [], "any", false, false, false, 626)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54["autoupdatesystems_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("AutoUpdateSystem"),             // line 628
($context["field_options"] ?? null)], 623, $context, $this->getSourceContext());
            // line 629
            echo "
                     ";
        }
        // line 631
        echo "
                     ";
        // line 632
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "pictures"], "method", false, false, false, 632)) {
            // line 633
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_fileField", ["pictures", null, _n("Picture", "Pictures", Session::getPluralNumber()), ["onlyimages" => true, "multiple" => true]], 633, $context, $this->getSourceContext());
            // line 636
            echo "
                     ";
        }
        // line 638
        echo "
                     ";
        // line 639
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_active"], "method", false, false, false, 639)) {
            // line 640
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", (($__internal_compile_55 = twig_get_attribute($this->env, $this->source,             // line 642
($context["item"] ?? null), "fields", [], "any", false, false, false, 642)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55["is_active"] ?? null) : null), __("Active"),             // line 644
($context["field_options"] ?? null)], 640, $context, $this->getSourceContext());
            // line 645
            echo "
                     ";
        }
        // line 647
        echo "
                     ";
        // line 649
        echo "                     ";
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "last_boot"], "method", false, false, false, 649) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_dynamic"], "method", false, false, false, 649)) && (($__internal_compile_56 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 649)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56["is_dynamic"] ?? null) : null))) {
            // line 650
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_htmlField", ["last_boot", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_57 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 650)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57["last_boot"] ?? null) : null), true), __("Last boot date")], 650, $context, $this->getSourceContext());
            echo "
                     ";
        }
        // line 652
        echo "
                     ";
        // line 653
        $this->displayBlock('more_fields', $context, $blocks);
        // line 655
        echo "                  ";
    }

    // line 653
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 654
        echo "                     ";
    }

    public function getTemplateName()
    {
        return "generic_show_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1121 => 654,  1117 => 653,  1113 => 655,  1111 => 653,  1108 => 652,  1102 => 650,  1099 => 649,  1096 => 647,  1092 => 645,  1090 => 644,  1089 => 642,  1087 => 640,  1085 => 639,  1082 => 638,  1078 => 636,  1075 => 633,  1073 => 632,  1070 => 631,  1066 => 629,  1064 => 628,  1063 => 626,  1061 => 623,  1059 => 622,  1056 => 621,  1052 => 619,  1050 => 618,  1049 => 616,  1047 => 614,  1045 => 613,  1042 => 612,  1038 => 610,  1036 => 609,  1035 => 607,  1033 => 605,  1031 => 604,  1028 => 603,  1024 => 601,  1022 => 599,  1021 => 598,  1020 => 596,  1018 => 594,  1014 => 592,  1012 => 591,  1009 => 590,  1006 => 589,  1003 => 588,  1001 => 587,  1000 => 581,  999 => 580,  997 => 579,  994 => 578,  992 => 577,  989 => 576,  985 => 574,  983 => 573,  982 => 571,  980 => 569,  978 => 568,  975 => 567,  971 => 565,  969 => 564,  968 => 562,  966 => 560,  964 => 559,  961 => 558,  957 => 556,  955 => 555,  954 => 554,  953 => 552,  951 => 550,  949 => 549,  946 => 548,  942 => 546,  940 => 545,  939 => 543,  937 => 541,  935 => 540,  932 => 539,  928 => 537,  926 => 534,  925 => 533,  924 => 531,  922 => 528,  920 => 527,  917 => 526,  913 => 524,  911 => 523,  910 => 521,  908 => 518,  906 => 517,  903 => 516,  899 => 514,  897 => 510,  896 => 508,  894 => 506,  892 => 505,  889 => 504,  885 => 502,  883 => 500,  881 => 498,  878 => 497,  876 => 494,  875 => 493,  874 => 492,  873 => 491,  871 => 490,  868 => 489,  865 => 488,  862 => 487,  859 => 486,  856 => 485,  853 => 484,  850 => 483,  847 => 482,  844 => 481,  841 => 480,  838 => 479,  835 => 478,  832 => 477,  830 => 476,  827 => 475,  823 => 473,  821 => 470,  820 => 469,  819 => 467,  817 => 464,  815 => 463,  812 => 462,  808 => 460,  806 => 459,  805 => 457,  803 => 454,  801 => 453,  798 => 452,  792 => 450,  790 => 449,  787 => 448,  783 => 446,  781 => 445,  780 => 444,  779 => 442,  777 => 440,  775 => 439,  772 => 438,  768 => 436,  766 => 435,  765 => 433,  763 => 431,  761 => 430,  759 => 429,  756 => 428,  752 => 426,  750 => 425,  749 => 423,  747 => 421,  745 => 420,  742 => 419,  738 => 417,  736 => 416,  735 => 414,  733 => 412,  731 => 411,  729 => 410,  726 => 409,  722 => 407,  720 => 406,  719 => 404,  718 => 403,  717 => 402,  715 => 401,  712 => 400,  709 => 399,  707 => 398,  704 => 397,  700 => 395,  698 => 392,  697 => 391,  696 => 389,  694 => 386,  692 => 385,  689 => 384,  685 => 382,  683 => 381,  682 => 380,  681 => 379,  679 => 376,  677 => 375,  674 => 374,  670 => 372,  668 => 369,  667 => 368,  666 => 366,  664 => 363,  662 => 362,  659 => 361,  655 => 359,  653 => 358,  652 => 356,  650 => 354,  648 => 353,  645 => 352,  642 => 351,  637 => 349,  635 => 346,  630 => 344,  628 => 341,  626 => 340,  622 => 339,  621 => 338,  619 => 335,  616 => 334,  614 => 333,  611 => 332,  607 => 330,  605 => 329,  604 => 328,  603 => 326,  601 => 324,  599 => 323,  596 => 322,  592 => 320,  590 => 319,  589 => 318,  588 => 316,  586 => 314,  584 => 313,  581 => 312,  577 => 310,  575 => 309,  574 => 308,  573 => 306,  571 => 304,  568 => 303,  565 => 301,  561 => 299,  559 => 298,  558 => 297,  557 => 295,  555 => 293,  553 => 292,  550 => 291,  546 => 289,  544 => 288,  543 => 287,  542 => 285,  540 => 283,  538 => 282,  535 => 281,  529 => 279,  527 => 278,  524 => 277,  520 => 275,  518 => 274,  517 => 273,  516 => 271,  514 => 269,  512 => 268,  509 => 267,  505 => 265,  503 => 264,  502 => 263,  501 => 261,  499 => 259,  497 => 258,  494 => 257,  490 => 255,  488 => 254,  487 => 253,  486 => 251,  484 => 249,  482 => 248,  479 => 247,  475 => 245,  473 => 244,  472 => 243,  471 => 241,  469 => 239,  467 => 238,  464 => 237,  460 => 235,  458 => 234,  457 => 233,  456 => 231,  454 => 229,  452 => 228,  449 => 227,  445 => 225,  443 => 224,  442 => 223,  441 => 221,  439 => 219,  437 => 218,  434 => 217,  430 => 215,  428 => 214,  427 => 213,  426 => 211,  424 => 209,  422 => 208,  419 => 207,  415 => 205,  413 => 204,  412 => 203,  411 => 202,  410 => 201,  408 => 199,  406 => 198,  403 => 197,  399 => 195,  397 => 193,  396 => 192,  395 => 190,  393 => 187,  391 => 186,  388 => 185,  384 => 183,  382 => 182,  381 => 180,  380 => 179,  379 => 178,  377 => 177,  374 => 176,  371 => 175,  369 => 174,  366 => 173,  360 => 171,  358 => 170,  355 => 169,  351 => 167,  349 => 166,  348 => 161,  346 => 159,  344 => 158,  341 => 157,  337 => 155,  335 => 153,  334 => 152,  333 => 150,  331 => 147,  329 => 146,  326 => 145,  323 => 144,  320 => 143,  316 => 141,  314 => 139,  313 => 137,  310 => 136,  306 => 134,  297 => 132,  293 => 131,  290 => 130,  287 => 129,  284 => 128,  282 => 127,  279 => 126,  275 => 124,  273 => 123,  272 => 121,  270 => 119,  268 => 118,  266 => 117,  263 => 116,  259 => 114,  257 => 112,  256 => 111,  255 => 109,  254 => 108,  253 => 107,  251 => 106,  248 => 105,  246 => 104,  243 => 103,  239 => 101,  237 => 99,  236 => 98,  235 => 97,  234 => 95,  232 => 92,  229 => 91,  227 => 90,  224 => 89,  221 => 88,  218 => 87,  214 => 85,  211 => 83,  208 => 82,  206 => 81,  203 => 80,  199 => 78,  197 => 77,  196 => 76,  195 => 74,  193 => 72,  191 => 71,  188 => 70,  184 => 68,  182 => 67,  181 => 66,  180 => 65,  179 => 64,  177 => 62,  174 => 61,  170 => 60,  165 => 682,  159 => 679,  156 => 678,  154 => 677,  151 => 676,  145 => 674,  143 => 673,  138 => 672,  132 => 670,  130 => 669,  127 => 668,  125 => 667,  118 => 663,  114 => 661,  112 => 660,  109 => 659,  107 => 658,  105 => 657,  103 => 656,  101 => 60,  94 => 56,  90 => 54,  88 => 52,  86 => 51,  83 => 50,  80 => 49,  77 => 48,  74 => 47,  71 => 46,  69 => 45,  64 => 43,  60 => 42,  57 => 41,  53 => 39,  51 => 38,  49 => 37,  47 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "generic_show_form.html.twig", "/var/www/html/glpi/templates/generic_show_form.html.twig");
    }
}
