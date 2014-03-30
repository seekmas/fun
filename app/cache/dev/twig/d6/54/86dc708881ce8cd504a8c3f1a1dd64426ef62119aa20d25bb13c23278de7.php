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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 9
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
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "欢迎莅临 精创学院 | 帮助互联网精益创业企业";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_head_javascripts($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
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
        return array (  81 => 14,  76 => 12,  71 => 8,  60 => 5,  54 => 15,  47 => 12,  37 => 8,  30 => 5,  24 => 1,  163 => 48,  159 => 42,  156 => 41,  151 => 49,  149 => 48,  142 => 43,  139 => 41,  133 => 40,  124 => 37,  121 => 36,  116 => 35,  112 => 34,  107 => 31,  103 => 29,  97 => 26,  88 => 24,  86 => 23,  78 => 18,  75 => 17,  72 => 16,  66 => 7,  61 => 12,  58 => 11,  52 => 14,  48 => 7,  44 => 6,  35 => 7,  32 => 3,  105 => 42,  99 => 41,  93 => 25,  84 => 32,  74 => 25,  67 => 21,  63 => 20,  57 => 17,  53 => 16,  49 => 13,  46 => 14,  40 => 9,  38 => 11,  31 => 6,  28 => 5,);
    }
}
