<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f575d332f4702f34ce187a0e7645ddb2785ff3b91fd1078b3dea3636ab95eb76 extends Twig_Template
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
        $__internal_00ded81e6802ef9bb4898bc7f3ed51ac6813ff13745149dd5cd72dd260ba217c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ded81e6802ef9bb4898bc7f3ed51ac6813ff13745149dd5cd72dd260ba217c->enter($__internal_00ded81e6802ef9bb4898bc7f3ed51ac6813ff13745149dd5cd72dd260ba217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_00ded81e6802ef9bb4898bc7f3ed51ac6813ff13745149dd5cd72dd260ba217c->leave($__internal_00ded81e6802ef9bb4898bc7f3ed51ac6813ff13745149dd5cd72dd260ba217c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/GSB/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
