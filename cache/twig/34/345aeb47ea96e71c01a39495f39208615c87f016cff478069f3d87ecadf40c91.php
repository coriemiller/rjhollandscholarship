<?php

/* bootstrap/panel.html.twig */
class __TwigTemplate_57029bf49c8f5b8a2e6698e7e560305080ab9b18311dbaefb08af08fb3e37976 extends Twig_Template
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
        echo "<div class=\"panel panel-";
        echo ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "default")) : ("default"));
        echo "\">
  ";
        // line 2
        if ( !(null === (isset($context["heading_title"]) ? $context["heading_title"] : null))) {
            // line 3
            echo "  <div class=\"panel-heading\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"panel-body\">
      ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  </div>
  ";
        // line 8
        if ( !(null === (isset($context["footer_title"]) ? $context["footer_title"] : null))) {
            // line 9
            echo "  <div class=\"panel-footer\">";
            echo (isset($context["footer_title"]) ? $context["footer_title"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 9,  40 => 8,  35 => 6,  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"panel panel-{{ type|default('default') }}\">
  {% if heading_title is not null %}
  <div class=\"panel-heading\">{{ heading_title }}</div>
  {% endif %}
  <div class=\"panel-body\">
      {{ content }}
  </div>
  {% if footer_title is not null %}
  <div class=\"panel-footer\">{{ footer_title }}</div>
  {% endif %}
</div>";
    }
}
