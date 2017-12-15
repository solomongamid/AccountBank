<?php

/* account/assign_benficiary.html.twig */
class __TwigTemplate_0581ff354591b23ac782b47bf99814c069828edd975616d799e1bf5fcc23a541 extends Twig_Template
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
        $__internal_9efea72138acbc8d6b4b6968cecf91d94cf18b14887c15546de141b389581a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efea72138acbc8d6b4b6968cecf91d94cf18b14887c15546de141b389581a42->enter($__internal_9efea72138acbc8d6b4b6968cecf91d94cf18b14887c15546de141b389581a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/assign_benficiary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9efea72138acbc8d6b4b6968cecf91d94cf18b14887c15546de141b389581a42->leave($__internal_9efea72138acbc8d6b4b6968cecf91d94cf18b14887c15546de141b389581a42_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b22fa4026b2eaee63bd5e132b5554ffe6b61f65a4bd946ef4a36173ee1ee0a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22fa4026b2eaee63bd5e132b5554ffe6b61f65a4bd946ef4a36173ee1ee0a7d->enter($__internal_b22fa4026b2eaee63bd5e132b5554ffe6b61f65a4bd946ef4a36173ee1ee0a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Assign Beneficiary</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["assign_form"] ?? $this->getContext($context, "assign_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["assign_form"] ?? $this->getContext($context, "assign_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Assign\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["assign_form"] ?? $this->getContext($context, "assign_form")), 'form_end');
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
        
        $__internal_b22fa4026b2eaee63bd5e132b5554ffe6b61f65a4bd946ef4a36173ee1ee0a7d->leave($__internal_b22fa4026b2eaee63bd5e132b5554ffe6b61f65a4bd946ef4a36173ee1ee0a7d_prof);

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
    <h1>Assign Beneficiary</h1>

    {{ form_start(assign_form) }}
        {{ form_widget(assign_form) }}
        <input type=\"submit\" value=\"Assign\" />
    {{ form_end(assign_form) }}

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}", "account/assign_benficiary.html.twig", "/symfony/app/Resources/views/account/assign_benficiary.html.twig");
    }
}
