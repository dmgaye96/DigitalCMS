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

/* modules/datatables/templates/views-view-datatables.html.twig */
class __TwigTemplate_d88bc72b60645cee258c8adeeeb9652f2ff58688515b134ba46f5e757a7e2a15 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $this->loadTemplate("views-view-table.html.twig", "modules/datatables/templates/views-view-datatables.html.twig", 35)->display($context);
    }

    public function getTemplateName()
    {
        return "modules/datatables/templates/views-view-datatables.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/datatables/templates/views-view-datatables.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DrupalTesteTailwindCSs/drupal-9.2.1/modules/datatables/templates/views-view-datatables.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 35);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
