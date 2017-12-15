<?php

/* account/new.html.twig */
class __TwigTemplate_775e88cae939ad4f1f296b0db41008522f0da674235a885072529811f3dacd7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/new.html.twig", 1);
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
        $__internal_07daa1b4219bc812f82ab1a6ff08612603d158f84a6c8804badb41b1a862a677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07daa1b4219bc812f82ab1a6ff08612603d158f84a6c8804badb41b1a862a677->enter($__internal_07daa1b4219bc812f82ab1a6ff08612603d158f84a6c8804badb41b1a862a677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07daa1b4219bc812f82ab1a6ff08612603d158f84a6c8804badb41b1a862a677->leave($__internal_07daa1b4219bc812f82ab1a6ff08612603d158f84a6c8804badb41b1a862a677_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4894091240c1dabdc52a2645d995feeb6d5fc32dd366415f3096966aed4231ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4894091240c1dabdc52a2645d995feeb6d5fc32dd366415f3096966aed4231ed->enter($__internal_4894091240c1dabdc52a2645d995feeb6d5fc32dd366415f3096966aed4231ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Account creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_4894091240c1dabdc52a2645d995feeb6d5fc32dd366415f3096966aed4231ed->leave($__internal_4894091240c1dabdc52a2645d995feeb6d5fc32dd366415f3096966aed4231ed_prof);

    }

    public function getTemplateName()
    {
        return "account/new.html.twig";
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
    <h1>Account creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('account_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "account/new.html.twig", "/symfony/app/Resources/views/account/new.html.twig");
    }
}
