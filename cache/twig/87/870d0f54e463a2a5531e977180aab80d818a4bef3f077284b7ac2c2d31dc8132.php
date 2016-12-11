<?php

/* modules/team.html.twig */
class __TwigTemplate_cc69c627d826354e63e4e5ddd24f071df1587ab603623e0618878a73747f2dc3 extends Twig_Template
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
        $this->loadTemplate("modules/team.html.twig", "modules/team.html.twig", 1, "1298022157")->display($context);
    }

    public function getTemplateName()
    {
        return "modules/team.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'modules/partials/base_module.html.twig' %}
    {% block module_content %}
        <div class=\"row\">
        {% for item in items %}
            {% set values = item %}
            {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
                {% set values = {
                  'image': item.getParameter('image'),
                  'content': item.content|trim,
                  'attributes': parse_attributes(item.getParameter('attributes')),
                } %}
            {% endif %}

            <div {% include 'partials/_attributes.html.twig' with { 'attributes': values.attributes } %}>
                <div class=\"item-image\">
                    {{ grav.page.find('/images').media.images[values.image].cropZoom(150, 150) }}
                </div>
                {% if content != \"\" %}
                <div class=\"item-text\">{{ values.content }}</div>
                {% endif %}
            </div>
        {% endfor %}
        </div>
    {% endblock %}
{% endembed %}
";
    }
}


/* modules/team.html.twig */
class __TwigTemplate_cc69c627d826354e63e4e5ddd24f071df1587ab603623e0618878a73747f2dc3_1298022157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("modules/partials/base_module.html.twig", "modules/team.html.twig", 1);
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
        echo "        <div class=\"row\">
        ";
        // line 4
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
            // line 5
            echo "            ";
            $context["values"] = $context["item"];
            // line 6
            echo "            ";
            if ($this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->instance_of((isset($context["values"]) ? $context["values"] : null), "\\Thunder\\Shortcode\\Shortcode\\ProcessedShortcode")) {
                // line 7
                echo "                ";
                $context["values"] = array("image" => $this->getAttribute(                // line 8
$context["item"], "getParameter", array(0 => "image"), "method"), "content" => trim($this->getAttribute(                // line 9
$context["item"], "content", array())), "attributes" => $this->env->getExtension('Gravstrap\Twig\GravstrapTwigExtension')->parseAttributes($this->getAttribute(                // line 10
$context["item"], "getParameter", array(0 => "attributes"), "method")));
                // line 12
                echo "            ";
            }
            // line 13
            echo "
            <div ";
            // line 14
            $this->loadTemplate("partials/_attributes.html.twig", null, 14)->display(array_merge($context, array("attributes" => $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "attributes", array()))));
            echo ">
                <div class=\"item-image\">
                    ";
            // line 16
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "find", array(0 => "/images"), "method"), "media", array()), "images", array()), $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "image", array()), array(), "array"), "cropZoom", array(0 => 150, 1 => 150), "method");
            echo "
                </div>
                ";
            // line 18
            if (((isset($context["content"]) ? $context["content"] : null) != "")) {
                // line 19
                echo "                <div class=\"item-text\">";
                echo $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "content", array());
                echo "</div>
                ";
            }
            // line 21
            echo "            </div>
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
        // line 23
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "modules/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 23,  147 => 21,  141 => 19,  139 => 18,  134 => 16,  129 => 14,  126 => 13,  123 => 12,  121 => 10,  120 => 9,  119 => 8,  117 => 7,  114 => 6,  111 => 5,  94 => 4,  91 => 3,  88 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% embed 'modules/partials/base_module.html.twig' %}
    {% block module_content %}
        <div class=\"row\">
        {% for item in items %}
            {% set values = item %}
            {% if(instanceof(values, '\\\\Thunder\\\\Shortcode\\\\Shortcode\\\\ProcessedShortcode')) %}
                {% set values = {
                  'image': item.getParameter('image'),
                  'content': item.content|trim,
                  'attributes': parse_attributes(item.getParameter('attributes')),
                } %}
            {% endif %}

            <div {% include 'partials/_attributes.html.twig' with { 'attributes': values.attributes } %}>
                <div class=\"item-image\">
                    {{ grav.page.find('/images').media.images[values.image].cropZoom(150, 150) }}
                </div>
                {% if content != \"\" %}
                <div class=\"item-text\">{{ values.content }}</div>
                {% endif %}
            </div>
        {% endfor %}
        </div>
    {% endblock %}
{% endembed %}
";
    }
}
