<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ea1b35ae3fbebe33a97356bf51854ddf8118d86943893ed1ec7cf9a5374e9030 extends Twig_Template
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
        $__internal_3fbcdcf4940b168e4a738411dc09d411b33577c3381a8b5bf74121aa4bede245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbcdcf4940b168e4a738411dc09d411b33577c3381a8b5bf74121aa4bede245->enter($__internal_3fbcdcf4940b168e4a738411dc09d411b33577c3381a8b5bf74121aa4bede245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3fbcdcf4940b168e4a738411dc09d411b33577c3381a8b5bf74121aa4bede245->leave($__internal_3fbcdcf4940b168e4a738411dc09d411b33577c3381a8b5bf74121aa4bede245_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
