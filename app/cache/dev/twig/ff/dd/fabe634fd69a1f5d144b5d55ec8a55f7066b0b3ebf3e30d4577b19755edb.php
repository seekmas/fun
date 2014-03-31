<?php

/* FOSCommentBundle:Thread:new.html.twig */
class __TwigTemplate_ffddfabe634fd69a1f5d144b5d55ec8a55f7066b0b3ebf3e30d4577b19755edb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<form class=\"fos_comment_comment_form\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("fos_comment_post_threads");
        echo "\" method=\"POST\">

    ";
        // line 14
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 23
        echo "
    <div class=\"fos_comment_submit\">
        ";
        // line 25
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 28
        echo "    </div>

</form>
";
    }

    // line 14
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id"), 'widget');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permalink"), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permalink"), 'widget');
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
    }

    // line 25
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 26
        echo "            <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
        ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  232 => 63,  226 => 61,  223 => 60,  216 => 54,  190 => 47,  180 => 43,  118 => 23,  170 => 40,  165 => 75,  113 => 55,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  124 => 25,  81 => 47,  110 => 45,  23 => 4,  20 => 1,  146 => 66,  129 => 37,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 50,  197 => 80,  192 => 78,  181 => 81,  153 => 61,  134 => 39,  97 => 55,  76 => 16,  104 => 34,  84 => 48,  77 => 28,  58 => 58,  53 => 16,  34 => 17,  65 => 24,  191 => 75,  184 => 90,  178 => 80,  172 => 41,  167 => 76,  160 => 37,  148 => 46,  137 => 30,  100 => 33,  90 => 33,  70 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 69,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  243 => 88,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  119 => 34,  102 => 50,  71 => 23,  67 => 21,  63 => 19,  59 => 27,  38 => 20,  94 => 51,  89 => 29,  85 => 28,  75 => 25,  68 => 21,  56 => 17,  87 => 33,  21 => 11,  26 => 3,  93 => 31,  88 => 24,  78 => 26,  46 => 13,  27 => 12,  44 => 14,  31 => 23,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 47,  142 => 68,  138 => 69,  136 => 56,  121 => 61,  117 => 40,  105 => 55,  91 => 50,  62 => 28,  49 => 20,  24 => 12,  25 => 13,  19 => 1,  79 => 17,  72 => 34,  69 => 21,  47 => 15,  40 => 19,  37 => 28,  22 => 2,  246 => 90,  157 => 49,  145 => 45,  139 => 41,  131 => 28,  123 => 58,  120 => 57,  115 => 22,  111 => 37,  108 => 56,  101 => 17,  98 => 36,  96 => 32,  83 => 27,  74 => 27,  66 => 39,  55 => 16,  52 => 16,  50 => 15,  43 => 20,  41 => 25,  35 => 25,  32 => 15,  29 => 14,  209 => 82,  203 => 78,  199 => 67,  193 => 48,  189 => 74,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 59,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 36,  122 => 35,  116 => 35,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 32,  64 => 19,  60 => 18,  57 => 31,  54 => 30,  51 => 33,  48 => 22,  45 => 21,  42 => 30,  39 => 7,  36 => 16,  33 => 22,  30 => 15,);
    }
}
