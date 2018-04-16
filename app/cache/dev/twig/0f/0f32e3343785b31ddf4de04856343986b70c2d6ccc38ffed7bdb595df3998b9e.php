<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_acea976146db98114ad9e23579cc3bd9d23871edf1af6b8f44070458f8356538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_46b326df141ba1e83ae115d1a9591c7ac9b239d4d3a6a06463beff0f01225c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b326df141ba1e83ae115d1a9591c7ac9b239d4d3a6a06463beff0f01225c93->enter($__internal_46b326df141ba1e83ae115d1a9591c7ac9b239d4d3a6a06463beff0f01225c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b326df141ba1e83ae115d1a9591c7ac9b239d4d3a6a06463beff0f01225c93->leave($__internal_46b326df141ba1e83ae115d1a9591c7ac9b239d4d3a6a06463beff0f01225c93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_088c126fad4d3a57e9721684f1f2ce126b9ea7d4f0ca9fbf8dc4579f9333c951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088c126fad4d3a57e9721684f1f2ce126b9ea7d4f0ca9fbf8dc4579f9333c951->enter($__internal_088c126fad4d3a57e9721684f1f2ce126b9ea7d4f0ca9fbf8dc4579f9333c951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_088c126fad4d3a57e9721684f1f2ce126b9ea7d4f0ca9fbf8dc4579f9333c951->leave($__internal_088c126fad4d3a57e9721684f1f2ce126b9ea7d4f0ca9fbf8dc4579f9333c951_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36fb9aff13257d9112b8733819cc298f636b36e75d15592c4c16946011328ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fb9aff13257d9112b8733819cc298f636b36e75d15592c4c16946011328ae9->enter($__internal_36fb9aff13257d9112b8733819cc298f636b36e75d15592c4c16946011328ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_36fb9aff13257d9112b8733819cc298f636b36e75d15592c4c16946011328ae9->leave($__internal_36fb9aff13257d9112b8733819cc298f636b36e75d15592c4c16946011328ae9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
