<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_108fdf7f34bf0047dfb3933986b21f0d3d94a3548f9516deb53477e0e23f7eb8 extends Twig_Template
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
        $__internal_262e81f7d350fdd1e1e5a0bbde0bd7bf5862b307801b521eaa73362b4c5fb879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262e81f7d350fdd1e1e5a0bbde0bd7bf5862b307801b521eaa73362b4c5fb879->enter($__internal_262e81f7d350fdd1e1e5a0bbde0bd7bf5862b307801b521eaa73362b4c5fb879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_262e81f7d350fdd1e1e5a0bbde0bd7bf5862b307801b521eaa73362b4c5fb879->leave($__internal_262e81f7d350fdd1e1e5a0bbde0bd7bf5862b307801b521eaa73362b4c5fb879_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
