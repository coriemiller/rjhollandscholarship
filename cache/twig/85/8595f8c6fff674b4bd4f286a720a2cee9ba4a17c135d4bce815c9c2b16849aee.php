<?php

/* bootstrap/thumbnail.html.twig */
class __TwigTemplate_97890a5e49428cad77b2bf4e5968cc84a2a0f0d6e361d64c19e740b81be34a5b extends Twig_Template
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
        echo "<div class=\"row\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            $context["values"] = $context["item"];
            // line 4
            echo "        ";
            if ($this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->instance_of((isset($context["values"]) ? $context["values"] : null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 5
                echo "            ";
                $context["values"] = array("image" => $this->getAttribute(                // line 6
$context["item"], "getParameter", array(0 => "image"), "method"), "content" => trim($this->getAttribute(                // line 7
$context["item"], "content", array())), "class" => $this->getAttribute(                // line 8
$context["item"], "getParameter", array(0 => "class"), "method"), "url" => $this->getAttribute(                // line 9
$context["item"], "getParameter", array(0 => "url"), "method"));
                // line 11
                echo "        ";
            }
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo (($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["values"]) ? $context["values"] : null), "class", array()), "col-md-4")) : ("col-md-4"));
            echo "\">
            ";
            // line 14
            $context["linked"] =  !(null === $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "url", array()));
            // line 15
            echo "            ";
            $context["tag"] = (((isset($context["linked"]) ? $context["linked"] : null)) ? ((("a href=\"" . $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "url", array())) . "\"")) : ("div"));
            // line 16
            echo "            ";
            $context["close_tag"] = (((isset($context["linked"]) ? $context["linked"] : null)) ? ("a") : ("div"));
            // line 17
            echo "            <";
            echo (isset($context["tag"]) ? $context["tag"] : null);
            echo " class=\"thumbnail\">
            ";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "find", array(0 => "/images"), "method"), "media", array()), "images", array()), $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "image", array()), array(), "array");
            echo " 
            ";
            // line 19
            if (((isset($context["linked"]) ? $context["linked"] : null) == false)) {
                // line 20
                echo "            <div class=\"caption\">
                ";
                // line 21
                echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "content", array());
                echo "
            </div>
            ";
            }
            // line 24
            echo "            </";
            echo (isset($context["close_tag"]) ? $context["close_tag"] : null);
            echo ">
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  77 => 24,  71 => 21,  68 => 20,  66 => 19,  62 => 18,  57 => 17,  54 => 16,  51 => 15,  49 => 14,  45 => 13,  42 => 12,  39 => 11,  37 => 9,  36 => 8,  35 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">
    {% for item in items %}
        {% set values = item %}
        {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
            {% set values = {
              'image': item.getParameter('image'),
              'content': item.content|trim,
              'class': item.getParameter('class'),
              'url': item.getParameter('url'),
            } %}
        {% endif %}

        <div class=\"{{ values.class|default('col-md-4') }}\">
            {% set linked = values.url is not null %}
            {% set tag = linked ? 'a href=\"' ~ values.url ~ '\"' : 'div' %}
            {% set close_tag = linked ? 'a' : 'div' %}
            <{{ tag }} class=\"thumbnail\">
            {{ grav.page.find('/images').media.images[values.image] }} 
            {% if linked == false %}
            <div class=\"caption\">
                {{ values.content }}
            </div>
            {% endif %}
            </{{ close_tag }}>
        </div>
    {% endfor %}
</div>
";
    }
}
