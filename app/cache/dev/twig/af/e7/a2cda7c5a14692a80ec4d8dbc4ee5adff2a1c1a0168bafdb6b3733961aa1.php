<?php

/* McCollegeBundle:Program:index.html.twig */
class __TwigTemplate_afe7a2cda7c5a14692a80ec4d8dbc4ee5adff2a1c1a0168bafdb6b3733961aa1 extends Twig_Template
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
        echo "McCollegeBundle:Program:index";
    }

    // line 5
    public function block_left($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<h3>课程大纲</h3>
\t<hr/>

\t<ul class=\"nav nav-pills nav-stacked\">
\t\t
\t\t<li class=\"active\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))), "html", null, true);
        echo "\">
\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "subject"), "html", null, true);
        echo "
\t\t\t<span class=\"badge pull-right\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<ul class=\"nav-small\" style=\"padding-left:0px;margin-left:0px;\">
\t\t\t\t\t<li>课程内容</li>
\t\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["course"]) {
            // line 23
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t</ul>
\t\t\t</li>
\t</ul>
\t<hr/>
\t<h4>其他课程</h4>
\t<ul class=\"nav nav-pills nav-stacked\">

\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) ? $context["programs"] : $this->getContext($context, "programs")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 33
            echo "
\t\t";
            // line 34
            if (($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id") == $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))) {
                // line 35
                echo "\t\t";
            } else {
                // line 36
                echo "\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"))), "html", null, true);
                echo "\">
\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "subject"), "html", null, true);
                echo "
\t\t\t<span class=\"badge pull-right\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"), "html", null, true);
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 43
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t</ul>

";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "\t
\t<h3>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "subject"), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "summary"), "html", null, true);
        echo "</small></h3>
\t<hr/>


\t<div class=\"col-md-12\">
    <div class=\"page-header text-center\">
        <h1 id=\"timeline\">course Line</h1>
    </div>
    <ul class=\"timeline\">
    \t";
        // line 60
        $context["flag"] = 0;
        // line 61
        echo "    \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 62
            echo "        <li ";
            if (((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) % 2)) {
                echo "class=\"timeline-inverted\"";
            }
            echo ">
          <div class=\"timeline-badge primary\">
          <a><i class=\"glyphicon glyphicon-record\" rel=\"tooltip\" title=\"here we go\" id=\"\"></i></a>
          </div>
          <div class=\"timeline-panel\">
            <div class=\"timeline-heading\">
              \t
            </div>
            <div class=\"timeline-body\">
              <p class=\"lead\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
            echo "</p>
              <p>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "outline"), "html", null, true);
            echo "</p>
            </div>
            
            <div class=\"timeline-footer\">
                <a><i class=\"glyphicon glyphicon-thumbs-up\"></i> 分享</a>
                <a class=\"btn btn-primary btn-sm pull-right\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">学习</a>
            </div>
          </div>
        </li>

        ";
            // line 82
            $context["flag"] = ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) + 1);
            // line 83
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        
        <li class=\"clearfix\" style=\"float: none;\"></li>
    </ul>

</div>
";
    }

    public function getTemplateName()
    {
        return "McCollegeBundle:Program:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 83,  195 => 82,  175 => 71,  160 => 62,  153 => 60,  114 => 39,  110 => 38,  104 => 36,  76 => 23,  127 => 44,  53 => 17,  77 => 17,  34 => 4,  170 => 65,  161 => 61,  155 => 61,  152 => 57,  146 => 53,  129 => 47,  70 => 23,  65 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 60,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 7,  63 => 20,  59 => 19,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 50,  121 => 43,  117 => 7,  105 => 41,  91 => 27,  62 => 18,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 24,  72 => 15,  69 => 23,  47 => 12,  40 => 15,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 51,  131 => 52,  123 => 45,  120 => 40,  115 => 40,  111 => 5,  108 => 38,  101 => 35,  98 => 37,  96 => 33,  83 => 25,  74 => 14,  66 => 22,  55 => 17,  52 => 14,  50 => 12,  43 => 8,  41 => 8,  35 => 7,  32 => 5,  29 => 4,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 41,  125 => 44,  122 => 8,  116 => 41,  112 => 39,  109 => 34,  106 => 36,  103 => 40,  99 => 34,  95 => 28,  92 => 32,  86 => 28,  82 => 26,  80 => 19,  73 => 24,  64 => 17,  60 => 15,  57 => 18,  54 => 10,  51 => 16,  48 => 12,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
