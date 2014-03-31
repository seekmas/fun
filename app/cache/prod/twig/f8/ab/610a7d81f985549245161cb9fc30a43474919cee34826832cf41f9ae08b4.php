<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f8ab610a7d81f985549245161cb9fc30a43474919cee34826832cf41f9ae08b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frame.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'base' => array($this, 'block_base'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frame.html.twig";
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/css/timeline.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/css/bootstrap_pack.css"), "html", null, true);
        echo "\" />
    <style>
        body{background: url( \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/img/background.png"), "html", null, true);
        echo "\")}
    </style> 
";
    }

    // line 13
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "\t<script charset=\"utf-8\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
\t<script charset=\"utf-8\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script charset=\"utf-8\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/js/timeline.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 19
    public function block_base($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"container\"><div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                    \t";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McModuleBundle:Dashboard:show"));
        echo "
                    </div>
                </div>
            </div>

            <div class=\"col-md-8\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                    
                    ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "
                    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "                    
                    
                  </div>
                </div>
            </div>
</div></div>
";
    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  116 => 33,  106 => 36,  104 => 35,  101 => 34,  99 => 33,  87 => 24,  81 => 20,  78 => 19,  72 => 16,  68 => 15,  63 => 14,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  31 => 4,  28 => 3,);
    }
}
