<?php

/* KnpPaginatorBundle:Pagination:filtration.html.twig */
class __TwigTemplate_b96e6f747c7e51fc28bcaaa2d21519629d7e277402067e8c6a2a546422f4d24c extends Twig_Template
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
        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) ? $context["filterFieldName"] : $this->getContext($context, "filterFieldName")), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "html", null, true);
            echo "\"";
            if (((isset($context["selectedField"]) ? $context["selectedField"] : $this->getContext($context, "selectedField")) == (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["selectedValue"]) ? $context["selectedValue"] : $this->getContext($context, "selectedValue")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["filterValueName"]) ? $context["filterValueName"] : $this->getContext($context, "filterValueName")), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "button"), "html", null, true);
        echo "</button>

</form>";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 90,  160 => 77,  114 => 54,  65 => 20,  104 => 35,  81 => 38,  34 => 7,  23 => 4,  20 => 1,  146 => 66,  77 => 35,  58 => 11,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 26,  110 => 58,  100 => 9,  90 => 32,  84 => 32,  76 => 36,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 75,  126 => 43,  124 => 58,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 88,  169 => 83,  140 => 55,  132 => 48,  128 => 60,  107 => 31,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 42,  143 => 54,  135 => 49,  119 => 48,  102 => 50,  71 => 23,  67 => 21,  63 => 20,  59 => 11,  38 => 11,  94 => 45,  89 => 43,  85 => 25,  75 => 17,  68 => 34,  56 => 16,  87 => 24,  21 => 3,  26 => 12,  93 => 38,  88 => 24,  78 => 18,  46 => 14,  27 => 5,  44 => 6,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 48,  158 => 62,  156 => 41,  151 => 49,  142 => 68,  138 => 53,  136 => 56,  121 => 36,  117 => 40,  105 => 42,  91 => 32,  62 => 20,  49 => 15,  24 => 7,  25 => 3,  19 => 1,  79 => 26,  72 => 34,  69 => 21,  47 => 12,  40 => 12,  37 => 8,  22 => 3,  246 => 90,  157 => 56,  145 => 55,  139 => 41,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 34,  98 => 36,  96 => 53,  83 => 18,  74 => 25,  66 => 33,  55 => 28,  52 => 9,  50 => 14,  43 => 12,  41 => 11,  35 => 8,  32 => 3,  29 => 4,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 48,  147 => 70,  144 => 49,  141 => 48,  133 => 62,  130 => 47,  125 => 44,  122 => 42,  116 => 35,  112 => 34,  109 => 52,  106 => 51,  103 => 29,  99 => 41,  95 => 33,  92 => 32,  86 => 23,  82 => 15,  80 => 29,  73 => 22,  64 => 22,  60 => 17,  57 => 17,  54 => 29,  51 => 14,  48 => 7,  45 => 10,  42 => 9,  39 => 7,  36 => 6,  33 => 5,  30 => 2,);
    }
}
