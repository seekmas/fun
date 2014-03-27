<?php

/* ::login_layout.html.twig */
class __TwigTemplate_93c890ba0b65f9eb4ed6349f24c4cac91e90c9b57c630b66b8436002a2a031cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base2.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_javascripts' => array($this, 'block_head_javascripts'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/css/bootstrap-theme.css"), "html", null, true);
        echo "\" />    
";
    }

    // line 8
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    <script charset=\"utf-8\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script charset=\"utf-8\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "     
        <div class=\"container\" style=\"margin-top:10px;\"><div class=\"row\">
            <div class=\"col-md-12\">
                <div>
                    ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 24
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 26
        echo "                </div>

                ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 30
                echo "                        <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                            ";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                <div>
                    ";
        // line 37
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 39
        echo "                </div>
            </div>

        </div></div>

        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
";
    }

    // line 37
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::login_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  150 => 38,  147 => 37,  142 => 45,  140 => 44,  133 => 39,  131 => 37,  127 => 35,  121 => 34,  112 => 31,  107 => 30,  102 => 29,  98 => 28,  94 => 26,  86 => 24,  80 => 21,  76 => 20,  71 => 19,  69 => 18,  63 => 14,  54 => 10,  49 => 9,  40 => 5,  35 => 4,  32 => 3,  72 => 22,  67 => 20,  60 => 13,  55 => 14,  51 => 13,  46 => 8,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
