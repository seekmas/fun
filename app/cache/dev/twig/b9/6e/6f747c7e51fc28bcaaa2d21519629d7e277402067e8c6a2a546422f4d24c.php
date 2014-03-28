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
        return array (  84 => 22,  23 => 4,  97 => 31,  20 => 1,  81 => 20,  137 => 41,  100 => 32,  90 => 30,  197 => 83,  195 => 82,  175 => 71,  160 => 62,  153 => 60,  114 => 31,  110 => 38,  104 => 34,  76 => 29,  127 => 44,  53 => 14,  77 => 20,  34 => 7,  170 => 65,  161 => 61,  155 => 61,  152 => 57,  146 => 47,  129 => 46,  70 => 7,  65 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 40,  128 => 49,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 60,  143 => 56,  135 => 39,  119 => 33,  102 => 30,  71 => 16,  67 => 26,  63 => 14,  59 => 11,  38 => 8,  94 => 26,  89 => 20,  85 => 35,  75 => 11,  68 => 15,  56 => 15,  87 => 29,  21 => 2,  26 => 12,  93 => 28,  88 => 23,  78 => 19,  46 => 11,  27 => 5,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 46,  156 => 66,  151 => 39,  142 => 59,  138 => 54,  136 => 50,  121 => 43,  117 => 7,  105 => 41,  91 => 27,  62 => 12,  49 => 12,  24 => 7,  25 => 3,  19 => 1,  79 => 29,  72 => 16,  69 => 25,  47 => 9,  40 => 5,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 51,  131 => 37,  123 => 45,  120 => 40,  115 => 56,  111 => 32,  108 => 38,  101 => 35,  98 => 28,  96 => 31,  83 => 28,  74 => 30,  66 => 22,  55 => 17,  52 => 9,  50 => 17,  43 => 12,  41 => 9,  35 => 8,  32 => 8,  29 => 4,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 77,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 62,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 46,  141 => 48,  133 => 49,  130 => 41,  125 => 36,  122 => 8,  116 => 33,  112 => 39,  109 => 34,  106 => 43,  103 => 40,  99 => 41,  95 => 28,  92 => 39,  86 => 34,  82 => 26,  80 => 13,  73 => 24,  64 => 23,  60 => 13,  57 => 21,  54 => 10,  51 => 13,  48 => 7,  45 => 15,  42 => 9,  39 => 9,  36 => 6,  33 => 5,  30 => 2,);
    }
}
