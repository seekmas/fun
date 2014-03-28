<?php

/* McAdminBundle:Unit:edit.html.twig */
class __TwigTemplate_01cb42285c7cce1ace91489e65b3725aeb43b4bc733f317fc0f7f01e8124f9bc extends Twig_Template
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
        echo "<h1>Unit edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

    \t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 9
            echo "    \t<div class=\"control-group\">
    \t\t<label>";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), 'label');
            echo "</label>
    \t\t<div class=\"controls\">";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), 'widget');
            echo "</div>
    \t</div>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_unit");
        echo "\">
        返回页面列表
    </a>


    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Unit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  69 => 18,  63 => 15,  60 => 14,  51 => 11,  47 => 10,  44 => 9,  40 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
