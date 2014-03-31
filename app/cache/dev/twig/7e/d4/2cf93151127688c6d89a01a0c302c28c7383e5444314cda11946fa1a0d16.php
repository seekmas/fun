<?php

/* McSettingBundle:Avatar:index.html.twig */
class __TwigTemplate_7ed42cf93151127688c6d89a01a0c302c28c7383e5444314cda11946fa1a0d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::bootstrap3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "McSettingBundle:Avatar:index";
    }

    // line 8
    public function block_left($context, array $blocks = array())
    {
        // line 9
        echo "\t\t
\t";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McModuleBundle:Dashboard:show"));
        echo "

";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
<h3>设置 ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " 的形象 <small>做一个有身份的大人物</small> </h3>

<div class=\"badger-left badger-info\" data-badger=\"个人照片\">
\t\t
\t";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McSettingBundle:Avatar:photo"));
        echo "

</div>

<div class=\"badger-left badger-info\" data-badger=\"个人经历\">
\t\tBlock with badger 1
</div>

<div class=\"badger-left badger-info\" data-badger=\"技能\">
\t\t
</div>

<div class=\"badger-left badger-info\" data-badger=\"Location\">
\t\t
</div>

";
    }

    public function getTemplateName()
    {
        return "McSettingBundle:Avatar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  20 => 1,  146 => 66,  77 => 24,  58 => 12,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 32,  110 => 58,  100 => 9,  90 => 32,  84 => 28,  76 => 46,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 54,  135 => 49,  119 => 48,  102 => 56,  71 => 20,  67 => 22,  63 => 15,  59 => 13,  38 => 9,  94 => 33,  89 => 20,  85 => 38,  75 => 17,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 2,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 53,  136 => 56,  121 => 41,  117 => 40,  105 => 40,  91 => 32,  62 => 20,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 21,  69 => 21,  47 => 9,  40 => 7,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 33,  98 => 36,  96 => 53,  83 => 18,  74 => 45,  66 => 20,  55 => 16,  52 => 15,  50 => 13,  43 => 8,  41 => 9,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 47,  125 => 44,  122 => 42,  116 => 40,  112 => 44,  109 => 37,  106 => 36,  103 => 32,  99 => 40,  95 => 8,  92 => 52,  86 => 49,  82 => 48,  80 => 29,  73 => 8,  64 => 22,  60 => 22,  57 => 18,  54 => 31,  51 => 14,  48 => 12,  45 => 10,  42 => 10,  39 => 9,  36 => 8,  33 => 6,  30 => 3,);
    }
}