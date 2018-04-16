<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_4b7ab58767f1c458bc8929b061003ec50318e94c98cda8c88dd919914c5f74e3 extends Twig_Template
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
        $__internal_1a267890d805add9b7fb20758ba559bafd7187f1e2bdaee5c015c84efa9ceca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a267890d805add9b7fb20758ba559bafd7187f1e2bdaee5c015c84efa9ceca8->enter($__internal_1a267890d805add9b7fb20758ba559bafd7187f1e2bdaee5c015c84efa9ceca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1a267890d805add9b7fb20758ba559bafd7187f1e2bdaee5c015c84efa9ceca8->leave($__internal_1a267890d805add9b7fb20758ba559bafd7187f1e2bdaee5c015c84efa9ceca8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
