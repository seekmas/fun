<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_b6ccfe8ef6cb062bf1be252e8b78bb0ba66b7a26536108a3fec3abaaa1f782ba extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 90,  160 => 77,  114 => 54,  65 => 20,  104 => 35,  81 => 38,  34 => 7,  23 => 4,  20 => 1,  146 => 66,  77 => 35,  58 => 11,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 26,  110 => 58,  100 => 9,  90 => 32,  84 => 25,  76 => 36,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 75,  126 => 43,  124 => 58,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 88,  169 => 83,  140 => 55,  132 => 48,  128 => 60,  107 => 31,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 42,  143 => 54,  135 => 49,  119 => 48,  102 => 50,  71 => 23,  67 => 7,  63 => 32,  59 => 31,  38 => 6,  94 => 45,  89 => 43,  85 => 25,  75 => 17,  68 => 34,  56 => 16,  87 => 24,  21 => 3,  26 => 12,  93 => 25,  88 => 24,  78 => 18,  46 => 14,  27 => 5,  44 => 6,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 48,  158 => 62,  156 => 41,  151 => 49,  142 => 68,  138 => 53,  136 => 56,  121 => 36,  117 => 40,  105 => 40,  91 => 32,  62 => 20,  49 => 14,  24 => 7,  25 => 3,  19 => 2,  79 => 26,  72 => 34,  69 => 21,  47 => 12,  40 => 9,  37 => 8,  22 => 3,  246 => 90,  157 => 56,  145 => 55,  139 => 41,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 34,  98 => 36,  96 => 53,  83 => 18,  74 => 24,  66 => 33,  55 => 28,  52 => 8,  50 => 14,  43 => 12,  41 => 11,  35 => 8,  32 => 3,  29 => 6,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 48,  147 => 70,  144 => 49,  141 => 48,  133 => 62,  130 => 47,  125 => 44,  122 => 42,  116 => 35,  112 => 34,  109 => 52,  106 => 51,  103 => 29,  99 => 33,  95 => 33,  92 => 32,  86 => 23,  82 => 15,  80 => 29,  73 => 22,  64 => 22,  60 => 17,  57 => 18,  54 => 29,  51 => 14,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 6,  33 => 4,  30 => 2,);
    }
}
