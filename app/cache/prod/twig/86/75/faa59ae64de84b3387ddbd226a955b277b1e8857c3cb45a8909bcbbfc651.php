<?php

/* FOSCommentBundle:Thread:thread_xml_feed.rss.twig */
class __TwigTemplate_8675faa59ae64de84b3387ddbd226a955b277b1e8857c3cb45a8909bcbbfc651 extends Twig_Template
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
<feed xmlns=\"http://www.w3.org/2005/Atom\">
    <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id"), "html", null, true);
        echo "</title>
    <id>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id"), "html", null, true);
        echo "</id>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "permalink"), "html", null, true);
        echo "\" rel=\"alternate\" />
    <updated>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "lastCommentAt"), "c"), "html", null, true);
        echo "</updated>
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["commentinfo"]) {
            // line 18
            echo "    <entry>
        <title>By ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : null), "comment"), "authorName"), "html", null, true);
            echo " on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : null), "comment"), "createdAt")), "html", null, true);
            echo "</title>
        <author>
            <name>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : null), "comment"), "authorName"), "html", null, true);
            echo "</name>
        </author>
        <updated>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : null), "comment"), "createdAt"), "c"), "html", null, true);
            echo "</updated>
        <link rel=\"alternate\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "permalink"), "html", null, true);
            echo "#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : null), "comment"), "id"), "html", null, true);
            echo "</link>
        <summary>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commentinfo"]) ? $context["commentinfo"] : null), "comment"), "body"), "html", null, true);
            echo "</summary>
    </entry>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentinfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</feed>
";
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:thread_xml_feed.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  232 => 63,  226 => 61,  223 => 60,  216 => 54,  190 => 47,  180 => 43,  157 => 49,  118 => 23,  170 => 40,  165 => 75,  113 => 55,  83 => 27,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  139 => 41,  124 => 25,  81 => 47,  110 => 45,  96 => 32,  23 => 13,  20 => 1,  146 => 66,  129 => 37,  74 => 27,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 50,  197 => 80,  192 => 78,  181 => 81,  153 => 61,  134 => 39,  97 => 55,  76 => 16,  104 => 34,  84 => 48,  77 => 28,  58 => 23,  53 => 21,  34 => 17,  65 => 24,  191 => 75,  184 => 90,  178 => 80,  172 => 41,  167 => 76,  160 => 37,  148 => 46,  137 => 30,  120 => 57,  100 => 33,  90 => 33,  70 => 31,  52 => 16,  37 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 69,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  111 => 37,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  131 => 28,  119 => 34,  108 => 56,  102 => 50,  71 => 23,  67 => 21,  63 => 19,  59 => 27,  47 => 15,  38 => 20,  94 => 51,  89 => 29,  85 => 28,  79 => 17,  75 => 25,  68 => 25,  56 => 17,  50 => 15,  29 => 14,  87 => 33,  72 => 34,  55 => 16,  21 => 11,  26 => 3,  98 => 36,  93 => 31,  88 => 24,  78 => 26,  46 => 19,  27 => 14,  40 => 19,  44 => 14,  35 => 16,  31 => 15,  43 => 18,  41 => 25,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 47,  142 => 68,  138 => 69,  136 => 56,  123 => 58,  121 => 61,  117 => 40,  115 => 22,  105 => 55,  101 => 17,  91 => 50,  69 => 21,  66 => 39,  62 => 24,  49 => 20,  24 => 12,  32 => 15,  25 => 13,  22 => 2,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 48,  189 => 74,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 59,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 36,  122 => 35,  116 => 35,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 32,  64 => 19,  60 => 18,  57 => 31,  54 => 30,  51 => 33,  48 => 22,  45 => 21,  42 => 30,  39 => 17,  36 => 16,  33 => 22,  30 => 15,);
    }
}
