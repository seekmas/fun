<?php

/* McAdminBundle:Unit:new.html.twig */
class __TwigTemplate_d029dd5fb41946f912c853d5af3fada957e3c6dbc4a14029e13eab056188e182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>创建课程页面</h1>


    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    \t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 10
            echo "
    \t\t<div class=\"control-group\">

    \t\t\t<label>";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")), 'label');
            echo "</label>
    \t\t\t<div class=\"controls\">
    \t\t\t\t";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input"]) ? $context["input"] : $this->getContext($context, "input")), 'widget');
            echo "
    \t\t\t</div>
    \t\t</div>

    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin_unit");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Unit:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  69 => 21,  66 => 20,  55 => 15,  50 => 13,  45 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,);
    }
}
