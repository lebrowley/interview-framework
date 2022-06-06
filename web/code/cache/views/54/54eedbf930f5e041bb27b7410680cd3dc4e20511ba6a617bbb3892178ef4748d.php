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

/* app/add/form.twig */
class __TwigTemplate_3be330857a7f476a29bbc6f21ad45b32a14c40dcee701c298226fc414bb603b3 extends Template
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
        echo "<div class=\"row\">
\t<div class=\"col\">
\t\t<form id=\"add-form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"number-one\">Number One</label>
\t\t\t\t<input type=\"number\" id=\"number-one\" class=\"form-control\" name=\"num1\" placeholder=\"Number one\">
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"number-two\">Number Two</label>
\t\t\t\t<input type=\"number\" id=\"number-two\" class=\"form-control\" name=\"num2\" placeholder=\"Number two\">
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add</button>
\t\t</form>

\t\t<div id=\"add-view\"></div>

\t\t<script>
\t\t\tdocument.querySelector('#add-form').onsubmit = function(e) {
\t\t\t\te.preventDefault();

\t\t\t\tconst data = new FormData(e.target);

\t\t\t\t// Ensure every input has a value
\t\t\t\tfor (var [key, value] of data.entries()) { 
\t\t\t\t\tif (!value) {
\t\t\t\t\t\tdocument.querySelector('#add-form input[name=\"' + key + '\"]').focus();
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tsendPost('example/add', data, view => document.querySelector('#add-view').innerHTML = view);
\t\t\t};
\t\t</script>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "app/add/form.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<div class=\"col\">
\t\t<form id=\"add-form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"number-one\">Number One</label>
\t\t\t\t<input type=\"number\" id=\"number-one\" class=\"form-control\" name=\"num1\" placeholder=\"Number one\">
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"number-two\">Number Two</label>
\t\t\t\t<input type=\"number\" id=\"number-two\" class=\"form-control\" name=\"num2\" placeholder=\"Number two\">
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add</button>
\t\t</form>

\t\t<div id=\"add-view\"></div>

\t\t<script>
\t\t\tdocument.querySelector('#add-form').onsubmit = function(e) {
\t\t\t\te.preventDefault();

\t\t\t\tconst data = new FormData(e.target);

\t\t\t\t// Ensure every input has a value
\t\t\t\tfor (var [key, value] of data.entries()) { 
\t\t\t\t\tif (!value) {
\t\t\t\t\t\tdocument.querySelector('#add-form input[name=\"' + key + '\"]').focus();
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tsendPost('example/add', data, view => document.querySelector('#add-view').innerHTML = view);
\t\t\t};
\t\t</script>
\t</div>
</div>", "app/add/form.twig", "/code/views/app/add/form.twig");
    }
}
