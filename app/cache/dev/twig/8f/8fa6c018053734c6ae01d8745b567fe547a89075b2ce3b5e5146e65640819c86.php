<?php

/* ADGsbBundle:Default:index.html.twig */
class __TwigTemplate_76e46f1d4cc3813f6c3fe95302729dba85810beb4f3d92befe7fd072c6a5a2d9 extends Twig_Template
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
        $__internal_3f8e4a549fd928eccf246b488e5cc1f91f09aa7a8954e65954f9808a559cb514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8e4a549fd928eccf246b488e5cc1f91f09aa7a8954e65954f9808a559cb514->enter($__internal_3f8e4a549fd928eccf246b488e5cc1f91f09aa7a8954e65954f9808a559cb514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADGsbBundle:Default:index.html.twig"));

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
        
        $__internal_3f8e4a549fd928eccf246b488e5cc1f91f09aa7a8954e65954f9808a559cb514->leave($__internal_3f8e4a549fd928eccf246b488e5cc1f91f09aa7a8954e65954f9808a559cb514_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_069302c72b45a5d31b192a768137151e487068c43ed05a089a537935631d3c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069302c72b45a5d31b192a768137151e487068c43ed05a089a537935631d3c18->enter($__internal_069302c72b45a5d31b192a768137151e487068c43ed05a089a537935631d3c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSB";
        
        $__internal_069302c72b45a5d31b192a768137151e487068c43ed05a089a537935631d3c18->leave($__internal_069302c72b45a5d31b192a768137151e487068c43ed05a089a537935631d3c18_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd75069120f88f4d67b8d3fbc6255cf7345b81070a287d024f28c52bf4e56b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd75069120f88f4d67b8d3fbc6255cf7345b81070a287d024f28c52bf4e56b5d->enter($__internal_fd75069120f88f4d67b8d3fbc6255cf7345b81070a287d024f28c52bf4e56b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "          
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fd75069120f88f4d67b8d3fbc6255cf7345b81070a287d024f28c52bf4e56b5d->leave($__internal_fd75069120f88f4d67b8d3fbc6255cf7345b81070a287d024f28c52bf4e56b5d_prof);

    }

    // line 23
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_ee3b45a129227783067f36461127951bce8b70a86715bc174e38b439e746e6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3b45a129227783067f36461127951bce8b70a86715bc174e38b439e746e6af->enter($__internal_ee3b45a129227783067f36461127951bce8b70a86715bc174e38b439e746e6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/adgsb/images/GSB.png"), "html", null, true);
        echo "\" alt=\"GSB\" width=\"400\" height=\"200\" /></a>";
        
        $__internal_ee3b45a129227783067f36461127951bce8b70a86715bc174e38b439e746e6af->leave($__internal_ee3b45a129227783067f36461127951bce8b70a86715bc174e38b439e746e6af_prof);

    }

    // line 24
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8333d458a93efd2bcb09314a58e6e28356f98007c2759cd8b0de26224fa10b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8333d458a93efd2bcb09314a58e6e28356f98007c2759cd8b0de26224fa10b06->enter($__internal_8333d458a93efd2bcb09314a58e6e28356f98007c2759cd8b0de26224fa10b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\"></a>";
        
        $__internal_8333d458a93efd2bcb09314a58e6e28356f98007c2759cd8b0de26224fa10b06->leave($__internal_8333d458a93efd2bcb09314a58e6e28356f98007c2759cd8b0de26224fa10b06_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_257370ddee692ea08ead8813a2af490d7aeb8422ea06e8c52e6eef42d01de906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257370ddee692ea08ead8813a2af490d7aeb8422ea06e8c52e6eef42d01de906->enter($__internal_257370ddee692ea08ead8813a2af490d7aeb8422ea06e8c52e6eef42d01de906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_257370ddee692ea08ead8813a2af490d7aeb8422ea06e8c52e6eef42d01de906->leave($__internal_257370ddee692ea08ead8813a2af490d7aeb8422ea06e8c52e6eef42d01de906_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8167accbfcc6844d6ff760b8dfc7834dc7bea397834927f932bf0cb83ac8fd3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8167accbfcc6844d6ff760b8dfc7834dc7bea397834927f932bf0cb83ac8fd3b->enter($__internal_8167accbfcc6844d6ff760b8dfc7834dc7bea397834927f932bf0cb83ac8fd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8167accbfcc6844d6ff760b8dfc7834dc7bea397834927f932bf0cb83ac8fd3b->leave($__internal_8167accbfcc6844d6ff760b8dfc7834dc7bea397834927f932bf0cb83ac8fd3b_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_54a6ac9ce5b04a7181eef1471f2ccc2d401419d48e58c51180b21a95dfaaa6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a6ac9ce5b04a7181eef1471f2ccc2d401419d48e58c51180b21a95dfaaa6f0->enter($__internal_54a6ac9ce5b04a7181eef1471f2ccc2d401419d48e58c51180b21a95dfaaa6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_54a6ac9ce5b04a7181eef1471f2ccc2d401419d48e58c51180b21a95dfaaa6f0->leave($__internal_54a6ac9ce5b04a7181eef1471f2ccc2d401419d48e58c51180b21a95dfaaa6f0_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2c5bb90e944a7a80c2bf870a730555660f8bf9131e0c89a16e94dcfef8d43e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c5bb90e944a7a80c2bf870a730555660f8bf9131e0c89a16e94dcfef8d43e3->enter($__internal_d2c5bb90e944a7a80c2bf870a730555660f8bf9131e0c89a16e94dcfef8d43e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d2c5bb90e944a7a80c2bf870a730555660f8bf9131e0c89a16e94dcfef8d43e3->leave($__internal_d2c5bb90e944a7a80c2bf870a730555660f8bf9131e0c89a16e94dcfef8d43e3_prof);

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
