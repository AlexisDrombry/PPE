<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d3463f17c24adfc489d526a2b1e8210e4ab4510163440b0ce9803c35d86f13ce extends Twig_Template
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
        $__internal_d038d4f193a14f4e9ccc2cf17cc398219a3189f674d0a1e33979be5bd8f1ec54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d038d4f193a14f4e9ccc2cf17cc398219a3189f674d0a1e33979be5bd8f1ec54->enter($__internal_d038d4f193a14f4e9ccc2cf17cc398219a3189f674d0a1e33979be5bd8f1ec54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d038d4f193a14f4e9ccc2cf17cc398219a3189f674d0a1e33979be5bd8f1ec54->leave($__internal_d038d4f193a14f4e9ccc2cf17cc398219a3189f674d0a1e33979be5bd8f1ec54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
