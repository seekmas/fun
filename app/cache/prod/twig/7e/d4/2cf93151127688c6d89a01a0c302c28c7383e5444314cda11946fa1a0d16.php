<?php

/* McSettingBundle:Avatar:index.html.twig */
class __TwigTemplate_7ed42cf93151127688c6d89a01a0c302c28c7383e5444314cda11946fa1a0d16 extends Twig_Template
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
        echo "McSettingBundle:Avatar:index";
    }

    // line 8
    public function block_left($context, array $blocks = array())
    {
        // line 9
        echo "\t\t
\t";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McModuleBundle:Dashboard:show"));
        echo "

";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
<h3>设置 ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " 的形象 <small>做一个有身份的大人物</small> </h3>

<div class=\"badger-left badger-info\" data-badger=\"个人照片\">
\t<div class=\"row\">
\t\t
\t\t<div class=\"col-md-6\">
\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar")), "html", null, true);
        echo "\" />
\t\t</div>

\t\t<div class=\"col-md-6\">
\t\t";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McSettingBundle:Avatar:photo"));
        echo "
\t\t</div>
\t</div>
</div>

<div class=\"badger-left badger-info\" data-badger=\"个人经历\">
\t\tBlock with badger 1
</div>

<div class=\"badger-left badger-info\" data-badger=\"技能\">
\t\t
</div>

<div class=\"badger-left badger-info\" data-badger=\"Location\">
\t\t
</div>

";
    }

    public function getTemplateName()
    {
        return "McSettingBundle:Avatar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  64 => 22,  55 => 16,  52 => 15,  49 => 14,  42 => 10,  39 => 9,  36 => 8,  30 => 3,);
    }
}
