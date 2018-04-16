<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c9cb0b66a3d0fd5ed3ed9e5c38cc52be469732189c39db97a1f7fd4c81c8a2a4 extends Twig_Template
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
        $__internal_e90bf3b140bf80f5ceb4d16ef5a2c5b1858fb1836be09d284819bc60bac8e067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90bf3b140bf80f5ceb4d16ef5a2c5b1858fb1836be09d284819bc60bac8e067->enter($__internal_e90bf3b140bf80f5ceb4d16ef5a2c5b1858fb1836be09d284819bc60bac8e067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e90bf3b140bf80f5ceb4d16ef5a2c5b1858fb1836be09d284819bc60bac8e067->leave($__internal_e90bf3b140bf80f5ceb4d16ef5a2c5b1858fb1836be09d284819bc60bac8e067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
