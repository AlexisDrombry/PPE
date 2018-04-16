<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e9007ae2dd4bbb2e0872b1d3e0fa7ea53df8d7affd689b8fce87d4ea54153635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a0f6c003e7fbc648aa420c4beda80b6ce1b1b2f83621ae67114f94080e57b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0f6c003e7fbc648aa420c4beda80b6ce1b1b2f83621ae67114f94080e57b8f->enter($__internal_4a0f6c003e7fbc648aa420c4beda80b6ce1b1b2f83621ae67114f94080e57b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4a0f6c003e7fbc648aa420c4beda80b6ce1b1b2f83621ae67114f94080e57b8f->leave($__internal_4a0f6c003e7fbc648aa420c4beda80b6ce1b1b2f83621ae67114f94080e57b8f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_72b4c43fb559051a6620af5fbef6e31c656159a26e3482b20d203af5aba3880a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b4c43fb559051a6620af5fbef6e31c656159a26e3482b20d203af5aba3880a->enter($__internal_72b4c43fb559051a6620af5fbef6e31c656159a26e3482b20d203af5aba3880a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_72b4c43fb559051a6620af5fbef6e31c656159a26e3482b20d203af5aba3880a->leave($__internal_72b4c43fb559051a6620af5fbef6e31c656159a26e3482b20d203af5aba3880a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
