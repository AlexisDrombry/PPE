<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_68a5a16b9cae90cbac8062128b0b9b8f551c14474b9575d82b4fb9fe6ef895d6 extends Twig_Template
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
        $__internal_fe31d9931e7badc7ed1b99a2e5c88c4eb9eb5807f6344574da59e02f138510b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe31d9931e7badc7ed1b99a2e5c88c4eb9eb5807f6344574da59e02f138510b9->enter($__internal_fe31d9931e7badc7ed1b99a2e5c88c4eb9eb5807f6344574da59e02f138510b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_fe31d9931e7badc7ed1b99a2e5c88c4eb9eb5807f6344574da59e02f138510b9->leave($__internal_fe31d9931e7badc7ed1b99a2e5c88c4eb9eb5807f6344574da59e02f138510b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
