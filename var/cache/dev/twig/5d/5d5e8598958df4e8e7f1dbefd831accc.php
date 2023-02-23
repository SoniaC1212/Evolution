<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* baseFront.html.twig */
class __TwigTemplate_a058ca6f202052b50dedbcbc976ad34a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'tache' => [$this, 'block_tache'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<html lang=\"en\">
\t<head>


\t\t";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 39
        echo "

\t\t";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 67
        echo "
\t</head>


\t";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 589
        echo "
\t\t";
        // line 590
        $this->displayBlock('javascript', $context, $blocks);
        // line 735
        echo "
\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "\t\t\t<!-- META ============================================= -->
\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"keywords\" content=\"\"/>
\t\t\t<meta name=\"author\" content=\"\"/>
\t\t\t<meta
\t\t\tname=\"robots\" content=\"\"/>

\t\t\t<!-- DESCRIPTION -->
\t\t\t<meta
\t\t\tname=\"description\" content=\"EduChamp : Education HTML Template\"/>

\t\t\t<!-- OG -->
\t\t\t<meta property=\"og:title\" content=\"EduChamp : Education HTML Template\"/>
\t\t\t<meta property=\"og:description\" content=\"EduChamp : Education HTML Template\"/>
\t\t\t<meta property=\"og:image\" content=\"\"/>
\t\t\t<meta
\t\t\tname=\"format-detection\" content=\"telephone=no\">

\t\t\t<!-- FAVICONS ICON ============================================= -->
\t\t\t<link rel=\"icon\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/images/favicon.ico"), "html", null, true);
        echo " type=\"image/x-icon\"/>
\t\t\t<link
\t\t\trel=\"shortcut icon\" type=\"image/x-icon\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/images/favicon.png"), "html", null, true);
        echo "/>

\t\t\t<!-- PAGE TITLE HERE ============================================= -->
\t\t\t";
        // line 31
        $this->displayBlock('title', $context, $blocks);
        // line 35
        echo "
\t\t\t<!-- MOBILE SPECIFIC ============================================= -->
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 32
        echo "\t\t\t\t<title>EduChamp : Education HTML Template
\t\t\t\t</title>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "\t\t\t<!-- All PLUGINS CSS ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/css/assets.css"), "html", null, true);
        echo ">

\t\t\t<!-- TYPOGRAPHY ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/css/typography.css"), "html", null, true);
        echo ">

\t\t\t<!-- SHORTCODES ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/css/shortcodes/shortcodes.css"), "html", null, true);
        echo ">

\t\t\t<!-- STYLESHEETS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/css/style.css"), "html", null, true);
        echo ">
\t\t\t<link
\t\t\tclass=\"skin\" rel=\"stylesheet\" type=\"text/css\" href=";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/css/color/color-1.css"), "html", null, true);
        echo ">

\t\t\t<!-- REVOLUTION SLIDER CSS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/css/layers.css"), "html", null, true);
        echo ">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/css/settings.css"), "html", null, true);
        echo ">
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/css/navigation.css"), "html", null, true);
        echo ">
