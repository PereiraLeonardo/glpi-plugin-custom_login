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

/* layout/parts/head.html.twig */
class __TwigTemplate_43f6d6db124b44f324e4a8d8ac213661 extends Template
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
<!DOCTYPE html>
<html lang=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\" ";
        if (($context["high_contrast"] ?? null)) {
            echo "data-high-contrast=\"1\"";
        }
        echo ">
<head>
   <title>";
        // line 37
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " - GLPI</title>

   <meta charset=\"utf-8\" />

   ";
        // line 42
        echo "   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

   ";
        // line 45
        echo "   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

   <meta property=\"glpi:csrf_token\" content=\"";
        // line 47
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(true), "html", null, true);
        echo "\" />

   ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["css_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["css_file"]) {
            // line 50
            echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->cssPath(twig_get_attribute($this->env, $this->source, $context["css_file"], "path", [], "any", false, false, false, 50), (((twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 50)))) ? (twig_get_attribute($this->env, $this->source, $context["css_file"], "options", [], "any", false, false, false, 50)) : ([]))), "html", null, true);
            echo "\" />
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
   ";
        // line 53
        echo $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->customCss();
        echo "

   <link rel=\"shortcut icon\" type=\"images/x-icon\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->assetPath("/pics/favicon.ico"), "html", null, true);
        echo "\" />

   ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js_files"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 58
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(twig_get_attribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 58), (((twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 58) &&  !(null === twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 58)))) ? (twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 58)) : ([]))), "html", null, true);
            echo "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
   ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["js_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["js_file"]) {
            // line 62
            echo "      <script type=\"module\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->jsPath(twig_get_attribute($this->env, $this->source, $context["js_file"], "path", [], "any", false, false, false, 62), (((twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", true, true, false, 62) &&  !(null === twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 62)))) ? (twig_get_attribute($this->env, $this->source, $context["js_file"], "options", [], "any", false, false, false, 62)) : ([]))), "html", null, true);
            echo "\"></script>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
   ";
        // line 65
        echo $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->localesJs();
        echo "
</head>
";
    }

    public function getTemplateName()
    {
        return "layout/parts/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 65,  125 => 64,  116 => 62,  112 => 61,  109 => 60,  100 => 58,  96 => 57,  91 => 55,  86 => 53,  83 => 52,  74 => 50,  70 => 49,  65 => 47,  61 => 45,  57 => 42,  50 => 37,  41 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2022 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

<!DOCTYPE html>
<html lang=\"{{ lang }}\" {% if high_contrast %}data-high-contrast=\"1\"{% endif %}>
<head>
   <title>{{ title }} - GLPI</title>

   <meta charset=\"utf-8\" />

   {# prevent IE to turn into compatible mode... #}
   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

   {# auto desktop / mobile viewport #}
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

   <meta property=\"glpi:csrf_token\" content=\"{{ csrf_token(true) }}\" />

   {% for css_file in css_files %}
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ css_path(css_file.path, css_file.options ?? []) }}\" />
   {% endfor %}

   {{ custom_css() }}

   <link rel=\"shortcut icon\" type=\"images/x-icon\" href=\"{{ asset_path('/pics/favicon.ico') }}\" />

   {% for js_file in js_files %}
      <script type=\"text/javascript\" src=\"{{ js_path(js_file.path, js_file.options ?? []) }}\"></script>
   {% endfor %}

   {% for js_file in js_modules %}
      <script type=\"module\" src=\"{{ js_path(js_file.path, js_file.options ?? []) }}\"></script>
   {% endfor %}

   {{ locales_js() }}
</head>
", "layout/parts/head.html.twig", "/var/www/html/glpi/templates/layout/parts/head.html.twig");
    }
}
