<?php

/* basic/section.html.twig */
class __TwigTemplate_e746727d7dddb00371af9a057c6cc09184501f95edac55fed9bc02b0b3b56ca0 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null)) > 0)) {
            // line 3
            echo "<div ";
            $this->loadTemplate("partials/_attributes.html.twig", "basic/section.html.twig", 3)->display(array_merge($context, array("attributes" => (isset($context["attributes"]) ? $context["attributes"] : null))));
            echo ">
    ";
            // line 4
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
</div>
";
        } else {
            // line 7
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "basic/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set attributes = parse_attributes(attributes) %}
{% if attributes|length > 0 %}
<div {% include 'partials/_attributes.html.twig' with {'attributes': attributes } %}>
    {{ content }}
</div>
{% else %}
{{ content }}
{% endif %}
";
    }
}
