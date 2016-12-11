<?php

/* modules/portfolio.html.twig */
class __TwigTemplate_84ab7d6c25e3038b2570f9168389e049d543cae46b408eec0ac7af1ba4b4c613 extends Twig_Template
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
        $this->loadTemplate("modules/portfolio.html.twig", "modules/portfolio.html.twig", 1, "2239117")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/portfolio.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'modules/partials/base_module.html.twig' %}       
    {% block module_content %}
    {% for item in items %}
        {{ item }}
    {% endfor %}
    {% endblock %}
{% endembed %}";
    }
}


/* modules/portfolio.html.twig */
class __TwigTemplate_84ab7d6c25e3038b2570f9168389e049d543cae46b408eec0ac7af1ba4b4c613_2239117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/portfolio.html.twig", 1);
        $this->blocks = array(
            'module_content' => array($this, 'block_module_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "modules/partials/base_module.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_module_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        ";
            echo $context["item"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    ";
    }

    public function getTemplateName()
    {
        return "modules/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 6,  77 => 4,  72 => 3,  69 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'modules/partials/base_module.html.twig' %}       
    {% block module_content %}
    {% for item in items %}
        {{ item }}
    {% endfor %}
    {% endblock %}
{% endembed %}";
    }
}
