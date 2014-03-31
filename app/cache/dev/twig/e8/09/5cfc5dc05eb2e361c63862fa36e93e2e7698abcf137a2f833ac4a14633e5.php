<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e8095cfc5dc05eb2e361c63862fa36e93e2e7698abcf137a2f833ac4a14633e5 extends Twig_Template
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

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"\" align=\"center\">
<form class=\"form-signin\">
\t<div class=\"stepwizard\">
\t<div class=\"stepwizard-row\">
\t    <div class=\"stepwizard-step\">
\t        <button type=\"button\" class=\"btn btn-default btn-circle\">1</button>
\t        <p>账户信息</p>
\t    </div>

\t    <div class=\"stepwizard-step\">
\t        <button type=\"button\" class=\"btn btn-primary btn-circle\" disabled=\"disabled\">2</button>
\t        <p>邮件激活</p>
\t    </div>
\t    
\t    <div class=\"stepwizard-step\">
\t        <button type=\"button\" class=\"btn btn-default btn-circle\" disabled=\"disabled\">3</button>
\t        <p>开始学习</p>
\t    </div> 

\t</div>
\t</div>
\t
    <div class=\"alert alert-success\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email")), "FOSUserBundle"), "html", null, true);
        echo "</div>
</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  104 => 35,  81 => 24,  34 => 9,  23 => 4,  20 => 1,  146 => 66,  77 => 23,  58 => 12,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 28,  110 => 58,  100 => 9,  90 => 32,  84 => 25,  76 => 46,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 54,  135 => 49,  119 => 48,  102 => 56,  71 => 23,  67 => 22,  63 => 14,  59 => 18,  38 => 6,  94 => 33,  89 => 26,  85 => 25,  75 => 23,  68 => 22,  56 => 16,  87 => 24,  21 => 2,  26 => 2,  93 => 27,  88 => 27,  78 => 19,  46 => 14,  27 => 5,  44 => 11,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 53,  136 => 56,  121 => 35,  117 => 40,  105 => 40,  91 => 32,  62 => 20,  49 => 14,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 16,  69 => 21,  47 => 12,  40 => 10,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 55,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 34,  98 => 36,  96 => 53,  83 => 18,  74 => 24,  66 => 20,  55 => 29,  52 => 15,  50 => 13,  43 => 8,  41 => 11,  35 => 7,  32 => 6,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 47,  125 => 44,  122 => 42,  116 => 33,  112 => 44,  109 => 37,  106 => 36,  103 => 32,  99 => 33,  95 => 33,  92 => 32,  86 => 30,  82 => 48,  80 => 29,  73 => 22,  64 => 22,  60 => 17,  57 => 18,  54 => 16,  51 => 14,  48 => 11,  45 => 10,  42 => 10,  39 => 9,  36 => 8,  33 => 6,  30 => 8,);
    }
}
