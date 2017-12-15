<?php

/* account/show.html.twig */
class __TwigTemplate_e342e128c981cba2ceb0aabd3fda6c9c847fef2273cb95db14260b31409d8f1c extends Twig_Template
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
        $__internal_61e9aab9bf2beed1036fb5636bea61cfc7a707b509a79784b68ff1cb0d62f332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e9aab9bf2beed1036fb5636bea61cfc7a707b509a79784b68ff1cb0d62f332->enter($__internal_61e9aab9bf2beed1036fb5636bea61cfc7a707b509a79784b68ff1cb0d62f332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e9aab9bf2beed1036fb5636bea61cfc7a707b509a79784b68ff1cb0d62f332->leave($__internal_61e9aab9bf2beed1036fb5636bea61cfc7a707b509a79784b68ff1cb0d62f332_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72a1bf6f6dd089cba4a8d87df23e879ce4345972e4da15ff9b8321e9df581018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a1bf6f6dd089cba4a8d87df23e879ce4345972e4da15ff9b8321e9df581018->enter($__internal_72a1bf6f6dd089cba4a8d87df23e879ce4345972e4da15ff9b8321e9df581018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Account</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "num", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 27
        if ($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <h1>Transaction</h1>
    <table class=\"table table-hover\">
        <thead>
            <th>Id</th>
            <th>Num</th>
            <th>Name</th>
            <th>Date</th>
        </thead>
        <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "startTransaction", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 42
            echo "            <tr>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "num", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["transaction"], "amount", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
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
        // line 49
        echo "        </tbody>
    </table>

<h1>Beneficiaries</h1>
    <table class=\"table table-hover\">
        <thead>
            <th>Id</th>
            <th>Num</th>
            <th>Name</th>
        </thead>
        <tbody>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "beneficiaries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["beneficiaries"]) {
            // line 61
            echo "
                    <tr style=\"color: ";
            // line 62
            if (($this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "amount", array()) < 0)) {
                echo "red";
            } else {
                echo "blue";
            }
            echo "\">
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "num", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["beneficiaries"], "name", array()), "html", null, true);
            echo "</td>
                    </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['beneficiaries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_edit", array("id" => $this->getAttribute(($context["account"] ?? $this->getContext($context, "account")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_72a1bf6f6dd089cba4a8d87df23e879ce4345972e4da15ff9b8321e9df581018->leave($__internal_72a1bf6f6dd089cba4a8d87df23e879ce4345972e4da15ff9b8321e9df581018_prof);

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
        return array (  195 => 81,  190 => 79,  184 => 76,  178 => 73,  171 => 68,  162 => 65,  158 => 64,  154 => 63,  146 => 62,  143 => 61,  139 => 60,  126 => 49,  115 => 46,  111 => 45,  107 => 44,  103 => 43,  100 => 42,  96 => 41,  77 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Account</h1>

    <table class=\"table table-hover\">
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
    <table class=\"table table-hover\">
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
    <table class=\"table table-hover\">
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
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>
{% endblock %}
", "account/show.html.twig", "/symfony/app/Resources/views/account/show.html.twig");
    }
}
