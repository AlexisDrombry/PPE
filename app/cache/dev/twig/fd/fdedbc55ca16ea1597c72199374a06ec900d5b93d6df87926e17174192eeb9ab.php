<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9b196e29303087d385a275decd0fd170e754df790edf42909427aea1e0b5035c extends Twig_Template
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
        $__internal_f217a67a9f3d3f71c1c7b3ddc208d06247dfc7eca448d1299a89afdba7b77931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f217a67a9f3d3f71c1c7b3ddc208d06247dfc7eca448d1299a89afdba7b77931->enter($__internal_f217a67a9f3d3f71c1c7b3ddc208d06247dfc7eca448d1299a89afdba7b77931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f217a67a9f3d3f71c1c7b3ddc208d06247dfc7eca448d1299a89afdba7b77931->leave($__internal_f217a67a9f3d3f71c1c7b3ddc208d06247dfc7eca448d1299a89afdba7b77931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
