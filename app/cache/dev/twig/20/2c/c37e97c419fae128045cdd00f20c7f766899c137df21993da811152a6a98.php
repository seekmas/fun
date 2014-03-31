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
        return array (  110 => 58,  23 => 3,  20 => 1,  146 => 66,  129 => 55,  242 => 107,  236 => 106,  234 => 105,  225 => 99,  207 => 84,  202 => 82,  197 => 80,  192 => 78,  181 => 73,  153 => 61,  134 => 50,  97 => 32,  76 => 46,  104 => 26,  84 => 28,  77 => 24,  58 => 12,  53 => 9,  34 => 4,  65 => 16,  191 => 75,  184 => 71,  178 => 67,  172 => 64,  167 => 62,  160 => 59,  148 => 54,  137 => 60,  100 => 31,  90 => 32,  70 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 72,  169 => 63,  140 => 55,  132 => 51,  128 => 42,  107 => 33,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 48,  102 => 56,  71 => 19,  67 => 22,  63 => 15,  59 => 13,  38 => 8,  94 => 33,  89 => 8,  85 => 38,  75 => 17,  68 => 14,  56 => 14,  87 => 27,  21 => 2,  26 => 2,  93 => 28,  88 => 30,  78 => 24,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 66,  151 => 60,  142 => 59,  138 => 53,  136 => 56,  121 => 46,  117 => 40,  105 => 40,  91 => 32,  62 => 14,  49 => 9,  24 => 4,  25 => 1,  19 => 1,  79 => 24,  72 => 21,  69 => 21,  47 => 9,  40 => 7,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 49,  123 => 42,  120 => 41,  115 => 37,  111 => 37,  108 => 38,  101 => 33,  98 => 36,  96 => 53,  83 => 25,  74 => 45,  66 => 20,  55 => 15,  52 => 13,  50 => 13,  43 => 8,  41 => 9,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 74,  187 => 76,  182 => 66,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 55,  149 => 51,  147 => 58,  144 => 49,  141 => 50,  133 => 55,  130 => 47,  125 => 44,  122 => 40,  116 => 40,  112 => 44,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 28,  92 => 52,  86 => 49,  82 => 48,  80 => 29,  73 => 22,  64 => 22,  60 => 22,  57 => 14,  54 => 31,  51 => 11,  48 => 10,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
