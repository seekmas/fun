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
        return array (  81 => 20,  110 => 58,  96 => 53,  23 => 3,  20 => 1,  146 => 66,  129 => 55,  74 => 45,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 82,  197 => 80,  192 => 78,  181 => 73,  153 => 61,  134 => 50,  97 => 32,  76 => 46,  104 => 35,  84 => 28,  77 => 24,  58 => 12,  53 => 9,  34 => 4,  65 => 16,  191 => 75,  184 => 71,  178 => 67,  172 => 64,  167 => 62,  160 => 59,  148 => 54,  137 => 60,  120 => 41,  100 => 31,  90 => 32,  70 => 20,  52 => 13,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 72,  169 => 63,  140 => 55,  132 => 51,  128 => 42,  111 => 37,  107 => 33,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 49,  119 => 48,  108 => 38,  102 => 56,  71 => 19,  67 => 22,  63 => 14,  59 => 13,  47 => 9,  38 => 8,  94 => 33,  89 => 8,  85 => 38,  79 => 24,  75 => 17,  68 => 15,  56 => 14,  50 => 13,  29 => 3,  87 => 24,  72 => 16,  55 => 15,  21 => 2,  26 => 2,  98 => 36,  93 => 28,  88 => 30,  78 => 19,  46 => 14,  27 => 4,  40 => 5,  44 => 6,  35 => 4,  31 => 4,  43 => 8,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 66,  151 => 60,  142 => 59,  138 => 53,  136 => 56,  123 => 42,  121 => 35,  117 => 40,  115 => 37,  105 => 40,  101 => 34,  91 => 32,  69 => 21,  66 => 20,  62 => 14,  49 => 9,  24 => 4,  32 => 3,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 59,  154 => 55,  149 => 51,  147 => 58,  144 => 49,  141 => 50,  133 => 55,  130 => 47,  125 => 44,  122 => 40,  116 => 33,  112 => 44,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 28,  92 => 52,  86 => 49,  82 => 48,  80 => 29,  73 => 22,  64 => 22,  60 => 13,  57 => 14,  54 => 31,  51 => 11,  48 => 7,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
