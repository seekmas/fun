<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ebecad94e87c313848677b74df8b28d4d65ea8a6be885c6266512e51fe15de65 extends Twig_Template
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
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 5
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "        <div class=\"alert alert-success\">
            ";
                // line 7
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "


<div class=\"fos_user_user_show\">

    <h3> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.my_profile", array(), "FOSUserBundle"), "html", null, true);
        echo ":</h3>

    <dl class=\"dl-horizontal\">
    \t<dt> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</dt>
    \t<dd> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</dd>
    \t<dt> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</dt>
    \t<dd> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</dd>
        <dt> ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ":</dt>
        <dd> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name"), "html", null, true);
        echo "</dd>
        <dt> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.job", array(), "FOSUserBundle"), "html", null, true);
        echo ":</dt>
        <dd> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "job"), "html", null, true);
        echo "</dd>
        <dt> ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.qq", array(), "FOSUserBundle"), "html", null, true);
        echo ":</dt>
        <dd> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "qq"), "html", null, true);
        echo "</dd>

    </dl>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  93 => 27,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  55 => 16,  48 => 11,  35 => 7,  32 => 6,  27 => 5,  23 => 4,  19 => 2,  104 => 26,  99 => 21,  94 => 9,  89 => 26,  84 => 7,  78 => 5,  72 => 27,  70 => 26,  64 => 22,  62 => 21,  53 => 15,  44 => 10,  41 => 9,  38 => 8,  36 => 7,  31 => 5,  25 => 1,);
    }
}
