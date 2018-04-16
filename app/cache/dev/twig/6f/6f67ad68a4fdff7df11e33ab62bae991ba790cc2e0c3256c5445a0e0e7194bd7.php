<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6effaec97ce3646daafd45af3e651bd957555af09041c9939589b1aae409029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_870289a394d8bff8a51f785266481db25f1650acb1a0c86aa4c14baaf3f29e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870289a394d8bff8a51f785266481db25f1650acb1a0c86aa4c14baaf3f29e75->enter($__internal_870289a394d8bff8a51f785266481db25f1650acb1a0c86aa4c14baaf3f29e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870289a394d8bff8a51f785266481db25f1650acb1a0c86aa4c14baaf3f29e75->leave($__internal_870289a394d8bff8a51f785266481db25f1650acb1a0c86aa4c14baaf3f29e75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3952e5f18b9b61509a2dddbff227ef089d6b18c9daaae8dd9a7585c7c3009520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3952e5f18b9b61509a2dddbff227ef089d6b18c9daaae8dd9a7585c7c3009520->enter($__internal_3952e5f18b9b61509a2dddbff227ef089d6b18c9daaae8dd9a7585c7c3009520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3952e5f18b9b61509a2dddbff227ef089d6b18c9daaae8dd9a7585c7c3009520->leave($__internal_3952e5f18b9b61509a2dddbff227ef089d6b18c9daaae8dd9a7585c7c3009520_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4c674231e6cb2747ec7fc6e84394258339d1a68b318e68b1391ff7dfb5518bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c674231e6cb2747ec7fc6e84394258339d1a68b318e68b1391ff7dfb5518bb->enter($__internal_b4c674231e6cb2747ec7fc6e84394258339d1a68b318e68b1391ff7dfb5518bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4c674231e6cb2747ec7fc6e84394258339d1a68b318e68b1391ff7dfb5518bb->leave($__internal_b4c674231e6cb2747ec7fc6e84394258339d1a68b318e68b1391ff7dfb5518bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fd3ff45a81208b358ed089429b251be2e5bcb04a466d093c2eab4fd6c0f106c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd3ff45a81208b358ed089429b251be2e5bcb04a466d093c2eab4fd6c0f106c->enter($__internal_4fd3ff45a81208b358ed089429b251be2e5bcb04a466d093c2eab4fd6c0f106c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4fd3ff45a81208b358ed089429b251be2e5bcb04a466d093c2eab4fd6c0f106c->leave($__internal_4fd3ff45a81208b358ed089429b251be2e5bcb04a466d093c2eab4fd6c0f106c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
