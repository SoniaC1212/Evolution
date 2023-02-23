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

/* base.html.twig */
class __TwigTemplate_b9d5eee1d542469374b3e8782f7c07a8 extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'section' => [$this, 'block_section'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


\t<head>


\t\t";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 42
        echo "

\t\t";
        // line 44
        $this->displayBlock('css', $context, $blocks);
        // line 70
        echo "
\t</head>


\t";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 1148
        echo "
\t\t";
        // line 1149
        $this->displayBlock('javascript', $context, $blocks);
        // line 1294
        echo "
\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 9
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
\t\t\t<link rel=\"icon\" href=\"assets/images/favicon.ico\" type=\"image/x-icon\"/>
\t\t\t<link
\t\t\trel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/images/favicon.png\"/>

\t\t\t<!-- PAGE TITLE HERE ============================================= -->
\t\t\t";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        // line 38
        echo "
\t\t\t<!-- MOBILE SPECIFIC ============================================= -->
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 35
        echo "\t\t\t\t<title>EduChamp : Education HTML Template
\t\t\t\t</title>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 45
        echo "\t\t\t<!-- All PLUGINS CSS ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/assets.css"), "html", null, true);
        echo "\">

\t\t\t<!-- TYPOGRAPHY ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/typography.css"), "html", null, true);
        echo "\">

\t\t\t<!-- SHORTCODES ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/shortcodes/shortcodes.css"), "html", null, true);
        echo "\">

\t\t\t<!-- STYLESHEETS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
\t\t\t<link
\t\t\tclass=\"skin\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/color/color-1.css"), "html", null, true);
        echo "\">

\t\t\t<!-- REVOLUTION SLIDER CSS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/css/layers.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/css/settings.css"), "html", null, true);
        echo "\">
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/css/navigation.css"), "html", null, true);
        echo "\">
\t\t<!-- REVOLUTION SLIDER END -->

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 75
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"register.html\">Register</a>
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
\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/images/logo-white.png\" alt=\"\"></a>
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
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/images/logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Home
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 178
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">Home 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Pages
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">About<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"about-1.html\">About 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"about-2.html\">About 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Event<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"event.html\">Event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"events-details.html\">Events Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">FAQ's<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"faq-1.html\">FAQ's 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"faq-2.html\">FAQ's 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Contact Us<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact-1.html\">Contact Us 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact-2.html\">Contact Us 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio.html\">Portfolio</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"membership.html\">Membership</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses.html\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses-details.html\">Courses Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html\">Instructor Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"event.html\">Upcoming Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"membership.html\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"add-menu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/adv/adv.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-classic-grid.html\">Blog Classic</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-classic-sidebar.html\">Blog Classic Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-list-sidebar.html\">Blog List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-standard-sidebar.html\">Blog Standard Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">Blog Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-dashboard\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Dashboard
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/index.html\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/add-listing.html\">Add Listing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/bookmark.html\">Bookmark</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/courses.html\">Courses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/review.html\">Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/teacher-profile.html\">Teacher Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/user-profile.html\">User Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Calendar<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/basic-calendar.html\">Basic Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/list-view-calendar.html\">List View Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Mailbox<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/mailbox.html\">Mailbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/mailbox-compose.html\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/mailbox-read.html\">Mail Read</a>
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
\t\t\t\t\t\t\t\t\t\tsrc=\"assets/images/slider/slide1.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

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
\t\t\t\t\t\t\t\t\t\tsrc=\"assets/images/slider/slide2.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

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
\t\t\t\t\t<!-- Main Slider -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"content-block\">

\t\t\t\t\t\t<!-- Our Services -->
\t\t\t\t\t\t<div class=\"section-area content-inner service-info-bx\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/our-services/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-box-sm radius bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bank text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Best Industry Leaders</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn radius-xl\">View More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/our-services/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-box-sm radius bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Learn Courses Online</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn radius-xl\">View More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-bx m-b0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/our-services/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-box-sm radius bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Book Library & Store</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn radius-xl\">View More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Our Services END -->

