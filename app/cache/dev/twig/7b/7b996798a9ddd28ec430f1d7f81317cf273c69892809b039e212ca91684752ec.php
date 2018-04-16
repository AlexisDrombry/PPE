<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f7e6e71cda59130e697d3e669dca38052e647c592542dc137b00a147c33fd94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e783e49abec313a96eed1423427fd489fee82259dc41154082643c600ba499b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e783e49abec313a96eed1423427fd489fee82259dc41154082643c600ba499b->enter($__internal_8e783e49abec313a96eed1423427fd489fee82259dc41154082643c600ba499b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e783e49abec313a96eed1423427fd489fee82259dc41154082643c600ba499b->leave($__internal_8e783e49abec313a96eed1423427fd489fee82259dc41154082643c600ba499b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7371bb1a91d44c1a864319bc55d92430ee72cd60fdd242c6504f3d9d744b1f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7371bb1a91d44c1a864319bc55d92430ee72cd60fdd242c6504f3d9d744b1f31->enter($__internal_7371bb1a91d44c1a864319bc55d92430ee72cd60fdd242c6504f3d9d744b1f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7371bb1a91d44c1a864319bc55d92430ee72cd60fdd242c6504f3d9d744b1f31->leave($__internal_7371bb1a91d44c1a864319bc55d92430ee72cd60fdd242c6504f3d9d744b1f31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_732acb3566485025f465c9a59847c43d5c05a670b3a8d4ce8ee0a18e2f7739cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732acb3566485025f465c9a59847c43d5c05a670b3a8d4ce8ee0a18e2f7739cb->enter($__internal_732acb3566485025f465c9a59847c43d5c05a670b3a8d4ce8ee0a18e2f7739cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_732acb3566485025f465c9a59847c43d5c05a670b3a8d4ce8ee0a18e2f7739cb->leave($__internal_732acb3566485025f465c9a59847c43d5c05a670b3a8d4ce8ee0a18e2f7739cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_073af4c0323bfe0612b9fe61ead40e2286ae50e934170c6d82c044c67940bf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073af4c0323bfe0612b9fe61ead40e2286ae50e934170c6d82c044c67940bf7b->enter($__internal_073af4c0323bfe0612b9fe61ead40e2286ae50e934170c6d82c044c67940bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_073af4c0323bfe0612b9fe61ead40e2286ae50e934170c6d82c044c67940bf7b->leave($__internal_073af4c0323bfe0612b9fe61ead40e2286ae50e934170c6d82c044c67940bf7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
