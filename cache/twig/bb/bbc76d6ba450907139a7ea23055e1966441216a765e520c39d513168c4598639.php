<?php

/* bootstrap/partials/_navbar_item_alignment.html.twig */
class __TwigTemplate_5420f17e90b0a7f77093be80d4ce4a427de07cfc7279d4eace4bfff1b1e73e18 extends Twig_Template
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
        $context["align"] = ((array_key_exists("alignment", $context)) ? (_twig_default_filter((isset($context["alignment"]) ? $context["alignment"] : null), "left")) : ("left"));
        // line 2
        echo "navbar-";
        echo (isset($context["align"]) ? $context["align"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_item_alignment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set align = alignment|default('left') %}
navbar-{{ align }}
";
    }
}
