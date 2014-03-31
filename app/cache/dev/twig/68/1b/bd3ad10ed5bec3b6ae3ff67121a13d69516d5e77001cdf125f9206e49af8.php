<?php

/* FOSCommentBundle:Thread:comment_content.html.twig */
class __TwigTemplate_681bbd3ad10ed5bec3b6ae3ff67121a13d69516d5e77001cdf125f9206e49af8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_comment_comment' => array($this, 'block_fos_comment_comment'),
            'fos_comment_comment_metas' => array($this, 'block_fos_comment_comment_metas'),
            'fos_comment_comment_metas_authorline' => array($this, 'block_fos_comment_comment_metas_authorline'),
            'fos_comment_comment_metas_edit' => array($this, 'block_fos_comment_comment_metas_edit'),
            'fos_comment_comment_metas_delete' => array($this, 'block_fos_comment_comment_metas_delete'),
            'fos_comment_comment_metas_voting' => array($this, 'block_fos_comment_comment_metas_voting'),
            'fos_comment_comment_body' => array($this, 'block_fos_comment_comment_body'),
            'fos_comment_comment_children' => array($this, 'block_fos_comment_comment_children'),
            'fos_comment_comment_reply' => array($this, 'block_fos_comment_comment_reply'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('fos_comment_comment', $context, $blocks);
    }

    public function block_fos_comment_comment($context, array $blocks = array())
    {
        // line 13
        echo "<div id=\"fos_comment_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
        echo "\" class=\"fos_comment_comment_show fos_comment_comment_depth_";
        echo twig_escape_filter($this->env, (isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")), "html", null, true);
        echo "\" ";
        if ((array_key_exists("parent", $context) && (!(null === (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))))) {
            echo "data-parent=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id"), "html", null, true);
            echo "\"";
        }
        echo ">

    <div class=\"fos_comment_comment_metas\">
        ";
        // line 16
        $this->displayBlock('fos_comment_comment_metas', $context, $blocks);
        // line 56
        echo "    </div>

    <div id=\"fos_comment_comment_body_";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
        echo "\" class=\"fos_comment_comment_body\">
        ";
        // line 59
        $this->displayBlock('fos_comment_comment_body', $context, $blocks);
        // line 70
        echo "    </div>

    ";
        // line 72
        $this->displayBlock('fos_comment_comment_children', $context, $blocks);
        // line 93
        echo "
</div>
";
    }

    // line 16
    public function block_fos_comment_comment_metas($context, array $blocks = array())
    {
        // line 17
        echo "            ";
        $this->displayBlock('fos_comment_comment_metas_authorline', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('fos_comment_comment_metas_edit', $context, $blocks);
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('fos_comment_comment_metas_delete', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('fos_comment_comment_metas_voting', $context, $blocks);
        // line 55
        echo "        ";
    }

    // line 17
    public function block_fos_comment_comment_metas_authorline($context, array $blocks = array())
    {
        // line 18
        echo "                ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_by", array(), "FOSCommentBundle");
        // line 19
        echo "                <span class=\"fos_comment_comment_authorname\">
                    ";
        // line 20
        if ($this->env->getExtension('fos_comment')->isCommentInState((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 21
            echo "                ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 22
            echo "                    ";
        } else {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "authorName"), "html", null, true);
            echo "
                    ";
        }
        // line 25
        echo "                </span> - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt")), "html", null, true);
        echo "
            ";
    }

    // line 28
    public function block_fos_comment_comment_metas_edit($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        if ($this->env->getExtension('fos_comment')->canEditComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
            // line 30
            echo "                <button data-container=\"#fos_comment_comment_body_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_edit_thread_comment", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread"), "id"), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"))), "html", null, true);
            echo "\" class=\"fos_comment_comment_edit_show_form\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_edit", array(), "FOSCommentBundle");
            echo "</button>
                ";
        }
        // line 32
        echo "            ";
    }

    // line 34
    public function block_fos_comment_comment_metas_delete($context, array $blocks = array())
    {
        // line 35
        echo "                ";
        if ($this->env->getExtension('fos_comment')->canDeleteComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
            // line 36
            echo "                    ";
            if ($this->env->getExtension('fos_comment')->isCommentInState((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
                // line 37
                echo "                        ";
                // line 38
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread"), "id"), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_VISIBLE"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_undelete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            } else {
                // line 40
                echo "                        ";
                // line 41
                echo "                        <button data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_remove_thread_comment", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread"), "id"), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "value" => twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))), "html", null, true);
                echo "\" class=\"fos_comment_comment_remove\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_delete", array(), "FOSCommentBundle");
                echo "</button>
                    ";
            }
            // line 43
            echo "                ";
        }
        // line 44
        echo "            ";
    }

    // line 46
    public function block_fos_comment_comment_metas_voting($context, array $blocks = array())
    {
        // line 47
        echo "                ";
        if ($this->env->getExtension('fos_comment')->canVote((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
            // line 48
            echo "                    <div class=\"fos_comment_comment_voting\">
                        <button data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread"), "id"), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "value" => 1)), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_voteup", array(), "FOSCommentBundle");
            echo "</button>
                        <button data-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comment_votes", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread"), "id"), "commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "value" => (-1))), "html", null, true);
            echo "\" class=\"fos_comment_comment_vote\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_votedown", array(), "FOSCommentBundle");
            echo "</button>
                        <div class=\"fos_comment_comment_score\" id=\"fos_comment_score_";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
            echo "\">";
            $this->env->loadTemplate("FOSCommentBundle:Thread:comment_votes.html.twig")->display(array_merge($context, array("commentScore" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "score"))));
            echo "</div>
                    </div>
                ";
        }
        // line 54
        echo "            ";
    }

    // line 59
    public function block_fos_comment_comment_body($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        if ($this->env->getExtension('fos_comment')->isCommentInState((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), twig_constant("FOS\\CommentBundle\\Model\\CommentInterface::STATE_DELETED"))) {
            // line 61
            echo "                ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_deleted", array(), "FOSCommentBundle");
            // line 62
            echo "            ";
        } else {
            // line 63
            echo "                ";
            if ($this->env->getExtension('fos_comment')->isRawComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
                // line 64
                echo "                    ";
                echo $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "rawBody");
                echo "
                ";
            } else {
                // line 66
                echo "                    ";
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "body"), "html", null, true));
                echo "
                ";
            }
            // line 68
            echo "            ";
        }
        // line 69
        echo "        ";
    }

    // line 72
    public function block_fos_comment_comment_children($context, array $blocks = array())
    {
        // line 73
        echo "        ";
        if ((!((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) === "flat"))) {
            // line 74
            echo "            ";
            if ($this->env->getExtension('fos_comment')->canComment((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")))) {
                // line 75
                echo "                <div class=\"fos_comment_comment_reply\">
                    ";
                // line 76
                $this->displayBlock('fos_comment_comment_reply', $context, $blocks);
                // line 79
                echo "                </div>
            ";
            }
            // line 81
            echo "
            <div class=\"fos_comment_comment_replies\">

                ";
            // line 84
            if (array_key_exists("children", $context)) {
                // line 85
                echo "                    ";
                $this->env->loadTemplate("FOSCommentBundle:Thread:comments.html.twig")->display(array_merge($context, array("comments" => (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "depth" => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1), "parent" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "view" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))));
                // line 86
                echo "                ";
            }
            // line 87
            echo "
            </div>
        ";
        } elseif ((((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) === "flat") && array_key_exists("children", $context))) {
            // line 90
            echo "            ";
            $this->env->loadTemplate("FOSCommentBundle:Thread:comments.html.twig")->display(array_merge($context, array("comments" => (isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")), "depth" => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1), "parent" => (isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "view" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))));
            // line 91
            echo "        ";
        }
        // line 92
        echo "    ";
    }

    // line 76
    public function block_fos_comment_comment_reply($context, array $blocks = array())
    {
        // line 77
        echo "                        <button data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("fos_comment_new_thread_comments", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "thread"), "id"))), "html", null, true);
        echo "\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "authorName"), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
        echo "\" class=\"fos_comment_comment_reply_show_form\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("fos_comment_comment_show_reply", array(), "FOSCommentBundle");
        echo "</button>
                    ";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  232 => 63,  226 => 61,  223 => 60,  216 => 54,  190 => 47,  180 => 43,  118 => 23,  170 => 40,  165 => 75,  113 => 55,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  124 => 25,  81 => 47,  110 => 20,  23 => 4,  20 => 1,  146 => 66,  129 => 64,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 50,  197 => 80,  192 => 78,  181 => 81,  153 => 61,  134 => 29,  97 => 55,  76 => 16,  104 => 18,  84 => 48,  77 => 35,  58 => 58,  53 => 30,  34 => 26,  65 => 35,  191 => 75,  184 => 90,  178 => 80,  172 => 41,  167 => 76,  160 => 37,  148 => 69,  137 => 30,  100 => 33,  90 => 34,  70 => 93,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 69,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  243 => 88,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  119 => 48,  102 => 50,  71 => 8,  67 => 21,  63 => 17,  59 => 15,  38 => 20,  94 => 51,  89 => 28,  85 => 28,  75 => 43,  68 => 72,  56 => 35,  87 => 33,  21 => 3,  26 => 14,  93 => 47,  88 => 24,  78 => 26,  46 => 13,  27 => 5,  44 => 26,  31 => 12,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 34,  142 => 68,  138 => 69,  136 => 56,  121 => 61,  117 => 40,  105 => 55,  91 => 50,  62 => 59,  49 => 15,  24 => 13,  25 => 3,  19 => 11,  79 => 17,  72 => 34,  69 => 20,  47 => 26,  40 => 12,  37 => 13,  22 => 12,  246 => 90,  157 => 36,  145 => 46,  139 => 41,  131 => 28,  123 => 58,  120 => 57,  115 => 22,  111 => 37,  108 => 56,  101 => 17,  98 => 36,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 8,  32 => 17,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 48,  189 => 74,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 59,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 59,  122 => 40,  116 => 35,  112 => 21,  109 => 52,  106 => 51,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 23,  64 => 70,  60 => 5,  57 => 17,  54 => 56,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 7,  36 => 6,  33 => 22,  30 => 21,);
    }
}
