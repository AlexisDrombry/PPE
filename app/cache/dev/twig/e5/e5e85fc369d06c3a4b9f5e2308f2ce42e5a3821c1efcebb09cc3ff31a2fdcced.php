<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0e09b098da2b19df7ab3732a81ad04cfce57e60a7ad40a9e29b700cc56b72dfd extends Twig_Template
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
        $__internal_5cc606c1fab12368bf2371820119ee0176074fbaf61102d3b9b3b1a8718c6b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc606c1fab12368bf2371820119ee0176074fbaf61102d3b9b3b1a8718c6b50->enter($__internal_5cc606c1fab12368bf2371820119ee0176074fbaf61102d3b9b3b1a8718c6b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5cc606c1fab12368bf2371820119ee0176074fbaf61102d3b9b3b1a8718c6b50->leave($__internal_5cc606c1fab12368bf2371820119ee0176074fbaf61102d3b9b3b1a8718c6b50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
