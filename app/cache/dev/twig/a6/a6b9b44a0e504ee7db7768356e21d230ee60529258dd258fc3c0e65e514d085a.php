<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4d92897d7a7b39cc2cc77a01efade6a9513e34d9371b80c04253aba6a355d287 extends Twig_Template
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
        $__internal_ee877dbc4dac0a86e6c6a3aabeca97a222e330b023a2c268f7d40c5997147046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee877dbc4dac0a86e6c6a3aabeca97a222e330b023a2c268f7d40c5997147046->enter($__internal_ee877dbc4dac0a86e6c6a3aabeca97a222e330b023a2c268f7d40c5997147046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ee877dbc4dac0a86e6c6a3aabeca97a222e330b023a2c268f7d40c5997147046->leave($__internal_ee877dbc4dac0a86e6c6a3aabeca97a222e330b023a2c268f7d40c5997147046_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
