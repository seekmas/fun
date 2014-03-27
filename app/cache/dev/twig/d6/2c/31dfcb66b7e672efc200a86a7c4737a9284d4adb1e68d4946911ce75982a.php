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

<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mediaelement/build/mediaelementplayer.min.css"), "html", null, true);
        echo "\" />

<script charset=\"utf-8\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mediaelement/build/mediaelement-and-player.min.js"), "html", null, true);
        echo "\"></script>


<video id=\"play\" height=\"400\" id=\"player2\" controls=\"controls\">
\t<source src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "playPath"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "playFile"), "html", null, true);
        echo "\" type=\"video/mp4\" title=\"mp4\">

\t<p>Your browser leaves much to be desired.</p>

\t<link rel=\"postroll\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("mc_college_roll");
        echo "\" />
</video>


<script>
\$(function(){
\t\$('video').attr({ 'width' : document.getElementById('play').scrollWidth })
});

\$('audio,video').mediaelementplayer({
\tfeatures: ['playpause','progress','volume','postroll']
});
</script>";
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
        return array (  45 => 13,  37 => 9,  30 => 5,  25 => 3,  19 => 1,  91 => 30,  85 => 26,  79 => 23,  76 => 22,  74 => 21,  68 => 17,  65 => 16,  52 => 9,  48 => 8,  40 => 7,  36 => 5,  32 => 4,  29 => 3,);
    }
}
