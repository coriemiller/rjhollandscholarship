<?php

/* basic/icon_stacked.html.twig */
class __TwigTemplate_816a66ed6e713e1b20067438fd7e21fd26d17c7a269933cc29b87804e65cea46 extends Twig_Template
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
        if (array_key_exists("icon", $context)) {
            // line 2
            echo "<span class=\"fa-stack";
            if ((((array_key_exists("large_icon", $context)) ? (_twig_default_filter((isset($context["large_icon"]) ? $context["large_icon"] : null), false)) : (false)) == true)) {
                echo " fa-lg";
            }
            echo "\">
  <i class=\"fa fa-stack-2x fa-";
            // line 3
            echo ((array_key_exists("icon_container", $context)) ? (_twig_default_filter((isset($context["icon_container"]) ? $context["icon_container"] : null), "circle-thin")) : ("circle-thin"));
            echo "\"></i>
  <i class=\"fa fa-stack-1x fa-";
            // line 4
            echo (isset($context["icon"]) ? $context["icon"] : null);
            echo "\"></i>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "basic/icon_stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% if icon is defined %}
<span class=\"fa-stack{% if large_icon|default(false) == true %} fa-lg{% endif %}\">
  <i class=\"fa fa-stack-2x fa-{{ icon_container|default('circle-thin') }}\"></i>
  <i class=\"fa fa-stack-1x fa-{{ icon }}\"></i>
</span>
{% endif %}
";
    }
}