\t\t\t\t\t\t<!-- Popular Courses -->
\t\t\t\t\t\t";
        // line 499
        $this->displayBlock('section', $context, $blocks);
        // line 677
        echo "\t\t\t\t\t\t<!-- Popular Courses END -->

\t\t\t\t\t\t<!-- Form -->
\t\t\t\t\t\t<div class=\"section-area section-sp1 ovpr-dark bg-fix online-cours\" style=\"background-image:url(assets/images/background/bg1.jpg);\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<h2>Online Courses To Learn</h2>
\t\t\t\t\t\t\t\t\t\t<h5>Own Your Feature Learning New Skills Online</h5>
\t\t\t\t\t\t\t\t\t\t<form class=\"cours-search\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"What do you want to learn today?\t\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mw800 m-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-search-bx m-b30\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter\">5</span>M</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cours-search-text\">Over 5 million student</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-search-bx m-b30\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-book\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter\">30</span>K</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cours-search-text\">30,000 Courses.</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-search-bx m-b30\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-layout-list-post\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter\">20</span>K</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cours-search-text\">Learn Anythink Online.</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Form END -->
\t\t\t\t\t\t<div class=\"section-area section-sp2\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-center heading-bx\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head m-b0\">Upcoming
\t\t\t\t\t\t\t\t\t\t\t<span>Events</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">Upcoming Education Events To Feed Brain.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/pic4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-date\">29</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-month\">October</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Education Autumn Tour 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7:00am 8:00am</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBerlin, Germany</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-date\">29</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-month\">October</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Education Autumn Tour 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7:00am 8:00am</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBerlin, Germany</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-date\">29</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-month\">October</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Education Autumn Tour 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7:00am 8:00am</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBerlin, Germany</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">View All Event</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Testimonials -->
\t\t\t\t\t\t<div class=\"section-area section-sp2 bg-fix ovbl-dark\" style=\"background-image:url(assets/images/background/bg1.jpg);\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-white heading-bx left\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head text-uppercase\">what people
\t\t\t\t\t\t\t\t\t\t\t<span>say</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0\">
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"name\">Peter Packer</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>-Art Director</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"name\">Peter Packer</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>-Art Director</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Testimonials END -->

\t\t\t\t\t\t<!-- Recent News -->
\t\t\t\t\t\t<div class=\"section-area section-sp2\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 heading-bx left\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head\">Recent
\t\t\t\t\t\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0\">
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"recent-news\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/latest-blog/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>Jan 02 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>By William</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">This Story Behind Education Will Haunt You Forever.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-extra\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">READ MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comments-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>20 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"recent-news\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/latest-blog/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>Feb 05 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>By John</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">What Will Education Be Like In The Next 50 Years?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>As desperate as you are right now, you have done everything you can on your.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-extra\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">READ MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comments-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>14 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"recent-news\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/latest-blog/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>April 14 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>By George</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">Master The Skills Of Education And Be.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>You will see in the guide all my years of valuable experience together with.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-extra\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">READ MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comments-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>23 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Recent News End -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- contact area END -->
\t\t\t\t</div>
\t\t\t\t<!-- Content END-->
\t\t\t\t<!-- Footer ==== -->
\t\t\t\t<footer>
\t\t\t\t\t<div class=\"footer-top\">
\t\t\t\t\t\t<div class=\"pt-exebar\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t\t<div class=\"pt-logo mr-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/images/logo-white.png\" alt=\"\"/></a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq-1.html\">FAQs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact-1.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Get In Touch</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://educhamp.themetrades.com/admin/index.html\">Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-classic-grid.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"event.html\">Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Courses</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses.html\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses-details.html\">Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"membership.html\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html\">Profile</a></li>
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
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic1.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic2.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic3.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic4.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic5.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic6.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic6.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic7.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic7.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic8.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic8.jpg\" alt=\"\"></a>
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

    // line 499
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 500
        echo "\t\t\t\t\t\t\t<div class=\"section-area section-sp2 popular-courses-bx\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 heading-bx left\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head\">Popular
