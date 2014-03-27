<?php

/* ::frame.html.twig */
class __TwigTemplate_328ea45326a13dfd83f5e678de0500a211f824b4ee6671cd04ba023a20fd22bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'base' => array($this, 'block_base'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('head_javascripts', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
<body>
        <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"pull-right\">
                    ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |

                        <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.profile", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>

                        <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 27
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 29
        echo "                </div>
              </div>
            </div>
        </div>

        <div class=\"container\" style=\"margin-top:10px;\"><div class=\"row\">

            ";
        // line 36
        $this->displayBlock('base', $context, $blocks);
        // line 37
        echo "
        </div></div>
        
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_head_javascripts($context, array $blocks = array())
    {
    }

    // line 36
    public function block_base($context, array $blocks = array())
    {
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 40,  127 => 36,  122 => 8,  117 => 7,  111 => 5,  105 => 41,  103 => 40,  98 => 37,  96 => 36,  87 => 29,  79 => 27,  73 => 24,  69 => 23,  63 => 20,  59 => 19,  53 => 17,  51 => 16,  40 => 9,  37 => 8,  35 => 7,  30 => 5,  24 => 1,  77 => 17,  72 => 15,  67 => 7,  57 => 18,  55 => 17,  52 => 16,  50 => 15,  41 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
