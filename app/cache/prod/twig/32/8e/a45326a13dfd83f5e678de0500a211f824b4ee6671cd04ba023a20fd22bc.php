<?php

/* ::frame.html.twig */
class __TwigTemplate_328ea45326a13dfd83f5e678de0500a211f824b4ee6671cd04ba023a20fd22bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'base' => array($this, 'block_base'),
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
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>body{padding-top: 70px;}</style>
    </head>
<body style=\"margin-bottom:40px;\">

    ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McModuleBundle:Navigation:show"));
        echo "


        <div class=\"container\" style=\"margin-top:10px;\">
        <div class=\"row\">

            ";
        // line 21
        $this->displayBlock('base', $context, $blocks);
        // line 22
        echo "
        </div>
        </div>
        
        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "欢迎莅临 精创学院 | 帮助互联网精益创业企业";
    }

    // line 7
    public function block_meta($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head_javascripts($context, array $blocks = array())
    {
    }

    // line 21
    public function block_base($context, array $blocks = array())
    {
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  99 => 21,  94 => 9,  89 => 8,  84 => 7,  64 => 22,  62 => 21,  44 => 10,  38 => 8,  36 => 7,  25 => 1,  77 => 18,  72 => 27,  58 => 19,  53 => 15,  51 => 16,  42 => 9,  34 => 4,  31 => 5,  69 => 17,  65 => 16,  60 => 15,  57 => 14,  50 => 10,  45 => 8,  41 => 9,  32 => 5,  29 => 4,  191 => 75,  189 => 74,  184 => 71,  178 => 67,  172 => 64,  169 => 63,  167 => 62,  163 => 60,  160 => 59,  154 => 55,  148 => 54,  141 => 50,  137 => 49,  131 => 47,  125 => 43,  123 => 42,  120 => 41,  116 => 40,  107 => 33,  100 => 31,  90 => 28,  87 => 27,  78 => 5,  73 => 21,  70 => 26,  67 => 8,  63 => 18,  56 => 18,  52 => 13,  47 => 11,  40 => 8,  37 => 6,  30 => 3,);
    }
}
