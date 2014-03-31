<?php

/* ::form_fields.html.twig */
class __TwigTemplate_7ddfa7e0bbb37f03bf625b90c6066e163cd75a7f2afe0ee6ab009439c1baedc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_field_label($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("field_label", $context, $blocks);
        echo "

    ";
        // line 7
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 8
            echo "        <span class=\"required\" title=\"This field is required\">*</span>
    ";
        }
    }

    // line 13
    public function block_form_errors($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        ob_start();
        // line 15
        echo "\t    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 16
            echo "
\t        ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "\t            <div class=\"alert alert-danger\">
\t            \t<strong><i class=\"fa fa-info-circle\"></i> 提醒! </strong>
\t            \t";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"), "html", null, true);
                echo "
\t            </div>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
\t    ";
        }
        // line 25
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::form_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  303 => 77,  300 => 76,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  232 => 63,  226 => 61,  223 => 60,  216 => 54,  190 => 47,  180 => 43,  157 => 49,  118 => 23,  170 => 40,  165 => 75,  113 => 55,  83 => 27,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  139 => 41,  124 => 25,  81 => 47,  110 => 45,  96 => 32,  23 => 13,  20 => 1,  146 => 66,  129 => 37,  74 => 25,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 50,  197 => 80,  192 => 78,  181 => 81,  153 => 61,  134 => 39,  97 => 55,  76 => 16,  104 => 34,  84 => 48,  77 => 28,  58 => 17,  53 => 21,  34 => 22,  65 => 20,  191 => 75,  184 => 90,  178 => 80,  172 => 41,  167 => 76,  160 => 37,  148 => 46,  137 => 30,  120 => 57,  100 => 33,  90 => 33,  70 => 31,  52 => 15,  37 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 87,  283 => 88,  278 => 86,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 66,  229 => 62,  220 => 59,  214 => 69,  177 => 88,  169 => 83,  140 => 66,  132 => 65,  128 => 60,  111 => 37,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  131 => 28,  119 => 34,  108 => 56,  102 => 50,  71 => 24,  67 => 21,  63 => 19,  59 => 27,  47 => 15,  38 => 7,  94 => 51,  89 => 29,  85 => 28,  79 => 25,  75 => 23,  68 => 25,  56 => 17,  50 => 15,  29 => 4,  87 => 33,  72 => 34,  55 => 16,  21 => 11,  26 => 3,  98 => 36,  93 => 31,  88 => 24,  78 => 26,  46 => 13,  27 => 14,  40 => 8,  44 => 14,  35 => 16,  31 => 15,  43 => 18,  41 => 25,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 41,  151 => 47,  142 => 68,  138 => 69,  136 => 56,  123 => 58,  121 => 61,  117 => 40,  115 => 22,  105 => 55,  101 => 17,  91 => 50,  69 => 21,  66 => 20,  62 => 18,  49 => 14,  24 => 12,  32 => 5,  25 => 13,  22 => 2,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 48,  189 => 74,  187 => 46,  182 => 85,  176 => 64,  173 => 71,  168 => 80,  164 => 59,  162 => 38,  154 => 35,  149 => 73,  147 => 32,  144 => 49,  141 => 70,  133 => 62,  130 => 47,  125 => 36,  122 => 35,  116 => 35,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 41,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 43,  73 => 32,  64 => 19,  60 => 18,  57 => 31,  54 => 30,  51 => 16,  48 => 15,  45 => 21,  42 => 30,  39 => 17,  36 => 16,  33 => 22,  30 => 15,);
    }
}
