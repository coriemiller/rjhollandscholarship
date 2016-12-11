<?php

/* modular/what_we_do.html.twig */
class __TwigTemplate_1fd886ca54c2b8c1b638e2dde6b4b49e0673acf0e2f5460f1483188fd3b35dd8 extends Twig_Template
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
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "modular/what_we_do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{{ content }}

{#
{% embed 'partials/base_module.html.twig' %}
    {% set section_class = \"what-we-do\" %}

    {% block module_content %}
        
        {% set item = elements.item %}
        {% set item_column = item.column|default(4) %}
        {% set item_row_class = item.classes.row %}
        {% set item_column_class = item.classes.column %}
        {% set item_icon_class = item.classes.icon %}
        {% set item_text_class = item.classes.text %}

        <div class=\"row {{ item_row_class }}\">
            {% for item in page.header.items %}
                <div class=\"col-md-{{ item_column }} {{ item_column_class }}\">
                    <div class=\"item-icon {{ item_icon_class }}\">{% include \"basic/icon.html.twig\" %}</div>
                    <div class=\"item-text {{ item_text_class }}\">
                        {{ page_sections[item.section] }}
                    </div>
                </div>
            {% endfor %}
            </div>
        </div>
    {% endblock %}
{% endembed %}
#}";
    }
}
