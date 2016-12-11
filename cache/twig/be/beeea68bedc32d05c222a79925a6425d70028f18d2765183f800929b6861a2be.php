<?php

/* bootstrap/partials/_navbar_menu.html.twig */
class __TwigTemplate_4a956ed675c3d944b69282b0d57cb39541f6b71a7896ac5956911dd1b66e840a extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array(), "array"), "html", null, true);
        echo " ";
        $this->loadTemplate("bootstrap/partials/_navbar_item_alignment.html.twig", "bootstrap/partials/_navbar_menu.html.twig", 2)->display($context);
        echo "\" ";
        $this->loadTemplate("partials/_attributes.html.twig", "bootstrap/partials/_navbar_menu.html.twig", 2)->display(array_merge($context, array("ignore" => array(0 => "class"))));
        echo ">
    ";
        // line 3
        if (((isset($context["onepage"]) ? $context["onepage"] : null) == true)) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "page", array()), "collection", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                echo "            ";
                $context["visible"] = $this->getAttribute($this->getAttribute($context["module"], "header", array()), "visible", array());
                // line 6
                echo "            ";
                if (((null === (isset($context["visible"]) ? $context["visible"] : null)) || (isset($context["visible"]) ? $context["visible"] : null))) {
                    // line 7
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                    // line 8
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, (isset($context["current_module"]) ? $context["current_module"] : null), "html", null, true);
                    echo "\">
                    <a class=\"smoothscroll\" href=\"#";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "folder", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "menu", array()), "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 12
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        // line 18
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "bootstrap/partials/_navbar_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  82 => 17,  73 => 15,  68 => 14,  65 => 13,  59 => 12,  51 => 9,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  32 => 4,  30 => 3,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "{% set attributes = parse_attributes(attributes) %}
<ul class=\"nav navbar-nav {{ attributes['class'] }} {% include 'bootstrap/partials/_navbar_item_alignment.html.twig' %}\" {% include 'partials/_attributes.html.twig' with {'ignore': ['class']} %}>
    {% if onepage == true %}
        {% for module in grav.page.collection() %}
            {% set visible = module.header.visible %}
            {% if visible is null or visible %}
                {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}
                <li class=\"{{ current_module }}\">
                    <a class=\"smoothscroll\" href=\"#{{ module.folder }}\">{{ module.menu }}</a>
                </li>
            {% endif %}
        {% endfor %}
    {% else %}
        {% for item in items %}
            <li>{{ item }}</li>
        {% endfor %}
    {% endif %}
</ul>
";
    }
}
