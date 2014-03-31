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
        return array (  205 => 85,  203 => 84,  195 => 78,  192 => 77,  185 => 71,  179 => 67,  173 => 64,  170 => 63,  168 => 62,  164 => 60,  161 => 59,  155 => 55,  149 => 54,  142 => 50,  138 => 49,  132 => 47,  126 => 43,  124 => 42,  121 => 41,  117 => 40,  108 => 33,  101 => 31,  91 => 28,  88 => 27,  79 => 23,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  57 => 14,  53 => 13,  48 => 11,  41 => 6,  38 => 5,  31 => 3,);
    }
}
