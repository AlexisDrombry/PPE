<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1a93be0116ca6b0e789aa7f01596b1bcf9e4a96e2b949b2429dc31e5d0b1eca0 extends Twig_Template
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
        $__internal_fd39766f215a2a97604af41d22a3d0436bac55258fbb770300c98679638ad6bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd39766f215a2a97604af41d22a3d0436bac55258fbb770300c98679638ad6bc->enter($__internal_fd39766f215a2a97604af41d22a3d0436bac55258fbb770300c98679638ad6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fd39766f215a2a97604af41d22a3d0436bac55258fbb770300c98679638ad6bc->leave($__internal_fd39766f215a2a97604af41d22a3d0436bac55258fbb770300c98679638ad6bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
