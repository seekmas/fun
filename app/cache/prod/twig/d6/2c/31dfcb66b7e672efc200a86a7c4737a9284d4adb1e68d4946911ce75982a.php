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
        echo "<p class=\"lead\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "subject"), "html", null, true);
        echo "</p>

<link href=\"//leancdn.b0.upaiyun.com/video-js.css\" rel=\"stylesheet\">
<script src=\"//leancdn.b0.upaiyun.com/video.js\"></script>


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
        return array (  110 => 58,  102 => 56,  96 => 53,  92 => 52,  86 => 49,  82 => 48,  76 => 46,  74 => 45,  61 => 35,  54 => 31,  23 => 3,  19 => 1,  104 => 26,  99 => 21,  94 => 9,  89 => 8,  84 => 7,  64 => 22,  62 => 21,  44 => 10,  38 => 8,  36 => 7,  25 => 1,  77 => 18,  72 => 27,  58 => 19,  53 => 15,  51 => 16,  42 => 9,  34 => 4,  31 => 5,  69 => 17,  65 => 16,  60 => 15,  57 => 14,  50 => 10,  45 => 8,  41 => 9,  32 => 5,  29 => 4,  191 => 75,  189 => 74,  184 => 71,  178 => 67,  172 => 64,  169 => 63,  167 => 62,  163 => 60,  160 => 59,  154 => 55,  148 => 54,  141 => 50,  137 => 49,  131 => 47,  125 => 43,  123 => 42,  120 => 41,  116 => 40,  107 => 33,  100 => 31,  90 => 28,  87 => 27,  78 => 5,  73 => 21,  70 => 26,  67 => 8,  63 => 18,  56 => 18,  52 => 13,  47 => 11,  40 => 15,  37 => 6,  30 => 8,);
    }
}
