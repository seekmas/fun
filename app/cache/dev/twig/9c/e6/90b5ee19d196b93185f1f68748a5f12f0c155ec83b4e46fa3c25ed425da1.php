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
        return array (  79 => 24,  76 => 23,  70 => 19,  60 => 15,  56 => 14,  50 => 12,  46 => 11,  39 => 6,  36 => 5,  30 => 3,);
    }
}
