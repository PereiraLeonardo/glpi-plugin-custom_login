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

/* pages/admin/ldap.users.html.twig */
class __TwigTemplate_5dd27ccf13ab85bd3229d3b67c60622a extends Template
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
<div class=\"container\">
   <div class=\"row justify-content-evenly\">
      <div class=\"col-12 col-xxl-5\">
         <div class=\"card\">
            <div class=\"card-header\">
               <h3>";
        // line 39
        echo twig_escape_filter($this->env, __("Bulk import users from a LDAP directory"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"list-group list-group-flush\">
               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/ldap.import.php"), "html", null, true);
        echo "?mode=1&amp;action=show\">
                  <i class=\"fas fa-fw fa-users-cog me-1\"></i>
                  <span>";
        // line 44
        echo twig_escape_filter($this->env, __("Synchronizing already imported users"), "html", null, true);
        echo "</span>
               </a>

               <a class=\"list-group-item list-group-item-action\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/ldap.import.php"), "html", null, true);
        echo "?mode=0&amp;action=show\">
                  <i class=\"fas fa-fw fa-user-plus me-1\"></i>
                  <span>";
        // line 49
        echo twig_escape_filter($this->env, __("Import new users"), "html", null, true);
        echo "</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/ldap.users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 49,  62 => 47,  56 => 44,  51 => 42,  45 => 39,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/admin/ldap.users.html.twig", "/var/www/html/glpi/templates/pages/admin/ldap.users.html.twig");
    }
}
