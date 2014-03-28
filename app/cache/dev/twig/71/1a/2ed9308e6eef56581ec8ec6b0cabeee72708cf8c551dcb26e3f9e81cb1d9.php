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
    <h2 class=\"form-signin-heading\">Please sign in</h2>

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
        return array (  84 => 22,  23 => 4,  97 => 31,  20 => 1,  81 => 20,  137 => 41,  100 => 32,  90 => 30,  197 => 83,  195 => 82,  175 => 71,  160 => 62,  153 => 60,  114 => 31,  110 => 38,  104 => 34,  76 => 29,  127 => 44,  53 => 14,  77 => 20,  34 => 7,  170 => 65,  161 => 61,  155 => 61,  152 => 57,  146 => 47,  129 => 46,  70 => 7,  65 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 60,  143 => 56,  135 => 39,  119 => 33,  102 => 30,  71 => 16,  67 => 26,  63 => 14,  59 => 18,  38 => 8,  94 => 26,  89 => 20,  85 => 35,  75 => 11,  68 => 15,  56 => 15,  87 => 29,  21 => 2,  26 => 12,  93 => 28,  88 => 23,  78 => 19,  46 => 11,  27 => 5,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 46,  156 => 66,  151 => 39,  142 => 59,  138 => 54,  136 => 50,  121 => 43,  117 => 7,  105 => 41,  91 => 27,  62 => 12,  49 => 12,  24 => 7,  25 => 3,  19 => 2,  79 => 29,  72 => 16,  69 => 25,  47 => 9,  40 => 5,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 51,  131 => 37,  123 => 45,  120 => 40,  115 => 56,  111 => 32,  108 => 38,  101 => 35,  98 => 28,  96 => 31,  83 => 28,  74 => 30,  66 => 22,  55 => 17,  52 => 14,  50 => 17,  43 => 12,  41 => 9,  35 => 8,  32 => 8,  29 => 6,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 49,  130 => 41,  125 => 36,  122 => 8,  116 => 33,  112 => 39,  109 => 34,  106 => 43,  103 => 40,  99 => 41,  95 => 28,  92 => 39,  86 => 34,  82 => 26,  80 => 13,  73 => 24,  64 => 23,  60 => 13,  57 => 21,  54 => 10,  51 => 13,  48 => 13,  45 => 15,  42 => 9,  39 => 9,  36 => 6,  33 => 7,  30 => 2,);
    }
}
