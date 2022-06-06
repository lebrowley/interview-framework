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

/* framework/error/405.twig */
class __TwigTemplate_c767b424c93b9a5c93c9992a128a5987a738bcf48b1455db1287bff10978b473 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "framework/app/base-error.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("framework/app/base-error.twig", "framework/error/405.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"container main\">
\t\t<div class=\"text-center\">
\t\t\t<h1>Status Code: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t<h1>Message: ";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</h1>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "framework/error/405.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'framework/app/base-error.twig' %}

{% block content %}
\t<div class=\"container main\">
\t\t<div class=\"text-center\">
\t\t\t<h1>Status Code: {{ status }}</h1>
\t\t\t<h1>Message: {{ message }}</h1>
\t\t</div>
\t</div>
{% endblock %}", "framework/error/405.twig", "/code/views/framework/error/405.twig");
    }
}
