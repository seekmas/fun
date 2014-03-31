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
            'stylesheets_head' => array($this, 'block_stylesheets_head'),
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

        ";
        // line 13
        $this->displayBlock('stylesheets_head', $context, $blocks);
        // line 14
        echo "    </head>
<body style=\"margin-bottom:40px;\">

    ";
        // line 17
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McModuleBundle:Navigation:show"));
        echo "


        <div class=\"container\" style=\"margin-top:10px;\">
        <div class=\"row\">

            ";
        // line 23
        $this->displayBlock('base', $context, $blocks);
        // line 24
        echo "
        </div>
        </div>
        
        ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
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

    // line 13
    public function block_stylesheets_head($context, array $blocks = array())
    {
    }

    // line 23
    public function block_base($context, array $blocks = array())
    {
    }

    // line 28
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
        return array (  115 => 28,  110 => 23,  105 => 13,  100 => 9,  90 => 7,  84 => 5,  76 => 28,  70 => 24,  68 => 23,  59 => 17,  26 => 1,  95 => 8,  91 => 22,  86 => 21,  83 => 20,  78 => 29,  64 => 15,  54 => 14,  45 => 10,  41 => 7,  37 => 7,  32 => 5,  29 => 4,  60 => 14,  55 => 14,  52 => 13,  49 => 9,  42 => 9,  39 => 8,  36 => 6,  30 => 3,);
    }
}
