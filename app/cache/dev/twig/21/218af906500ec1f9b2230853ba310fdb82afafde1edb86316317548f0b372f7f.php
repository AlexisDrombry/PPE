<?php

/* ::base.html.twig */
class __TwigTemplate_53b32086bb7179f8fd16b070e61c46c339906934d01f8dd799ab6623298cebea extends Twig_Template
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
        $__internal_2633936e8c4b3ea0cc308ca90188fd75e773f06f8008d976f7e3155bf7df1b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2633936e8c4b3ea0cc308ca90188fd75e773f06f8008d976f7e3155bf7df1b2e->enter($__internal_2633936e8c4b3ea0cc308ca90188fd75e773f06f8008d976f7e3155bf7df1b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2633936e8c4b3ea0cc308ca90188fd75e773f06f8008d976f7e3155bf7df1b2e->leave($__internal_2633936e8c4b3ea0cc308ca90188fd75e773f06f8008d976f7e3155bf7df1b2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ed577cdaf75faddb05900b0a044f312c6e17e99e8a62a9881b7f5ac4b21838d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed577cdaf75faddb05900b0a044f312c6e17e99e8a62a9881b7f5ac4b21838d->enter($__internal_5ed577cdaf75faddb05900b0a044f312c6e17e99e8a62a9881b7f5ac4b21838d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ed577cdaf75faddb05900b0a044f312c6e17e99e8a62a9881b7f5ac4b21838d->leave($__internal_5ed577cdaf75faddb05900b0a044f312c6e17e99e8a62a9881b7f5ac4b21838d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a871d84213715f12ae16d8515b894f221f6f2be16c543dbfd68655dddf170825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a871d84213715f12ae16d8515b894f221f6f2be16c543dbfd68655dddf170825->enter($__internal_a871d84213715f12ae16d8515b894f221f6f2be16c543dbfd68655dddf170825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a871d84213715f12ae16d8515b894f221f6f2be16c543dbfd68655dddf170825->leave($__internal_a871d84213715f12ae16d8515b894f221f6f2be16c543dbfd68655dddf170825_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cc0b002d13c2d4d297b75b5542fedb25b605dfbf6e67713c116f442bc46e838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc0b002d13c2d4d297b75b5542fedb25b605dfbf6e67713c116f442bc46e838->enter($__internal_2cc0b002d13c2d4d297b75b5542fedb25b605dfbf6e67713c116f442bc46e838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cc0b002d13c2d4d297b75b5542fedb25b605dfbf6e67713c116f442bc46e838->leave($__internal_2cc0b002d13c2d4d297b75b5542fedb25b605dfbf6e67713c116f442bc46e838_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0952158c8d6584b9d22fd223541ef0b1f4a4e18000f3b9e3c1121c5ec42a145d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0952158c8d6584b9d22fd223541ef0b1f4a4e18000f3b9e3c1121c5ec42a145d->enter($__internal_0952158c8d6584b9d22fd223541ef0b1f4a4e18000f3b9e3c1121c5ec42a145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0952158c8d6584b9d22fd223541ef0b1f4a4e18000f3b9e3c1121c5ec42a145d->leave($__internal_0952158c8d6584b9d22fd223541ef0b1f4a4e18000f3b9e3c1121c5ec42a145d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/Applications/MAMP/htdocs/GSB/app/Resources/views/base.html.twig");
    }
}
