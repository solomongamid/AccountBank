<?php

/* transaction/edit.html.twig */
class __TwigTemplate_65c883859aec2fd1097d6c2efa28136abf511db3c1259e79da2d297ab342a0a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transaction/edit.html.twig", 1);
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
        $__internal_3b44efec9559600d06010654dbdb62d26bb5b8196d26c80883b3a7bf96281823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b44efec9559600d06010654dbdb62d26bb5b8196d26c80883b3a7bf96281823->enter($__internal_3b44efec9559600d06010654dbdb62d26bb5b8196d26c80883b3a7bf96281823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transaction/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b44efec9559600d06010654dbdb62d26bb5b8196d26c80883b3a7bf96281823->leave($__internal_3b44efec9559600d06010654dbdb62d26bb5b8196d26c80883b3a7bf96281823_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23fc1d7f7e2ae7270aecbc484402bf6c520428302d804f64d3c76379191244ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fc1d7f7e2ae7270aecbc484402bf6c520428302d804f64d3c76379191244ec->enter($__internal_23fc1d7f7e2ae7270aecbc484402bf6c520428302d804f64d3c76379191244ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Transaction edit</h1>

    <div class=\"form-group\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget', array("attr" => array("class" => "form-group")));
        echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transaction_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_23fc1d7f7e2ae7270aecbc484402bf6c520428302d804f64d3c76379191244ec->leave($__internal_23fc1d7f7e2ae7270aecbc484402bf6c520428302d804f64d3c76379191244ec_prof);

    }

    public function getTemplateName()
    {
        return "transaction/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  62 => 15,  55 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Transaction edit</h1>

    <div class=\"form-group\">
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form, { 'attr': {'class': 'form-group'} }) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}
    </div>
    <ul>
        <li>
            <a href=\"{{ path('transaction_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>
{% endblock %}
", "transaction/edit.html.twig", "/symfony/app/Resources/views/transaction/edit.html.twig");
    }
}