\t\t<!-- REVOLUTION SLIDER END -->

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "
\t\t<body id=\"bg\">
\t\t\t<div class=\"page-wraper\">
\t\t\t\t<div id=\"loading-icon-bx\"></div>
\t\t\t\t<!-- Header Top ==== -->
\t\t\t\t<header class=\"header rs-nav header-transparent\">
\t\t\t\t\t<div class=\"top-bar\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"topbar-left\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq-1.html\"><i class=\"fa fa-question-circle\"></i>Ask a Question</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\"><i class=\"fa fa-envelope-o\"></i>Support@website.com</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"topbar-right\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"header-lang-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<option data-icon=\"flag flag-uk\">English UK</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option data-icon=\"flag flag-us\">English US</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Login</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Register</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sticky-header navbar-expand-lg\">
\t\t\t\t\t\t<div class=\"menu-bar clearfix\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"container clearfix\">
\t\t\t\t\t\t\t\t<!-- Header Logo ==== -->
\t\t\t\t\t\t\t\t<div class=\"menu-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/images/logo-white.png"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Mobile Nav Button ==== -->
\t\t\t\t\t\t\t\t<button class=\"navbar-toggler collapsed menuicon justify-content-end\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDropdown\" aria-controls=\"menuDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<!-- Author Nav ==== -->
\t\t\t\t\t\t\t\t<div class=\"secondary-menu\">
\t\t\t\t\t\t\t\t\t<div class=\"secondary-inner\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- Search Button ==== -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"quik-search-btn\" type=\"button\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Search Box ==== -->
\t\t\t\t\t\t\t\t<div class=\"nav-search-bar\">
\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t<input name=\"search\" value=\"\" type=\"text\" class=\"form-control\" placeholder=\"Type to search\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<span id=\"search-remove\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-close\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Navigation Menu ==== -->
\t\t\t\t\t\t\t\t<div class=\"menu-links navbar-collapse collapse justify-content-start\" id=\"menuDropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"./assets/FrontOffice/images/logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Home
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">Home Front</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Home Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Pages
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Offres<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/offre/newOffre\">Ajouter une offre</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/offre/viewOffres\">Consulter liste des offres</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Event<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Events Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">FAQ's<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">FAQ's 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">FAQ's 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Contact Us<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Contact Us 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Contact Us 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Portfolio</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Membership</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Offres</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"add-mega-menu\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Our Courses
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu add-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"add-menu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"menu-adv-title\">Our Courses</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Courses Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Instructor Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Upcoming Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"add-menu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/FrontOffice/images/adv/adv.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Classic</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Classic Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Standard Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-dashboard\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Dashboard
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Add Listing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Bookmark</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Courses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Teacher Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">User Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Calendar<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Basic Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">List View Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Mailbox<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Mailbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Mail Read</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"nav-social-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Navigation Menu END ==== -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- Header Top END ==== -->
\t\t\t\t<!-- Content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"page-content bg-white\">
\t\t\t\t\t<!-- Main Slider -->
\t\t\t\t\t<div class=\"rev-slider\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tid=\"rev_slider_486_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"news-gallery36\" data-source=\"gallery\" style=\"margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;\">
\t\t\t\t\t\t\t<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
\t\t\t\t\t\t\t<div id=\"rev_slider_486_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.3.0.2\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tdata-index=\"rs-100\" data-transition=\"parallaxvertical\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"error-404.html\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"A STUDY ON HAPPINESS\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"Science says that Women are generally happier\">
\t\t\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tsrc=\"./assets/FrontOffice/images/slider/slide1.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-100-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[{\"from\":\"opacity:0;\",\"speed\":1,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},{\"delay\":\"wait\",\"speed\":1,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;\"></div>
\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Title   tp-resizeme\" id=\"slide-100-layer-2\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','240']\" data-fontsize=\"['50','50','50','30']\" data-lineheight=\"['55','55','55','35']\" data-width=\"full\" data-height=\"none\" data-whitespace=\"normal\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[10,10,10,10]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;\">
\t\t\t\t\t\t\t\t\t\t\tWelcome To University
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-100-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['210','210','210','210']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tBatter Education For A Better
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-100-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','290']\" data-width=\"['800','800','700','420']\" data-height=\"['100','100','100','120']\" data-whitespace=\"unset\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn \" id=\"slide-100-layer-5\" data-x=\"['center','center','center','center']\" data-hoffset=\"['90','80','75','90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;\">READ MORE
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn\" id=\"slide-100-layer-6\" data-x=\"['center','center','center','center']\" data-hoffset=\"['-90','-80','-75','-90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;\">CONTACT US</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tdata-index=\"rs-200\" data-transition=\"parallaxvertical\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"assets/images/slider/slide1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"A STUDY ON HAPPINESS\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"Science says that Women are generally happier\">
\t\t\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tsrc=\"./assets/FrontOffice/images/slider/slide2.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-200-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[{\"from\":\"opacity:0;\",\"speed\":1,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:1;\",\"ease\":\"Power4.easeOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;\"></div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Title   tp-resizeme\" id=\"slide-200-layer-2\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','240']\" data-fontsize=\"['50','50','50','30']\" data-lineheight=\"['55','55','55','35']\" data-width=\"full\" data-height=\"none\" data-whitespace=\"normal\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[10,10,10,10]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t\tWelcome To University
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-200-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['210','210','210','210']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; white-space: nowrap;text-transform:uppercase; color:#fff; font-family:rubik; font-size:18px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tBatter Education For A Better
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-200-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','290']\" data-width=\"['800','800','700','420']\" data-height=\"['100','100','100','120']\" data-whitespace=\"unset\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn \" id=\"slide-200-layer-5\" data-x=\"['center','center','center','center']\" data-hoffset=\"['90','80','75','90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;\">READ MORE
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn\" id=\"slide-200-layer-6\" data-x=\"['center','center','center','center']\" data-hoffset=\"['-90','-80','-75','-90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;\">CONTACT US</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END REVOLUTION SLIDER -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-content bg-white\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t";
        // line 436
        $this->displayBlock('tache', $context, $blocks);
        // line 437
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<!-- Content END-->
\t\t\t\t<!-- Footer ==== -->
\t\t\t\t<footer>
\t\t\t\t\t<div class=\"footer-top\">
\t\t\t\t\t\t<div class=\"pt-exebar\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t\t<div class=\"pt-logo mr-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"./assets/FrontOffice/images/logo-white.png\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pt-social-link\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline m-a0\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pt-btn-join\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn \">Join Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-12 col-sm-12 footer-col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Sign Up For A Newsletter</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-capitalize m-b20\">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"subscribe-form m-b20\">
\t\t\t\t\t\t\t\t\t\t\t<form class=\"subscription-form\" action=\"http://educhamp.themetrades.com/demo/assets/script/mailchamp.php\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-message\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" required=\"required\" class=\"form-control\" placeholder=\"Your Email Address\" type=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button name=\"submit\" value=\"Submit\" type=\"submit\" class=\"btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-5 col-md-7 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Company</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/front\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">FAQs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Get In Touch</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/dashboard\">Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Courses</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"widget widget_gallery gallery-grid-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Our Gallery</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"magnific-image\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic1.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic2.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic3.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic4.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic5.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic6.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic6.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic7.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic7.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic8.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic8.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-bottom\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- Footer END ==== -->
\t\t\t\t<button class=\"back-to-top fa fa-chevron-up\"></button>
\t\t\t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 436
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 590
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 591
        echo "
