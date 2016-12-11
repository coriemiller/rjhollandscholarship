<?php

/* partials/_attributes.html.twig */
class __TwigTemplate_6c098b1f6a1d8d22e2a8d6de43d85e4732d2947cc8f708b4025605bf7aa877d1 extends Twig_Template
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
        $context["ignore"] = ((array_key_exists("ignore", $context)) ? (_twig_default_filter((isset($context["ignore"]) ? $context["ignore"] : null), array())) : (array()));
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            echo " ";
            if ((twig_in_filter($context["attribute"], (isset($context["ignore"]) ? $context["ignore"] : null)) == false)) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/_attributes.html.twig";
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
        return "{% set ignore = ignore|default([]) %}
{% for attribute, value in attributes %} {% if attribute in ignore == false %}{{ attribute }}=\"{{ value }}\"{% endif %}{% endfor %}";
    }
}
