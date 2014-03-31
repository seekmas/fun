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
        return array (  129 => 47,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 50,  134 => 50,  97 => 34,  110 => 23,  100 => 9,  90 => 32,  84 => 5,  76 => 26,  70 => 23,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 54,  135 => 49,  119 => 43,  102 => 36,  71 => 20,  67 => 22,  63 => 21,  59 => 17,  38 => 9,  94 => 33,  89 => 20,  85 => 30,  75 => 17,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 22,  78 => 29,  46 => 11,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 49,  136 => 56,  121 => 41,  117 => 40,  105 => 13,  91 => 22,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 16,  69 => 25,  47 => 9,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 31,  98 => 31,  96 => 35,  83 => 18,  74 => 25,  66 => 23,  55 => 15,  52 => 13,  50 => 12,  43 => 9,  41 => 8,  35 => 4,  32 => 5,  29 => 4,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 42,  116 => 40,  112 => 39,  109 => 37,  106 => 36,  103 => 32,  99 => 35,  95 => 8,  92 => 34,  86 => 21,  82 => 22,  80 => 24,  73 => 8,  64 => 22,  60 => 15,  57 => 18,  54 => 14,  51 => 14,  48 => 12,  45 => 11,  42 => 10,  39 => 6,  36 => 5,  33 => 6,  30 => 5,);
    }
}
