<?php

/* McCollegeBundle:Repository:index.html.twig */
class __TwigTemplate_4ca41528f6c370950c342b566d8d0c78ebe4d927a9d8fcb432d2f10eafa11001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_left($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<h4>所有课程</h4>
\t<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) ? $context["programs"] : $this->getContext($context, "programs")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 10
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_repository", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"))), "html", null, true);
            echo "\">
\t\t\t\t<i class=\"fa fa-file-text-o\"></i> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "subject"), "html", null, true);
            echo "

\t\t\t\t<i class=\"fa fa-angle-right pull-right\"></i>
\t\t\t</a> 
\t\t</li>\t\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</ul>

";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
\t
\t";
        // line 25
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "description", array(), "any", true, true)) {
            // line 26
            echo "
\t\t<p class=\"lead\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "description"), "subject"), "html", null, true);
            echo "</p>
\t\t<hr/>

\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "description"), "summary"), "html", null, true);
            echo "</p>

\t\t<p>本课程包括以下内容:</p>
\t\t<ul>
\t\t\t";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "units"));
            foreach ($context['_seq'] as $context["key"] => $context["u"]) {
                // line 35
                echo "\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
                echo " . ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "subject"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t</ul>
\t";
        } else {
            // line 39
            echo "
\t\t";
            // line 40
            echo twig_include($this->env, $context, "McCollegeBundle:Repository:about_us.html.twig");
            echo "

\t";
        }
        // line 42
        echo "\t


";
    }

    // line 47
    public function block_body_footer($context, array $blocks = array())
    {
        // line 48
        echo "
\t";
        // line 49
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "description", array(), "any", true, true)) {
            // line 50
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t        <div class=\"panel-body\">
\t\t\t\t";
            // line 54
            $this->env->loadTemplate("FOSCommentBundle:Thread:async.html.twig")->display(array_merge($context, array("id" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "description"), "id"))));
            // line 55
            echo "\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "McCollegeBundle:Repository:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  143 => 54,  137 => 50,  135 => 49,  132 => 48,  129 => 47,  122 => 42,  116 => 40,  113 => 39,  109 => 37,  96 => 35,  92 => 34,  85 => 30,  79 => 27,  76 => 26,  74 => 25,  70 => 23,  67 => 22,  61 => 18,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  33 => 6,  30 => 5,);
    }
}
