<?php

/* basic/icon.html.twig */
class __TwigTemplate_9289897b3ed9552340cd10bff9b3c448f6d867f61570a9011e86e1de23d098a5 extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes((isset($context["icon_attributes"]) ? $context["icon_attributes"] : null));
        // line 2
        if ((array_key_exists("icon", $context) && ((isset($context["icon"]) ? $context["icon"] : null) != ""))) {
            // line 3
            $context["type"] = ((array_key_exists("icon_type", $context)) ? (_twig_default_filter((isset($context["icon_type"]) ? $context["icon_type"] : null), "glyphicon")) : ("glyphicon"));
            // line 4
            if (((isset($context["type"]) ? $context["type"] : null) == "glyphicon")) {
                // line 5
                echo "<span class=\"glyphicon glyphicon-";
                echo (isset($context["icon"]) ? $context["icon"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 5)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></span>
";
            } elseif ((            // line 6
(isset($context["type"]) ? $context["type"] : null) == "fontawesome")) {
                // line 7
                echo "<i class=\"fa fa-";
                echo (isset($context["icon"]) ? $context["icon"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 7)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></i>
";
            } elseif ((            // line 8
(isset($context["type"]) ? $context["type"] : null) == "mdi")) {
                // line 9
                echo "<i class=\"mdi mdi-";
                echo (isset($context["icon"]) ? $context["icon"] : null);
                echo " ";
                echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 9)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></i>
";
            } else {
                // line 11
                echo "<p>";
                echo (("icon_type " . (isset($context["type"]) ? $context["type"] : null)) . " is not supported");
                echo "</p>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "basic/icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  49 => 9,  47 => 8,  38 => 7,  36 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set attributes = parse_attributes(icon_attributes) %}
{% if icon is defined and icon != \"\" %}
{% set type = icon_type|default('glyphicon') %}
{% if type == 'glyphicon' %}
<span class=\"glyphicon glyphicon-{{ icon }} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}></span>
{% elseif type == 'fontawesome' %}
<i class=\"fa fa-{{ icon }} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}></i>
{% elseif type == 'mdi' %}
<i class=\"mdi mdi-{{ icon }} {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}></i>
{% else %}
<p>{{ 'icon_type ' ~ type ~ ' is not supported'}}</p>
{% endif %}
{% endif %}
";
    }
}
