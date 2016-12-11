<?php

/* home_single_page.html.twig */
class __TwigTemplate_58f7c9619c5a392ecfc92cbe198b289149714c27bec2eb083a4c095a32ed7594 extends Twig_Template
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
        $this->loadTemplate("home_single_page.html.twig", "home_single_page.html.twig", 1, "955633984")->display($context);
    }

    public function getTemplateName()
    {
        return "home_single_page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}
    {% block header %}
    {% endblock %}

    {% block content %}
    {% for module in page.collection() %}
        {{ module.content }}
    {% endfor %}
    {% endblock %}
{% endembed %}
";
    }
}


/* home_single_page.html.twig */
class __TwigTemplate_58f7c9619c5a392ecfc92cbe198b289149714c27bec2eb083a4c095a32ed7594_955633984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "home_single_page.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 7
            echo "        ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "home_single_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 9,  89 => 7,  84 => 6,  81 => 5,  77 => 3,  74 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'partials/base.html.twig' %}
    {% block header %}
    {% endblock %}

    {% block content %}
    {% for module in page.collection() %}
        {{ module.content }}
    {% endfor %}
    {% endblock %}
{% endembed %}
";
    }
}
