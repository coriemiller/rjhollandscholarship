<?php

/* partials/footer_navigation.html.twig */
class __TwigTemplate_787040ad0c8305f0d8e762e6c98c6a946bc6ec76890b2d217cbfc54466c00008 extends Twig_Template
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
        // line 17
        echo "
<div class=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "class", array()), "html", null, true);
        echo " navigation\">    
    ";
        // line 19
        if ($this->getAttribute((isset($context["element"]) ? $context["element"] : null), "title", array(), "any", true, true)) {
            // line 20
            echo "    <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), "title", array()), "html", null, true);
            echo "</h3>
    ";
        }
        // line 22
        echo "    <ul>
        ";
        // line 23
        if ((null === (isset($context["pages"]) ? $context["pages"] : null))) {
            // line 24
            echo "        ";
            $context["pages"] = $this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "pages", array()), "root", array());
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 28
            echo "            ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 32
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
                echo "\">
                        ";
                // line 34
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 35
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "menu", array()), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        // line 40
        echo "    </ul>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        <li class=\"";
                echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
                echo "\">
            <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", array()), "html", null, true);
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 7
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", array()), "html", null, true);
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 10
                    echo "                <ul>
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/footer_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 14,  145 => 11,  142 => 10,  140 => 9,  134 => 7,  128 => 6,  124 => 5,  119 => 4,  116 => 3,  111 => 2,  99 => 1,  93 => 40,  90 => 39,  79 => 35,  73 => 34,  69 => 33,  64 => 32,  61 => 31,  56 => 30,  50 => 28,  48 => 27,  45 => 26,  42 => 25,  39 => 24,  37 => 23,  34 => 22,  28 => 20,  26 => 19,  22 => 18,  19 => 17,);
    }

    public function getSource()
    {
        return "{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        <li class=\"{{ current_page }}\">
            <a href=\"{{ p.url }}\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                {{ p.menu }}
            </a>
            {% if p.children.visible.count > 0 %}
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<div class=\"{{ element.class }} navigation\">    
    {% if element.title is defined %}
    <h3>{{ element.title }}</h3>
    {% endif %}
    <ul>
        {% if pages is null %}
        {% set pages = grav.pages.root %}
        {% endif %}

        {% if theme_config.dropdown.enabled %}
            {{ _self.loop(pages) }}
        {% else %}
            {% for page in pages.children.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                        {{ page.menu }}
                    </a>
                </li>
            {% endfor %}
        {% endif %}
    </ul>
</div>
";
    }
}
