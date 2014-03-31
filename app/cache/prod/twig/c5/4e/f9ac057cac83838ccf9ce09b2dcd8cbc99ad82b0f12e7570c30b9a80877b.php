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
            'body_footer' => array($this, 'block_body_footer'),
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
                
                ";
        // line 22
        $this->displayBlock('body_footer', $context, $blocks);
        // line 23
        echo "            </div>

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

    // line 22
    public function block_body_footer($context, array $blocks = array())
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
        return array (  83 => 18,  78 => 16,  73 => 8,  66 => 23,  59 => 19,  54 => 17,  52 => 16,  43 => 9,  35 => 4,  32 => 3,  205 => 85,  203 => 84,  195 => 78,  192 => 77,  185 => 71,  179 => 67,  173 => 64,  170 => 63,  168 => 62,  164 => 60,  161 => 59,  155 => 55,  149 => 54,  142 => 50,  138 => 49,  132 => 47,  126 => 43,  124 => 42,  121 => 41,  117 => 40,  108 => 33,  101 => 31,  91 => 28,  88 => 22,  79 => 23,  74 => 21,  71 => 20,  68 => 19,  64 => 22,  57 => 18,  53 => 13,  48 => 11,  41 => 8,  38 => 5,  31 => 3,);
    }
}
