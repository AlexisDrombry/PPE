<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_11de735de4c25694b62829c0e86ad3242379b334e1d99a9ad5dd107e00258f0f extends Twig_Template
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
        $__internal_54ca96cf7b2a8fd473a365ed2890589b1d9b22cd31ce5a087d56c18ceb0f56d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ca96cf7b2a8fd473a365ed2890589b1d9b22cd31ce5a087d56c18ceb0f56d2->enter($__internal_54ca96cf7b2a8fd473a365ed2890589b1d9b22cd31ce5a087d56c18ceb0f56d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_54ca96cf7b2a8fd473a365ed2890589b1d9b22cd31ce5a087d56c18ceb0f56d2->leave($__internal_54ca96cf7b2a8fd473a365ed2890589b1d9b22cd31ce5a087d56c18ceb0f56d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
