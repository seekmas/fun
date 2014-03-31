<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f6df8c13f36b0aea8d4e803d9a12c609e2aa91e057797709916442a9c8cc37a2 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  213 => 78,  200 => 72,  194 => 70,  185 => 66,  150 => 55,  303 => 122,  300 => 121,  296 => 92,  293 => 91,  290 => 90,  282 => 86,  279 => 85,  277 => 84,  272 => 81,  266 => 76,  263 => 75,  260 => 74,  257 => 73,  250 => 69,  232 => 63,  226 => 84,  223 => 60,  216 => 79,  190 => 47,  180 => 43,  118 => 49,  170 => 40,  165 => 60,  113 => 48,  188 => 88,  152 => 74,  126 => 63,  155 => 75,  114 => 59,  124 => 25,  81 => 23,  110 => 45,  23 => 13,  20 => 1,  146 => 66,  129 => 37,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 75,  202 => 50,  197 => 71,  192 => 78,  181 => 65,  153 => 56,  134 => 54,  97 => 55,  76 => 31,  104 => 34,  84 => 24,  77 => 28,  58 => 23,  53 => 12,  34 => 22,  65 => 20,  191 => 67,  184 => 90,  178 => 66,  172 => 64,  167 => 76,  160 => 37,  148 => 46,  137 => 30,  100 => 39,  90 => 27,  70 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 87,  283 => 88,  278 => 106,  268 => 79,  264 => 84,  258 => 81,  252 => 80,  247 => 68,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 88,  169 => 83,  140 => 58,  132 => 65,  128 => 60,  107 => 19,  61 => 31,  273 => 96,  269 => 94,  254 => 72,  243 => 88,  240 => 86,  238 => 85,  235 => 64,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 51,  204 => 72,  179 => 84,  159 => 42,  143 => 56,  135 => 53,  119 => 40,  102 => 40,  71 => 24,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 51,  89 => 29,  85 => 28,  75 => 25,  68 => 25,  56 => 17,  87 => 34,  21 => 11,  26 => 3,  93 => 31,  88 => 24,  78 => 26,  46 => 13,  27 => 3,  44 => 14,  31 => 15,  28 => 11,  201 => 92,  196 => 49,  183 => 44,  171 => 81,  166 => 79,  163 => 78,  158 => 62,  156 => 58,  151 => 59,  142 => 68,  138 => 69,  136 => 56,  121 => 50,  117 => 40,  105 => 34,  91 => 50,  62 => 24,  49 => 14,  24 => 12,  25 => 13,  19 => 1,  79 => 17,  72 => 34,  69 => 21,  47 => 15,  40 => 27,  37 => 28,  22 => 2,  246 => 93,  157 => 49,  145 => 45,  139 => 41,  131 => 28,  123 => 42,  120 => 57,  115 => 22,  111 => 47,  108 => 56,  101 => 17,  98 => 36,  96 => 37,  83 => 33,  74 => 25,  66 => 39,  55 => 16,  52 => 16,  50 => 15,  43 => 12,  41 => 25,  35 => 6,  32 => 5,  29 => 14,  209 => 82,  203 => 73,  199 => 67,  193 => 48,  189 => 74,  187 => 46,  182 => 85,  176 => 63,  173 => 71,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 73,  147 => 54,  144 => 49,  141 => 51,  133 => 62,  130 => 46,  125 => 51,  122 => 35,  116 => 39,  112 => 51,  109 => 52,  106 => 43,  103 => 34,  99 => 31,  95 => 46,  92 => 45,  86 => 45,  82 => 27,  80 => 32,  73 => 20,  64 => 23,  60 => 18,  57 => 31,  54 => 30,  51 => 16,  48 => 15,  45 => 10,  42 => 30,  39 => 17,  36 => 16,  33 => 4,  30 => 3,);
    }
}
