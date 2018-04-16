<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_65f1c8e8510d3138858fca33f13726fe6f26b9b35c7397e4188d37a0c1b8842a extends Twig_Template
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
        $__internal_4187ceb325bf2d7bff4fb3d2287f13991ab46f11a8f1d0384381484a8a296bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4187ceb325bf2d7bff4fb3d2287f13991ab46f11a8f1d0384381484a8a296bef->enter($__internal_4187ceb325bf2d7bff4fb3d2287f13991ab46f11a8f1d0384381484a8a296bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4187ceb325bf2d7bff4fb3d2287f13991ab46f11a8f1d0384381484a8a296bef->leave($__internal_4187ceb325bf2d7bff4fb3d2287f13991ab46f11a8f1d0384381484a8a296bef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
