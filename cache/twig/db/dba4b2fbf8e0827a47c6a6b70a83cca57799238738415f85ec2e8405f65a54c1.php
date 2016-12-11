<?php

/* footer/footer_one.html.twig */
class __TwigTemplate_bcc24464670b29d4457fb9cb1201810ad68aee3d295e96eabbb490ddb8e8c674 extends Twig_Template
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
        echo "<footer class=\"footer footer-one\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 inline-navigation\">
                ";
        // line 5
        $this->loadTemplate("partials/footer_navigation.html.twig", "footer/footer_one.html.twig", 5)->display($context);
        // line 6
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 10
        echo $this->getAttribute((isset($context["sections"]) ? $context["sections"] : null), "credits", array());
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                &copy; ";
        // line 15
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " ";
        echo $this->getAttribute((isset($context["sections"]) ? $context["sections"] : null), "copyright", array());
        echo "
            </div>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "footer/footer_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  33 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<footer class=\"footer footer-one\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12 inline-navigation\">
                {% include 'partials/footer_navigation.html.twig' %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                {{ sections.credits }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-sm-12\">
                &copy; {{ \"now\"|date(\"Y\") }} {{ sections.copyright }}
            </div>
        </div>
    </div>
</footer>
";
    }
}
