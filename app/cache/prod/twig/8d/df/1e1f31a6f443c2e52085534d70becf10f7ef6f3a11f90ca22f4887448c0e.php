<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_8ddf1e1f31a6f443c2e52085534d70becf10f7ef6f3a11f90ca22f4887448c0e extends Twig_Template
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
        // line 2
        echo "
<h3> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.my_profile_change", array(), "FOSUserBundle"), "html", null, true);
        echo ":</h3>


";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


<form role=\"form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            echo "    \t";
            if (($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "vars"), "name") == "username")) {
                // line 12
                echo "
\t\t    <div class=\"form-group\">
\t\t    \t<label>";
                // line 14
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'label');
                echo "
\t\t    \t
\t\t    \t\t";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "vars"), "value"), "html", null, true);
                echo "
\t\t    \t\t";
                // line 17
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'widget', array("attr" => array("style" => "display:none;")));
                echo "
\t\t    \t
\t\t    \t</label>
\t\t    </div>\t
    \t";
            } else {
                // line 22
                echo "\t\t    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "vars"), "block_prefixes"), 1) != "hidden")) {
                    // line 23
                    echo "\t\t    <div class=\"form-group\">
\t\t    \t<label>";
                    // line 24
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'label');
                    echo "</label>
\t\t    \t<div class=\"controls\">
\t\t    \t\t";
                    // line 26
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'widget', array("attr" => array("class" => "form-control")));
                    echo "
\t\t    \t</div>
\t\t    </div>
\t\t    ";
                } else {
                    // line 30
                    echo "\t\t    \t";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'widget');
                    echo "
\t\t    ";
                }
                // line 32
                echo "    \t";
            }
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    <div>
        <input class=\"btn btn-sm btn-primary\" type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  101 => 34,  95 => 33,  92 => 32,  86 => 30,  79 => 26,  74 => 24,  71 => 23,  68 => 22,  60 => 17,  56 => 16,  51 => 14,  47 => 12,  44 => 11,  40 => 10,  34 => 9,  22 => 3,  19 => 2,  31 => 4,  28 => 6,);
    }
}
