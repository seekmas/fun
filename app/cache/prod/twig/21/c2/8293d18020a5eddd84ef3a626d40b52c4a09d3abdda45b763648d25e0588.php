<?php

/* McModuleBundle:Dashboard:show.html.twig */
class __TwigTemplate_21c28293d18020a5eddd84ef3a626d40b52c4a09d3abdda45b763648d25e0588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "
\t

<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigator"]) ? $context["navigator"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["n"]) {
            // line 7
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl((isset($context["n"]) ? $context["n"] : null));
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>



";
    }

    public function getTemplateName()
    {
        return "McModuleBundle:Dashboard:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  146 => 66,  129 => 55,  74 => 26,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 82,  197 => 80,  192 => 78,  181 => 73,  153 => 61,  134 => 50,  97 => 32,  76 => 25,  104 => 26,  84 => 28,  77 => 24,  58 => 12,  53 => 9,  34 => 4,  65 => 16,  191 => 75,  184 => 71,  178 => 67,  172 => 64,  167 => 62,  160 => 59,  148 => 54,  137 => 60,  120 => 41,  100 => 31,  90 => 32,  70 => 20,  52 => 13,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 72,  169 => 63,  140 => 55,  132 => 51,  128 => 42,  111 => 37,  107 => 33,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 49,  119 => 48,  108 => 38,  102 => 35,  71 => 19,  67 => 22,  63 => 15,  59 => 13,  47 => 9,  38 => 8,  94 => 33,  89 => 8,  85 => 38,  79 => 24,  75 => 17,  68 => 14,  56 => 14,  50 => 13,  29 => 3,  87 => 27,  72 => 21,  55 => 15,  21 => 2,  26 => 2,  98 => 36,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 4,  40 => 7,  44 => 9,  35 => 6,  31 => 4,  43 => 8,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 66,  151 => 60,  142 => 59,  138 => 53,  136 => 56,  123 => 42,  121 => 46,  117 => 40,  115 => 37,  105 => 40,  101 => 33,  91 => 32,  69 => 21,  66 => 20,  62 => 14,  49 => 9,  24 => 4,  32 => 6,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 59,  154 => 55,  149 => 51,  147 => 58,  144 => 49,  141 => 50,  133 => 55,  130 => 47,  125 => 44,  122 => 40,  116 => 40,  112 => 44,  109 => 34,  106 => 33,  103 => 32,  99 => 40,  95 => 28,  92 => 32,  86 => 28,  82 => 26,  80 => 29,  73 => 22,  64 => 22,  60 => 22,  57 => 14,  54 => 10,  51 => 11,  48 => 10,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
