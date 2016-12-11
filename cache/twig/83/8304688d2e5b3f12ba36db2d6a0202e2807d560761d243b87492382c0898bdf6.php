<?php

/* @Var:{{ config.plugins.email.from }} */
class __TwigTemplate_b6f5f4ea3603e96ea49ac3ce0d66dd955e336d57ba84c9b59502582b640fb22b extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "email", array()), "from", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ config.plugins.email.from }}";
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
        return "{{ config.plugins.email.from }}";
    }
}
