<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_6e20e094340591dc2140aab4de4adeba8def84f6f0a2c106c5284016790c1f67 extends Twig_Template
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
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  110 => 58,  23 => 3,  20 => 1,  146 => 66,  129 => 55,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 82,  197 => 80,  192 => 78,  181 => 73,  153 => 61,  134 => 50,  97 => 32,  76 => 46,  104 => 35,  84 => 25,  77 => 24,  58 => 12,  53 => 9,  34 => 4,  65 => 16,  191 => 75,  184 => 71,  178 => 67,  172 => 64,  167 => 62,  160 => 59,  148 => 54,  137 => 60,  100 => 31,  90 => 32,  70 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 72,  169 => 63,  140 => 55,  132 => 51,  128 => 42,  107 => 33,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 48,  102 => 56,  71 => 22,  67 => 22,  63 => 14,  59 => 18,  38 => 8,  94 => 33,  89 => 8,  85 => 38,  75 => 23,  68 => 21,  56 => 14,  87 => 24,  21 => 2,  26 => 2,  93 => 28,  88 => 27,  78 => 19,  46 => 14,  27 => 5,  44 => 6,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 66,  151 => 60,  142 => 59,  138 => 53,  136 => 56,  121 => 35,  117 => 40,  105 => 40,  91 => 32,  62 => 14,  49 => 9,  24 => 4,  25 => 1,  19 => 2,  79 => 24,  72 => 16,  69 => 21,  47 => 14,  40 => 5,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 49,  123 => 42,  120 => 41,  115 => 37,  111 => 37,  108 => 38,  101 => 34,  98 => 36,  96 => 53,  83 => 25,  74 => 45,  66 => 20,  55 => 15,  52 => 13,  50 => 13,  43 => 8,  41 => 11,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 58,  144 => 49,  141 => 50,  133 => 55,  130 => 47,  125 => 44,  122 => 40,  116 => 33,  112 => 44,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 28,  92 => 52,  86 => 49,  82 => 48,  80 => 29,  73 => 22,  64 => 22,  60 => 13,  57 => 14,  54 => 16,  51 => 15,  48 => 7,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 3,);
    }
}