\t\t\t\t\t\t\t\t\t\t\t\t<span>Courses</span>
\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"courses-carousel owl-carousel owl-btn-1 col-12 p-lr0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1149
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 1150
        echo "
\t\t\t<!-- External JavaScripts -->
\t\t\t<script src=\"";
        // line 1152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/counter/waypoints-min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/counter/counterup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/imagesloaded/imagesloaded.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/masonry/masonry.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/masonry/filter.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/contact.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src='";
        // line 1166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/switcher/switcher.js"), "html", null, true);
        echo "'></script>
\t\t\t<!-- Revolution JavaScripts Files -->
\t\t\t<script src=\"";
        // line 1168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t\t\t<script src=\"";
        // line 1171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 1179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
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
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1471 => 1179,  1467 => 1178,  1463 => 1177,  1459 => 1176,  1455 => 1175,  1451 => 1174,  1447 => 1173,  1443 => 1172,  1439 => 1171,  1434 => 1169,  1430 => 1168,  1425 => 1166,  1421 => 1165,  1417 => 1164,  1413 => 1163,  1409 => 1162,  1405 => 1161,  1401 => 1160,  1397 => 1159,  1393 => 1158,  1389 => 1157,  1385 => 1156,  1381 => 1155,  1377 => 1154,  1373 => 1153,  1369 => 1152,  1365 => 1150,  1355 => 1149,  1169 => 500,  1159 => 499,  679 => 677,  677 => 499,  353 => 178,  347 => 175,  245 => 75,  235 => 74,  221 => 66,  216 => 64,  212 => 63,  206 => 60,  201 => 58,  195 => 55,  188 => 51,  181 => 47,  177 => 45,  167 => 44,  155 => 35,  145 => 34,  132 => 38,  130 => 34,  103 => 9,  93 => 8,  79 => 1294,  77 => 1149,  74 => 1148,  72 => 74,  66 => 70,  64 => 44,  60 => 42,  58 => 8,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


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
\t\t\t<link rel=\"icon\" href=\"assets/images/favicon.ico\" type=\"image/x-icon\"/>
\t\t\t<link
\t\t\trel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/images/favicon.png\"/>

\t\t\t<!-- PAGE TITLE HERE ============================================= -->
\t\t\t{% block title %}
\t\t\t\t<title>EduChamp : Education HTML Template
\t\t\t\t</title>
\t\t\t{% endblock %}

\t\t\t<!-- MOBILE SPECIFIC ============================================= -->
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t{% endblock %}


\t\t{% block css%}
\t\t\t<!-- All PLUGINS CSS ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/assets.css') }}\">

\t\t\t<!-- TYPOGRAPHY ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/typography.css') }}\">

\t\t\t<!-- SHORTCODES ============================================= -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/shortcodes/shortcodes.css') }}\">

\t\t\t<!-- STYLESHEETS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">
\t\t\t<link
\t\t\tclass=\"skin\" rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/color/color-1.css') }}\">

