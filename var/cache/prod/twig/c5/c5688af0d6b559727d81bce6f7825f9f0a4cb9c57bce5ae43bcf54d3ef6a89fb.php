<?php

/* transaction/show.html.twig */
class __TwigTemplate_9a1970ebfa7e77a07082c9bbc288973bb9d1f24e6735823862490917cfaf7c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transaction/show.html.twig", 1);
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
        $__internal_f712a9fb1e3d51c23bd7a1c6b26b0fb6348655187f2a7d7fc99b3ce754d5d77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f712a9fb1e3d51c23bd7a1c6b26b0fb6348655187f2a7d7fc99b3ce754d5d77f->enter($__internal_f712a9fb1e3d51c23bd7a1c6b26b0fb6348655187f2a7d7fc99b3ce754d5d77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f712a9fb1e3d51c23bd7a1c6b26b0fb6348655187f2a7d7fc99b3ce754d5d77f->leave($__internal_f712a9fb1e3d51c23bd7a1c6b26b0fb6348655187f2a7d7fc99b3ce754d5d77f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c36208c15f36dcc9d7a5211555c2de256c2de9ab2e201248066118d2b1af0285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36208c15f36dcc9d7a5211555c2de256c2de9ab2e201248066118d2b1af0285->enter($__internal_c36208c15f36dcc9d7a5211555c2de256c2de9ab2e201248066118d2b1af0285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Transaction</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "num", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 23
        if ($this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_edit", array("id" => $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_c36208c15f36dcc9d7a5211555c2de256c2de9ab2e201248066118d2b1af0285->leave($__internal_c36208c15f36dcc9d7a5211555c2de256c2de9ab2e201248066118d2b1af0285_prof);

    }

    public function getTemplateName()
    {
        return "transaction/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  94 => 36,  88 => 33,  82 => 30,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Transaction</h1>

    <table class=\"table table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ transaction.id }}</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>{{ transaction.num }}</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>{{ transaction.amount }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if transaction.date %}{{ transaction.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('transaction_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('transaction_edit', { 'id': transaction.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>
{% endblock %}
", "transaction/show.html.twig", "/symfony/app/Resources/views/transaction/show.html.twig");
    }
}
