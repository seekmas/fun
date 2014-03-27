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
        return array (  203 => 84,  197 => 83,  195 => 82,  187 => 77,  179 => 72,  175 => 71,  160 => 62,  155 => 61,  153 => 60,  139 => 51,  136 => 50,  133 => 49,  127 => 44,  121 => 43,  114 => 39,  110 => 38,  104 => 36,  101 => 35,  99 => 34,  96 => 33,  92 => 32,  83 => 25,  70 => 23,  66 => 22,  56 => 15,  52 => 14,  47 => 12,  39 => 6,  36 => 5,  30 => 3,);
    }
}
