<?php

/* McCollegeBundle:Portal:index.html.twig */
class __TwigTemplate_9ce690b5ee19d196b93185f1f68748a5f12f0c155ec83b4e46fa3c25ed425da1 extends Twig_Template
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
        echo "精益创业云学院";
    }

    // line 5
    public function block_left($context, array $blocks = array())
    {
        // line 6
        echo "\t\t
\t<h4>所有课程</h4>
\t<hr/>

\t<ul class=\"nav nav-pills nav-stacked\">
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) ? $context["programs"] : $this->getContext($context, "programs")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 12
            echo "\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"))), "html", null, true);
            echo "\">
\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "subject"), "html", null, true);
            echo "
\t\t\t<span class=\"badge pull-right\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "view"), "html", null, true);
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</ul>

";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "<h1>进行中的学习目标</h1>
\t
\t

";
    }

    public function getTemplateName()
    {
        return "McCollegeBundle:Portal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  104 => 26,  84 => 7,  77 => 18,  58 => 19,  53 => 15,  34 => 4,  65 => 16,  191 => 75,  184 => 71,  178 => 67,  172 => 64,  167 => 62,  160 => 59,  148 => 54,  137 => 49,  100 => 31,  90 => 28,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 55,  132 => 51,  128 => 49,  107 => 33,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 8,  63 => 18,  59 => 14,  38 => 8,  94 => 9,  89 => 8,  85 => 25,  75 => 17,  68 => 14,  56 => 14,  87 => 27,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 5,  46 => 11,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 19,  24 => 4,  25 => 1,  19 => 1,  79 => 24,  72 => 27,  69 => 17,  47 => 11,  40 => 15,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 47,  123 => 42,  120 => 41,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 13,  50 => 12,  43 => 8,  41 => 9,  35 => 5,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 58,  144 => 49,  141 => 50,  133 => 55,  130 => 41,  125 => 43,  122 => 43,  116 => 40,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 21,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 21,  64 => 22,  60 => 15,  57 => 14,  54 => 10,  51 => 16,  48 => 13,  45 => 8,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
