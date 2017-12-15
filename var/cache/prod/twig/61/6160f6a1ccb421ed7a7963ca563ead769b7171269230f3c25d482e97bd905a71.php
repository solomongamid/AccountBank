<?php

/* account/index.html.twig */
class __TwigTemplate_e2b142c0e9ee286159c57254cad017691e597521d20ff46c7d98049cda73b4de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2927d3847368b532df452acfe7c734777da2416cffeff338745b45eb506fb71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2927d3847368b532df452acfe7c734777da2416cffeff338745b45eb506fb71->enter($__internal_c2927d3847368b532df452acfe7c734777da2416cffeff338745b45eb506fb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2927d3847368b532df452acfe7c734777da2416cffeff338745b45eb506fb71->leave($__internal_c2927d3847368b532df452acfe7c734777da2416cffeff338745b45eb506fb71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bd26be2f1074c4c1c644b1c608140664271d8bba1670ae9a68075dad1651c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd26be2f1074c4c1c644b1c608140664271d8bba1670ae9a68075dad1651c47->enter($__internal_4bd26be2f1074c4c1c644b1c608140664271d8bba1670ae9a68075dad1651c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Accounts list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accounts"] ?? $this->getContext($context, "accounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_show", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["account"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["account"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"bg-info text-white\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_show", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"bg-warning text-white\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_edit", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_new");
        echo "\">Create a new account</a>
        </li>
    </ul>
</div>
";
        
        $__internal_4bd26be2f1074c4c1c644b1c608140664271d8bba1670ae9a68075dad1651c47->leave($__internal_4bd26be2f1074c4c1c644b1c608140664271d8bba1670ae9a68075dad1651c47_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  109 => 38,  97 => 32,  91 => 29,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <h1>Accounts list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for account in accounts %}
            <tr>
                <td><a href=\"{{ path('account_show', { 'id': account.id }) }}\">{{ account.id }}</a></td>
                <td>{{ account.num }}</td>
                <td>{{ account.name }}</td>
                <td>{{ account.amount }}</td>
                <td>{% if account.date %}{{ account.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"bg-info text-white\" href=\"{{ path('account_show', { 'id': account.id }) }}\">show</a>
                        </li>
                        <li>
                            <a class=\"bg-warning text-white\" href=\"{{ path('account_edit', { 'id': account.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('account_new') }}\">Create a new account</a>
        </li>
    </ul>
</div>
{% endblock %}
", "account/index.html.twig", "/symfony/app/Resources/views/account/index.html.twig");
    }
}
