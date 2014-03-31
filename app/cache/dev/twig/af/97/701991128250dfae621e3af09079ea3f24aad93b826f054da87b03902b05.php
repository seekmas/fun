<?php

/* FOSCommentBundle:Thread:comment_new_content.html.twig */
class __TwigTemplate_af97701991128250dfae621e3af09079ea3f24aad93b826f054da87b03902b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment_form_holder' => array($this, 'block_fos_comment_comment_form_holder'),
            'fos_comment_form_title' => array($this, 'block_fos_comment_form_title'),
            'fos_comment_comment_new_form' => array($this, 'block_fos_comment_comment_new_form'),
            'fos_comment_form_fields' => array($this, 'block_fos_comment_form_fields'),
            'fos_comment_form_submit' => array($this, 'block_fos_comment_form_submit'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $context["first"] = ((array_key_exists("first", $context)) ? (_twig_default_filter((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")), false)) : (false));
        // line 13
        echo "
";
        // line 14
        $context["url_parameters"] = array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 15
        if ((!(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent"))))) {
            // line 16
            echo "    ";
            $context["url_parameters"] = twig_array_merge((isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters")), array("parentId" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id")));
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('fos_comment_comment_form_holder', $context, $blocks);
    }

    public function block_fos_comment_comment_form_holder($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"fos_comment_comment_form_holder\">
        ";
        // line 21
        $this->displayBlock('fos_comment_form_title', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('fos_comment_comment_new_form', $context, $blocks);
        // line 55
        echo "
    </div>
";
    }

    // line 21
    public function block_fos_comment_form_title($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        if ((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) {
            // line 23
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline_first", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        } elseif ((!(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent"))))) {
            // line 25
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_reply_to", array("%name%" => $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "authorName")), "FOSCommentBundle");
            echo "</h3>
            ";
        } else {
            // line 27
            echo "                <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_headline", array(), "FOSCommentBundle");
            echo "</h3>
            ";
        }
        // line 29
        echo "        ";
    }

    // line 31
    public function block_fos_comment_comment_new_form($context, array $blocks = array())
    {
        // line 32
        echo "            <form class=\"fos_comment_comment_new_form\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_post_thread_comments", (isset($context["url_parameters"]) ? $context["url_parameters"] : $this->getContext($context, "url_parameters"))), "html", null, true);
        echo "\" data-parent=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parent"]) ? $context["parent"] : null), "id"))) : ("")), "html", null, true);
        echo "\" method=\"POST\">

                ";
        // line 34
        $this->displayBlock('fos_comment_form_fields', $context, $blocks);
        // line 43
        echo "
                <div class=\"fos_comment_submit\">
                    ";
        // line 45
        $this->displayBlock('fos_comment_form_submit', $context, $blocks);
        // line 51
        echo "                </div>

            </form>
        ";
    }

    // line 34
    public function block_fos_comment_form_fields($context, array $blocks = array())
    {
        // line 35
        echo "                    <div class=\"fos_comment_form_errors\">
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
        echo "
                    </div>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget');
        echo "

                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                ";
    }

    // line 45
    public function block_fos_comment_form_submit($context, array $blocks = array())
    {
        // line 46
        echo "                        ";
        if ((!(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent"))))) {
            // line 47
            echo "                            <input type=\"button\" value=\"";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_reply_cancel", array(), "FOSCommentBundle");
            echo "\" class=\"fos_comment_comment_reply_cancel\" />
                        ";
        }
        // line 49
        echo "                        <input type=\"submit\" value=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_new_submit", array(), "FOSCommentBundle");
        echo "\" />
                    ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  226 => 61,  223 => 60,  216 => 54,  202 => 50,  190 => 47,  180 => 43,  172 => 41,  118 => 23,  178 => 80,  167 => 76,  165 => 75,  148 => 46,  188 => 88,  152 => 74,  184 => 90,  160 => 37,  114 => 59,  65 => 21,  104 => 34,  81 => 47,  34 => 15,  23 => 4,  20 => 1,  146 => 66,  77 => 25,  58 => 58,  129 => 37,  113 => 55,  249 => 107,  232 => 63,  181 => 81,  153 => 61,  137 => 30,  134 => 39,  97 => 55,  110 => 45,  100 => 33,  90 => 34,  84 => 48,  76 => 16,  70 => 93,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 40,  161 => 59,  155 => 75,  126 => 63,  124 => 25,  53 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 84,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  243 => 106,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 80,  179 => 84,  159 => 42,  143 => 54,  135 => 49,  119 => 34,  102 => 50,  71 => 23,  67 => 21,  63 => 17,  59 => 55,  38 => 20,  94 => 51,  89 => 29,  85 => 28,  75 => 43,  68 => 22,  56 => 35,  87 => 33,  21 => 11,  26 => 14,  93 => 31,  88 => 24,  78 => 26,  46 => 13,  27 => 12,  44 => 26,  31 => 12,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 47,  142 => 68,  138 => 69,  136 => 56,  121 => 61,  117 => 40,  105 => 55,  91 => 50,  62 => 59,  49 => 20,  24 => 11,  25 => 13,  19 => 11,  79 => 17,  72 => 34,  69 => 20,  47 => 26,  40 => 18,  37 => 13,  22 => 12,  246 => 90,  157 => 49,  145 => 45,  139 => 41,  131 => 28,  123 => 58,  120 => 57,  115 => 22,  111 => 37,  108 => 56,  101 => 17,  98 => 36,  96 => 32,  83 => 27,  74 => 24,  66 => 39,  55 => 16,  52 => 21,  50 => 29,  43 => 19,  41 => 25,  35 => 8,  32 => 14,  29 => 13,  209 => 82,  203 => 84,  199 => 67,  193 => 48,  189 => 71,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 60,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 36,  122 => 35,  116 => 35,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 23,  64 => 18,  60 => 17,  57 => 31,  54 => 30,  51 => 33,  48 => 7,  45 => 30,  42 => 27,  39 => 7,  36 => 16,  33 => 22,  30 => 15,);
    }
}
