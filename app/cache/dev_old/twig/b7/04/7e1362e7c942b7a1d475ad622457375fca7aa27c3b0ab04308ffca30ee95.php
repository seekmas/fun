<?php

/* McAdminBundle:Learn:index.html.twig */
class __TwigTemplate_b7047e1362e7c942b7a1d475ad622457375fca7aa27c3b0ab04308ffca30ee95 extends Twig_Template
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
        echo "添加新课程units";
    }

    // line 6
    public function block_left($context, array $blocks = array())
    {
        // line 7
        echo "\t<h3>Demo课程</h3>
\t<dl>
\t  <dt>课程清单</dt>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["units"]) ? $context["units"] : $this->getContext($context, "units")));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 11
            echo "\t\t\t  <dd><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("mc_college_learn", array("id" => $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "subject"), "html", null, true);
            echo "</a>
\t\t\t  \t\t<a href=\"\"> <i class=\"fa-pencil-square-o\"></i> </a>
\t\t\t  </dd>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t</dl>
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "
<div class=\"container\"><div class=\"row\">

<div class=\"col-md-6\">
";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unitsForm", array(), "array"), 'form_start');
        echo "

\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unitsForm", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 26
            echo "
\t\t<div class=\"control-group\">
\t\t\t<label>";
            // line 28
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'label');
            echo "</label>

\t\t\t<div class=\"controls\">
\t\t\t\t";
            // line 31
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
            echo "
\t\t\t</div>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unitsForm", array(), "array"), 'form_end');
        echo "
</div>

<div class=\"col-md-6\">



</div>

</div></div>

";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Learn:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  94 => 31,  88 => 28,  84 => 26,  80 => 25,  75 => 23,  69 => 19,  66 => 18,  61 => 15,  48 => 11,  44 => 10,  39 => 7,  36 => 6,  30 => 3,);
    }
}
