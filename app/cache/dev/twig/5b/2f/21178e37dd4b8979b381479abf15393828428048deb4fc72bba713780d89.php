<?php

/* FOSCommentBundle:Thread:async.html.twig */
class __TwigTemplate_5b2f21178e37dd4b8979b381479abf15393828428048deb4fc72bba713780d89 extends Twig_Template
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
<div id=\"fos_comment_thread\"></div>

";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "35a8e64_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/35a8e64_comments_1.js");
            // line 15
            echo "<script type=\"text/javascript\">
// thread id
var fos_comment_thread_id = '";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "';

// api base url to use for initial requests
var fos_comment_thread_api_base_url = '";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_comment_get_threads");
            echo "';

// Snippet for asynchronously loading the comments
(function() {
    var fos_comment_script = document.createElement('script');
    fos_comment_script.async = true;
    fos_comment_script.src = '";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "';
    fos_comment_script.type = 'text/javascript';

    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
})();
</script>
";
        } else {
            // asset "35a8e64"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/35a8e64.js");
            // line 15
            echo "<script type=\"text/javascript\">
// thread id
var fos_comment_thread_id = '";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "';

// api base url to use for initial requests
var fos_comment_thread_api_base_url = '";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_comment_get_threads");
            echo "';

// Snippet for asynchronously loading the comments
(function() {
    var fos_comment_script = document.createElement('script');
    fos_comment_script.async = true;
    fos_comment_script.src = '";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "';
    fos_comment_script.type = 'text/javascript';

    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
})();
</script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 77,  165 => 75,  113 => 55,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  124 => 62,  81 => 47,  110 => 58,  23 => 4,  20 => 1,  146 => 66,  129 => 64,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 82,  197 => 80,  192 => 78,  181 => 81,  153 => 61,  134 => 50,  97 => 52,  76 => 36,  104 => 51,  84 => 48,  77 => 35,  58 => 32,  53 => 30,  34 => 26,  65 => 35,  191 => 75,  184 => 90,  178 => 80,  172 => 64,  167 => 76,  160 => 77,  148 => 69,  137 => 65,  100 => 33,  90 => 46,  70 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  107 => 52,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  119 => 48,  102 => 50,  71 => 8,  67 => 21,  63 => 17,  59 => 15,  38 => 20,  94 => 51,  89 => 28,  85 => 25,  75 => 43,  68 => 36,  56 => 35,  87 => 49,  21 => 3,  26 => 12,  93 => 47,  88 => 24,  78 => 26,  46 => 13,  27 => 5,  44 => 26,  31 => 25,  28 => 15,  201 => 92,  196 => 90,  183 => 82,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 70,  142 => 68,  138 => 69,  136 => 56,  121 => 61,  117 => 40,  105 => 55,  91 => 50,  62 => 19,  49 => 15,  24 => 14,  25 => 3,  19 => 11,  79 => 25,  72 => 34,  69 => 20,  47 => 26,  40 => 12,  37 => 8,  22 => 17,  246 => 90,  157 => 56,  145 => 46,  139 => 41,  131 => 61,  123 => 58,  120 => 57,  115 => 37,  111 => 37,  108 => 56,  101 => 34,  98 => 36,  96 => 48,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 8,  32 => 17,  29 => 24,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 84,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 70,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 59,  122 => 40,  116 => 35,  112 => 34,  109 => 52,  106 => 51,  103 => 34,  99 => 41,  95 => 33,  92 => 32,  86 => 45,  82 => 48,  80 => 43,  73 => 23,  64 => 38,  60 => 5,  57 => 17,  54 => 34,  51 => 33,  48 => 7,  45 => 30,  42 => 29,  39 => 7,  36 => 6,  33 => 22,  30 => 21,);
    }
}
