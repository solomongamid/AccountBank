<?php

/* account/assign_benficiary.html.twig */
class __TwigTemplate_15409f001e9482d48c6b968351712fd62e615de27d9b1ffe170c5b3506ef6566 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/assign_benficiary.html.twig", 1);
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
        $__internal_34a5ea2158bd1c69a633a62e7863bca97ce227bb9c9dbb3fe29c8e55a8f60a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a5ea2158bd1c69a633a62e7863bca97ce227bb9c9dbb3fe29c8e55a8f60a32->enter($__internal_34a5ea2158bd1c69a633a62e7863bca97ce227bb9c9dbb3fe29c8e55a8f60a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/assign_benficiary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a5ea2158bd1c69a633a62e7863bca97ce227bb9c9dbb3fe29c8e55a8f60a32->leave($__internal_34a5ea2158bd1c69a633a62e7863bca97ce227bb9c9dbb3fe29c8e55a8f60a32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8fa0b07afc6dd9f7a7b06e3b149326bddaccb1d921a354767e353a2a527e041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fa0b07afc6dd9f7a7b06e3b149326bddaccb1d921a354767e353a2a527e041->enter($__internal_c8fa0b07afc6dd9f7a7b06e3b149326bddaccb1d921a354767e353a2a527e041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Assign Beneficiary</h1>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["assign_form"] ?? $this->getContext($context, "assign_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["assign_form"] ?? $this->getContext($context, "assign_form")), 'widget');
        echo "
        <input class=\"btn btn-success\" type=\"submit\" value=\"Assign\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["assign_form"] ?? $this->getContext($context, "assign_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
</div>
";
        
        $__internal_c8fa0b07afc6dd9f7a7b06e3b149326bddaccb1d921a354767e353a2a527e041->leave($__internal_c8fa0b07afc6dd9f7a7b06e3b149326bddaccb1d921a354767e353a2a527e041_prof);

    }

    public function getTemplateName()
    {
        return "account/assign_benficiary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Assign Beneficiary</h1>

    {{ form_start(assign_form) }}
        {{ form_widget(assign_form) }}
        <input class=\"btn btn-success\" type=\"submit\" value=\"Assign\" />
    {{ form_end(assign_form) }}

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
    </ul>
</div>
{% endblock %}", "account/assign_benficiary.html.twig", "/symfony/app/Resources/views/account/assign_benficiary.html.twig");
    }
}
