<?php

/* account/transaction_benficiary.html.twig */
class __TwigTemplate_3fa57882f4ff23d9b9377c44a6b6f19f70b1920998ce400b97b40ce43a349ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/transaction_benficiary.html.twig", 1);
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
        $__internal_053d09c14511237e203854fc9d1a146fb5f65103c36e4881651e83978ee52760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053d09c14511237e203854fc9d1a146fb5f65103c36e4881651e83978ee52760->enter($__internal_053d09c14511237e203854fc9d1a146fb5f65103c36e4881651e83978ee52760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/transaction_benficiary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_053d09c14511237e203854fc9d1a146fb5f65103c36e4881651e83978ee52760->leave($__internal_053d09c14511237e203854fc9d1a146fb5f65103c36e4881651e83978ee52760_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a6c7e154fe8f8c7f5b5edc76959a217692d5efcb13fd8f96c25220f72f7691c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6c7e154fe8f8c7f5b5edc76959a217692d5efcb13fd8f96c25220f72f7691c->enter($__internal_4a6c7e154fe8f8c7f5b5edc76959a217692d5efcb13fd8f96c25220f72f7691c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Transaction With Beneficiary</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["transaction_form"] ?? $this->getContext($context, "transaction_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["transaction_form"] ?? $this->getContext($context, "transaction_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Assign\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["transaction_form"] ?? $this->getContext($context, "transaction_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4a6c7e154fe8f8c7f5b5edc76959a217692d5efcb13fd8f96c25220f72f7691c->leave($__internal_4a6c7e154fe8f8c7f5b5edc76959a217692d5efcb13fd8f96c25220f72f7691c_prof);

    }

    public function getTemplateName()
    {
        return "account/transaction_benficiary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Transaction With Beneficiary</h1>

    {{ form_start(transaction_form) }}
        {{ form_widget(transaction_form) }}
        <input type=\"submit\" value=\"Assign\" />
    {{ form_end(transaction_form) }}

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}", "account/transaction_benficiary.html.twig", "/symfony/app/Resources/views/account/transaction_benficiary.html.twig");
    }
}
