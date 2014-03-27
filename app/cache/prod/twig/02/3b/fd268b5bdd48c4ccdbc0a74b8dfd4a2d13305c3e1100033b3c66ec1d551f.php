<?php

/* McCollegeBundle:Default:index.html.twig */
class __TwigTemplate_023bfd268b5bdd48c4ccdbc0a74b8dfd4a2d13305c3e1100033b3c66ec1d551f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
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
    public function block_left($context, array $blocks = array())
    {
        // line 4
        echo "\t<h3>课程大纲</h3>
\t<hr/>

\t<ul class=\"nav nav-pills nav-stacked\">
\t\t
\t\t<li class=\"active\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))), "html", null, true);
        echo "\">
\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "subject"), "html", null, true);
        echo "
\t\t\t<span class=\"badge pull-right\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t\t<ul class=\"nav-small\" style=\"padding-left:0px;margin-left:0px;\">
\t\t\t\t<li>课程内容</li>
\t\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["course"]) {
            // line 17
            echo "\t\t\t\t\t";
            if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))) {
                // line 18
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-play\"></i>
\t\t\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "subject"), "html", null, true);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</ul>
\t\t</li>
\t</ul>
\t<hr/>
\t<h4>其他课程</h4>
\t<ul class=\"nav nav-pills nav-stacked\">

\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) ? $context["programs"] : $this->getContext($context, "programs")));
        foreach ($context['_seq'] as $context["_key"] => $context["program"]) {
            // line 39
            echo "
\t\t\t";
            // line 40
            if (($this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id") == $this->getAttribute((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")), "id"))) {
                // line 41
                echo "


\t\t\t";
            } else {
                // line 45
                echo "\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_program", array("id" => $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"fa fa-play-circle-o\"></i>  
\t\t\t\t";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "subject"), "html", null, true);
                echo "
\t\t\t\t<span class=\"badge pull-right\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["program"]) ? $context["program"] : $this->getContext($context, "program")), "id"), "html", null, true);
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
            }
            // line 52
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['program'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</ul>

";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "\t\t
\t
\t\t\t";
        // line 60
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            // line 61
            echo "
\t\t\t\t";
            // line 62
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McCollegeBundle:Default:play", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
            echo "

\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t
\t\t\t\t什么都没有

\t\t\t";
        }
        // line 69
        echo "
\t\t<hr/>
\t\t<div class=\"col-md-8\">
\t\t\tFOSCommentBundle
\t\t</div>\t
\t\t<div class=\"col-md-4\">
\t\t\t分享到 SinaBundle
\t\t</div>


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
        return array (  176 => 69,  170 => 65,  164 => 62,  161 => 61,  159 => 60,  155 => 58,  152 => 57,  146 => 53,  140 => 52,  133 => 48,  129 => 47,  123 => 45,  117 => 41,  115 => 40,  112 => 39,  108 => 38,  99 => 31,  92 => 29,  82 => 26,  79 => 25,  70 => 21,  65 => 19,  62 => 18,  59 => 17,  55 => 16,  48 => 12,  44 => 11,  39 => 9,  32 => 4,  29 => 3,);
    }
}
