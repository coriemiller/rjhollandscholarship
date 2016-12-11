<?php

/* basic/icon.html.twig */
class __TwigTemplate_2cf3fdea553decaba18732edbe2eb01ecd273c0c7439d2ec582b3b20df0f2a0a extends Twig_Template
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
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array"), "html", null, true);
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 5)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></span>
";
            } elseif ((            // line 6
(isset($context["type"]) ? $context["type"] : null) == "fontawesome")) {
                // line 7
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array"), "html", null, true);
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 7)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></i>
";
            } elseif ((            // line 8
(isset($context["type"]) ? $context["type"] : null) == "mdi")) {
                // line 9
                echo "<i class=\"mdi mdi-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array"), "html", null, true);
                echo "\" ";
                $this->loadTemplate("partials/_attributes.html.twig", "basic/icon.html.twig", 9)->display(array_merge($context, array("ignore" => array(0 => "class"))));
                echo "></i>
";
            } else {
                // line 11
                echo "<p>";
                echo twig_escape_filter($this->env, (("icon_type " . (isset($context["type"]) ? $context["type"] : null)) . " is not supported"), "html", null, true);
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
