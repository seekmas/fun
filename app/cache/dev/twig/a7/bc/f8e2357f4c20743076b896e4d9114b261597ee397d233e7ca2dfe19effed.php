<?php

/* FOSCommentBundle:Thread:comments.html.twig */
class __TwigTemplate_a7bcf8e2357f4c20743076b896e4d9114b261597ee397d233e7ca2dfe19effed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $context["depth"] = ((array_key_exists("depth", $context)) ? (_twig_default_filter((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")), 0)) : (0));
        // line 13
        $context["view"] = ((array_key_exists("view", $context)) ? (_twig_default_filter((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "tree")) : ("tree"));
        // line 14
        echo "
";
        // line 15
        if (((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) == 0)) {
            // line 16
            echo "    ";
            if ($this->env->getExtension('fos_comment')->canCommentThread((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")))) {
                // line 17
                echo "        ";
                echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"))), array());
                // line 18
                echo "    ";
            }
            // line 19
            echo "
    ";
            // line 20
            if ($this->env->getExtension('fos_comment')->canEditThread((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")))) {
                // line 21
                echo "    <div class=\"fos_comment_thread_commentable\">
        <button data-url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_edit_thread_commentable", array("id" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id"), "value" => (!$this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "commentable")))), "html", null, true);
                echo "\" class=\"fos_comment_thread_commentable_action\">
            ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "commentable")) ? ("fos_comment_thread_close") : ("fos_comment_thread_open")), array(), "FOSCommentBundle"), "html", null, true);
                echo "
        </button>
    </div>
    ";
            }
            // line 27
            echo "
    ";
            // line 28
            $context["count"] = $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "numComments");
            // line 29
            echo "    <h3>";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("fos_comment_thread_comment_count", (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), array("%count%" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))), "FOSCommentBundle");
            echo "</h3>
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 33
            echo "    ";
            $this->env->loadTemplate("FOSCommentBundle:Thread:comment.html.twig")->display(array_merge($context, array("children" => $this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : $this->getContext($context, "commentinfo")), "children"), "comment" => $this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : $this->getContext($context, "commentinfo")), "comment"), "depth" => (isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")), "view" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  226 => 61,  223 => 60,  216 => 54,  202 => 50,  190 => 47,  180 => 43,  172 => 41,  118 => 23,  178 => 80,  167 => 76,  165 => 75,  148 => 46,  188 => 88,  152 => 74,  184 => 90,  160 => 37,  114 => 59,  65 => 24,  104 => 34,  81 => 47,  34 => 17,  23 => 4,  20 => 1,  146 => 66,  77 => 28,  58 => 58,  129 => 37,  113 => 55,  249 => 107,  232 => 63,  181 => 81,  153 => 61,  137 => 30,  134 => 39,  97 => 55,  110 => 45,  100 => 33,  90 => 33,  84 => 48,  76 => 16,  70 => 31,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 40,  161 => 59,  155 => 75,  126 => 63,  124 => 25,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 84,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  243 => 106,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 80,  179 => 84,  159 => 42,  143 => 54,  135 => 49,  119 => 34,  102 => 50,  71 => 23,  67 => 21,  63 => 19,  59 => 27,  38 => 20,  94 => 51,  89 => 29,  85 => 28,  75 => 43,  68 => 21,  56 => 35,  87 => 33,  21 => 11,  26 => 14,  93 => 31,  88 => 24,  78 => 26,  46 => 13,  27 => 12,  44 => 26,  31 => 16,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 47,  142 => 68,  138 => 69,  136 => 56,  121 => 61,  117 => 40,  105 => 55,  91 => 50,  62 => 28,  49 => 20,  24 => 13,  25 => 13,  19 => 11,  79 => 17,  72 => 34,  69 => 20,  47 => 26,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 49,  145 => 45,  139 => 41,  131 => 28,  123 => 58,  120 => 57,  115 => 22,  111 => 37,  108 => 56,  101 => 17,  98 => 36,  96 => 32,  83 => 27,  74 => 27,  66 => 39,  55 => 16,  52 => 23,  50 => 15,  43 => 20,  41 => 25,  35 => 8,  32 => 15,  29 => 15,  209 => 82,  203 => 84,  199 => 67,  193 => 48,  189 => 71,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 60,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 36,  122 => 35,  116 => 35,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 32,  64 => 29,  60 => 17,  57 => 31,  54 => 30,  51 => 33,  48 => 22,  45 => 21,  42 => 30,  39 => 7,  36 => 16,  33 => 22,  30 => 15,);
    }
}