\t\t\t<!-- REVOLUTION SLIDER CSS ============================================= -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/revolution/css/layers.css') }}\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/revolution/css/settings.css') }}\">
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendors/revolution/css/navigation.css') }}\">
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"login.html\">Login</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"register.html\">Register</a>
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
\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/images/logo-white.png\" alt=\"\"></a>
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
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/images/logo.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Home
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\">Home 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_dashboard') }}\">Home 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Pages
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">About<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"about-1.html\">About 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"about-2.html\">About 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Event<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"event.html\">Event</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"events-details.html\">Events Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">FAQ's<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"faq-1.html\">FAQ's 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"faq-2.html\">FAQ's 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Contact Us<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact-1.html\">Contact Us 1</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"contact-2.html\">Contact Us 2</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"portfolio.html\">Portfolio</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"profile.html\">Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"membership.html\">Membership</a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses.html\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses-details.html\">Courses Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html\">Instructor Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"event.html\">Upcoming Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"membership.html\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"add-menu-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/adv/adv.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Blog
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-classic-grid.html\">Blog Classic</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-classic-sidebar.html\">Blog Classic Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-list-sidebar.html\">Blog List Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-standard-sidebar.html\">Blog Standard Sidebar</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">Blog Details</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-dashboard\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Dashboard
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/index.html\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/add-listing.html\">Add Listing</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/bookmark.html\">Bookmark</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/courses.html\">Courses</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/review.html\">Review</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/teacher-profile.html\">Teacher Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/user-profile.html\">User Profile</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Calendar<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/basic-calendar.html\">Basic Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/list-view-calendar.html\">List View Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">Mailbox<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/mailbox.html\">Mailbox</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/mailbox-compose.html\">Compose</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"admin/mailbox-read.html\">Mail Read</a>
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
\t\t\t\t\t\t\t\t\t\tsrc=\"assets/images/slider/slide1.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

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
\t\t\t\t\t\t\t\t\t\tsrc=\"assets/images/slider/slide2.jpg\" alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"10\" class=\"rev-slidebg\" data-no-retina/>

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
\t\t\t\t\t<!-- Main Slider -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"content-block\">

\t\t\t\t\t\t<!-- Our Services -->
\t\t\t\t\t\t<div class=\"section-area content-inner service-info-bx\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/our-services/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-box-sm radius bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bank text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Best Industry Leaders</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn radius-xl\">View More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/our-services/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-box-sm radius bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-book text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Learn Courses Online</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn radius-xl\">View More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"service-bx m-b0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/our-services/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"feature-box-sm radius bg-white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Book Library & Store</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn radius-xl\">View More</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Our Services END -->

\t\t\t\t\t\t<!-- Popular Courses -->
\t\t\t\t\t\t{% block section %}
\t\t\t\t\t\t\t<div class=\"section-area section-sp2 popular-courses-bx\">
\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 heading-bx left\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head\">Popular
\t\t\t\t\t\t\t\t\t\t\t\t<span>Courses</span>
\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"courses-carousel owl-carousel owl-btn-1 col-12 p-lr0\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/courses/pic4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">Read More</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Introduction EduChamp – LMS plugin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Programming</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-more-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3 Review</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"cours-star\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<del>\$190</del>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>\$120</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t<!-- Popular Courses END -->

\t\t\t\t\t\t<!-- Form -->
\t\t\t\t\t\t<div class=\"section-area section-sp1 ovpr-dark bg-fix online-cours\" style=\"background-image:url(assets/images/background/bg1.jpg);\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-center text-white\">
\t\t\t\t\t\t\t\t\t\t<h2>Online Courses To Learn</h2>
\t\t\t\t\t\t\t\t\t\t<h5>Own Your Feature Learning New Skills Online</h5>
\t\t\t\t\t\t\t\t\t\t<form class=\"cours-search\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"What do you want to learn today?\t\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\" type=\"submit\">Search</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mw800 m-auto\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-search-bx m-b30\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter\">5</span>M</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cours-search-text\">Over 5 million student</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-search-bx m-b30\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-book\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter\">30</span>K</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cours-search-text\">30,000 Courses.</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cours-search-bx m-b30\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-layout-list-post\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"counter\">20</span>K</h3>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"cours-search-text\">Learn Anythink Online.</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Form END -->
\t\t\t\t\t\t<div class=\"section-area section-sp2\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-center heading-bx\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head m-b0\">Upcoming
\t\t\t\t\t\t\t\t\t\t\t<span>Events</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"m-b0\">Upcoming Education Events To Feed Brain.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30\">
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/pic4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-date\">29</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-month\">October</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Education Autumn Tour 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7:00am 8:00am</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBerlin, Germany</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-date\">29</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-month\">October</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Education Autumn Tour 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7:00am 8:00am</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBerlin, Germany</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/event/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-date\">29</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-month\">October</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"event-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"event-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Education Autumn Tour 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t7:00am 8:00am</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBerlin, Germany</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn\">View All Event</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Testimonials -->
\t\t\t\t\t\t<div class=\"section-area section-sp2 bg-fix ovbl-dark\" style=\"background-image:url(assets/images/background/bg1.jpg);\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-white heading-bx left\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head text-uppercase\">what people
\t\t\t\t\t\t\t\t\t\t\t<span>say</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0\">
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"name\">Peter Packer</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>-Art Director</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-bx\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/testimonials/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"name\">Peter Packer</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>-Art Director</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Testimonials END -->

