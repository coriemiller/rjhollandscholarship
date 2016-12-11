<?php

/* modules/where_we_are.html.twig */
class __TwigTemplate_829834ed20fcb4b236ed3eb4034fd9be64bf8802e633ba6556c47e20832b244b extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes((isset($context["attributes"]) ? $context["attributes"] : null));
        // line 2
        echo "<section>
    <div class=\"";
        // line 3
        if (((isset($context["fullwidth"]) ? $context["fullwidth"] : null) == false)) {
            echo "container ";
        }
        echo " ";
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "modules/where_we_are.html.twig", 3)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
        ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/where_we_are.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set attributes = parse_attributes(attributes) %}
<section>
    <div class=\"{% if fullwidth == false %}container {% endif %} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
        {{ content }}
    </div>
</section>
";
    }
}
