<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f6f16fbeb4fdcfb7e9172c82bfe9119574da016218925a31883c9da7e7664dcd extends Twig_Template
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
        $__internal_d8fee5e7b90d6f440d554a50f4182bcc08bd5de9abc75ac37fbfd818ddc78ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fee5e7b90d6f440d554a50f4182bcc08bd5de9abc75ac37fbfd818ddc78ee3->enter($__internal_d8fee5e7b90d6f440d554a50f4182bcc08bd5de9abc75ac37fbfd818ddc78ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d8fee5e7b90d6f440d554a50f4182bcc08bd5de9abc75ac37fbfd818ddc78ee3->leave($__internal_d8fee5e7b90d6f440d554a50f4182bcc08bd5de9abc75ac37fbfd818ddc78ee3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
