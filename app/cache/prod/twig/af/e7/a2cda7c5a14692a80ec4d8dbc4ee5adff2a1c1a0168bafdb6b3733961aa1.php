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
\t\t</li>

\t\t<li>
\t\t\t<ul class=\"nav-small\" style=\"padding-left:0px;margin-left:0px;\">
\t\t\t\t<li>课程内容</li>
\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["course"]) {
            // line 23
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
        // line 25
        echo "\t\t\t</ul>
\t\t</li>
\t\t
\t</ul>
\t<hr/>
\t<h4>其他课程</h4>
\t<ul class=\"nav nav-pills nav-stacked\">

\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) ? $context["programs"] : $this->getContext($context, "programs")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 34
            echo "
\t\t";
            // line 35
            if (($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id") == $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))) {
                // line 36
                echo "\t\t";
            } else {
                // line 37
                echo "\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"))), "html", null, true);
                echo "\">
\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "subject"), "html", null, true);
                echo "
\t\t\t<span class=\"badge pull-right\">";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"), "html", null, true);
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 44
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t</ul>

";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "\t
\t<h3>";
        // line 52
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
        // line 61
        $context["flag"] = 0;
        // line 62
        echo "    \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["course"]) {
            // line 63
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
            // line 72
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo "步</p>
              <p class=\"lead\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
            echo "</p>
              <p>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "outline"), "html", null, true);
            echo "</p>
\t            <dl class=\"dl-horizontal\" style=\"padding-left:20px;\">
\t            \t<dt>关键字:</dt>
\t            \t<dd>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "keywords"), "html", null, true);
            echo "</dd>
\t            \t<dt>难度:</dt>
\t            \t<dd>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "level"), "html", null, true);
            echo "</dd>
\t            \t<dt>时长:</dt>
\t            \t<dd>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "time"), "html", null, true);
            echo "</dd>
\t            \t<dt>语言:</dt> 
\t            \t<dd>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "language"), "html", null, true);
            echo "</dd>
\t            \t<dt>观看数:</dt> 
\t            \t<dd>";
            // line 85
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
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
            echo "\">学习</a>

            </div>
          </div>
        </li>

        ";
            // line 106
            $context["flag"] = ((isset($context["flag"]) ? $context["flag"] : $this->getContext($context, "flag")) + 1);
            // line 107
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        return array (  245 => 108,  239 => 107,  237 => 106,  228 => 100,  210 => 85,  205 => 83,  200 => 81,  195 => 79,  190 => 77,  184 => 74,  180 => 73,  176 => 72,  161 => 63,  156 => 62,  154 => 61,  140 => 52,  137 => 51,  134 => 50,  128 => 45,  122 => 44,  115 => 40,  111 => 39,  105 => 37,  102 => 36,  100 => 35,  97 => 34,  93 => 33,  83 => 25,  70 => 23,  66 => 22,  56 => 15,  52 => 14,  47 => 12,  39 => 6,  36 => 5,  30 => 3,);
    }
}
