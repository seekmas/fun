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
        return array (  184 => 90,  160 => 77,  114 => 54,  65 => 20,  104 => 35,  81 => 38,  34 => 5,  23 => 4,  20 => 1,  146 => 66,  77 => 35,  58 => 11,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 26,  110 => 58,  100 => 9,  90 => 32,  84 => 25,  76 => 36,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 75,  126 => 43,  124 => 58,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 88,  169 => 83,  140 => 55,  132 => 48,  128 => 60,  107 => 31,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 42,  143 => 54,  135 => 49,  119 => 48,  102 => 50,  71 => 23,  67 => 7,  63 => 32,  59 => 31,  38 => 6,  94 => 45,  89 => 43,  85 => 25,  75 => 17,  68 => 34,  56 => 16,  87 => 24,  21 => 3,  26 => 6,  93 => 25,  88 => 24,  78 => 18,  46 => 14,  27 => 5,  44 => 6,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 48,  158 => 62,  156 => 41,  151 => 49,  142 => 68,  138 => 53,  136 => 56,  121 => 36,  117 => 40,  105 => 40,  91 => 32,  62 => 20,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 26,  72 => 34,  69 => 21,  47 => 12,  40 => 9,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 41,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 34,  98 => 36,  96 => 53,  83 => 18,  74 => 24,  66 => 33,  55 => 28,  52 => 8,  50 => 14,  43 => 8,  41 => 11,  35 => 7,  32 => 3,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 48,  147 => 70,  144 => 49,  141 => 48,  133 => 62,  130 => 47,  125 => 44,  122 => 42,  116 => 35,  112 => 34,  109 => 52,  106 => 51,  103 => 29,  99 => 33,  95 => 33,  92 => 32,  86 => 23,  82 => 15,  80 => 29,  73 => 22,  64 => 22,  60 => 17,  57 => 18,  54 => 29,  51 => 14,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 6,  33 => 4,  30 => 2,);
    }
}
