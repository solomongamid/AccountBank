<?php

/* transaction/index.html.twig */
class __TwigTemplate_d8e2a77b3f519a584b4eda068089275096e79d3cb614ebd46f9707a1abb06592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transaction/index.html.twig", 1);
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
        $__internal_39af9edea0dbe8daac0cc09818f685a34ff62b18a2595620628b9e69be7b9593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39af9edea0dbe8daac0cc09818f685a34ff62b18a2595620628b9e69be7b9593->enter($__internal_39af9edea0dbe8daac0cc09818f685a34ff62b18a2595620628b9e69be7b9593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39af9edea0dbe8daac0cc09818f685a34ff62b18a2595620628b9e69be7b9593->leave($__internal_39af9edea0dbe8daac0cc09818f685a34ff62b18a2595620628b9e69be7b9593_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d162674b4772d0ac533f4d9d59b159bb0c703167e435894881bdca47c2b21e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d162674b4772d0ac533f4d9d59b159bb0c703167e435894881bdca47c2b21e62->enter($__internal_d162674b4772d0ac533f4d9d59b159bb0c703167e435894881bdca47c2b21e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Transactions list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? $this->getContext($context, "transactions")));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_show", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["transaction"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"bg-info text-white\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_show", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a class=\"bg-warning text-white\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_edit", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_new");
        echo "\">Create a new transaction</a>
        </li>
    </ul>
</div>
";
        
        $__internal_d162674b4772d0ac533f4d9d59b159bb0c703167e435894881bdca47c2b21e62->leave($__internal_d162674b4772d0ac533f4d9d59b159bb0c703167e435894881bdca47c2b21e62_prof);

    }

    public function getTemplateName()
    {
        return "transaction/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  104 => 36,  92 => 30,  86 => 27,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Transactions list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Num</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for transaction in transactions %}
            <tr>
                <td><a href=\"{{ path('transaction_show', { 'id': transaction.id }) }}\">{{ transaction.id }}</a></td>
                <td>{{ transaction.num }}</td>
                <td>{{ transaction.amount }}</td>
                <td>{% if transaction.date %}{{ transaction.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a class=\"bg-info text-white\" href=\"{{ path('transaction_show', { 'id': transaction.id }) }}\">show</a>
                        </li>
                        <li>
                            <a class=\"bg-warning text-white\" href=\"{{ path('transaction_edit', { 'id': transaction.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('transaction_new') }}\">Create a new transaction</a>
        </li>
    </ul>
</div>
{% endblock %}
", "transaction/index.html.twig", "/symfony/app/Resources/views/transaction/index.html.twig");
    }
}