\t\t\t<!-- External JavaScripts -->
\t\t\t<script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/counter/waypoints-min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/counter/counterup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/imagesloaded/imagesloaded.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/masonry/masonry.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/masonry/filter.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/js/functions.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/js/contact.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src='";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/switcher/switcher.js"), "html", null, true);
        echo "'></script>
\t\t\t<!-- Revolution JavaScripts Files -->
\t\t\t<script src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t\t\t<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>

\t\t\t\tjQuery(document).ready(function () {
var ttrevapi;
var tpj = jQuery;
if (tpj(\"#rev_slider_486_1\").revolution == undefined) {
revslider_showDoubleJqueryError(\"#rev_slider_486_1\");
} else {
ttrevapi = tpj(\"#rev_slider_486_1\").show().revolution({
sliderType: \"standard\",
jsFileLocation: \"assets/vendors/revolution/js/\",
sliderLayout: \"fullwidth\",
dottedOverlay: \"none\",
delay: 9000,
navigation: {
keyboardNavigation: \"on\",
keyboard_direction: \"horizontal\",
mouseScrollNavigation: \"off\",
mouseScrollReverse: \"default\",
onHoverStop: \"on\",
touch: {
touchenabled: \"on\",
swipe_threshold: 75,
swipe_min_touches: 1,
swipe_direction: \"horizontal\",
drag_block_vertical: false
},
arrows: {
style: \"uranus\",
enable: true,
hide_onmobile: false,
hide_onleave: false,
tmp: '',
left: {
h_align: \"left\",
v_align: \"center\",
h_offset: 10,
v_offset: 0
},
right: {
h_align: \"right\",
v_align: \"center\",
h_offset: 10,
v_offset: 0
}
}

},
viewPort: {
enable: true,
outof: \"pause\",
visible_area: \"80%\",
presize: false
},
responsiveLevels: [
1240, 1024, 778, 480
],
visibilityLevels: [
1240, 1024, 778, 480
],
gridwidth: [
1240, 1024, 778, 480
],
gridheight: [
768, 600, 600, 600
],
lazyType: \"none\",
parallax: {
type: \"scroll\",
origo: \"enterpoint\",
speed: 400,
levels: [
5,
10,
15,
20,
25,
30,
35,
40,
45,
50,
46,
47,
48,
49,
50,
55
],
type: \"scroll\"
},
shadow: 0,
spinner: \"off\",
stopLoop: \"off\",
stopAfterLoops: -1,
stopAtSlide: -1,
shuffle: \"off\",
autoHeight: \"off\",
hideThumbsOnMobile: \"off\",
hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
debugMode: false,
fallbacks: {
simplifyAll: \"off\",
nextSlideOnWindowFocus: \"off\",
disableFocusListener: false
}
});
}
});
\t\t\t</script>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  920 => 620,  916 => 619,  912 => 618,  908 => 617,  904 => 616,  900 => 615,  896 => 614,  892 => 613,  888 => 612,  883 => 610,  879 => 609,  874 => 607,  870 => 606,  866 => 605,  862 => 604,  858 => 603,  854 => 602,  850 => 601,  846 => 600,  842 => 599,  838 => 598,  834 => 597,  830 => 596,  826 => 595,  822 => 594,  818 => 593,  814 => 591,  804 => 590,  786 => 436,  625 => 437,  623 => 436,  359 => 175,  353 => 172,  290 => 112,  248 => 72,  238 => 71,  224 => 63,  219 => 61,  215 => 60,  209 => 57,  204 => 55,  198 => 52,  191 => 48,  184 => 44,  180 => 42,  170 => 41,  158 => 32,  148 => 31,  135 => 35,  133 => 31,  127 => 28,  122 => 26,  100 => 6,  90 => 5,  76 => 735,  74 => 590,  71 => 589,  69 => 71,  63 => 67,  61 => 41,  57 => 39,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
\t<head>


\t\t{% block meta %}
\t\t\t<!-- META ============================================= -->
\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"keywords\" content=\"\"/>
\t\t\t<meta name=\"author\" content=\"\"/>
\t\t\t<meta
\t\t\tname=\"robots\" content=\"\"/>

\t\t\t<!-- DESCRIPTION -->
\t\t\t<meta
\t\t\tname=\"description\" content=\"EduChamp : Education HTML Template\"/>

\t\t\t<!-- OG -->
\t\t\t<meta property=\"og:title\" content=\"EduChamp : Education HTML Template\"/>
\t\t\t<meta property=\"og:description\" content=\"EduChamp : Education HTML Template\"/>
\t\t\t<meta property=\"og:image\" content=\"\"/>
\t\t\t<meta
\t\t\tname=\"format-detection\" content=\"telephone=no\">

\t\t\t<!-- FAVICONS ICON ============================================= -->
\t\t\t<link rel=\"icon\" href={{asset('./assets/FrontOffice/images/favicon.ico')}} type=\"image/x-icon\"/>
\t\t\t<link
\t\t\trel=\"shortcut icon\" type=\"image/x-icon\" href={{asset('./assets/FrontOffice/images/favicon.png')}}/>

\t\t\t<!-- PAGE TITLE HERE ============================================= -->
\t\t\t{% block title %}
\t\t\t\t<title>EduChamp : Education HTML Template
\t\t\t\t</title>
\t\t\t{% endblock %}

\t\t\t<!-- MOBILE SPECIFIC ============================================= -->
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t{% endblock %}


\t\t{% block stylesheets %}
\t\t\t<!-- All PLUGINS CSS ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/css/assets.css') }}>

\t\t\t<!-- TYPOGRAPHY ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/css/typography.css') }}>

\t\t\t<!-- SHORTCODES ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/css/shortcodes/shortcodes.css') }}>

\t\t\t<!-- STYLESHEETS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/css/style.css') }}>
\t\t\t<link
\t\t\tclass=\"skin\" rel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/css/color/color-1.css') }}>

\t\t\t<!-- REVOLUTION SLIDER CSS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/vendors/revolution/css/layers.css') }}>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/vendors/revolution/css/settings.css') }}>
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href={{ asset('./assets/FrontOffice/vendors/revolution/css/navigation.css') }}>
\t\t<!-- REVOLUTION SLIDER END -->

