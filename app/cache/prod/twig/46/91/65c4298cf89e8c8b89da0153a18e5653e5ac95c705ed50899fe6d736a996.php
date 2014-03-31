<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_469165c4298cf89e8c8b89da0153a18e5653e5ac95c705ed50899fe6d736a996 extends Twig_Template
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
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">

\t<h3>修改我的密码:</h3>
   \t
    <div class=\"form-group\">
    \t<label>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'label');
        echo "</label>
    \t<div>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "</div>
    </div>

\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 15
            echo "\t    <div class=\"form-group\">
\t        <label>";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'label');
            echo "</label>

\t        <div>";
            // line 18
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "form-control")));
            echo "</div>
\t    </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 23
            echo "\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")), 'widget');
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div>
        <input class=\"btn btn-primary btn-sm\" type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  84 => 25,  75 => 23,  71 => 22,  68 => 21,  59 => 18,  54 => 16,  51 => 15,  47 => 14,  41 => 11,  37 => 10,  27 => 5,  22 => 3,  19 => 2,);
    }
}
