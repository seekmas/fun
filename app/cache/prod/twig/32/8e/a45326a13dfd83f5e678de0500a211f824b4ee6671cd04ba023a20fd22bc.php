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
<body>

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
        echo "Welcome!";
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
        return array (  94 => 9,  89 => 8,  84 => 7,  78 => 5,  72 => 27,  64 => 22,  62 => 21,  53 => 15,  44 => 10,  41 => 9,  38 => 8,  31 => 5,  25 => 1,  217 => 95,  211 => 94,  209 => 93,  201 => 88,  183 => 73,  179 => 72,  175 => 71,  160 => 62,  155 => 61,  153 => 60,  139 => 51,  136 => 50,  133 => 49,  127 => 44,  121 => 43,  114 => 39,  110 => 38,  104 => 26,  101 => 35,  99 => 21,  96 => 33,  92 => 32,  83 => 25,  70 => 26,  66 => 22,  56 => 15,  52 => 14,  47 => 12,  39 => 6,  36 => 7,  30 => 3,);
    }
}
