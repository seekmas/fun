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
        return array (  40 => 15,  30 => 8,  19 => 1,  176 => 73,  170 => 69,  164 => 66,  161 => 65,  159 => 64,  153 => 60,  150 => 59,  144 => 55,  138 => 54,  131 => 50,  127 => 49,  121 => 47,  115 => 43,  113 => 42,  110 => 41,  106 => 40,  97 => 33,  90 => 31,  82 => 28,  79 => 27,  71 => 22,  66 => 20,  62 => 18,  59 => 17,  55 => 16,  48 => 12,  44 => 11,  39 => 9,  32 => 4,  29 => 3,);
    }
}
