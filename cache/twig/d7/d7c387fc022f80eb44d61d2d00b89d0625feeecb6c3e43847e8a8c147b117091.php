<?php

/* bootstrap/partials/_navbar_dropdown.html.twig */
class __TwigTemplate_68f64512d6c96d0fd24ac71963a026e5b989f69cac53c3d6c848348d5cc624bf extends Twig_Template
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
        echo (isset($context["menu"]) ? $context["menu"] : null);
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
