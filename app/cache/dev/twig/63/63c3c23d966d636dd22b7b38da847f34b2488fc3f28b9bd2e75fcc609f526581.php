<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_3836ea8406c3263a4fb86de700eb6bebc4766c2c5e47c720488852249d894ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7dcc8c6f9e67191b27735746b8b2f79f6bbe8e2dc1f955038bc8e2874ce31f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dcc8c6f9e67191b27735746b8b2f79f6bbe8e2dc1f955038bc8e2874ce31f1->enter($__internal_a7dcc8c6f9e67191b27735746b8b2f79f6bbe8e2dc1f955038bc8e2874ce31f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7dcc8c6f9e67191b27735746b8b2f79f6bbe8e2dc1f955038bc8e2874ce31f1->leave($__internal_a7dcc8c6f9e67191b27735746b8b2f79f6bbe8e2dc1f955038bc8e2874ce31f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be96a94fe75d26766cb76dfb405b670bdeb99eb5c5f1caa02c812f8732d20b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be96a94fe75d26766cb76dfb405b670bdeb99eb5c5f1caa02c812f8732d20b9b->enter($__internal_be96a94fe75d26766cb76dfb405b670bdeb99eb5c5f1caa02c812f8732d20b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_be96a94fe75d26766cb76dfb405b670bdeb99eb5c5f1caa02c812f8732d20b9b->leave($__internal_be96a94fe75d26766cb76dfb405b670bdeb99eb5c5f1caa02c812f8732d20b9b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae312eef31998b6aa02a86a8f614f1d9743ad8fb4a7a5f72029835dae1523506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae312eef31998b6aa02a86a8f614f1d9743ad8fb4a7a5f72029835dae1523506->enter($__internal_ae312eef31998b6aa02a86a8f614f1d9743ad8fb4a7a5f72029835dae1523506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ae312eef31998b6aa02a86a8f614f1d9743ad8fb4a7a5f72029835dae1523506->leave($__internal_ae312eef31998b6aa02a86a8f614f1d9743ad8fb4a7a5f72029835dae1523506_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0811068a24a4f6f965e914e532b6db5c4fb6a34b6a2d2c8abaf7fa8a995e7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0811068a24a4f6f965e914e532b6db5c4fb6a34b6a2d2c8abaf7fa8a995e7c0->enter($__internal_a0811068a24a4f6f965e914e532b6db5c4fb6a34b6a2d2c8abaf7fa8a995e7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_a0811068a24a4f6f965e914e532b6db5c4fb6a34b6a2d2c8abaf7fa8a995e7c0->leave($__internal_a0811068a24a4f6f965e914e532b6db5c4fb6a34b6a2d2c8abaf7fa8a995e7c0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9982ad99887f421ab9e1905e208ea86a2c452cbe03876c694f6bea34b89afc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9982ad99887f421ab9e1905e208ea86a2c452cbe03876c694f6bea34b89afc2->enter($__internal_b9982ad99887f421ab9e1905e208ea86a2c452cbe03876c694f6bea34b89afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b9982ad99887f421ab9e1905e208ea86a2c452cbe03876c694f6bea34b89afc2->leave($__internal_b9982ad99887f421ab9e1905e208ea86a2c452cbe03876c694f6bea34b89afc2_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/Applications/MAMP/htdocs/GSB/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
