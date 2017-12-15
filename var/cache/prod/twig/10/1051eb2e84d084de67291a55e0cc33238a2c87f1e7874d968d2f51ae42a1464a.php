<?php

/* account/show.html.twig */
class __TwigTemplate_e19d05aee24a71bd5cbca1eb67f53a912f47bda13103791a1015d9eec2a45fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/show.html.twig", 1);
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
        $__internal_f3e118eeec0cf32004619baa33e52ccb852f25a7d7b5c98e74f687110ae68703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e118eeec0cf32004619baa33e52ccb852f25a7d7b5c98e74f687110ae68703->enter($__internal_f3e118eeec0cf32004619baa33e52ccb852f25a7d7b5c98e74f687110ae68703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3e118eeec0cf32004619baa33e52ccb852f25a7d7b5c98e74f687110ae68703->leave($__internal_f3e118eeec0cf32004619baa33e52ccb852f25a7d7b5c98e74f687110ae68703_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c0dd19cc451c8bdf84b93e8ae48d8307373ee4d01368fe77369ecfc286cd393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0dd19cc451c8bdf84b93e8ae48d8307373ee4d01368fe77369ecfc286cd393->enter($__internal_2c0dd19cc451c8bdf84b93e8ae48d8307373ee4d01368fe77369ecfc286cd393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Account</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "num", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <h1>Transaction</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Num</th>
            <th>Name</th>
            <th>Date</th>
        </thead>
        <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "startTransaction", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["transaction"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaction"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

<h1>Beneficiaries</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Num</th>
            <th>Name</th>
        </thead>
        <tbody>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "beneficiaries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["beneficiaries"]) {
            // line 60
            echo "
                    <tr style=\"color: ";
            // line 61
            if (($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "amount", array()) < 0)) {
                echo "red";
            } else {
                echo "blue";
            }
            echo "\">
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "num", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "name", array()), "html", null, true);
            echo "</td>
                    </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beneficiaries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_edit", array("id" => $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2c0dd19cc451c8bdf84b93e8ae48d8307373ee4d01368fe77369ecfc286cd393->leave($__internal_2c0dd19cc451c8bdf84b93e8ae48d8307373ee4d01368fe77369ecfc286cd393_prof);

    }

    public function getTemplateName()
    {
        return "account/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 80,  189 => 78,  183 => 75,  177 => 72,  170 => 67,  161 => 64,  157 => 63,  153 => 62,  145 => 61,  142 => 60,  138 => 59,  125 => 48,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  99 => 41,  95 => 40,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Account</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ account.id }}</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>{{ account.num }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ account.name }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ account.amount }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if account.date %}{{ account.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <h1>Transaction</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Num</th>
            <th>Name</th>
            <th>Date</th>
        </thead>
        <tbody>
            {% for transaction in account.startTransaction %}
            <tr>
                <td>{{ transaction.id }}</td>
                <td>{{ transaction.num }}</td>
                <td>{{ transaction.amount }}</td>
                <td>{% if transaction.date %}{{ transaction.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

<h1>Beneficiaries</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Num</th>
            <th>Name</th>
        </thead>
        <tbody>
            {% for beneficiaries in account.beneficiaries %}

                    <tr style=\"color: {% if account.amount < 0 %}red{% else %}blue{% endif  %}\">
                        <td>{{ beneficiaries.id }}</td>
                        <td>{{ beneficiaries.num }}</td>
                        <td>{{ beneficiaries.name }}</td>
                    </tr>
            {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('account_edit', { 'id': account.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "account/show.html.twig", "/symfony/app/Resources/views/account/show.html.twig");
    }
}
