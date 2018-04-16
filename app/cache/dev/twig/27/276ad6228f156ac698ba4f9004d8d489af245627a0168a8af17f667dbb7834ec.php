<?php

/* ADGsbBundle:Default:index.html.twig */
class __TwigTemplate_b00b0dab0eb71cf79998e181b2b8fd5569de96500e60678a9023be1a23a678a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34967011941ac9a247ad61ad2fa38a4dd8ea66ca0ba1cde5339a750d6debf782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34967011941ac9a247ad61ad2fa38a4dd8ea66ca0ba1cde5339a750d6debf782->enter($__internal_34967011941ac9a247ad61ad2fa38a4dd8ea66ca0ba1cde5339a750d6debf782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADGsbBundle:Default:index.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                
                   
                <hgroup>
                    <h2>";
        // line 23
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 24
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
                
                <div id=\"menucase\">
                    <div id=\"stylefour\">
                     <ul>
                       <li><a href=\"\">Accueil</a></li>
                       <li><a href=\"#\">Le SI </a>
\t\t<ul>
\t\t\t<li><a href=\"#\">lien sous menu 1</a></li>
\t\t\t<li><a href=\"#\">lien sous menu 2</a></li>
\t\t\t<li><a href=\"#\">lien sous menu 3</a></li>
\t\t</ul>
\t</li>
                       <li><a href=\"#\">Le Réseau</a>
\t\t<ul>
\t\t\t<li><a href=\"#\">lien sous menu 1</a></li>
\t\t\t<li><a href=\"#\">lien sous menu 2</a></li>
\t\t</ul>
\t</li>
                       
                     </ul>
                   </div>
                 </div>
            </header>
          
        


            <section class=\"main-col\">          
                ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 57
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "            </div>
        </section>

        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>";
        
        $__internal_34967011941ac9a247ad61ad2fa38a4dd8ea66ca0ba1cde5339a750d6debf782->leave($__internal_34967011941ac9a247ad61ad2fa38a4dd8ea66ca0ba1cde5339a750d6debf782_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e02c24a2392fb77c316ccbdcf37b1558930a334cce15b0dd5bb26e46749543a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02c24a2392fb77c316ccbdcf37b1558930a334cce15b0dd5bb26e46749543a4->enter($__internal_e02c24a2392fb77c316ccbdcf37b1558930a334cce15b0dd5bb26e46749543a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB";
        
        $__internal_e02c24a2392fb77c316ccbdcf37b1558930a334cce15b0dd5bb26e46749543a4->leave($__internal_e02c24a2392fb77c316ccbdcf37b1558930a334cce15b0dd5bb26e46749543a4_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e0cc43707b7d8eaac9456cc1d2270080a76b790f9cce50238eeb5f16cdda93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0cc43707b7d8eaac9456cc1d2270080a76b790f9cce50238eeb5f16cdda93b->enter($__internal_3e0cc43707b7d8eaac9456cc1d2270080a76b790f9cce50238eeb5f16cdda93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "          
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_3e0cc43707b7d8eaac9456cc1d2270080a76b790f9cce50238eeb5f16cdda93b->leave($__internal_3e0cc43707b7d8eaac9456cc1d2270080a76b790f9cce50238eeb5f16cdda93b_prof);

    }

    // line 23
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_ec2b0728748ea3ce611213ccf53b2c73fe3ebde0041e6cd1558066876769e841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2b0728748ea3ce611213ccf53b2c73fe3ebde0041e6cd1558066876769e841->enter($__internal_ec2b0728748ea3ce611213ccf53b2c73fe3ebde0041e6cd1558066876769e841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adgsb/images/GSB.png"), "html", null, true);
        echo "\" alt=\"GSB\" width=\"400\" height=\"200\" /></a>";
        
        $__internal_ec2b0728748ea3ce611213ccf53b2c73fe3ebde0041e6cd1558066876769e841->leave($__internal_ec2b0728748ea3ce611213ccf53b2c73fe3ebde0041e6cd1558066876769e841_prof);

    }

    // line 24
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_2b98b834797fd06d2aca3872eecab25db1b7f116bf911140493f26ad4a22f491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b98b834797fd06d2aca3872eecab25db1b7f116bf911140493f26ad4a22f491->enter($__internal_2b98b834797fd06d2aca3872eecab25db1b7f116bf911140493f26ad4a22f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\"></a>";
        
        $__internal_2b98b834797fd06d2aca3872eecab25db1b7f116bf911140493f26ad4a22f491->leave($__internal_2b98b834797fd06d2aca3872eecab25db1b7f116bf911140493f26ad4a22f491_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_584c92ec2a92f4c8c3686099f54c4b3153dc51415f344b686dd93aad34af3b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584c92ec2a92f4c8c3686099f54c4b3153dc51415f344b686dd93aad34af3b0a->enter($__internal_584c92ec2a92f4c8c3686099f54c4b3153dc51415f344b686dd93aad34af3b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_584c92ec2a92f4c8c3686099f54c4b3153dc51415f344b686dd93aad34af3b0a->leave($__internal_584c92ec2a92f4c8c3686099f54c4b3153dc51415f344b686dd93aad34af3b0a_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2003b3e679b2365ed54ac528306eec12050099fa9f152d0187abe67992cd7806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2003b3e679b2365ed54ac528306eec12050099fa9f152d0187abe67992cd7806->enter($__internal_2003b3e679b2365ed54ac528306eec12050099fa9f152d0187abe67992cd7806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2003b3e679b2365ed54ac528306eec12050099fa9f152d0187abe67992cd7806->leave($__internal_2003b3e679b2365ed54ac528306eec12050099fa9f152d0187abe67992cd7806_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_898e66e121b95d018915d86788407f06c3f82d842e9350516e71e6aa8c210c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898e66e121b95d018915d86788407f06c3f82d842e9350516e71e6aa8c210c58->enter($__internal_898e66e121b95d018915d86788407f06c3f82d842e9350516e71e6aa8c210c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_898e66e121b95d018915d86788407f06c3f82d842e9350516e71e6aa8c210c58->leave($__internal_898e66e121b95d018915d86788407f06c3f82d842e9350516e71e6aa8c210c58_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82245aa16ea470714b90d7cd74496891fbae6537a42557ae2ef7ae3e959bdcd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82245aa16ea470714b90d7cd74496891fbae6537a42557ae2ef7ae3e959bdcd0->enter($__internal_82245aa16ea470714b90d7cd74496891fbae6537a42557ae2ef7ae3e959bdcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_82245aa16ea470714b90d7cd74496891fbae6537a42557ae2ef7ae3e959bdcd0->leave($__internal_82245aa16ea470714b90d7cd74496891fbae6537a42557ae2ef7ae3e959bdcd0_prof);

    }

    public function getTemplateName()
    {
        return "ADGsbBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 65,  204 => 61,  193 => 57,  182 => 54,  170 => 24,  156 => 23,  147 => 12,  138 => 10,  126 => 6,  118 => 66,  116 => 65,  111 => 62,  109 => 61,  104 => 58,  102 => 57,  98 => 55,  96 => 54,  63 => 24,  59 => 23,  46 => 14,  44 => 10,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>{% block title %}GSB{% endblock %}</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        {% block stylesheets %}          
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                
                   
                <hgroup>
                    <h2>{% block blog_title %}<a href=\"#\"><img src=\"{{ asset('bundles/adgsb/images/GSB.png')  }}\" alt=\"GSB\" width=\"400\" height=\"200\" /></a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"#\"></a>{% endblock %}</h3>
                </hgroup>
                
                <div id=\"menucase\">
                    <div id=\"stylefour\">
                     <ul>
                       <li><a href=\"\">Accueil</a></li>
                       <li><a href=\"#\">Le SI </a>
\t\t<ul>
\t\t\t<li><a href=\"#\">lien sous menu 1</a></li>
\t\t\t<li><a href=\"#\">lien sous menu 2</a></li>
\t\t\t<li><a href=\"#\">lien sous menu 3</a></li>
\t\t</ul>
\t</li>
                       <li><a href=\"#\">Le Réseau</a>
\t\t<ul>
\t\t\t<li><a href=\"#\">lien sous menu 1</a></li>
\t\t\t<li><a href=\"#\">lien sous menu 2</a></li>
\t\t</ul>
\t</li>
                       
                     </ul>
                   </div>
                 </div>
            </header>
          
        


            <section class=\"main-col\">          
                {% block body %}{% endblock %}
            </section>
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>

            <div id=\"footer\">
                {% block footer %}{% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>", "ADGsbBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/GSB/src/AD/GsbBundle/Resources/views/Default/index.html.twig");
    }
}
