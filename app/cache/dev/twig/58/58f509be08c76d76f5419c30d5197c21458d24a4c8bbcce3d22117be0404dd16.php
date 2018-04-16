<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_22c428e8393230bce6443aff3fc461316adb3268263f16d6f02e9ef3c16e7955 extends Twig_Template
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
        $__internal_0aa2ff2aca62831ac7d9f18ba9bfca3f46a57bd07cd4f2dd4ac472f6d3ead98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa2ff2aca62831ac7d9f18ba9bfca3f46a57bd07cd4f2dd4ac472f6d3ead98a->enter($__internal_0aa2ff2aca62831ac7d9f18ba9bfca3f46a57bd07cd4f2dd4ac472f6d3ead98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_0aa2ff2aca62831ac7d9f18ba9bfca3f46a57bd07cd4f2dd4ac472f6d3ead98a->leave($__internal_0aa2ff2aca62831ac7d9f18ba9bfca3f46a57bd07cd4f2dd4ac472f6d3ead98a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