\t\t{% endblock %}

\t</head>


\t{% block body %}

\t\t<body id=\"bg\">
\t\t\t<div class=\"page-wraper\">
\t\t\t\t<div id=\"loading-icon-bx\"></div>
\t\t\t\t<!-- Header Top ==== -->
\t\t\t\t<header class=\"header rs-nav header-transparent\">
\t\t\t\t\t<div class=\"top-bar\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"topbar-left\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq-1.html\"><i class=\"fa fa-question-circle\"></i>Ask a Question</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:;\"><i class=\"fa fa-envelope-o\"></i>Support@website.com</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"topbar-right\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<select class=\"header-lang-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<option data-icon=\"flag flag-uk\">English UK</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option data-icon=\"flag flag-us\">English US</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Login</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Register</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sticky-header navbar-expand-lg\">
\t\t\t\t\t\t<div class=\"menu-bar clearfix\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"container clearfix\">
\t\t\t\t\t\t\t\t<!-- Header Logo ==== -->
\t\t\t\t\t\t\t\t<div class=\"menu-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"{{asset('./assets/FrontOffice/images/logo-white.png')}}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Mobile Nav Button ==== -->
\t\t\t\t\t\t\t\t<button class=\"navbar-toggler collapsed menuicon justify-content-end\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDropdown\" aria-controls=\"menuDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<!-- Author Nav ==== -->
\t\t\t\t\t\t\t\t<div class=\"secondary-menu\">
\t\t\t\t\t\t\t\t\t<div class=\"secondary-inner\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<!-- Search Button ==== -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"search-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button id=\"quik-search-btn\" type=\"button\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Search Box ==== -->
\t\t\t\t\t\t\t\t<div class=\"nav-search-bar\">
\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t<input name=\"search\" value=\"\" type=\"text\" class=\"form-control\" placeholder=\"Type to search\">
\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<span id=\"search-remove\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti-close\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Navigation Menu ==== -->
\t\t\t\t\t\t\t\t<div class=\"menu-links navbar-collapse collapse justify-content-start\" id=\"menuDropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"menu-logo\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"./assets/FrontOffice/images/logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Home
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_front') }}\">Home Front</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_dashboard') }}\">Home Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Pages
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Offres<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/offre/newOffre\">Ajouter une offre</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/offre/viewOffres\">Consulter liste des offres</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Event<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Events Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">FAQ's<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">FAQ's 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">FAQ's 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Contact Us<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Contact Us 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Contact Us 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Portfolio</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Membership</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Offres</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"add-mega-menu\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Our Courses
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu add-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"add-menu-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"menu-adv-title\">Our Courses</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Courses Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Instructor Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Upcoming Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"add-menu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"./assets/FrontOffice/images/adv/adv.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Classic</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Classic Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Standard Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Blog Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-dashboard\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Dashboard
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Add Listing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Bookmark</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Courses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Teacher Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">User Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Calendar<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Basic Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">List View Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Mailbox<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Mailbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Mail Read</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"nav-social-link\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Navigation Menu END ==== -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t<!-- Header Top END ==== -->
\t\t\t\t<!-- Content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"page-content bg-white\">
\t\t\t\t\t<!-- Main Slider -->
\t\t\t\t\t<div class=\"rev-slider\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tid=\"rev_slider_486_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\" data-alias=\"news-gallery36\" data-source=\"gallery\" style=\"margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;\">
\t\t\t\t\t\t\t<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
\t\t\t\t\t\t\t<div id=\"rev_slider_486_1\" class=\"rev_slider fullwidthabanner\" style=\"display:none;\" data-version=\"5.3.0.2\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tdata-index=\"rs-100\" data-transition=\"parallaxvertical\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"error-404.html\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"A STUDY ON HAPPINESS\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"Science says that Women are generally happier\">
\t\t\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tsrc=\"./assets/FrontOffice/images/slider/slide1.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-100-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[{\"from\":\"opacity:0;\",\"speed\":1,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},{\"delay\":\"wait\",\"speed\":1,\"to\":\"opacity:0;\",\"ease\":\"Power4.easeOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;\"></div>
\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Title   tp-resizeme\" id=\"slide-100-layer-2\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','240']\" data-fontsize=\"['50','50','50','30']\" data-lineheight=\"['55','55','55','35']\" data-width=\"full\" data-height=\"none\" data-whitespace=\"normal\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[10,10,10,10]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;\">
\t\t\t\t\t\t\t\t\t\t\tWelcome To University
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-100-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['210','210','210','210']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tBatter Education For A Better
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-100-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','290']\" data-width=\"['800','800','700','420']\" data-height=\"['100','100','100','120']\" data-whitespace=\"unset\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn \" id=\"slide-100-layer-5\" data-x=\"['center','center','center','center']\" data-hoffset=\"['90','80','75','90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;\">READ MORE
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn\" id=\"slide-100-layer-6\" data-x=\"['center','center','center','center']\" data-hoffset=\"['-90','-80','-75','-90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;\">CONTACT US</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li
\t\t\t\t\t\t\t\t\t\tdata-index=\"rs-200\" data-transition=\"parallaxvertical\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"default\" data-thumb=\"assets/images/slider/slide1.jpg\" data-rotate=\"0\" data-fstransition=\"fade\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-saveperformance=\"off\" data-title=\"A STUDY ON HAPPINESS\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"Science says that Women are generally happier\">
\t\t\t\t\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\tsrc=\"./assets/FrontOffice/images/slider/slide2.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper \" id=\"slide-200-layer-1\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\" data-width=\"full\" data-height=\"full\" data-whitespace=\"nowrap\" data-type=\"shape\" data-basealign=\"slide\" data-responsive_offset=\"off\" data-responsive=\"off\" data-frames='[{\"from\":\"opacity:0;\",\"speed\":1,\"to\":\"o:1;\",\"delay\":0,\"ease\":\"Power4.easeOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"opacity:1;\",\"ease\":\"Power4.easeOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;\"></div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Title   tp-resizeme\" id=\"slide-200-layer-2\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['250','250','250','240']\" data-fontsize=\"['50','50','50','30']\" data-lineheight=\"['55','55','55','35']\" data-width=\"full\" data-height=\"none\" data-whitespace=\"normal\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[10,10,10,10]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;text-transform:uppercase;\">
\t\t\t\t\t\t\t\t\t\t\tWelcome To University
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-200-layer-3\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['210','210','210','210']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['left','left','left','left']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; white-space: nowrap;text-transform:uppercase; color:#fff; font-family:rubik; font-size:18px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tBatter Education For A Better
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Subtitle   tp-resizeme\" id=\"slide-200-layer-4\" data-x=\"['center','center','center','center']\" data-hoffset=\"['0','0','0','0']\" data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','290']\" data-width=\"['800','800','700','420']\" data-height=\"['100','100','100','120']\" data-whitespace=\"unset\" data-type=\"text\" data-responsive_offset=\"on\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;\">
\t\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn \" id=\"slide-200-layer-5\" data-x=\"['center','center','center','center']\" data-hoffset=\"['90','80','75','90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;\">READ MORE
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tp-caption Newspaper-Button rev-btn\" id=\"slide-200-layer-6\" data-x=\"['center','center','center','center']\" data-hoffset=\"['-90','-80','-75','-90']\" data-y=\"['top','top','top','top']\" data-voffset=\"['400','400','400','420']\" data-width=\"none\" data-height=\"none\" data-whitespace=\"nowrap\" data-type=\"button\" data-responsive_offset=\"on\" data-responsive=\"off\" data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;\",\"ease\":\"Power3.easeInOut\"},{\"frame\":\"hover\",\"speed\":\"300\",\"ease\":\"Power1.easeInOut\",\"to\":\"o:1;rX:0;rY:0;rZ:0;z:0;\",\"style\":\"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;\"}]' data-textalign=\"['center','center','center','center']\" data-paddingtop=\"[12,12,12,12]\" data-paddingright=\"[30,35,35,15]\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[30,35,35,15]\" style=\"z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;\">CONTACT US</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- END REVOLUTION SLIDER -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"page-content bg-white\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t{% block tache %}{% endblock %}
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<!-- Content END-->
\t\t\t\t<!-- Footer ==== -->
\t\t\t\t<footer>
\t\t\t\t\t<div class=\"footer-top\">
\t\t\t\t\t\t<div class=\"pt-exebar\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t\t<div class=\"pt-logo mr-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\"><img src=\"./assets/FrontOffice/images/logo-white.png\" alt=\"\"/></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pt-social-link\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline m-a0\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pt-btn-join\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn \">Join Now</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-12 col-sm-12 footer-col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Sign Up For A Newsletter</h5>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-capitalize m-b20\">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"subscribe-form m-b20\">
\t\t\t\t\t\t\t\t\t\t\t<form class=\"subscription-form\" action=\"http://educhamp.themetrades.com/demo/assets/script/mailchamp.php\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ajax-message\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" required=\"required\" class=\"form-control\" placeholder=\"Your Email Address\" type=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button name=\"submit\" value=\"Submit\" type=\"submit\" class=\"btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-5 col-md-7 col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Company</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/front\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">FAQs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Get In Touch</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/dashboard\">Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Courses</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"\">Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"widget widget_gallery gallery-grid-4\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Our Gallery</h5>
\t\t\t\t\t\t\t\t\t\t<ul class=\"magnific-image\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic1.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic2.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic3.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic4.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic5.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic6.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic6.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic7.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic7.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"./assets/FrontOffice/images/gallery/pic8.jpg\" class=\"magnific-anchor\"><img src=\"./assets/FrontOffice/images/gallery/pic8.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"footer-bottom\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 text-center\">
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.templateshub.net\">Templates Hub</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- Footer END ==== -->
\t\t\t\t<button class=\"back-to-top fa fa-chevron-up\"></button>
\t\t\t</div>
\t\t{% endblock %}

