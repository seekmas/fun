<?php

/* McAdminBundle:Unit:index.html.twig */
class __TwigTemplate_bba82293e179003d9846b08c32da09ffe90d27da2ac63232e3185c41c21a6bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bootstrap3.html.twig");

        $this->blocks = array(
            'left' => array($this, 'block_left'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::bootstrap3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_left($context, array $blocks = array())
    {
        // line 4
        echo "课程目录
<ul>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programs"]) ? $context["programs"] : $this->getContext($context, "programs")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 7
            echo "    <li>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_unit_pagination", array("program" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "page" => 1)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "subject"), "html", null, true);
            echo "</a>
        <small>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "summary"), "html", null, true);
            echo "</small>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <h1>Unit list</h1>
    ";
        // line 17
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
    <table class=\"table table-bordered table-condensed\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Subject</th>
            <th>Outline</th>
            <th>Playfile</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_unit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "outline"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "playFile"), "html", null, true);
            echo "</td>
                <td>
                <ul class=\"nav nav-pills nav-stacked\">

                    <li><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_unit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">浏览</a></li>

                    <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_unit_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">编辑</a></li>

                </ul>
                </td>
            </tr>
            </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </table>



        <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_unit_new");
        echo "\">
                创建新页面
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "McAdminBundle:Unit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 53,  130 => 47,  117 => 40,  112 => 38,  105 => 34,  101 => 33,  97 => 32,  91 => 31,  88 => 30,  84 => 29,  69 => 17,  66 => 16,  63 => 15,  58 => 12,  49 => 9,  43 => 8,  40 => 7,  36 => 6,  32 => 4,  29 => 3,);
    }
}
