<?php

/* FOSCommentBundle:Thread:commentable.html.twig */
class __TwigTemplate_3b90724e03a385d22780738ea154a32093ec1fcdfd5e0aa7e063c0816e38c6d7 extends Twig_Template
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
<div class=\"fos_comment_commentable_form_holder\">
    <form class=\"fos_comment_commentable_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_patch_thread_commentable", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" data-fos-comment-thread-id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 23
        echo "
        <input type=\"hidden\" name=\"_method\" value=\"patch\" />

        <div class=\"fos_comment_submit\">
            ";
        // line 27
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 30
        echo "        </div>

    </form>
</div>
";
    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isCommentable"), 'errors');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isCommentable"), 'widget');
        echo "

            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
    }

    // line 27
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 28
        echo "                <input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((isset($context["isCommentable"]) ? $context["isCommentable"] : $this->getContext($context, "isCommentable"))) ? ("fos_comment_thread_open") : ("fos_comment_thread_close")), array(), "FOSCommentBundle"), "html", null, true);
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:commentable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  232 => 63,  226 => 61,  223 => 60,  216 => 54,  190 => 47,  180 => 43,  118 => 23,  170 => 40,  165 => 75,  113 => 55,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  124 => 25,  81 => 47,  110 => 45,  23 => 4,  20 => 1,  146 => 66,  129 => 37,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 50,  197 => 80,  192 => 78,  181 => 81,  153 => 61,  134 => 39,  97 => 55,  76 => 16,  104 => 34,  84 => 48,  77 => 28,  58 => 58,  53 => 16,  34 => 23,  65 => 24,  191 => 75,  184 => 90,  178 => 80,  172 => 41,  167 => 76,  160 => 37,  148 => 46,  137 => 30,  100 => 33,  90 => 34,  70 => 93,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 69,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  243 => 88,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  119 => 34,  102 => 50,  71 => 23,  67 => 21,  63 => 19,  59 => 18,  38 => 20,  94 => 51,  89 => 29,  85 => 28,  75 => 43,  68 => 21,  56 => 35,  87 => 33,  21 => 11,  26 => 14,  93 => 31,  88 => 24,  78 => 26,  46 => 13,  27 => 12,  44 => 26,  31 => 12,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 47,  142 => 68,  138 => 69,  136 => 56,  121 => 61,  117 => 40,  105 => 55,  91 => 50,  62 => 59,  49 => 20,  24 => 11,  25 => 13,  19 => 11,  79 => 17,  72 => 34,  69 => 20,  47 => 26,  40 => 27,  37 => 13,  22 => 12,  246 => 90,  157 => 49,  145 => 45,  139 => 41,  131 => 28,  123 => 58,  120 => 57,  115 => 22,  111 => 37,  108 => 56,  101 => 17,  98 => 36,  96 => 32,  83 => 27,  74 => 27,  66 => 39,  55 => 16,  52 => 21,  50 => 15,  43 => 19,  41 => 25,  35 => 8,  32 => 15,  29 => 13,  209 => 82,  203 => 78,  199 => 67,  193 => 48,  189 => 74,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 59,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 36,  122 => 35,  116 => 35,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 23,  64 => 18,  60 => 17,  57 => 31,  54 => 30,  51 => 33,  48 => 7,  45 => 30,  42 => 30,  39 => 7,  36 => 16,  33 => 22,  30 => 15,);
    }
}
