<?php

/* ::login_layout.html.twig */
class __TwigTemplate_93c890ba0b65f9eb4ed6349f24c4cac91e90c9b57c630b66b8436002a2a031cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_pure.html.twig");

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
        return "::base_pure.html.twig";
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mc/css/step.css"), "html", null, true);
        echo "\" />
";
    }

    // line 11
    public function block_head_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "    <script charset=\"utf-8\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script charset=\"utf-8\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap3/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "
        ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("McModuleBundle:Navigation:show"));
        echo "

        <div class=\"container\" style=\"margin-top:60px;\"><div class=\"row\">
            <div class=\"col-md-12\">
                <div>
                    ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 29
            echo "                        
                    ";
        }
        // line 31
        echo "                </div>

                <div>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 35
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 36
                echo "                        <div class=\"\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 43
        echo "                </div>
            </div>

        </div></div>

        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
";
    }

    // line 41
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 42
        echo "                    ";
    }

    // line 48
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
        return array (  163 => 48,  159 => 42,  156 => 41,  151 => 49,  149 => 48,  142 => 43,  139 => 41,  133 => 40,  124 => 37,  121 => 36,  116 => 35,  112 => 34,  107 => 31,  103 => 29,  97 => 26,  88 => 24,  86 => 23,  78 => 18,  75 => 17,  72 => 16,  66 => 13,  61 => 12,  58 => 11,  52 => 8,  48 => 7,  44 => 6,  35 => 4,  32 => 3,  105 => 42,  99 => 41,  93 => 25,  84 => 32,  74 => 25,  67 => 21,  63 => 20,  57 => 17,  53 => 16,  49 => 15,  46 => 14,  40 => 5,  38 => 11,  31 => 6,  28 => 5,);
    }
}
