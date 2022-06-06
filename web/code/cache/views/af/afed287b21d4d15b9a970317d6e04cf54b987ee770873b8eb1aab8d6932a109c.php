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

/* framework/app/base-error.twig */
class __TwigTemplate_13b163ce8db0effb8b11a0f40c2b0dbdb6dd05603adbd7f1c4d24e39821c4bdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Example</title>
        <meta name=\"description\" content=\"Example\">
        <link href=\"/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />

        <!-- Styles -->
        <link rel=\"stylesheet\" href=\"/vendor/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/main.css?v=";
        // line 11
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "\">
    </head>

    <body id=\"body\">
        <main id=\"main\">
            ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "        </main>
    </body>
</html>";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "framework/app/base-error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  60 => 17,  58 => 16,  50 => 11,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Example</title>
        <meta name=\"description\" content=\"Example\">
        <link href=\"/favicon.ico\" rel=\"icon\" type=\"image/x-icon\" />

        <!-- Styles -->
        <link rel=\"stylesheet\" href=\"/vendor/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/main.css?v={{ version }}\">
    </head>

    <body id=\"body\">
        <main id=\"main\">
            {% block content %}{% endblock %}
        </main>
    </body>
</html>", "framework/app/base-error.twig", "/code/views/framework/app/base-error.twig");
    }
}
