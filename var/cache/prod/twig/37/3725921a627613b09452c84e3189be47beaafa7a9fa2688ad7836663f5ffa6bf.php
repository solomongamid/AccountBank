<?php

/* base.html.twig */
class __TwigTemplate_e23c17f3b4b947d91d6ac83e2a130ca1221df656d764d3781157ffc5c331cd7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a8823d0eb840b8640efc65051e9be7ec3dcdcfbe9203a25a636edb710d73e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8823d0eb840b8640efc65051e9be7ec3dcdcfbe9203a25a636edb710d73e06->enter($__internal_1a8823d0eb840b8640efc65051e9be7ec3dcdcfbe9203a25a636edb710d73e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1a8823d0eb840b8640efc65051e9be7ec3dcdcfbe9203a25a636edb710d73e06->leave($__internal_1a8823d0eb840b8640efc65051e9be7ec3dcdcfbe9203a25a636edb710d73e06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d98d68083206930d0233adf65967cb1f46dbbf5a037c4a27102b77e0c44ec4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98d68083206930d0233adf65967cb1f46dbbf5a037c4a27102b77e0c44ec4b1->enter($__internal_d98d68083206930d0233adf65967cb1f46dbbf5a037c4a27102b77e0c44ec4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d98d68083206930d0233adf65967cb1f46dbbf5a037c4a27102b77e0c44ec4b1->leave($__internal_d98d68083206930d0233adf65967cb1f46dbbf5a037c4a27102b77e0c44ec4b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18c3256d88e7def36b9f558f6b410b34b5c90908a9410bb1186b8844d085d98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c3256d88e7def36b9f558f6b410b34b5c90908a9410bb1186b8844d085d98c->enter($__internal_18c3256d88e7def36b9f558f6b410b34b5c90908a9410bb1186b8844d085d98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18c3256d88e7def36b9f558f6b410b34b5c90908a9410bb1186b8844d085d98c->leave($__internal_18c3256d88e7def36b9f558f6b410b34b5c90908a9410bb1186b8844d085d98c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_84f6ff5b2d5987f75144ebe60881b3f47ebfd818badf766779221371f5949731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f6ff5b2d5987f75144ebe60881b3f47ebfd818badf766779221371f5949731->enter($__internal_84f6ff5b2d5987f75144ebe60881b3f47ebfd818badf766779221371f5949731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84f6ff5b2d5987f75144ebe60881b3f47ebfd818badf766779221371f5949731->leave($__internal_84f6ff5b2d5987f75144ebe60881b3f47ebfd818badf766779221371f5949731_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5f694366436abea2e1122950d7d91eb890e305476279b5b4e0802b20211fdd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f694366436abea2e1122950d7d91eb890e305476279b5b4e0802b20211fdd0b->enter($__internal_5f694366436abea2e1122950d7d91eb890e305476279b5b4e0802b20211fdd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f694366436abea2e1122950d7d91eb890e305476279b5b4e0802b20211fdd0b->leave($__internal_5f694366436abea2e1122950d7d91eb890e305476279b5b4e0802b20211fdd0b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/symfony/app/Resources/views/base.html.twig");
    }
}
