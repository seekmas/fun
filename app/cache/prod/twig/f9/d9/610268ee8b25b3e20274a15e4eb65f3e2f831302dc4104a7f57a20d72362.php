<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_f9d9610268ee8b25b3e20274a15e4eb65f3e2f831302dc4104a7f57a20d72362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  124 => 37,  81 => 37,  110 => 58,  96 => 53,  23 => 4,  20 => 1,  146 => 66,  129 => 55,  74 => 24,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 82,  197 => 80,  192 => 78,  181 => 73,  153 => 61,  134 => 50,  97 => 26,  76 => 12,  104 => 35,  84 => 25,  77 => 35,  58 => 11,  53 => 9,  34 => 9,  65 => 20,  191 => 75,  184 => 71,  178 => 67,  172 => 64,  167 => 62,  160 => 59,  148 => 54,  137 => 60,  120 => 41,  100 => 31,  90 => 32,  70 => 20,  52 => 14,  37 => 8,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 72,  169 => 63,  140 => 55,  132 => 51,  128 => 42,  111 => 37,  107 => 31,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 42,  143 => 56,  135 => 53,  131 => 49,  119 => 48,  108 => 38,  102 => 56,  71 => 8,  67 => 22,  63 => 32,  59 => 18,  47 => 12,  38 => 6,  94 => 33,  89 => 26,  85 => 25,  79 => 26,  75 => 17,  68 => 34,  56 => 16,  50 => 13,  29 => 3,  87 => 24,  72 => 16,  55 => 28,  21 => 2,  26 => 12,  98 => 36,  93 => 25,  88 => 24,  78 => 18,  46 => 14,  27 => 5,  40 => 9,  44 => 6,  35 => 7,  31 => 6,  43 => 8,  41 => 11,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 48,  158 => 62,  156 => 41,  151 => 49,  142 => 43,  138 => 53,  136 => 56,  123 => 42,  121 => 36,  117 => 40,  115 => 37,  105 => 40,  101 => 34,  91 => 32,  69 => 21,  66 => 33,  62 => 14,  49 => 13,  24 => 7,  32 => 3,  25 => 1,  22 => 2,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 59,  154 => 55,  149 => 48,  147 => 58,  144 => 49,  141 => 50,  133 => 40,  130 => 47,  125 => 44,  122 => 40,  116 => 35,  112 => 34,  109 => 34,  106 => 36,  103 => 29,  99 => 33,  95 => 33,  92 => 32,  86 => 23,  82 => 48,  80 => 29,  73 => 22,  64 => 22,  60 => 5,  57 => 14,  54 => 15,  51 => 14,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
