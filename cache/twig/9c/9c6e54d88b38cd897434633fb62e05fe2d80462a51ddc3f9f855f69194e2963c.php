<?php

/* bootstrap/carousel.html.twig */
class __TwigTemplate_7149bcfe7ab68b489c5f0cdeb58b7b665275d46b1b0abed1b26cc08179457c1d extends Twig_Template
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
        echo "<div id=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["items"]) ? $context["items"] : null)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 4
            echo "        <li data-target=\"#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\"  data-slide-to=\"";
            echo $context["index"];
            echo "\"";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " class=\"active\"";
            }
            echo "></li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ol>

    <div class=\"carousel-inner\" role=\"listbox\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        ";
            $context["values"] = $context["item"];
            // line 11
            echo "        ";
            if ($this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->instance_of((isset($context["values"]) ? $context["values"] : null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 12
                echo "            ";
                $context["values"] = array("image" => $this->getAttribute(                // line 13
$context["item"], "getParameter", array(0 => "image"), "method"), "caption" => trim($this->getAttribute(                // line 14
$context["item"], "content", array())));
                // line 16
                echo "        ";
            }
            // line 17
            echo "        <div class=\"item";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " active";
            }
            echo "\">
            ";
            // line 18
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "find", array(0 => "/images"), "method"), "media", array()), "images", array()), $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "image", array()), array(), "array");
            echo " 
            <div class=\"carousel-caption\">";
            // line 19
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "caption", array());
            echo "</div>
        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

    <a class=\"left carousel-control\" href=\"#";
        // line 24
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">";
        // line 26
        echo (isset($context["previous_label"]) ? $context["previous_label"] : null);
        echo "</span>
    </a>
    <a class=\"right carousel-control\" href=\"#";
        // line 28
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">";
        // line 30
        echo (isset($context["next_label"]) ? $context["next_label"] : null);
        echo "</span>
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 30,  143 => 28,  138 => 26,  133 => 24,  129 => 22,  112 => 19,  108 => 18,  101 => 17,  98 => 16,  96 => 14,  95 => 13,  93 => 12,  90 => 11,  87 => 10,  70 => 9,  65 => 6,  42 => 4,  25 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"{{ id }}\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        {% for index in items|keys %}
        <li data-target=\"#{{ id }}\"  data-slide-to=\"{{ index }}\"{% if loop.first %} class=\"active\"{% endif %}></li>
        {% endfor %}
    </ol>

    <div class=\"carousel-inner\" role=\"listbox\">
        {% for item in items %}
        {% set values = item %}
        {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
            {% set values = {
              'image': item.getParameter('image'),
              'caption': item.content|trim,
            } %}
        {% endif %}
        <div class=\"item{% if loop.first %} active{% endif %}\">
            {{ grav.page.find('/images').media.images[values.image] }} 
            <div class=\"carousel-caption\">{{ values.caption }}</div>
        </div>
        {% endfor %}
    </div>

    <a class=\"left carousel-control\" href=\"#{{ id }}\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">{{ previous_label }}</span>
    </a>
    <a class=\"right carousel-control\" href=\"#{{ id }}\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">{{ next_label }}</span>
    </a>
</div>
";
    }
}
