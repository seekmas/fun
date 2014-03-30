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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "FOSUserBundle"), "html", null, true);
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
        return array (  110 => 58,  102 => 56,  96 => 53,  92 => 52,  82 => 48,  23 => 3,  19 => 1,  81 => 14,  76 => 46,  71 => 8,  60 => 5,  54 => 31,  47 => 12,  37 => 8,  30 => 5,  24 => 1,  163 => 48,  159 => 42,  156 => 41,  151 => 49,  149 => 48,  142 => 43,  139 => 41,  133 => 40,  124 => 37,  121 => 36,  116 => 35,  112 => 34,  107 => 31,  103 => 29,  97 => 26,  88 => 24,  86 => 49,  78 => 18,  75 => 17,  72 => 16,  66 => 7,  61 => 35,  58 => 11,  52 => 14,  48 => 7,  44 => 6,  35 => 7,  32 => 3,  105 => 42,  99 => 41,  93 => 25,  84 => 32,  74 => 45,  67 => 21,  63 => 20,  57 => 17,  53 => 16,  49 => 13,  46 => 14,  40 => 9,  38 => 11,  31 => 6,  28 => 5,);
    }
}
