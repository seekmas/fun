<?php

/* FOSCommentBundle:Thread:vote_new.html.twig */
class __TwigTemplate_e8a1f732d487ba5e5f1a8674621d415072e737f3a82b6f7e6e7fbd500d2516ac extends Twig_Template
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
<div class=\"fos_comment_vote_form_holder\">
    <form class=\"fos_comment_vote_form\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_thread_comment_votes", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "commentId" => (isset($context["commentId"]) ? $context["commentId"] : $this->getContext($context, "commentId")))), "html", null, true);
        echo "\" data-score-holder=\"fos_comment_score_";
        echo twig_escape_filter($this->env, (isset($context["commentId"]) ? $context["commentId"] : $this->getContext($context, "commentId")), "html", null, true);
        echo "\" method=\"POST\">

        ";
        // line 15
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 22
        echo "
        <div class=\"fos_comment_submit\">
            ";
        // line 24
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 27
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
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value"), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value"), 'widget');
        echo "

            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
    }

    // line 24
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 25
        echo "                <input type=\"submit\" />
            ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:vote_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  226 => 61,  223 => 60,  216 => 54,  202 => 50,  190 => 47,  180 => 43,  172 => 41,  118 => 23,  178 => 80,  167 => 76,  165 => 75,  148 => 46,  188 => 88,  152 => 74,  184 => 90,  160 => 37,  114 => 59,  65 => 20,  104 => 34,  81 => 47,  34 => 22,  23 => 13,  20 => 1,  146 => 66,  77 => 28,  58 => 23,  129 => 37,  113 => 55,  249 => 107,  232 => 63,  181 => 81,  153 => 61,  137 => 30,  134 => 39,  97 => 55,  110 => 45,  100 => 33,  90 => 33,  84 => 48,  76 => 16,  70 => 31,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 40,  161 => 59,  155 => 75,  126 => 63,  124 => 25,  53 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 84,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  243 => 106,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 80,  179 => 84,  159 => 42,  143 => 54,  135 => 49,  119 => 34,  102 => 50,  71 => 24,  67 => 21,  63 => 19,  59 => 27,  38 => 24,  94 => 51,  89 => 29,  85 => 28,  75 => 25,  68 => 25,  56 => 17,  87 => 33,  21 => 11,  26 => 3,  93 => 31,  88 => 24,  78 => 26,  46 => 19,  27 => 14,  44 => 14,  31 => 15,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 47,  142 => 68,  138 => 69,  136 => 56,  121 => 61,  117 => 40,  105 => 55,  91 => 50,  62 => 24,  49 => 20,  24 => 12,  25 => 13,  19 => 11,  79 => 17,  72 => 34,  69 => 21,  47 => 15,  40 => 27,  37 => 28,  22 => 2,  246 => 90,  157 => 49,  145 => 45,  139 => 41,  131 => 28,  123 => 58,  120 => 57,  115 => 22,  111 => 37,  108 => 56,  101 => 17,  98 => 36,  96 => 32,  83 => 27,  74 => 25,  66 => 39,  55 => 16,  52 => 16,  50 => 15,  43 => 18,  41 => 25,  35 => 16,  32 => 15,  29 => 14,  209 => 82,  203 => 84,  199 => 67,  193 => 48,  189 => 71,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 60,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 36,  122 => 35,  116 => 35,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 32,  64 => 19,  60 => 18,  57 => 31,  54 => 30,  51 => 16,  48 => 15,  45 => 21,  42 => 30,  39 => 17,  36 => 16,  33 => 22,  30 => 15,);
    }
}
