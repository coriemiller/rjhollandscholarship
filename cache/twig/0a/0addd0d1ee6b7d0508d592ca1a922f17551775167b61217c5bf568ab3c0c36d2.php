<?php

/* bootstrap/jumbotron.html.twig */
class __TwigTemplate_0bf05a88ee483a826cac4da13f47bb73c6dd32b2dad4aa2e455d8c1b3ef2a0fa extends Twig_Template
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
        echo "<div class=\"jumbotron ";
        echo $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array");
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/jumbotron.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo " ";
        if ((array_key_exists("image", $context) && ((isset($context["image"]) ? $context["image"] : null) != null))) {
            echo " style=\"background-image: url('";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "find", array(0 => "/images"), "method"), "media", array()), "images", array()), (isset($context["image"]) ? $context["image"] : null), array(), "array"), "url", array());
            echo " ')\"";
        }
        echo ">
    ";
        // line 3
        if (((isset($context["fullwidth"]) ? $context["fullwidth"] : null) == true)) {
            // line 4
            echo "    <div class=\"container\">
    ";
            // line 5
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
    </div>
    ";
        } else {
            // line 8
            echo "    ";
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
    ";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/jumbotron.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 8,  39 => 5,  36 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set attributes = parse_attributes(attributes) %}
<div class=\"jumbotron {{ attributes['class'] }}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %} {% if(image is defined and image != null) %} style=\"background-image: url('{{ grav.page.find('/images').media.images[image].url }} ')\"{% endif %}>
    {% if fullwidth == true %}
    <div class=\"container\">
    {{ content }}
    </div>
    {% else %}
    {{ content }}
    {% endif %}
</div>
";
    }
}
