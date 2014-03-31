<?php

/* FOSCommentBundle:Thread:comment_edit.html.twig */
class __TwigTemplate_37746b426053dfc62a73eb2d4497b27740bc36bed44eaeaf8932ca9a4b1b8a6f extends Twig_Template
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
<div class=\"fos_comment_comment_form_holder\">
    <form class=\"fos_comment_comment_edit_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_put_thread_comments", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "thread"), "id"), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"))), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 21
        echo "
        <div class=\"fos_comment_submit\">
            <button type=\"button\" class=\"fos_comment_comment_edit_cancel\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit_cancel", array(), "FOSCommentBundle");
        echo "</button>
            ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
        echo "        </div>

        <input type=\"hidden\" name=\"_method\" value=\"PUT\">

    </form>
</div>
";
    }

    // line 15
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 16
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body"), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body"), 'widget');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token"), 'widget');
        echo "
        ";
    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 25
        echo "                <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit_submit", array(), "FOSCommentBundle");
        echo "\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  232 => 63,  226 => 61,  223 => 60,  216 => 54,  190 => 47,  180 => 43,  157 => 36,  118 => 23,  170 => 40,  165 => 75,  113 => 55,  83 => 44,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  139 => 41,  124 => 25,  81 => 47,  110 => 20,  96 => 48,  23 => 4,  20 => 1,  146 => 66,  129 => 64,  74 => 24,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 50,  197 => 80,  192 => 78,  181 => 81,  153 => 61,  134 => 29,  97 => 55,  76 => 16,  104 => 18,  84 => 48,  77 => 25,  58 => 58,  53 => 30,  34 => 26,  65 => 35,  191 => 75,  184 => 90,  178 => 80,  172 => 41,  167 => 76,  160 => 37,  148 => 69,  137 => 30,  120 => 57,  100 => 33,  90 => 34,  70 => 93,  52 => 15,  37 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 69,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  111 => 37,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  131 => 28,  119 => 48,  108 => 56,  102 => 50,  71 => 8,  67 => 21,  63 => 17,  59 => 15,  47 => 26,  38 => 20,  94 => 51,  89 => 28,  85 => 28,  79 => 17,  75 => 43,  68 => 19,  56 => 35,  50 => 29,  29 => 15,  87 => 33,  72 => 34,  55 => 16,  21 => 11,  26 => 14,  98 => 36,  93 => 47,  88 => 24,  78 => 26,  46 => 13,  27 => 5,  40 => 24,  44 => 26,  35 => 8,  31 => 12,  43 => 12,  41 => 25,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 34,  142 => 68,  138 => 69,  136 => 56,  123 => 58,  121 => 61,  117 => 40,  115 => 22,  105 => 55,  101 => 17,  91 => 50,  69 => 20,  66 => 39,  62 => 59,  49 => 15,  24 => 13,  32 => 21,  25 => 13,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 48,  189 => 74,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 59,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 59,  122 => 40,  116 => 35,  112 => 21,  109 => 52,  106 => 51,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 23,  64 => 18,  60 => 17,  57 => 17,  54 => 56,  51 => 33,  48 => 7,  45 => 30,  42 => 27,  39 => 7,  36 => 23,  33 => 22,  30 => 15,);
    }
}
