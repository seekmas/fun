<?php

/* McAdminBundle:Program:show.html.twig */
class __TwigTemplate_4b4f7ebd0d92bb13bde7b2b1b02de53b5cf6b8592bef89e5a1ff642762859fa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Program</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subject"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "summary"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sortid</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sortId"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_program");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_program_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Program:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 26,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 82,  197 => 80,  192 => 78,  181 => 73,  153 => 61,  134 => 50,  97 => 34,  76 => 25,  104 => 26,  84 => 7,  77 => 18,  58 => 19,  53 => 18,  34 => 4,  65 => 16,  191 => 75,  184 => 71,  178 => 67,  172 => 64,  167 => 62,  160 => 59,  148 => 54,  137 => 51,  120 => 41,  100 => 31,  90 => 32,  70 => 29,  52 => 13,  37 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 72,  169 => 63,  140 => 55,  132 => 51,  128 => 42,  111 => 37,  107 => 33,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 49,  119 => 39,  108 => 38,  102 => 35,  71 => 19,  67 => 22,  63 => 21,  59 => 20,  47 => 11,  38 => 8,  94 => 33,  89 => 8,  85 => 38,  79 => 24,  75 => 17,  68 => 14,  56 => 14,  50 => 18,  29 => 4,  87 => 27,  72 => 27,  55 => 15,  21 => 2,  26 => 6,  98 => 34,  93 => 28,  88 => 6,  78 => 34,  46 => 14,  27 => 4,  40 => 8,  44 => 9,  35 => 6,  31 => 4,  43 => 8,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 66,  151 => 60,  142 => 59,  138 => 54,  136 => 56,  123 => 42,  121 => 46,  117 => 44,  115 => 37,  105 => 40,  101 => 32,  91 => 30,  69 => 21,  66 => 20,  62 => 21,  49 => 12,  24 => 4,  32 => 5,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 59,  154 => 55,  149 => 51,  147 => 58,  144 => 49,  141 => 50,  133 => 55,  130 => 41,  125 => 44,  122 => 40,  116 => 40,  112 => 39,  109 => 34,  106 => 33,  103 => 32,  99 => 40,  95 => 28,  92 => 35,  86 => 28,  82 => 26,  80 => 29,  73 => 22,  64 => 22,  60 => 22,  57 => 14,  54 => 10,  51 => 11,  48 => 10,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
