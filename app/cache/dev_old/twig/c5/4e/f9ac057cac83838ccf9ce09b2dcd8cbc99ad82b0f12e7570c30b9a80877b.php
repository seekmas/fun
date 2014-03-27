<?php

/* ::base.html.twig */
class __TwigTemplate_c54ef9ac057cac83838ccf9ce09b2dcd8cbc99ad82b0f12e7570c30b9a80877b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'left' => array($this, 'block_left'),
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
        
        <div class=\"container\" style=\"margin-top:10px;\"><div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    ";
        // line 16
        $this->displayBlock('left', $context, $blocks);
        // line 17
        echo "                </div>
            </div>
        </div>

        <div class=\"col-md-9\">
            <div class=\"panel panel-default\">
              <div class=\"panel-body\">
                ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "              </div>
            </div>
        </div>

        </div></div>

        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
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

    // line 16
    public function block_left($context, array $blocks = array())
    {
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
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
        return array (  107 => 31,  97 => 16,  92 => 7,  87 => 6,  81 => 5,  75 => 32,  73 => 31,  65 => 25,  63 => 24,  54 => 17,  52 => 16,  40 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,  102 => 24,  99 => 33,  88 => 28,  82 => 25,  78 => 23,  74 => 22,  69 => 20,  66 => 19,  61 => 16,  50 => 11,  46 => 9,  42 => 8,  39 => 7,  36 => 6,  30 => 3,);
    }
}
