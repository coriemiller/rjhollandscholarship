<?php

/* bootstrap/accordion.html.twig */
class __TwigTemplate_d213ee40733b391410a74655ed4d4c9cd0cc4238100f513bc1877055c39ed801 extends Twig_Template
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
        echo "\" class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
  ";
        // line 2
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
            // line 3
            echo "      ";
            $context["values"] = $context["item"];
            // line 4
            echo "      ";
            if ($this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->instance_of((isset($context["values"]) ? $context["values"] : null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 5
                echo "          ";
                $context["values"] = array("id" => $this->getAttribute(                // line 6
$context["item"], "getParameter", array(0 => "id"), "method"), "heading_id" => $this->getAttribute(                // line 7
$context["item"], "getParameter", array(0 => "heading_id"), "method"), "title" => trim($this->getAttribute(                // line 8
$context["item"], "getParameter", array(0 => "title"), "method")), "content" => trim($this->getAttribute(                // line 9
$context["item"], "content", array())));
                // line 11
                echo "      ";
            }
            // line 12
            echo "      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\"";
            // line 13
            if ( !(null === $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "heading_id", array()))) {
                echo " id=\"";
                echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "heading_id", array());
                echo "\"";
            }
            echo ">
          <h4 class=\"panel-title\">
            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#";
            // line 15
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" href=\"#";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "id", array());
            echo "\" aria-expanded=\"true\" aria-controls=\"";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "id", array());
            echo "\">
              ";
            // line 16
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "title", array());
            echo "
            </a>
          </h4>
        </div>
        <div id=\"";
            // line 20
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "id", array());
            echo "\" class=\"panel-collapse collapse ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " in";
            }
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "heading_id", array());
            echo "\">
          <div class=\"panel-body\">
            ";
            // line 22
            echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "content", array());
            echo "
          </div>
        </div>
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
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  95 => 22,  84 => 20,  77 => 16,  69 => 15,  60 => 13,  57 => 12,  54 => 11,  52 => 9,  51 => 8,  50 => 7,  49 => 6,  47 => 5,  44 => 4,  41 => 3,  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<div id=\"{{ id }}\" class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
  {% for item in items %}
      {% set values = item %}
      {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
          {% set values = {
            'id': item.getParameter('id'),
            'heading_id': item.getParameter('heading_id'),
            'title': item.getParameter('title')|trim,
            'content': item.content|trim,
          } %}
      {% endif %}
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\"{% if (values.heading_id is not null) %} id=\"{{ values.heading_id }}\"{% endif %}>
          <h4 class=\"panel-title\">
            <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#{{ id }}\" href=\"#{{ values.id }}\" aria-expanded=\"true\" aria-controls=\"{{ values.id }}\">
              {{ values.title }}
            </a>
          </h4>
        </div>
        <div id=\"{{ values.id }}\" class=\"panel-collapse collapse {% if loop.first %} in{% endif %}\" role=\"tabpanel\" aria-labelledby=\"{{ values.heading_id }}\">
          <div class=\"panel-body\">
            {{ values.content }}
          </div>
        </div>
      </div>
  {% endfor %}
</div>
";
    }
}
