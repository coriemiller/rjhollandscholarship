<?php

/* modular/header.html.twig */
class __TwigTemplate_f712aeb45ad8c8ada645db275356922e273d8ef148048a6e5130d705d6037dff extends Twig_Template
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
        echo "<header id=\"header\">
    ";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["shortcode"]) ? $context["shortcode"] : null), "g-jumbotron", array(), "array"), "jumbotron1", array());
        echo "
    ";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["shortcode"]) ? $context["shortcode"] : null), "g-navbar", array(), "array"), "navbar2", array());
        echo "
</header>
";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"header\">
    {{ shortcode[\"g-jumbotron\"].jumbotron1 }}
    {{ shortcode[\"g-navbar\"].navbar2 }}
</header>
";
    }
}
