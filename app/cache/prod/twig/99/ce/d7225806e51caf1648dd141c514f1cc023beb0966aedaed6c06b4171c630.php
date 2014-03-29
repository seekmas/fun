<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_99ced7225806e51caf1648dd141c514f1cc023beb0966aedaed6c06b4171c630 extends Twig_Template
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
<div class=\"\" align=\"center\">

<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-signin\">
\t
\t<div class=\"stepwizard\">
\t<div class=\"stepwizard-row\">
\t    <div class=\"stepwizard-step\">
\t        <button type=\"button\" class=\"btn btn-primary btn-circle\">1</button>
\t        <p>账户信息</p>
\t    </div>

\t    <div class=\"stepwizard-step\">
\t        <button type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">2</button>
\t        <p>邮件激活</p>
\t    </div> 
\t    
\t    <div class=\"stepwizard-step\">
\t        <button type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</button>
\t        <p>开始学习</p>
\t    </div> 

\t</div>
\t</div>


\t<h2 class=\"form-signin-heading\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register_right_now", array(), "FOSUserBundle"), "html", null, true);
        echo "</h2>

\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t<div class=\"control-group\">
\t\t<label>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"control-group\">
\t\t<label>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 47
            echo "\t<div class=\"control-group\">
\t\t<label>";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'label');
            echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t
\t<div class=\"control-group\">
\t\t<label>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t<div class=\"control-group\">
\t\t<label>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"control-group\">
\t\t<label>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qq"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qq"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

    <div class=\"control-group\">
    \t<label></label>
    \t<div class=\"controls\">
        \t<input class=\"btn btn-primary btn-block\" type=\"submit\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </div>
";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("have_account", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 84,  161 => 82,  155 => 79,  145 => 72,  140 => 70,  132 => 65,  127 => 63,  119 => 58,  114 => 56,  110 => 54,  100 => 50,  95 => 48,  92 => 47,  88 => 46,  81 => 42,  76 => 40,  68 => 35,  63 => 33,  57 => 30,  52 => 28,  24 => 5,  19 => 2,);
    }
}
