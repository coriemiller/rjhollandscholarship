<?php

/* basic/button.html.twig */
class __TwigTemplate_b0e48c3caa8293566b70713a9135777972111315fc043f61be30025c6a193da8 extends Twig_Template
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
        $context["button_attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes((isset($context["button_attributes"]) ? $context["button_attributes"] : null));
        // line 2
        if ((null === (isset($context["button_url"]) ? $context["button_url"] : null))) {
            // line 3
            echo "<button type=\"button\" class=\"btn btn-";
            echo ((array_key_exists("button_type", $context)) ? (_twig_default_filter((isset($context["button_type"]) ? $context["button_type"] : null), "default")) : ("default"));
            echo " ";
            echo $this->getAttribute((isset($context["button_attributes"]) ? $context["button_attributes"] : null), "class", array());
            echo "\"";
            $this->loadTemplate("partials/_attributes.html.twig", "basic/button.html.twig", 3)->display(array_merge($context, array("attributes" => (isset($context["button_attributes"]) ? $context["button_attributes"] : null), "ignore" => array(0 => "class"))));
            echo ">";
            echo (isset($context["button_label"]) ? $context["button_label"] : null);
            echo "</button>
";
        } else {
            // line 5
            echo "    ";
            $context["link_attributes"] = ("class:btn btn-" . ((array_key_exists("button_type", $context)) ? (_twig_default_filter((isset($context["button_type"]) ? $context["button_type"] : null), "default")) : ("default")));
            // line 6
            echo "    ";
            $this->loadTemplate("basic/link.html.twig", "basic/button.html.twig", 6)->display(array_merge($context, array("url" => (isset($context["button_url"]) ? $context["button_url"] : null), "menu" => (isset($context["button_label"]) ? $context["button_label"] : null), "link_attributes" => (isset($context["link_attributes"]) ? $context["link_attributes"] : null))));
        }
    }

    public function getTemplateName()
    {
        return "basic/button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set button_attributes = parse_attributes(button_attributes) %}
{% if button_url is null %}
<button type=\"button\" class=\"btn btn-{{ button_type|default('default') }} {{ button_attributes.class }}\"{% include 'partials/_attributes.html.twig' with {'attributes': button_attributes, 'ignore': ['class']} %}>{{ button_label }}</button>
{% else %}
    {% set link_attributes = 'class:btn btn-' ~ button_type|default('default') %}
    {% include 'basic/link.html.twig' with{'url': button_url, 'menu': button_label, 'link_attributes': link_attributes } %}
{% endif %}
";
    }
}
