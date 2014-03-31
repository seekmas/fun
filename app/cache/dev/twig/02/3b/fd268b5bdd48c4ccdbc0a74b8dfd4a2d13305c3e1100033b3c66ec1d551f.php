<?php

/* McCollegeBundle:Default:index.html.twig */
class __TwigTemplate_023bfd268b5bdd48c4ccdbc0a74b8dfd4a2d13305c3e1100033b3c66ec1d551f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
            'body_footer' => array($this, 'block_body_footer'),
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
        echo "精创学院 - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "subject"), "html", null, true);
    }

    // line 5
    public function block_left($context, array $blocks = array())
    {
        // line 6
        echo "\t<h3>课程大纲</h3>
\t<hr/>

\t<ul class=\"nav nav-pills nav-stacked\">
\t\t
\t\t<li class=\"active\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))), "html", null, true);
        echo "\">
\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "subject"), "html", null, true);
        echo "
\t\t\t<span class=\"badge pull-right\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t\t<ul class=\"nav-small\" style=\"padding-left:0px;margin-left:0px;\">
\t\t\t\t<li>课程内容</li>
\t\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["course"]) {
            // line 19
            echo "\t\t\t\t\t";
            if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))) {
                // line 20
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-play\"></i>
\t\t\t\t\t\t\t";
                // line 23
                echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
\t<hr/>
\t<h4>其他课程</h4>
\t<ul class=\"nav nav-pills nav-stacked\">

\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) ? $context["programs"] : $this->getContext($context, "programs")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 41
            echo "
\t\t\t";
            // line 42
            if (($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id") == $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))) {
                // line 43
                echo "
\t\t\t

\t\t\t";
            } else {
                // line 47
                echo "\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t\t";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "subject"), "html", null, true);
                echo "
\t\t\t\t<span class=\"badge pull-right\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "view"), "html", null, true);
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            }
            // line 54
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t</ul>

";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "\t\t
\t
\t\t\t";
        // line 62
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            // line 63
            echo "
\t\t\t\t";
            // line 64
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McCollegeBundle:Default:play", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
            echo "

\t\t\t";
        } else {
            // line 67
            echo "\t\t\t\t
\t\t\t\t什么都没有

\t\t\t";
        }
        // line 71
        echo "
\t\t<hr/>

";
    }

    // line 77
    public function block_body_footer($context, array $blocks = array())
    {
        // line 78
        echo "<div class=\"row\">


\t<div class=\"col-md-8\">
\t<div class=\"panel panel-default\">
        <div class=\"panel-body\">
\t\t\t\t\t\t";
        // line 84
        $this->env->loadTemplate("FOSCommentBundle:Thread:async.html.twig")->display(array_merge($context, array("id" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) + 5000))));
        // line 85
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"col-md-4\">
\t\t
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "McCollegeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 85,  195 => 78,  192 => 77,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 67,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 20,  67 => 15,  63 => 15,  59 => 14,  38 => 5,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 19,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 27,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 50,  138 => 49,  136 => 56,  121 => 41,  117 => 40,  105 => 40,  91 => 28,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 23,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 33,  101 => 31,  98 => 31,  96 => 31,  83 => 25,  74 => 21,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 64,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 18,  60 => 6,  57 => 14,  54 => 10,  51 => 14,  48 => 11,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
