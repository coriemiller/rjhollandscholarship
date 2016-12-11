<?php

/* forms/fields/display/display.html.twig */
class __TwigTemplate_ff0f8ea49d769219624e6c82f3f4b549a971abaaeca36c5f5e4e4fdf12c0a0e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/display/display.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
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
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-display-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
        ";
        // line 5
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "markdown", array())) {
            // line 6
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 7
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter(call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "content", array()))));
                echo "
            ";
            } else {
                // line 9
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "content", array())));
                echo "
            ";
            }
            // line 11
            echo "        ";
        } else {
            // line 12
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                // line 13
                echo "                ";
                echo call_user_func_array($this->env->getFilter('tu')->getCallable(), array($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "content", array())));
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "content", array()));
                echo "
            ";
            }
            // line 17
            echo "        ";
        }
        // line 18
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/display/display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  71 => 17,  65 => 15,  59 => 13,  56 => 12,  53 => 11,  47 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"forms/field.html.twig\" %}

{% block input %}
    <div class=\"form-display-wrapper {{ field.size }}\">
        {% if field.markdown %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ field.content|tu|markdown|raw }}
            {% else %}
                {{ field.content|t|markdown|raw }}
            {% endif %}
        {% else %}
            {% if grav.twig.twig.filters['tu'] is defined %}
                {{ field.content|tu|raw }}
            {% else %}
                {{ field.content|t|raw }}
            {% endif %}
        {% endif %}
    </div>
{% endblock %}
";
    }
}
