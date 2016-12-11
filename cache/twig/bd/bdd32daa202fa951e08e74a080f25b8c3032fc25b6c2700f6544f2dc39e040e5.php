<?php

/* bootstrap/navbar.html.twig */
class __TwigTemplate_dcec4cfae46e46ec3c2634cb21fd7580f19c35029937ed7e6bb1906c917232ec extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default";
        if ((((array_key_exists("fixed", $context)) ? (_twig_default_filter((isset($context["fixed"]) ? $context["fixed"] : null), "none")) : ("none")) != "none")) {
            echo " navbar-fixed-";
            echo twig_escape_filter($this->env, (isset($context["fixed"]) ? $context["fixed"] : null), "html", null, true);
        }
        if ((isset($context["inverse"]) ? $context["inverse"] : null)) {
            echo " navbar-inverse";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array"), "html", null, true);
        echo "\"  ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/navbar.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
  <div class=\"";
        // line 3
        if ((isset($context["container"]) ? $context["container"] : null)) {
            echo " container";
        } else {
            echo " container-fluid";
        }
        echo "\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">";
        // line 11
        if ( !(null === (isset($context["brand_image"]) ? $context["brand_image"] : null))) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "media", array()), (isset($context["brand_image"]) ? $context["brand_image"] : null), array(), "array"), "resize", array(0 => 20, 1 => 20), "method"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["brand_text"]) ? $context["brand_text"] : null), "html", null, true);
            echo " ";
        }
        echo "</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  76 => 16,  72 => 15,  68 => 14,  54 => 11,  45 => 5,  36 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set attributes = parse_attributes(attributes) %}
<nav class=\"navbar navbar-default{% if fixed|default('none') != 'none' %} navbar-fixed-{{ fixed }}{% endif %}{% if inverse %} navbar-inverse{% endif %} {{ attributes['class'] }}\"  {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
  <div class=\"{% if container %} container{% else %} container-fluid{% endif %}\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#{{ id }}\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">{% if brand_image is not null %} {{ grav.page.media[brand_image].resize(20, 20) }} {% else %} {{ brand_text }} {% endif %}</a>
    </div>

    <div class=\"collapse navbar-collapse\" id=\"{{ id }}\">
        {% for item in items %}
            {{ item }}
        {% endfor %}
    </div>
  </div>
</nav>
";
    }
}
