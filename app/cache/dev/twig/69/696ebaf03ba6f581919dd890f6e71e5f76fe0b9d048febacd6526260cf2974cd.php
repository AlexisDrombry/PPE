<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_932fb72779826c3de59a08dca17c612509ea8ffba0bea4ef62ce1fb6ee6f976d extends Twig_Template
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
        $__internal_8cabe440a23b192328ab5fa0bc5f495f34dfc7dbf0e8ca34910de7c05e87ca20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cabe440a23b192328ab5fa0bc5f495f34dfc7dbf0e8ca34910de7c05e87ca20->enter($__internal_8cabe440a23b192328ab5fa0bc5f495f34dfc7dbf0e8ca34910de7c05e87ca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8cabe440a23b192328ab5fa0bc5f495f34dfc7dbf0e8ca34910de7c05e87ca20->leave($__internal_8cabe440a23b192328ab5fa0bc5f495f34dfc7dbf0e8ca34910de7c05e87ca20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
