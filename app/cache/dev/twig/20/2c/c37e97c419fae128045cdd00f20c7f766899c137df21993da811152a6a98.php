<?php

/* McModuleBundle:Navigation:show.html.twig */
class __TwigTemplate_202cc37e97c419fae128045cdd00f20c7f766899c137df21993da811152a6a98 extends Twig_Template
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
        echo "<style>
a.navbar-brand {
  background-image: url(\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/img/logo.png"), "html", null, true);
        echo "\") ;
  background-repeat: no-repeat;
  background-position: center center;
  width: 280px;
  height: 20px;
  background-size:contain;
  
}
</style>
<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
  <div class=\"container\">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">

    </a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
    <ul class=\"nav navbar-nav\">
      <li><a href=\"#\">新闻</a></li>
      <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getUrl("mc_college_public");
        echo "\">课程</a></li>
      <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">我的课程 <b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("mc_college_homepage");
        echo "\">学习中的课程</a></li>
          <li><a href=\"#\">预定的课程</a></li>
          <li class=\"divider\"></li>
          <li><a href=\"#\">历史记录</a></li>

        </ul>
      </li>
    </ul>

    <p class=\"navbar-text navbar-right\">
                    ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |

                        <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.profile", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 56
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 58
        echo "    </p>

  </div><!-- /.navbar-collapse -->
  </div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "McModuleBundle:Navigation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  20 => 1,  146 => 66,  77 => 24,  58 => 12,  129 => 55,  113 => 39,  249 => 107,  232 => 99,  181 => 73,  153 => 61,  137 => 60,  134 => 50,  97 => 32,  110 => 58,  100 => 9,  90 => 32,  84 => 28,  76 => 46,  70 => 20,  205 => 85,  195 => 78,  192 => 78,  185 => 71,  170 => 63,  161 => 59,  155 => 55,  126 => 43,  124 => 42,  53 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 84,  177 => 72,  169 => 60,  140 => 55,  132 => 48,  128 => 49,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 106,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 80,  179 => 67,  159 => 61,  143 => 54,  135 => 49,  119 => 48,  102 => 56,  71 => 20,  67 => 22,  63 => 15,  59 => 13,  38 => 9,  94 => 33,  89 => 20,  85 => 38,  75 => 17,  68 => 23,  56 => 14,  87 => 25,  21 => 2,  26 => 2,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 66,  151 => 60,  142 => 50,  138 => 53,  136 => 56,  121 => 41,  117 => 40,  105 => 40,  91 => 32,  62 => 14,  49 => 9,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 21,  69 => 21,  47 => 9,  40 => 7,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 55,  139 => 45,  131 => 49,  123 => 47,  120 => 40,  115 => 28,  111 => 37,  108 => 38,  101 => 33,  98 => 36,  96 => 53,  83 => 18,  74 => 45,  66 => 20,  55 => 15,  52 => 13,  50 => 13,  43 => 8,  41 => 9,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 84,  199 => 67,  193 => 73,  189 => 71,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 62,  164 => 60,  162 => 57,  154 => 58,  149 => 54,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 47,  125 => 44,  122 => 42,  116 => 40,  112 => 44,  109 => 37,  106 => 36,  103 => 32,  99 => 40,  95 => 8,  92 => 52,  86 => 49,  82 => 48,  80 => 29,  73 => 8,  64 => 22,  60 => 22,  57 => 18,  54 => 31,  51 => 14,  48 => 12,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
