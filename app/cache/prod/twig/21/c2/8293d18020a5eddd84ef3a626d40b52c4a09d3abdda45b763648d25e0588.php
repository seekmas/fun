<?php

/* McModuleBundle:Dashboard:show.html.twig */
class __TwigTemplate_21c28293d18020a5eddd84ef3a626d40b52c4a09d3abdda45b763648d25e0588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "
\tuser navigation

";
    }

    public function getTemplateName()
    {
        return "McModuleBundle:Dashboard:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