\t\t\t\t\t\t<!-- Recent News -->
\t\t\t\t\t\t<div class=\"section-area section-sp2\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 heading-bx left\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"title-head\">Recent
\t\t\t\t\t\t\t\t\t\t\t<span>News</span>
\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0\">
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"recent-news\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/latest-blog/pic1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>Jan 02 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>By William</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">This Story Behind Education Will Haunt You Forever.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-extra\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">READ MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comments-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>20 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"recent-news\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/latest-blog/pic2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>Feb 05 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>By John</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">What Will Education Be Like In The Next 50 Years?</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>As desperate as you are right now, you have done everything you can on your.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-extra\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">READ MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comments-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>14 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"recent-news\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/blog/latest-blog/pic3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"info-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"media-post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>April 14 2019</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>By George</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"post-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"blog-details.html\">Master The Skills Of Education And Be.</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<p>You will see in the guide all my years of valuable experience together with.</p>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-extra\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn-link\">READ MORE</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"comments-bx\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>23 Comment</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Recent News End -->

\t\t\t\t\t</div>
\t\t\t\t\t<!-- contact area END -->
\t\t\t\t</div>
\t\t\t\t<!-- Content END-->
\t\t\t\t<!-- Footer ==== -->
\t\t\t\t<footer>
\t\t\t\t\t<div class=\"footer-top\">
\t\t\t\t\t\t<div class=\"pt-exebar\">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t\t<div class=\"pt-logo mr-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/images/logo-white.png\" alt=\"\"/></a>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"about-1.html\">About</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq-1.html\">FAQs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact-1.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Get In Touch</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"http://educhamp.themetrades.com/admin/index.html\">Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-classic-grid.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"event.html\">Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4 col-lg-4 col-md-4 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget footer_widget\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"footer-title\">Courses</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses.html\">Courses</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"courses-details.html\">Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"membership.html\">Membership</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"profile.html\">Profile</a></li>
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
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic1.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic1.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic2.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic2.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic3.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic3.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic4.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic4.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic5.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic5.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic6.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic6.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic7.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic7.jpg\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"assets/images/gallery/pic8.jpg\" class=\"magnific-anchor\"><img src=\"assets/images/gallery/pic8.jpg\" alt=\"\"></a>
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
\t\t\t<script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/bootstrap/js/popper.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/magnific-popup/magnific-popup.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/counter/waypoints-min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/counter/counterup.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/imagesloaded/imagesloaded.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/masonry/masonry.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/masonry/filter.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/owl-carousel/owl.carousel.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/functions.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/contact.js') }}\"></script>
\t\t\t<script src='{{ asset('assets/vendors/switcher/switcher.js') }}'></script>
\t\t\t<!-- Revolution JavaScripts Files -->
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}\"></script>
\t\t\t<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
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
", "base.html.twig", "C:\\Users\\sheima\\Desktop\\Evolution-main\\templates\\base.html.twig");
    }
}
