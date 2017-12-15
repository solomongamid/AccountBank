<?php

/* account/index.html.twig */
class __TwigTemplate_2d902ac420b4f7bf7e265725f211f794a00a41b63b1578450ab945dafd4bced1 extends Twig_Template
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
        $__internal_0e8fc98b2ef3feefc3c54ad4a29a9666ad071f6a7ab02ccb1d5fa2834e5dbe4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8fc98b2ef3feefc3c54ad4a29a9666ad071f6a7ab02ccb1d5fa2834e5dbe4b->enter($__internal_0e8fc98b2ef3feefc3c54ad4a29a9666ad071f6a7ab02ccb1d5fa2834e5dbe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8fc98b2ef3feefc3c54ad4a29a9666ad071f6a7ab02ccb1d5fa2834e5dbe4b->leave($__internal_0e8fc98b2ef3feefc3c54ad4a29a9666ad071f6a7ab02ccb1d5fa2834e5dbe4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f8c533a0768db12a6d6ba546108babc775e9e8c198f597a2ca0e8d7617a81d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8c533a0768db12a6d6ba546108babc775e9e8c198f597a2ca0e8d7617a81d3->enter($__internal_7f8c533a0768db12a6d6ba546108babc775e9e8c198f597a2ca0e8d7617a81d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Accounts list</h1>

    <table>
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accounts"] ?? $this->getContext($context, "accounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_show", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["account"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["account"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_show", array("id" => $this->getAttribute($context["account"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
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
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_new");
        echo "\">Create a new account</a>
        </li>
    </ul>
";
        
        $__internal_7f8c533a0768db12a6d6ba546108babc775e9e8c198f597a2ca0e8d7617a81d3->leave($__internal_7f8c533a0768db12a6d6ba546108babc775e9e8c198f597a2ca0e8d7617a81d3_prof);

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
        return array (  115 => 42,  108 => 37,  96 => 31,  90 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Accounts list</h1>

    <table>
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
                            <a href=\"{{ path('account_show', { 'id': account.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('account_edit', { 'id': account.id }) }}\">edit</a>
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
{% endblock %}
", "account/index.html.twig", "/symfony/app/Resources/views/account/index.html.twig");
    }
}
