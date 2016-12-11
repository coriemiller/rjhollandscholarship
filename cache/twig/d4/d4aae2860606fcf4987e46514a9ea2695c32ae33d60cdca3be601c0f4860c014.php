<?php

/* @Page:/Users/cmiller/GoogleDrive/local/personal/mamp_sites/scholarship_new/user/plugins/error/pages */
class __TwigTemplate_50703a7a79f28ac7bc46e596b13a08cde03ea98bad7b0e2547a3e9464f211a9d extends Twig_Template
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
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/cmiller/GoogleDrive/local/personal/mamp_sites/scholarship_new/user/plugins/error/pages";
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
        return "{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

";
    }
}
