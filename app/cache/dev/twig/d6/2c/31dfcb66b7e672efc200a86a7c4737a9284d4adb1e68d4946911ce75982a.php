<?php

/* McCollegeBundle:Default:play.html.twig */
class __TwigTemplate_d62c31dfcb66b7e672efc200a86a7c4737a9284d4adb1e68d4946911ce75982a extends Twig_Template
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
        // line 1
        echo "<p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "subject"), "html", null, true);
        echo "</p>

<link href=\"//vjs.zencdn.net/4.4/video-js.css\" rel=\"stylesheet\">
<script src=\"//vjs.zencdn.net/4.4/video.js\"></script>


<script>
  videojs.options.flash.swf = \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/video-js/video-js.swf"), "html", null, true);
        echo "\"
</script>

<video id=\"example_video_1\" class=\"video-js vjs-default-skin\"
  controls preload=\"auto\" width=\"auto\" height=\"300\"
  poster=\"http://video-js.zencoder.com/oceans-clip.png\"
  data-setup='{\"example_option\":true}'>
 <source src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "playPath"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "playFile"), "html", null, true);
        echo "\" type='video/mp4' />
</video>";
    }

    public function getTemplateName()
    {
        return "McCollegeBundle:Default:play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  53 => 17,  77 => 17,  34 => 4,  170 => 65,  161 => 61,  155 => 58,  152 => 57,  146 => 53,  129 => 47,  70 => 21,  65 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 60,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 7,  63 => 20,  59 => 19,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 29,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 11,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 7,  105 => 41,  91 => 27,  62 => 18,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 27,  72 => 15,  69 => 23,  47 => 9,  40 => 15,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 45,  120 => 40,  115 => 40,  111 => 5,  108 => 38,  101 => 32,  98 => 37,  96 => 36,  83 => 25,  74 => 14,  66 => 15,  55 => 17,  52 => 16,  50 => 15,  43 => 8,  41 => 8,  35 => 7,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 48,  130 => 41,  125 => 44,  122 => 8,  116 => 41,  112 => 39,  109 => 34,  106 => 36,  103 => 40,  99 => 31,  95 => 28,  92 => 29,  86 => 28,  82 => 26,  80 => 19,  73 => 24,  64 => 17,  60 => 15,  57 => 18,  54 => 10,  51 => 16,  48 => 12,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 8,);
    }
}
