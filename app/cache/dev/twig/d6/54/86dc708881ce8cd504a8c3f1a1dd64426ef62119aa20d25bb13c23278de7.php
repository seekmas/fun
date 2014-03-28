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
        return array (  84 => 22,  23 => 4,  97 => 31,  20 => 1,  81 => 20,  137 => 41,  100 => 32,  90 => 30,  197 => 83,  195 => 82,  175 => 71,  160 => 62,  153 => 60,  114 => 31,  110 => 38,  104 => 34,  76 => 25,  127 => 44,  53 => 14,  77 => 20,  34 => 6,  170 => 65,  161 => 61,  155 => 61,  152 => 57,  146 => 47,  129 => 46,  70 => 7,  65 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 60,  143 => 56,  135 => 39,  119 => 33,  102 => 30,  71 => 16,  67 => 26,  63 => 14,  59 => 5,  38 => 8,  94 => 26,  89 => 20,  85 => 38,  75 => 11,  68 => 15,  56 => 15,  87 => 29,  21 => 2,  26 => 2,  93 => 28,  88 => 23,  78 => 19,  46 => 11,  27 => 4,  44 => 6,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 46,  156 => 66,  151 => 39,  142 => 59,  138 => 54,  136 => 50,  121 => 43,  117 => 7,  105 => 41,  91 => 27,  62 => 12,  49 => 12,  24 => 1,  25 => 3,  19 => 2,  79 => 21,  72 => 16,  69 => 21,  47 => 9,  40 => 5,  37 => 8,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 51,  131 => 37,  123 => 45,  120 => 40,  115 => 56,  111 => 32,  108 => 38,  101 => 35,  98 => 28,  96 => 31,  83 => 28,  74 => 30,  66 => 20,  55 => 15,  52 => 14,  50 => 10,  43 => 8,  41 => 9,  35 => 4,  32 => 3,  29 => 5,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 49,  130 => 41,  125 => 36,  122 => 8,  116 => 33,  112 => 39,  109 => 34,  106 => 31,  103 => 40,  99 => 32,  95 => 28,  92 => 35,  86 => 23,  82 => 26,  80 => 13,  73 => 24,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 13,  48 => 12,  45 => 10,  42 => 7,  39 => 8,  36 => 7,  33 => 6,  30 => 5,);
    }
}
