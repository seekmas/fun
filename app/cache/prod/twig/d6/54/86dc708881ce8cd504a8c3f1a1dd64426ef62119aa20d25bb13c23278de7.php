<?php

/* ::base_pure.html.twig */
class __TwigTemplate_d65486dc708881ce8cd504a8c3f1a1dd64426ef62119aa20d25bb13c23278de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>        
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_head_javascripts($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base_pure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  75 => 11,  70 => 7,  65 => 6,  53 => 14,  51 => 13,  46 => 11,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  162 => 46,  158 => 40,  155 => 39,  150 => 47,  148 => 46,  141 => 41,  139 => 39,  135 => 37,  129 => 36,  120 => 33,  115 => 32,  110 => 31,  106 => 30,  102 => 28,  94 => 26,  88 => 23,  84 => 22,  77 => 20,  71 => 16,  68 => 15,  62 => 12,  57 => 11,  54 => 10,  40 => 5,  35 => 4,  32 => 3,  79 => 21,  74 => 27,  66 => 22,  59 => 5,  55 => 17,  48 => 12,  44 => 6,  39 => 8,  33 => 7,  31 => 6,  28 => 5,);
    }
}