\t\t{% block javascript %}

\t\t\t<!-- External JavaScripts -->
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/js/jquery.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/bootstrap/js/popper.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/bootstrap-select/bootstrap-select.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/magnific-popup/magnific-popup.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/counter/waypoints-min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/counter/counterup.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/imagesloaded/imagesloaded.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/masonry/masonry.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/masonry/filter.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/owl-carousel/owl.carousel.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/js/functions.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/js/contact.js') }}\"></script>
\t\t\t<script src='{{ asset('./assets/FrontOffice/vendors/switcher/switcher.js') }}'></script>
\t\t\t<!-- Revolution JavaScripts Files -->
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/jquery.themepunch.tools.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}\"></script>
\t\t\t<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('./assets/FrontOffice/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
\t\t\t<script>

\t\t\t\tjQuery(document).ready(function () {
var ttrevapi;
var tpj = jQuery;
if (tpj(\"#rev_slider_486_1\").revolution == undefined) {
revslider_showDoubleJqueryError(\"#rev_slider_486_1\");
} else {
ttrevapi = tpj(\"#rev_slider_486_1\").show().revolution({
sliderType: \"standard\",
jsFileLocation: \"assets/vendors/revolution/js/\",
sliderLayout: \"fullwidth\",
dottedOverlay: \"none\",
delay: 9000,
navigation: {
keyboardNavigation: \"on\",
keyboard_direction: \"horizontal\",
mouseScrollNavigation: \"off\",
mouseScrollReverse: \"default\",
onHoverStop: \"on\",
touch: {
touchenabled: \"on\",
swipe_threshold: 75,
swipe_min_touches: 1,
swipe_direction: \"horizontal\",
drag_block_vertical: false
},
arrows: {
style: \"uranus\",
enable: true,
hide_onmobile: false,
hide_onleave: false,
tmp: '',
left: {
h_align: \"left\",
v_align: \"center\",
h_offset: 10,
v_offset: 0
},
right: {
h_align: \"right\",
v_align: \"center\",
h_offset: 10,
v_offset: 0
}
}

},
viewPort: {
enable: true,
outof: \"pause\",
visible_area: \"80%\",
presize: false
},
responsiveLevels: [
1240, 1024, 778, 480
],
visibilityLevels: [
1240, 1024, 778, 480
],
gridwidth: [
1240, 1024, 778, 480
],
gridheight: [
768, 600, 600, 600
],
lazyType: \"none\",
parallax: {
type: \"scroll\",
origo: \"enterpoint\",
speed: 400,
levels: [
5,
10,
15,
20,
25,
30,
35,
40,
45,
50,
46,
47,
48,
49,
50,
55
],
type: \"scroll\"
},
shadow: 0,
spinner: \"off\",
stopLoop: \"off\",
stopAfterLoops: -1,
stopAtSlide: -1,
shuffle: \"off\",
autoHeight: \"off\",
hideThumbsOnMobile: \"off\",
hideSliderAtLimit: 0,
hideCaptionAtLimit: 0,
hideAllCaptionAtLilmit: 0,
debugMode: false,
fallbacks: {
simplifyAll: \"off\",
nextSlideOnWindowFocus: \"off\",
disableFocusListener: false
}
});
}
});
\t\t\t</script>

\t\t{% endblock %}

\t</body>

</html>
", "baseFront.html.twig", "C:\\Users\\sheima\\Desktop\\Evolution-main\\templates\\baseFront.html.twig");
    }
}
