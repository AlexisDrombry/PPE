<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ff13362c938db9bb24eed81d71824e6867f453bcf4ea3c08a13e3afcbe8ba880 extends Twig_Template
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
        $__internal_147977155bf6c70af9826cadaa2b001e847b7f961e8787c1ccb700321eee2b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147977155bf6c70af9826cadaa2b001e847b7f961e8787c1ccb700321eee2b4f->enter($__internal_147977155bf6c70af9826cadaa2b001e847b7f961e8787c1ccb700321eee2b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_147977155bf6c70af9826cadaa2b001e847b7f961e8787c1ccb700321eee2b4f->leave($__internal_147977155bf6c70af9826cadaa2b001e847b7f961e8787c1ccb700321eee2b4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
