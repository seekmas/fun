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
        $context['_seq'] = twig_ensure_traversable((isset($context["navigator"]) ? $context["navigator"] : $this->getContext($context, "navigator")));
        foreach ($context['_seq'] as $context["key"] => $context["n"]) {
            // line 7
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")));
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
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
        return array (  20 => 1,  81 => 34,  137 => 52,  100 => 32,  90 => 30,  197 => 83,  195 => 82,  175 => 71,  160 => 62,  153 => 60,  114 => 39,  110 => 38,  104 => 33,  76 => 25,  127 => 44,  53 => 18,  77 => 23,  34 => 4,  170 => 65,  161 => 61,  155 => 61,  152 => 57,  146 => 53,  129 => 46,  70 => 29,  65 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 60,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 26,  63 => 15,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 38,  75 => 17,  68 => 16,  56 => 15,  87 => 29,  21 => 2,  26 => 2,  93 => 28,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 50,  121 => 43,  117 => 7,  105 => 41,  91 => 27,  62 => 14,  49 => 12,  24 => 1,  25 => 3,  19 => 1,  79 => 24,  72 => 15,  69 => 21,  47 => 9,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 51,  131 => 52,  123 => 45,  120 => 40,  115 => 56,  111 => 37,  108 => 38,  101 => 35,  98 => 45,  96 => 31,  83 => 28,  74 => 30,  66 => 20,  55 => 15,  52 => 14,  50 => 13,  43 => 8,  41 => 9,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 41,  125 => 44,  122 => 8,  116 => 39,  112 => 39,  109 => 34,  106 => 50,  103 => 40,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 26,  80 => 29,  73 => 24,  64 => 17,  60 => 22,  57 => 11,  54 => 10,  51 => 11,  48 => 8,  45 => 10,  42 => 7,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
