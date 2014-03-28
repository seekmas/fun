<?php

/* McAdminBundle:Program:new.html.twig */
class __TwigTemplate_93e43e898b60b01cdbc195d89564f3defa3bd65183f9da20a1a64471ca4747f6 extends Twig_Template
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
        echo "<h1>Program creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    \t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 9
            echo "
    \t\t<div class=\"control-group\">

    \t\t\t<label>";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), 'label');
            echo "</label>

    \t\t\t<div class=\"controls\">
    \t\t\t\t";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), 'widget');
            echo "
    \t\t\t</div>
    \t\t</div>

    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_program");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Program:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 83,  195 => 82,  175 => 71,  160 => 62,  153 => 60,  114 => 39,  110 => 38,  104 => 36,  76 => 25,  127 => 44,  53 => 19,  77 => 17,  34 => 4,  170 => 65,  161 => 61,  155 => 61,  152 => 57,  146 => 53,  129 => 47,  70 => 23,  65 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 60,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 22,  63 => 21,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 17,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 50,  121 => 43,  117 => 7,  105 => 41,  91 => 27,  62 => 18,  49 => 12,  24 => 1,  25 => 3,  19 => 1,  79 => 24,  72 => 15,  69 => 21,  47 => 12,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 51,  131 => 52,  123 => 45,  120 => 40,  115 => 40,  111 => 5,  108 => 38,  101 => 35,  98 => 37,  96 => 33,  83 => 25,  74 => 26,  66 => 20,  55 => 15,  52 => 14,  50 => 18,  43 => 8,  41 => 8,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 41,  125 => 44,  122 => 8,  116 => 41,  112 => 39,  109 => 34,  106 => 36,  103 => 40,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 26,  80 => 29,  73 => 24,  64 => 17,  60 => 15,  57 => 18,  54 => 10,  51 => 16,  48 => 12,  45 => 8,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
