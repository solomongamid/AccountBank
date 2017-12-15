<?php

/* base.html.twig */
class __TwigTemplate_60dfc6e31578402993327e31bcb2db18a4602387f2fe84da6443578b4d4ae25a extends Twig_Template
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
        $__internal_2587c3c730df6d4c1b3532d7147b67c5f035373c0ae0746a61e6ff2f178108b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2587c3c730df6d4c1b3532d7147b67c5f035373c0ae0746a61e6ff2f178108b8->enter($__internal_2587c3c730df6d4c1b3532d7147b67c5f035373c0ae0746a61e6ff2f178108b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_2587c3c730df6d4c1b3532d7147b67c5f035373c0ae0746a61e6ff2f178108b8->leave($__internal_2587c3c730df6d4c1b3532d7147b67c5f035373c0ae0746a61e6ff2f178108b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d469d931aad763ef24ed9cfa17ef27f0e790443aed9490807ccbe04520905ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d469d931aad763ef24ed9cfa17ef27f0e790443aed9490807ccbe04520905ed->enter($__internal_3d469d931aad763ef24ed9cfa17ef27f0e790443aed9490807ccbe04520905ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d469d931aad763ef24ed9cfa17ef27f0e790443aed9490807ccbe04520905ed->leave($__internal_3d469d931aad763ef24ed9cfa17ef27f0e790443aed9490807ccbe04520905ed_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5dafa9ed44dca887427054f7d9d72d516563e16e5abc594874f217d125d7ec5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dafa9ed44dca887427054f7d9d72d516563e16e5abc594874f217d125d7ec5f->enter($__internal_5dafa9ed44dca887427054f7d9d72d516563e16e5abc594874f217d125d7ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fddb9b6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/fddb9b6.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_5dafa9ed44dca887427054f7d9d72d516563e16e5abc594874f217d125d7ec5f->leave($__internal_5dafa9ed44dca887427054f7d9d72d516563e16e5abc594874f217d125d7ec5f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeddaafaffa5c19a243b698d36e298914aa8a1dbc6520ed4fb0af36bc085a19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeddaafaffa5c19a243b698d36e298914aa8a1dbc6520ed4fb0af36bc085a19b->enter($__internal_aeddaafaffa5c19a243b698d36e298914aa8a1dbc6520ed4fb0af36bc085a19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aeddaafaffa5c19a243b698d36e298914aa8a1dbc6520ed4fb0af36bc085a19b->leave($__internal_aeddaafaffa5c19a243b698d36e298914aa8a1dbc6520ed4fb0af36bc085a19b_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d023ec24a01724409a7b3ecb0ff03c16273004eac7451ed6fc1385fc535402cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d023ec24a01724409a7b3ecb0ff03c16273004eac7451ed6fc1385fc535402cb->enter($__internal_d023ec24a01724409a7b3ecb0ff03c16273004eac7451ed6fc1385fc535402cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "215113c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_215113c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/215113c_part_1.js");
            // line 17
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "215113c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_215113c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/215113c.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_d023ec24a01724409a7b3ecb0ff03c16273004eac7451ed6fc1385fc535402cb->leave($__internal_d023ec24a01724409a7b3ecb0ff03c16273004eac7451ed6fc1385fc535402cb_prof);

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
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
        {% block stylesheets %}
            {% stylesheets '@bootstrap_css' %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\">
            {% endstylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            {% javascripts '@bootstrap_js' %}
                <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/symfony/app/Resources/views/base.html.twig");
    }
}
