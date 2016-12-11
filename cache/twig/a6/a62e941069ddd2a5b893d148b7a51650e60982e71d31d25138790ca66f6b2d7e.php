<?php

/* bootstrap/partials/_navbar_dropdown.html.twig */
class __TwigTemplate_0c335b0b0e54436c2146c521e5b1178aa1d9849f06cc9ec576978e6b8439c167 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["menu"]) ? $context["menu"] : null), "html", null, true);
        echo " <span class=\"caret\"></span></a>
    ";
        // line 3
        $this->loadTemplate("bootstrap/partials/_dropdown_items.html.twig", "bootstrap/partials/_navbar_dropdown.html.twig", 3)->display($context);
        // line 4
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">{{ menu }} <span class=\"caret\"></span></a>
    {% include \"bootstrap/partials/_dropdown_items.html.twig\" %}
</li>
";
    }
}
