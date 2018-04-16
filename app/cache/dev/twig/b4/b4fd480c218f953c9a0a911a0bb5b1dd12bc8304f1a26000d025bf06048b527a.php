<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_69803891a63ef2a9dae387792356d98eccf1d35bc5ca95ddd16fbbf476dcf958 extends Twig_Template
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
        $__internal_e242a8bd2edc40698275b1a652d0c992fb1bf50d9942f009db9933dcbe5d962e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e242a8bd2edc40698275b1a652d0c992fb1bf50d9942f009db9933dcbe5d962e->enter($__internal_e242a8bd2edc40698275b1a652d0c992fb1bf50d9942f009db9933dcbe5d962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e242a8bd2edc40698275b1a652d0c992fb1bf50d9942f009db9933dcbe5d962e->leave($__internal_e242a8bd2edc40698275b1a652d0c992fb1bf50d9942f009db9933dcbe5d962e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
