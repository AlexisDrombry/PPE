<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2723ee5070fd6fe28e1632793f13fa016622967d6b45754655d4bf3333bd2c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4cb99f90c6189e9d82f6f441627fef723410b8882b00ebca2cdec183caf229d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4cb99f90c6189e9d82f6f441627fef723410b8882b00ebca2cdec183caf229d->enter($__internal_c4cb99f90c6189e9d82f6f441627fef723410b8882b00ebca2cdec183caf229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4cb99f90c6189e9d82f6f441627fef723410b8882b00ebca2cdec183caf229d->leave($__internal_c4cb99f90c6189e9d82f6f441627fef723410b8882b00ebca2cdec183caf229d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0951d0efb25dbc49afb8bae879036b9f88ed6c64eb0c968cf200c8e54162f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0951d0efb25dbc49afb8bae879036b9f88ed6c64eb0c968cf200c8e54162f94->enter($__internal_b0951d0efb25dbc49afb8bae879036b9f88ed6c64eb0c968cf200c8e54162f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0951d0efb25dbc49afb8bae879036b9f88ed6c64eb0c968cf200c8e54162f94->leave($__internal_b0951d0efb25dbc49afb8bae879036b9f88ed6c64eb0c968cf200c8e54162f94_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e756082236f4bd2fdf415e5ea39efc91a8534b0d2ea95b0954f8a7f47818953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e756082236f4bd2fdf415e5ea39efc91a8534b0d2ea95b0954f8a7f47818953->enter($__internal_9e756082236f4bd2fdf415e5ea39efc91a8534b0d2ea95b0954f8a7f47818953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e756082236f4bd2fdf415e5ea39efc91a8534b0d2ea95b0954f8a7f47818953->leave($__internal_9e756082236f4bd2fdf415e5ea39efc91a8534b0d2ea95b0954f8a7f47818953_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bedbd1c1de9c61d6144dd6e3a2dbc05cbe0ccbdc97e294fb78c6faaf3dee97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bedbd1c1de9c61d6144dd6e3a2dbc05cbe0ccbdc97e294fb78c6faaf3dee97f->enter($__internal_3bedbd1c1de9c61d6144dd6e3a2dbc05cbe0ccbdc97e294fb78c6faaf3dee97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3bedbd1c1de9c61d6144dd6e3a2dbc05cbe0ccbdc97e294fb78c6faaf3dee97f->leave($__internal_3bedbd1c1de9c61d6144dd6e3a2dbc05cbe0ccbdc97e294fb78c6faaf3dee97f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
