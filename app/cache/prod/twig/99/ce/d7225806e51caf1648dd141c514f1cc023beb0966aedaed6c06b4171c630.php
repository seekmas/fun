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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "::form_fields.html.twig"));
        // line 3
        echo "
<div class=\"\" align=\"center\">

<form class=\"form-horizontal form-signin\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >
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
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register_right_now", array(), "FOSUserBundle"), "html", null, true);
        echo "</h2>
\t
\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 32
            echo "\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), 'errors');
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
\t<div class=\"control-group\">
\t\t<label class=\"col-sm-4 control-label\">";
        // line 36
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label')), "html", null, true);
        echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"control-group\">
\t\t<label class=\"col-sm-4 control-label\">";
        // line 43
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label')), "html", null, true);
        echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t
\t</div>

\t";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 51
            echo "\t<div class=\"control-group\">
\t\t<label class=\"col-sm-4 control-label\">";
            // line 52
            echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'label')), "html", null, true);
            echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t
\t<div class=\"control-group\">
\t\t<label class=\"col-sm-4 control-label\">";
        // line 60
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label')), "html", null, true);
        echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t\t
\t</div>
\t
\t<div class=\"control-group\">
\t\t<label class=\"col-sm-4 control-label\">";
        // line 68
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'label')), "html", null, true);
        echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"control-group\">
\t\t<label class=\"col-sm-4 control-label\">";
        // line 75
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qq"), 'label')), "html", null, true);
        echo "</label>
\t\t<div class=\"col-sm-8\">
\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qq"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
    <div class=\"control-group\">
    \t<label class=\"col-sm-4 control-label\"></label>
    \t<div class=\"col-sm-12\">
        \t<input class=\"btn btn-primary btn-block\" type=\"submit\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </div>
    
    <div class=\"control-group\">
   \t<a class=\"form-link\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("have_account", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
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
        return array (  184 => 90,  177 => 88,  169 => 83,  160 => 77,  155 => 75,  147 => 70,  142 => 68,  133 => 62,  128 => 60,  124 => 58,  114 => 54,  109 => 52,  106 => 51,  102 => 50,  94 => 45,  89 => 43,  81 => 38,  76 => 36,  72 => 34,  63 => 32,  59 => 31,  54 => 29,  26 => 6,  21 => 3,  19 => 2,);
    }
}
