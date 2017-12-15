<?php

/* transaction/show.html.twig */
class __TwigTemplate_b58d107e642a68f216bec5dea27aee8ae9be27a358c6cbaca3fb7ccea95e5ff0 extends Twig_Template
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
        $__internal_d6b4fb9ee86b3c43a5b992cf242a78c63dc900e0a6ee0e929546218732f3b359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b4fb9ee86b3c43a5b992cf242a78c63dc900e0a6ee0e929546218732f3b359->enter($__internal_d6b4fb9ee86b3c43a5b992cf242a78c63dc900e0a6ee0e929546218732f3b359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b4fb9ee86b3c43a5b992cf242a78c63dc900e0a6ee0e929546218732f3b359->leave($__internal_d6b4fb9ee86b3c43a5b992cf242a78c63dc900e0a6ee0e929546218732f3b359_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_edae17d658b702a581c96c0a03aef53ba63594896dea45f25ed0c5dead6940a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edae17d658b702a581c96c0a03aef53ba63594896dea45f25ed0c5dead6940a5->enter($__internal_edae17d658b702a581c96c0a03aef53ba63594896dea45f25ed0c5dead6940a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Transaction</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Num</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "num", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Amount</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "amount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 22
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
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_edit", array("id" => $this->getAttribute(($context["transaction"] ?? $this->getContext($context, "transaction")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_edae17d658b702a581c96c0a03aef53ba63594896dea45f25ed0c5dead6940a5->leave($__internal_edae17d658b702a581c96c0a03aef53ba63594896dea45f25ed0c5dead6940a5_prof);

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
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Transaction</h1>

    <table>
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
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "transaction/show.html.twig", "/symfony/app/Resources/views/transaction/show.html.twig");
    }
}
