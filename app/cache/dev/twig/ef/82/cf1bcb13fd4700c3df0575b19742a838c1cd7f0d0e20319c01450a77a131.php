<?php

/* ::bootstrap3.html.twig */
class __TwigTemplate_ef82cf1bcb13fd4700c3df0575b19742a838c1cd7f0d0e20319c01450a77a131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/css/bootstrap-theme.css"), "html", null, true);
        echo "\" />    
";
    }

    // line 8
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "\t<script charset=\"utf-8\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<script charset=\"utf-8\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::bootstrap3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  120 => 47,  114 => 43,  101 => 36,  96 => 34,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  57 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,);
    }
}
