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

/* app/add/detail.twig */
class __TwigTemplate_15c492314b77c91d805995f58ef1e4f29d4ad13f3b33ce5f675edadcdecffaef extends Template
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
        // line 1
        echo "<p>Sum: <span class=\"bold\">";
        echo twig_escape_filter($this->env, ($context["sum"] ?? null), "html", null, true);
        echo " </span></p>";
    }

    public function getTemplateName()
    {
        return "app/add/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Sum: <span class=\"bold\">{{ sum }} </span></p>", "app/add/detail.twig", "/code/views/app/add/detail.twig");
    }
}
