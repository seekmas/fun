<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_711a2ed9308e6eef56581ec8ec6b0cabeee72708cf8c551dcb26e3f9e81cb1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::login_layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::login_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"\" align=\"center\">

<form class=\"form-signin\" role=\"form\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <h2 class=\"form-signin-heading\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login_right_now", array(), "FOSUserBundle"), "html", null, true);
        echo "</h2>

    <div class=\"control-group\">
    \t<label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    \t<input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"control-group\">
    \t<label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    \t<input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>


    <label class=\"checkbox\">
        
        <input class=\"checkbox\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
    </label>
     


    <div class=\"control-group\">
    \t<input class=\"btn btn-primary btn-block btn-lg\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>

    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.register", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getUrl("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forget_password", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
    
    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("fos_user_registration_check_email");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.activation", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  102 => 41,  95 => 39,  88 => 35,  79 => 29,  69 => 22,  62 => 18,  58 => 17,  52 => 14,  48 => 13,  44 => 12,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
