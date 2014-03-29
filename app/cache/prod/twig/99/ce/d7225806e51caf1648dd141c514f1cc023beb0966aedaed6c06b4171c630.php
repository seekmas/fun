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
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/css/step.css"), "html", null, true);
        echo "\" />

<div class=\"\" align=\"center\">

<form action=\"";
        // line 7
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
\t        <button type=\"button\" class=\"btn btn-default btn-circle\">2</button>
\t        <p>资料完善</p>
\t    </div>
\t    <div class=\"stepwizard-step\">
\t        <button type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</button>
\t        <p>提交审核</p>
\t    </div> 
\t</div>
\t</div>


\t <h2 class=\"form-signin-heading\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("register_right_now", array(), "FOSUserBundle"), "html", null, true);
        echo "</h2>

\t ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t<div class=\"control-group\">
\t\t<label>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"control-group\">
\t\t<label>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"));
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 46
            echo "\t<div class=\"control-group\">
\t\t<label>";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'label');
            echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t
\t<div class=\"control-group\">
\t\t<label>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>
\t
\t<div class=\"control-group\">
\t\t<label>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

\t<div class=\"control-group\">
\t\t<label>";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qq"), 'label');
        echo "</label>
\t\t<div class=\"controls\">
\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qq"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t</div>
\t</div>

    <div class=\"control-group\">
    \t<label></label>
    \t<div class=\"controls\">
        \t<input class=\"btn btn-primary btn-block\" type=\"submit\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </div>
";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"";
        // line 83
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
        return array (  168 => 83,  163 => 81,  157 => 78,  147 => 71,  142 => 69,  134 => 64,  129 => 62,  121 => 57,  116 => 55,  112 => 53,  102 => 49,  97 => 47,  94 => 46,  90 => 45,  83 => 41,  78 => 39,  70 => 34,  65 => 32,  59 => 29,  54 => 27,  29 => 7,  22 => 3,  19 => 2,);
    }
}
