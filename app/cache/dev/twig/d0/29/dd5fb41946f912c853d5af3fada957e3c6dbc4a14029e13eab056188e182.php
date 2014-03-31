<?php

/* McAdminBundle:Unit:new.html.twig */
class __TwigTemplate_d029dd5fb41946f912c853d5af3fada957e3c6dbc4a14029e13eab056188e182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>创建课程页面</h1>


    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    \t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 10
            echo "
    \t\t<div class=\"control-group\">

    \t\t\t<label>";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")), 'label');
            echo "</label>
    \t\t\t<div class=\"controls\">
    \t\t\t\t";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")), 'widget');
            echo "
    \t\t\t</div>
    \t\t</div>

    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_unit");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Unit:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  129 => 47,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 50,  134 => 50,  97 => 32,  110 => 23,  100 => 9,  90 => 32,  84 => 29,  76 => 25,  70 => 29,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 54,  135 => 49,  119 => 43,  102 => 36,  71 => 20,  67 => 22,  63 => 15,  59 => 15,  38 => 9,  94 => 33,  89 => 20,  85 => 38,  75 => 17,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 53,  136 => 56,  121 => 41,  117 => 40,  105 => 34,  91 => 31,  62 => 16,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 21,  69 => 21,  47 => 9,  40 => 7,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 33,  98 => 31,  96 => 35,  83 => 18,  74 => 26,  66 => 20,  55 => 15,  52 => 13,  50 => 13,  43 => 8,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 47,  125 => 44,  122 => 42,  116 => 40,  112 => 38,  109 => 37,  106 => 36,  103 => 32,  99 => 40,  95 => 8,  92 => 32,  86 => 21,  82 => 22,  80 => 29,  73 => 8,  64 => 22,  60 => 22,  57 => 18,  54 => 14,  51 => 14,  48 => 12,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
