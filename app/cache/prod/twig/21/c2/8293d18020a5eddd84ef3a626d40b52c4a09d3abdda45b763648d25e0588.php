<?php

/* McModuleBundle:Dashboard:show.html.twig */
class __TwigTemplate_21c28293d18020a5eddd84ef3a626d40b52c4a09d3abdda45b763648d25e0588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "
\t

<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigator"]) ? $context["navigator"] : $this->getContext($context, "navigator")));
        foreach ($context['_seq'] as $context["key"] => $context["n"]) {
            // line 7
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl((isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")));
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>



";
    }

    public function getTemplateName()
    {
        return "McModuleBundle:Dashboard:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  36 => 7,  32 => 6,  26 => 2,  20 => 1,);
    }
}
