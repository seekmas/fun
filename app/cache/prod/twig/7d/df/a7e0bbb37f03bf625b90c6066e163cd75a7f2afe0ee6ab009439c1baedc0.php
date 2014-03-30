<?php

/* ::form_fields.html.twig */
class __TwigTemplate_7ddfa7e0bbb37f03bf625b90c6066e163cd75a7f2afe0ee6ab009439c1baedc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_field_label($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("field_label", $context, $blocks);
        echo "

    ";
        // line 7
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 8
            echo "        <span class=\"required\" title=\"This field is required\">*</span>
    ";
        }
    }

    // line 13
    public function block_form_errors($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        ob_start();
        // line 15
        echo "\t    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "
\t        ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "\t            <div class=\"alert alert-danger\">
\t            \t<strong><i class=\"fa fa-info-circle\"></i> 提醒! </strong>
\t            \t";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                echo "
\t            </div>
\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
\t    ";
        }
        // line 25
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::form_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  75 => 23,  66 => 20,  62 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  46 => 13,  40 => 8,  38 => 7,  32 => 5,  29 => 4,);
    }
}
