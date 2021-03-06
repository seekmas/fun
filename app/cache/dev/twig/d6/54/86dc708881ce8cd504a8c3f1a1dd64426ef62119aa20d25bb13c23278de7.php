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
    
    <body style=\"margin-bottom:40px;\">        
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
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

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 15
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
        return array (  65 => 20,  104 => 35,  81 => 24,  34 => 9,  23 => 4,  20 => 1,  146 => 66,  77 => 13,  58 => 11,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 26,  110 => 58,  100 => 9,  90 => 32,  84 => 25,  76 => 46,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 37,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 31,  61 => 5,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 42,  143 => 54,  135 => 49,  119 => 48,  102 => 56,  71 => 23,  67 => 7,  63 => 14,  59 => 18,  38 => 6,  94 => 33,  89 => 26,  85 => 25,  75 => 17,  68 => 22,  56 => 16,  87 => 24,  21 => 2,  26 => 2,  93 => 25,  88 => 24,  78 => 18,  46 => 14,  27 => 5,  44 => 6,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 48,  158 => 62,  156 => 41,  151 => 49,  142 => 43,  138 => 53,  136 => 56,  121 => 36,  117 => 40,  105 => 40,  91 => 32,  62 => 20,  49 => 14,  24 => 1,  25 => 3,  19 => 2,  79 => 26,  72 => 8,  69 => 21,  47 => 12,  40 => 9,  37 => 8,  22 => 3,  246 => 90,  157 => 56,  145 => 55,  139 => 41,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 34,  98 => 36,  96 => 53,  83 => 18,  74 => 24,  66 => 13,  55 => 16,  52 => 8,  50 => 14,  43 => 8,  41 => 11,  35 => 7,  32 => 3,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 48,  147 => 58,  144 => 49,  141 => 48,  133 => 40,  130 => 47,  125 => 44,  122 => 42,  116 => 35,  112 => 34,  109 => 37,  106 => 36,  103 => 29,  99 => 33,  95 => 33,  92 => 32,  86 => 23,  82 => 15,  80 => 29,  73 => 22,  64 => 22,  60 => 17,  57 => 18,  54 => 16,  51 => 14,  48 => 13,  45 => 10,  42 => 10,  39 => 9,  36 => 8,  33 => 6,  30 => 5,);
    }
}
