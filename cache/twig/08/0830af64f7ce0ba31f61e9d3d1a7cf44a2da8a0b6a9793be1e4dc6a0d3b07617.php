<?php

/* modular/intro.html.twig */
class __TwigTemplate_78d07f5be92062fb9843ba1781ecfd047ab5eb1fe43dc22f0cf9b65d2cf767fa extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-offset-2 col-md-8\">
            ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-offset-2 col-md-8\">
            {{ content }}
        </div>
    </div>
</div>";
    }
}
