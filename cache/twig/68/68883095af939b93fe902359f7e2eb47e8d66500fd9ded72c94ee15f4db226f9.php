<?php

/* forms/fields/date/date.html.twig */
class __TwigTemplate_0877a36117876c873285e970dfabf51750ad369af0e30453f929b92881f2970a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/date/date.html.twig", 1);
        $this->blocks = array(
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    type=\"date\"
    ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "min", array())) {
            echo "min=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "min", array());
            echo "\"";
        }
        // line 6
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "max", array())) {
            echo "max=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "max", array());
            echo "\"";
        }
        // line 7
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/date/date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"forms/field.html.twig\" %}

{% block input_attributes %}
    type=\"date\"
    {% if field.validate.min %}min=\"{{ field.validate.min }}\"{% endif %}
    {% if field.validate.max %}max=\"{{ field.validate.max }}\"{% endif %}
    {{ parent() }}
{% endblock %}
";
    }
}
