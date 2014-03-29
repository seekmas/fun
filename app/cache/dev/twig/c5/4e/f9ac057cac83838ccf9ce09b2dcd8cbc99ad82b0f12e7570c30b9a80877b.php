<?php

/* ::base.html.twig */
class __TwigTemplate_c54ef9ac057cac83838ccf9ce09b2dcd8cbc99ad82b0f12e7570c30b9a80877b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frame.html.twig");

        $this->blocks = array(
            'base' => array($this, 'block_base'),
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_base($context, array $blocks = array())
    {
        // line 4
        echo "            <div class=\"col-md-4\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 7
        $this->displayBlock('left', $context, $blocks);
        // line 8
        echo "                    </div>
                </div>
            </div>

            <div class=\"col-md-8\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "                    
                    ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "
                  </div>
                </div>
            </div>

        </div></div>
";
    }

    // line 7
    public function block_left($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  34 => 4,  170 => 65,  161 => 61,  155 => 58,  152 => 57,  146 => 53,  129 => 47,  70 => 21,  65 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 7,  63 => 15,  59 => 17,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 41,  105 => 40,  91 => 27,  62 => 18,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 15,  69 => 17,  47 => 9,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 45,  120 => 40,  115 => 40,  111 => 37,  108 => 38,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 17,  52 => 16,  50 => 15,  43 => 8,  41 => 8,  35 => 5,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 48,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 39,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 26,  80 => 19,  73 => 19,  64 => 17,  60 => 15,  57 => 18,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
