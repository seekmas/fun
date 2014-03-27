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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/css/login.css"), "html", null, true);
        echo "\" />
";
    }

    // line 10
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "    <script charset=\"utf-8\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script charset=\"utf-8\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "     
        <div class=\"container\" style=\"margin-top:10px;\"><div class=\"row\">
            <div class=\"col-md-12\">
                <div>
                    ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 26
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 28
        echo "                </div>

                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "                        <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                            ";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
                <div>
                    ";
        // line 39
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 41
        echo "                </div>
            </div>

        </div></div>

        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
";
    }

    // line 39
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 40
        echo "                    ";
    }

    // line 46
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
        return array (  162 => 46,  158 => 40,  155 => 39,  150 => 47,  148 => 46,  141 => 41,  139 => 39,  135 => 37,  129 => 36,  120 => 33,  115 => 32,  110 => 31,  106 => 30,  102 => 28,  94 => 26,  88 => 23,  84 => 22,  79 => 21,  77 => 20,  71 => 16,  68 => 15,  62 => 12,  57 => 11,  54 => 10,  48 => 7,  44 => 6,  40 => 5,  35 => 4,  32 => 3,);
    }
}