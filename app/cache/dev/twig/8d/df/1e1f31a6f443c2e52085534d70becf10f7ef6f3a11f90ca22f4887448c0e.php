<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_8ddf1e1f31a6f443c2e52085534d70becf10f7ef6f3a11f90ca22f4887448c0e extends Twig_Template
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
<h3> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.my_profile_change", array(), "FOSUserBundle"), "html", null, true);
        echo ":</h3>


";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


<form role=\"form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            echo "    \t";
            if (($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "vars"), "name") == "username")) {
                // line 12
                echo "
\t\t    <div class=\"form-group\">
\t\t    \t<label>";
                // line 14
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'label');
                echo "
\t\t    \t
\t\t    \t\t";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "vars"), "value"), "html", null, true);
                echo "
\t\t    \t\t";
                // line 17
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'widget', array("attr" => array("style" => "display:none;")));
                echo "
\t\t    \t
\t\t    \t</label>
\t\t    </div>\t
    \t";
            } else {
                // line 22
                echo "\t\t    ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "vars"), "block_prefixes"), 1) != "hidden")) {
                    // line 23
                    echo "\t\t    <div class=\"form-group\">
\t\t    \t<label>";
                    // line 24
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'label');
                    echo "</label>
\t\t    \t<div class=\"controls\">
\t\t    \t\t";
                    // line 26
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'widget', array("attr" => array("class" => "form-control")));
                    echo "
\t\t    \t</div>
\t\t    </div>
\t\t    ";
                } else {
                    // line 30
                    echo "\t\t    \t";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), 'widget');
                    echo "
\t\t    ";
                }
                // line 32
                echo "    \t";
            }
            // line 33
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    <div>
        <input class=\"btn btn-sm btn-primary\" type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 35,  81 => 20,  34 => 9,  23 => 4,  20 => 1,  146 => 66,  77 => 24,  58 => 12,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 32,  110 => 58,  100 => 9,  90 => 32,  84 => 25,  76 => 46,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 54,  135 => 49,  119 => 48,  102 => 56,  71 => 23,  67 => 22,  63 => 14,  59 => 18,  38 => 6,  94 => 33,  89 => 20,  85 => 38,  75 => 23,  68 => 22,  56 => 16,  87 => 24,  21 => 2,  26 => 2,  93 => 28,  88 => 27,  78 => 19,  46 => 14,  27 => 4,  44 => 11,  31 => 4,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 53,  136 => 56,  121 => 35,  117 => 40,  105 => 40,  91 => 32,  62 => 20,  49 => 14,  24 => 4,  25 => 3,  19 => 2,  79 => 26,  72 => 16,  69 => 21,  47 => 12,  40 => 10,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 55,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 34,  98 => 36,  96 => 53,  83 => 18,  74 => 24,  66 => 20,  55 => 16,  52 => 15,  50 => 13,  43 => 8,  41 => 11,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 47,  125 => 44,  122 => 42,  116 => 33,  112 => 44,  109 => 37,  106 => 36,  103 => 32,  99 => 33,  95 => 33,  92 => 32,  86 => 30,  82 => 48,  80 => 29,  73 => 8,  64 => 22,  60 => 17,  57 => 18,  54 => 16,  51 => 14,  48 => 7,  45 => 10,  42 => 10,  39 => 9,  36 => 8,  33 => 6,  30 => 8,);
    }
}
