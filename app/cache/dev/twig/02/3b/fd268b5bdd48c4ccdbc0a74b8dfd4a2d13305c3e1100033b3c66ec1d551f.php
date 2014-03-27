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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "
<div class=\"list-group\">
  <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_homepage", array("id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"))), "html", null, true);
            echo "\" class=\"list-group-item ";
            if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id"))) {
                echo "active";
            }
            echo "\">
    <h5 class=\"list-group-item-heading\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "subject"), "html", null, true);
            echo "</h5>
    <p class=\"list-group-item-text\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "outline"), "html", null, true);
            echo "</p>
  </a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t\t
\t<div class=\"container\"><div class=\"row\">

\t<div class=\"col-md-6\">
\t\t";
        // line 21
        if ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            // line 22
            echo "
\t\t\t";
            // line 23
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McCollegeBundle:Default:play", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
            echo "

\t\t";
        } else {
            // line 26
            echo "\t\t\t
\t\t\t什么都没有

\t\t";
        }
        // line 30
        echo "\t</div>

\t<div class=\"col-md-6\">
\t\t
\t\tCommenthere

\t</div>

\t</div></div>

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
        return array (  91 => 30,  85 => 26,  79 => 23,  76 => 22,  74 => 21,  68 => 17,  65 => 16,  52 => 9,  48 => 8,  40 => 7,  36 => 5,  32 => 4,  29 => 3,);
    }
}
