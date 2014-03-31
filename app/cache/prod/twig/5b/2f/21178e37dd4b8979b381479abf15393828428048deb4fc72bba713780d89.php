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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64_0") : $this->env->getExtension('assets')->getAssetUrl("js/35a8e64_comments_1.js");
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_35a8e64") : $this->env->getExtension('assets')->getAssetUrl("js/35a8e64.js");
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
        return array (  59 => 15,  28 => 15,  24 => 14,  110 => 58,  102 => 56,  96 => 53,  92 => 52,  86 => 49,  82 => 48,  76 => 46,  74 => 45,  61 => 35,  54 => 31,  23 => 3,  19 => 11,  104 => 26,  99 => 21,  94 => 9,  89 => 8,  84 => 7,  64 => 22,  62 => 21,  44 => 10,  38 => 20,  36 => 7,  25 => 1,  77 => 18,  72 => 27,  58 => 19,  53 => 15,  51 => 16,  42 => 9,  34 => 4,  31 => 5,  69 => 20,  65 => 16,  60 => 15,  57 => 14,  50 => 10,  45 => 8,  41 => 9,  32 => 17,  29 => 4,  191 => 75,  189 => 74,  184 => 71,  178 => 67,  172 => 64,  169 => 63,  167 => 62,  163 => 60,  160 => 59,  154 => 55,  148 => 54,  141 => 50,  137 => 49,  131 => 47,  125 => 43,  123 => 42,  120 => 41,  116 => 40,  107 => 33,  100 => 31,  90 => 28,  87 => 27,  78 => 26,  73 => 21,  70 => 26,  67 => 8,  63 => 17,  56 => 18,  52 => 13,  47 => 26,  40 => 15,  37 => 6,  30 => 8,);
    }
}
