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
      <li><a href=\"#\">课程</a></li>
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
        return array (  107 => 58,  93 => 53,  89 => 52,  79 => 48,  73 => 46,  71 => 45,  58 => 35,  23 => 3,  19 => 1,  203 => 84,  197 => 83,  195 => 82,  187 => 77,  179 => 72,  175 => 71,  160 => 62,  155 => 61,  153 => 60,  139 => 51,  136 => 50,  133 => 49,  127 => 44,  121 => 43,  114 => 39,  110 => 38,  104 => 36,  101 => 35,  99 => 56,  96 => 33,  92 => 32,  83 => 49,  70 => 23,  66 => 22,  56 => 15,  52 => 14,  47 => 12,  39 => 6,  36 => 5,  30 => 3,);
    }
}
