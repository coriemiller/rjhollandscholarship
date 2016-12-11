<?php

/* bootstrap/pageheader.html.twig */
class __TwigTemplate_49cbe3db85f3a4b0c5d01568850c1724ea8f51d4d247318b325a4794c920cb57 extends Twig_Template
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
        echo "<div class=\"page-header ";
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/pageheader.html.twig", 1)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    <h1>";
        // line 2
        echo (isset($context["title"]) ? $context["title"] : null);
        echo " <small>";
        echo (isset($context["subtitle"]) ? $context["subtitle"] : null);
        echo "</small></h1>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/pageheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"page-header {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
    <h1>{{ title }} <small>{{ subtitle }}</small></h1>
</div>";
    }
}
