<?php

/* ::form_theme.html.twig */
class __TwigTemplate_98f69ce08e787e6a1264575d57968d5393f094768e873c3b900c5e9e822cf82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'text_widget' => array($this, 'block_text_widget'),
            'field_errors' => array($this, 'block_field_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('text_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_errors', $context, $blocks);
        // line 20
        echo "
";
    }

    // line 3
    public function block_text_widget($context, array $blocks = array())
    {
        // line 4
        echo "
        <input class=\"form-control\" type=\"text\" ";
        // line 5
        $this->displayBlock("attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" />

";
    }

    // line 9
    public function block_field_errors($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        ob_start();
        // line 11
        echo "\t    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 12
            echo "
\t        ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "\t            <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
\t    ";
        }
        // line 18
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  77 => 16,  68 => 14,  64 => 13,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  43 => 5,  40 => 4,  37 => 3,  32 => 20,  30 => 9,  27 => 8,  25 => 3,  21 => 1,);
    }
}
