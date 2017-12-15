<?php

/* transaction/index.html.twig */
class __TwigTemplate_38e40f37a38596ff7b1428357527dc5b15a16b156e8431e7a6f262024a93ab49 extends Twig_Template
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
        $__internal_8153f82569bb982c3567c84750a858d0b351a094ddc10646bde13e0a1de36503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8153f82569bb982c3567c84750a858d0b351a094ddc10646bde13e0a1de36503->enter($__internal_8153f82569bb982c3567c84750a858d0b351a094ddc10646bde13e0a1de36503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8153f82569bb982c3567c84750a858d0b351a094ddc10646bde13e0a1de36503->leave($__internal_8153f82569bb982c3567c84750a858d0b351a094ddc10646bde13e0a1de36503_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b34d33f76f362f131d9d6abc34df146c7090d56a4ce6572e27c71100def42bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34d33f76f362f131d9d6abc34df146c7090d56a4ce6572e27c71100def42bc4->enter($__internal_b34d33f76f362f131d9d6abc34df146c7090d56a4ce6572e27c71100def42bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Transactions list</h1>

    <table>
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? $this->getContext($context, "transactions")));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_show", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["transaction"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_show", array("id" => $this->getAttribute($context["transaction"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_new");
        echo "\">Create a new transaction</a>
        </li>
    </ul>
";
        
        $__internal_b34d33f76f362f131d9d6abc34df146c7090d56a4ce6572e27c71100def42bc4->leave($__internal_b34d33f76f362f131d9d6abc34df146c7090d56a4ce6572e27c71100def42bc4_prof);

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
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Transactions list</h1>

    <table>
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
                            <a href=\"{{ path('transaction_show', { 'id': transaction.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('transaction_edit', { 'id': transaction.id }) }}\">edit</a>
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
{% endblock %}
", "transaction/index.html.twig", "/symfony/app/Resources/views/transaction/index.html.twig");
    }
}
