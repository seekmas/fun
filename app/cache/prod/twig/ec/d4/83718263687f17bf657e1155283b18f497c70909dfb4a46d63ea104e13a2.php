<?php

/* ::base2.html.twig */
class __TwigTemplate_ecd483718263687f17bf657e1155283b18f497c70909dfb4a46d63ea104e13a2 extends Twig_Template
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
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "

        ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
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

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 15,  77 => 12,  61 => 5,  53 => 15,  47 => 12,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  154 => 44,  150 => 38,  147 => 37,  142 => 45,  140 => 44,  133 => 39,  131 => 37,  127 => 35,  121 => 34,  112 => 31,  107 => 30,  102 => 29,  98 => 28,  94 => 26,  86 => 24,  80 => 21,  76 => 20,  71 => 19,  69 => 18,  63 => 14,  54 => 10,  49 => 13,  40 => 5,  35 => 4,  32 => 3,  72 => 7,  67 => 6,  60 => 13,  55 => 16,  51 => 13,  46 => 8,  42 => 10,  39 => 8,  33 => 7,  31 => 6,  28 => 5,);
    }
}
