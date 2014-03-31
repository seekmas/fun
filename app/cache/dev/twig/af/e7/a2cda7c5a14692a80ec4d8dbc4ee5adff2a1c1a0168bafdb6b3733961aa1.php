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
        echo "精创学院 - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "subject"), "html", null, true);
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
\t\t\t</a>
\t\t</li>

\t\t<li>
\t\t\t<ul class=\"nav-small\" style=\"padding-left:0px;margin-left:0px;\">
\t\t\t\t<li>课程内容</li>
\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["course"]) {
            // line 22
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t</ul>
\t\t</li>
\t\t
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "view"), "html", null, true);
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
        <h1 id=\"timeline\">本课程学习计划</h1>
    </div>
    <ul class=\"timeline\">
    \t";
        // line 60
        $context["flag"] = 0;
        // line 61
        echo "    \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["course"]) {
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
              <p class=\"lead\">第";
            // line 71
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo "步</p>
              <p class=\"lead\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
            echo "</p>
              <p>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "outline"), "html", null, true);
            echo "</p>
\t            <dl class=\"dl-horizontal\" style=\"padding-left:20px;\">
\t            \t<dt>关键字:</dt>
\t            \t<dd>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "keywords"), "html", null, true);
            echo "</dd>
\t            \t<dt>难度:</dt>
\t            \t<dd>";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "level")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "<span class=\"glyphicon glyphicon-star\"></span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</dd>
\t            \t<dt>时长:</dt>
\t            \t<dd>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "time"), "html", null, true);
            echo "</dd>
\t            \t<dt>语言:</dt> 
\t            \t<dd>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "language"), "html", null, true);
            echo "</dd>
\t            \t<dt>观看数:</dt> 
\t            \t<dd>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "view"), "html", null, true);
            echo "</dd>
\t            </dl>
            </div>
            
            <div class=\"timeline-footer\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t  <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
\t\t\t\t    操作 <span class=\"caret\"></span>
\t\t\t\t  </button>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t  \t\t<li><a href=\"#\">收藏</a></li>
\t\t\t\t  \t\t<li><a href=\"#\">分享</a></li>
\t\t\t\t  </ul>
\t\t\t\t</div>
                
            \t<a class=\"btn btn-primary btn-sm pull-right\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">学习</a>

            </div>
          </div>
        </li>

        ";
            // line 105
            $context["flag"] = ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) + 1);
            // line 106
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
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
        return array (  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 51,  134 => 50,  97 => 34,  110 => 23,  100 => 9,  90 => 32,  84 => 5,  76 => 23,  70 => 19,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 56,  135 => 53,  119 => 43,  102 => 36,  71 => 20,  67 => 22,  63 => 21,  59 => 17,  38 => 5,  94 => 33,  89 => 20,  85 => 25,  75 => 17,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 22,  78 => 29,  46 => 11,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 49,  136 => 56,  121 => 41,  117 => 40,  105 => 13,  91 => 22,  62 => 23,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 31,  98 => 31,  96 => 31,  83 => 18,  74 => 21,  66 => 23,  55 => 15,  52 => 13,  50 => 12,  43 => 9,  41 => 8,  35 => 4,  32 => 5,  29 => 4,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 39,  109 => 34,  106 => 36,  103 => 32,  99 => 35,  95 => 8,  92 => 21,  86 => 21,  82 => 22,  80 => 24,  73 => 8,  64 => 22,  60 => 15,  57 => 18,  54 => 14,  51 => 14,  48 => 12,  45 => 10,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
