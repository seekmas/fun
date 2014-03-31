<?php

/* McAdminBundle:Unit:edit.html.twig */
class __TwigTemplate_01cb42285c7cce1ace91489e65b3725aeb43b4bc733f317fc0f7f01e8124f9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::bootstrap3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_left($context, array $blocks = array())
    {
        // line 4
        echo "
    <ul>
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["key"] => $context["u"]) {
            // line 7
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_unit_edit", array("id" => $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) + 1), "html", null, true);
            echo " . ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : $this->getContext($context, "u")), "subject"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>

";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<h1>Unit edit</h1>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        <div class=\"control-group\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'row');
        echo "
        </div>
        
    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_unit");
        echo "\">
        返回页面列表
    </a>


    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Unit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 47,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 50,  134 => 50,  97 => 34,  110 => 23,  100 => 9,  90 => 32,  84 => 27,  76 => 25,  70 => 29,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 54,  135 => 49,  119 => 43,  102 => 36,  71 => 20,  67 => 22,  63 => 21,  59 => 15,  38 => 9,  94 => 33,  89 => 20,  85 => 38,  75 => 17,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 22,  78 => 24,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 49,  136 => 56,  121 => 41,  117 => 40,  105 => 13,  91 => 22,  62 => 16,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 21,  69 => 21,  47 => 9,  40 => 7,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 31,  98 => 31,  96 => 35,  83 => 18,  74 => 26,  66 => 18,  55 => 15,  52 => 13,  50 => 18,  43 => 9,  41 => 8,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 42,  116 => 40,  112 => 39,  109 => 37,  106 => 36,  103 => 32,  99 => 40,  95 => 8,  92 => 32,  86 => 21,  82 => 22,  80 => 29,  73 => 8,  64 => 22,  60 => 22,  57 => 18,  54 => 14,  51 => 14,  48 => 12,  45 => 11,  42 => 10,  39 => 10,  36 => 6,  33 => 6,  30 => 5,);
    }
}
