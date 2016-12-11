<?php

/* basic/link.html.twig */
class __TwigTemplate_6a17b875bd6abd5a7c36f83edf3f0c1dc9cd823f5114be076751a48c80380332 extends Twig_Template
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
        $context["attributes"] = $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes((isset($context["link_attributes"]) ? $context["link_attributes"] : null));
        // line 2
        $context["icon_stacked"] = (((((array_key_exists("stacked", $context)) ? (_twig_default_filter((isset($context["stacked"]) ? $context["stacked"] : null), false)) : (false)) == true)) ? ("_stacked") : (""));
        // line 3
        echo "<a href=\"";
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "\"";
        $this->loadTemplate("partials/_attributes.html.twig", "basic/link.html.twig", 3)->display($context);
        echo ">";
        $this->loadTemplate((("basic/icon" . (isset($context["icon_stacked"]) ? $context["icon_stacked"] : null)) . ".html.twig"), "basic/link.html.twig", 3)->display($context);
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "basic/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set attributes = parse_attributes(link_attributes) %}
{% set icon_stacked = stacked|default(false) == true ? '_stacked' : '' %}
<a href=\"{{ url }}\"{% include 'partials/_attributes.html.twig' %}>{% include 'basic/icon' ~ icon_stacked ~ '.html.twig'%}{{ menu }}</a>
";
    }
}
