<?php

/* ::base.html.twig */
class __TwigTemplate_c54ef9ac057cac83838ccf9ce09b2dcd8cbc99ad82b0f12e7570c30b9a80877b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frame.html.twig");

        $this->blocks = array(
            'base' => array($this, 'block_base'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frame.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"container\"><div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 8
        $this->displayBlock('left', $context, $blocks);
        // line 9
        echo "                    </div>
                </div>
            </div>

            <div class=\"col-md-8\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "                    
                    ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "                  </div>
                </div>
            </div>

        </div></div>
";
    }

    // line 8
    public function block_left($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  72 => 16,  67 => 8,  58 => 19,  53 => 17,  51 => 16,  42 => 9,  40 => 8,  34 => 4,  31 => 3,  79 => 24,  76 => 23,  70 => 19,  60 => 15,  56 => 18,  50 => 12,  46 => 11,  39 => 6,  36 => 5,  30 => 3,);
    }
}
