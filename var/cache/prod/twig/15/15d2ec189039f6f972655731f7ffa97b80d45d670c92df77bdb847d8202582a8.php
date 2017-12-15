<?php

/* accountBundle:Default:index.html.twig */
class __TwigTemplate_64bb2836a5a036eb9cfda3eb1ae03106219b7fa14f3284348e4fd4fe3d0c2d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a85365e66cb6b2fdc199f76ca0c5377278752544153eb9c637ff295ccfa76a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85365e66cb6b2fdc199f76ca0c5377278752544153eb9c637ff295ccfa76a86->enter($__internal_a85365e66cb6b2fdc199f76ca0c5377278752544153eb9c637ff295ccfa76a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accountBundle:Default:index.html.twig"));

        // line 1
        echo "<h1>Hello World!</h1>
<h1>We are here!</h1>
";
        
        $__internal_a85365e66cb6b2fdc199f76ca0c5377278752544153eb9c637ff295ccfa76a86->leave($__internal_a85365e66cb6b2fdc199f76ca0c5377278752544153eb9c637ff295ccfa76a86_prof);

    }

    public function getTemplateName()
    {
        return "accountBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Hello World!</h1>
<h1>We are here!</h1>
", "accountBundle:Default:index.html.twig", "/symfony/src/accountBundle/Resources/views/Default/index.html.twig");
    }
}
