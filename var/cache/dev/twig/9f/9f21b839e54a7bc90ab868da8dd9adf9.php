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

/* baseBack.html.twig */
class __TwigTemplate_89768a259c7381b0f1b2690215cc3a24 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<html lang=\"en\">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>

\t";
        // line 6
        $this->displayBlock('meta', $context, $blocks);
        // line 23
        echo "

\t<!-- FAVICONS ICON ============================================= -->
\t<link rel=\"icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../error-404.html\" type=\"image/x-icon"), "html", null, true);
        echo "\" />
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/images/favicon.png"), "html", null, true);
        echo " />
\t
\t<!-- PAGE TITLE HERE ============================================= -->
\t";
        // line 30
        $this->displayBlock('title', $context, $blocks);
        // line 33
        echo "\t
\t<!-- MOBILE SPECIFIC ============================================= -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t
\t<!--[if lt IE 9]>
\t<script src=\"assets_back/js/html5shiv.min.js\"></script>
\t<script src=\"assets_back/js/respond.min.js\"></script>
\t<![endif]-->
\t
\t<!-- All PLUGINS CSS ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/css/assets.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/calendar/fullcalendar.css"), "html", null, true);
        echo ">
\t
\t<!-- TYPOGRAPHY ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/css/typography.css"), "html", null, true);
        echo ">
\t
\t<!-- SHORTCODES ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/css/shortcodes/shortcodes.css"), "html", null, true);
        echo ">
\t
\t<!-- STYLESHEETS ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/css/style.css"), "html", null, true);
        echo ">
\t<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/css/dashboard.css"), "html", null, true);
        echo ">
\t<link class=\"skin\" rel=\"stylesheet\" type=\"text/css\" href=";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/css/color/color-1.css"), "html", null, true);
        echo ">
\t
</head>
<body class=\"ttr-opened-sidebar ttr-pinned-sidebar\" style=\"background-color:white\">
\t
\t<!-- header start -->
\t<header class=\"ttr-header\">
\t\t<div class=\"ttr-header-wrapper\">
\t\t\t<!--sidebar menu toggler start -->
\t\t\t<div class=\"ttr-toggle-sidebar ttr-material-button\">
\t\t\t\t<i class=\"ti-close ttr-open-icon\"></i>
\t\t\t\t<i class=\"ti-menu ttr-close-icon\"></i>
\t\t\t</div>
\t\t\t<!--sidebar menu toggler end -->
\t\t\t<!--logo start -->
\t\t\t<div class=\"ttr-logo-box\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html\" class=\"ttr-logo"), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img class=\"ttr-logo-mobile\" alt=\"\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice//images/logo-mobile.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\">
\t\t\t\t\t\t<img class=\"ttr-logo-desktop\" alt=\"\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice//images/logo-white.png"), "html", null, true);
        echo "\" width=\"160\" height=\"27\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--logo end -->
\t\t\t<div class=\"ttr-header-menu\">
\t\t\t\t<!-- header left menu start -->
\t\t\t\t<ul class=\"ttr-header-navigation\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-submenu-\">HOME</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#\" class=\"ttr-material-button ttr-submenu-toggle"), "html", null, true);
        echo "\">QUICK MENU <i class=\"fa fa-angle-down\"></i></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"\">Our Courses</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">New Event</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Membership</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- header left menu end -->
\t\t\t</div>
\t\t\t<div class=\"ttr-header-right ttr-with-seperator\">
\t\t\t\t<!-- header right menu start -->
\t\t\t\t<ul class=\"ttr-header-navigation\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-search-toggle\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-submenu-toggle\"><i class=\"fa fa-bell\"></i></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu noti-menu\">
\t\t\t\t\t\t\t<div class=\"ttr-notify-header\">
\t\t\t\t\t\t\t\t<span class=\"ttr-notify-text-top\">9 New</span>
\t\t\t\t\t\t\t\t<span class=\"ttr-notify-text\">User Notifications</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"noti-box-list\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-gray\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Sneha Jogi</span> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 02:14</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-yellow\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Your order is placed</a> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 7 Min</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-red\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Your item is shipped</span> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 2 May</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-green\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Sneha Jogi</a> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 14 July</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-word-o\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Sneha Jogi</span> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 15 Min</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-submenu-toggle\"><span class=\"ttr-user-avatar\"><img alt=\"\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/images/testimonials/pic3.jpg"), "html", null, true);
        echo "\" width=\"32\" height=\"32\"></span></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"\">My profile</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Activity</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Messages</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Logout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"ttr-hide-on-mobile\">
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\"><i class=\"ti-layout-grid3-alt\"></i></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu ttr-extra-menu\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-music\"></i>
\t\t\t\t\t\t\t\t<span>Musics</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play\"></i>
\t\t\t\t\t\t\t\t<span>Videos</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span>Emails</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\t<span>Reports</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t\t\t\t\t\t<span>Persons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t\t<span>Pictures</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- header right menu end -->
\t\t\t</div>
\t\t\t<!--header search panel start -->
\t\t\t<div class=\"ttr-search-bar\">
\t\t\t\t<form class=\"ttr-search-form\">
\t\t\t\t\t<div class=\"ttr-search-input-wrapper\">
\t\t\t\t\t\t<input type=\"text\" name=\"qq\" placeholder=\"search something...\" class=\"ttr-search-input\">
\t\t\t\t\t\t<button type=\"submit\" name=\"search\" class=\"ttr-search-submit\"><i class=\"ti-arrow-right\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"ttr-search-close ttr-search-toggle\">
\t\t\t\t\t\t<i class=\"ti-close\"></i>
\t\t\t\t\t</span>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!--header search panel end -->
\t\t</div>
\t</header>
\t<!-- header end -->
\t<!-- Left sidebar menu start -->
\t<div class=\"ttr-sidebar\">
\t\t<div class=\"ttr-sidebar-wrapper content-scroll\">
\t\t\t<!-- side menu logo start -->
\t\t\t<div class=\"ttr-sidebar-logo\">
\t\t\t\t<a href=\"\"><img alt=\"\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/images/logo.png"), "html", null, true);
        echo "\" width=\"122\" height=\"27\"></a>
\t\t\t\t<!-- <div class=\"ttr-sidebar-pin-button\" title=\"Pin/Unpin Menu\">
\t\t\t\t\t<i class=\"material-icons ttr-fixed-icon\">gps_fixed</i>
\t\t\t\t\t<i class=\"material-icons ttr-not-fixed-icon\">gps_not_fixed</i>
\t\t\t\t</div> -->
\t\t\t\t<div class=\"ttr-sidebar-toggle-button\">
\t\t\t\t\t<i class=\"ti-arrow-left\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- side menu logo end -->
\t\t\t<!-- sidebar menu start -->
\t\t\t<nav class=\"ttr-sidebar-navi\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-home\"></i></span>
\t\t                \t<span class=\"ttr-label\">Dashborad</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/candidat\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-book\"></i></span>
\t\t                \t<span class=\"ttr-label\">Candidats</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/offre\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-book\"></i></span>
\t\t                \t<span class=\"ttr-label\">Offres</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-email\"></i></span>
\t\t                \t<span class=\"ttr-label\">Mailbox</span>
\t\t                \t<span class=\"ttr-arrow-icon\"><i class=\"fa fa-angle-down\"></i></span>
\t\t                </a>
\t\t                <ul>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Mail Box</span></a>
\t\t                \t</li>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Compose</span></a>
\t\t                \t</li>
\t\t\t\t\t\t\t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Mail Read</span></a>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-calendar\"></i></span>
\t\t                \t<span class=\"ttr-label\">Calendar</span>
\t\t                \t<span class=\"ttr-arrow-icon\"><i class=\"fa fa-angle-down\"></i></span>
\t\t                </a>
\t\t                <ul>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Basic Calendar</span></a>
\t\t                \t</li>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">List View</span></a>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-bookmark-alt\"></i></span>
\t\t                \t<span class=\"ttr-label\">Bookmarks</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-comments\"></i></span>
\t\t                \t<span class=\"ttr-label\">Review</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-layout-accordion-list\"></i></span>
\t\t                \t<span class=\"ttr-label\">Add listing</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-user\"></i></span>
\t\t                \t<span class=\"ttr-label\">My Profile</span>
\t\t                \t<span class=\"ttr-arrow-icon\"><i class=\"fa fa-angle-down\"></i></span>
\t\t                </a>
\t\t                <ul>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">User Profile</span></a>
\t\t                \t</li>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Teacher Profile</span></a>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t\t            <li class=\"ttr-seperate\"></li>
\t\t\t\t</ul>
\t\t\t\t<!-- sidebar menu end -->
\t\t\t</nav>
\t\t\t<!-- sidebar menu end -->
\t\t</div>
\t</div>
\t<!-- Left sidebar menu end -->

\t<!--Main container start -->
\t<main class=\"ttr-wrapper\"style=\"background-color:white\">
\t\t<div class=\"container-fluid\" style=\"background-color:white\">
\t\t\t";
        // line 350
        $this->displayBlock('body', $context, $blocks);
        // line 353
        echo "\t\t</div>
    </main>
\t<div class=\"ttr-overlay\"style=\"background-color:white\"></div>

<!-- External JavaScripts -->
<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/counter/waypoints-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/counter/counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/imagesloaded/imagesloaded.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/masonry/masonry.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/masonry/filter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/scroll/scrollbar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/js/functions.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/js/admin.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/calendar/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/calendar/fullcalendar.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./assets/BackOffice/vendors/switcher/switcher.js"), "html", null, true);
        echo "\"></script>
<script>
  \$(document).ready(function() {

    \$('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-03-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow \"more\" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-11',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T10:30:00',
          end: '2019-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-28'
        }
      ]
    });

  });

</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 7
        echo "\t<!-- META ============================================= -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"\" />
\t<meta name=\"robots\" content=\"\" />
\t
\t<!-- DESCRIPTION -->
\t<meta name=\"description\" content=\"EduChamp : Education HTML Template\" />
\t
\t<!-- OG -->
\t<meta property=\"og:title\" content=\"EduChamp : Education HTML Template\" />
\t<meta property=\"og:description\" content=\"EduChamp : Education HTML Template\" />
\t<meta property=\"og:image\" content=\"\" />
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 31
        echo "\t<title>EduChamp : Education HTML Template </title>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 350
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 351
        echo "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 351,  661 => 350,  650 => 31,  640 => 30,  615 => 7,  605 => 6,  511 => 376,  507 => 375,  503 => 374,  499 => 373,  495 => 372,  491 => 371,  487 => 370,  483 => 369,  479 => 368,  475 => 367,  471 => 366,  467 => 365,  463 => 364,  459 => 363,  455 => 362,  451 => 361,  447 => 360,  443 => 359,  439 => 358,  432 => 353,  430 => 350,  318 => 241,  252 => 178,  157 => 86,  142 => 74,  138 => 73,  134 => 72,  114 => 55,  110 => 54,  106 => 53,  100 => 50,  94 => 47,  88 => 44,  84 => 43,  72 => 33,  70 => 30,  64 => 27,  60 => 26,  55 => 23,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->
<head>

\t{% block meta %}
\t<!-- META ============================================= -->
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"\" />
\t<meta name=\"robots\" content=\"\" />
\t
\t<!-- DESCRIPTION -->
\t<meta name=\"description\" content=\"EduChamp : Education HTML Template\" />
\t
\t<!-- OG -->
\t<meta property=\"og:title\" content=\"EduChamp : Education HTML Template\" />
\t<meta property=\"og:description\" content=\"EduChamp : Education HTML Template\" />
\t<meta property=\"og:image\" content=\"\" />
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t{% endblock %}


\t<!-- FAVICONS ICON ============================================= -->
\t<link rel=\"icon\" href=\"{{asset('../error-404.html\" type=\"image/x-icon')}}\" />
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href={{asset('./assets/BackOffice/images/favicon.png')}} />
\t
\t<!-- PAGE TITLE HERE ============================================= -->
\t{% block title %}
\t<title>EduChamp : Education HTML Template </title>
\t{% endblock %}
\t
\t<!-- MOBILE SPECIFIC ============================================= -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t
\t<!--[if lt IE 9]>
\t<script src=\"assets_back/js/html5shiv.min.js\"></script>
\t<script src=\"assets_back/js/respond.min.js\"></script>
\t<![endif]-->
\t
\t<!-- All PLUGINS CSS ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href={{asset('./assets/BackOffice/css/assets.css')}}>
\t<link rel=\"stylesheet\" type=\"text/css\" href={{asset('./assets/BackOffice/vendors/calendar/fullcalendar.css')}}>
\t
\t<!-- TYPOGRAPHY ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href={{asset('./assets/BackOffice/css/typography.css')}}>
\t
\t<!-- SHORTCODES ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href={{asset('./assets/BackOffice/css/shortcodes/shortcodes.css')}}>
\t
\t<!-- STYLESHEETS ============================================= -->
\t<link rel=\"stylesheet\" type=\"text/css\" href={{asset('./assets/BackOffice/css/style.css')}}>
\t<link rel=\"stylesheet\" type=\"text/css\" href={{asset('./assets/BackOffice/css/dashboard.css')}}>
\t<link class=\"skin\" rel=\"stylesheet\" type=\"text/css\" href={{asset('./assets/BackOffice/css/color/color-1.css')}}>
\t
</head>
<body class=\"ttr-opened-sidebar ttr-pinned-sidebar\" style=\"background-color:white\">
\t
\t<!-- header start -->
\t<header class=\"ttr-header\">
\t\t<div class=\"ttr-header-wrapper\">
\t\t\t<!--sidebar menu toggler start -->
\t\t\t<div class=\"ttr-toggle-sidebar ttr-material-button\">
\t\t\t\t<i class=\"ti-close ttr-open-icon\"></i>
\t\t\t\t<i class=\"ti-menu ttr-close-icon\"></i>
\t\t\t</div>
\t\t\t<!--sidebar menu toggler end -->
\t\t\t<!--logo start -->
\t\t\t<div class=\"ttr-logo-box\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"{{asset('index.html\" class=\"ttr-logo')}}\">
\t\t\t\t\t\t<img class=\"ttr-logo-mobile\" alt=\"\" src=\"{{asset('./assets/BackOffice//images/logo-mobile.png')}}\" width=\"30\" height=\"30\">
\t\t\t\t\t\t<img class=\"ttr-logo-desktop\" alt=\"\" src=\"{{asset('./assets/BackOffice//images/logo-white.png')}}\" width=\"160\" height=\"27\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--logo end -->
\t\t\t<div class=\"ttr-header-menu\">
\t\t\t\t<!-- header left menu start -->
\t\t\t\t<ul class=\"ttr-header-navigation\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-submenu-\">HOME</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{asset('#\" class=\"ttr-material-button ttr-submenu-toggle')}}\">QUICK MENU <i class=\"fa fa-angle-down\"></i></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"\">Our Courses</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">New Event</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Membership</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- header left menu end -->
\t\t\t</div>
\t\t\t<div class=\"ttr-header-right ttr-with-seperator\">
\t\t\t\t<!-- header right menu start -->
\t\t\t\t<ul class=\"ttr-header-navigation\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-search-toggle\"><i class=\"fa fa-search\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-submenu-toggle\"><i class=\"fa fa-bell\"></i></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu noti-menu\">
\t\t\t\t\t\t\t<div class=\"ttr-notify-header\">
\t\t\t\t\t\t\t\t<span class=\"ttr-notify-text-top\">9 New</span>
\t\t\t\t\t\t\t\t<span class=\"ttr-notify-text\">User Notifications</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"noti-box-list\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-gray\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Sneha Jogi</span> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 02:14</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-yellow\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Your order is placed</a> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 7 Min</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-red\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Your item is shipped</span> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 2 May</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-green\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comments-o\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">Sneha Jogi</a> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 14 July</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-icon dashbg-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-word-o\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-text\">
\t\t\t\t\t\t\t\t\t\t\t<span>Sneha Jogi</span> sent you a message.
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"notification-time\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"fa fa-close\"></a>
\t\t\t\t\t\t\t\t\t\t\t<span> 15 Min</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button ttr-submenu-toggle\"><span class=\"ttr-user-avatar\"><img alt=\"\" src=\"{{asset('./assets/BackOffice/images/testimonials/pic3.jpg')}}\" width=\"32\" height=\"32\"></span></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"\">My profile</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Activity</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Messages</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"\">Logout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"ttr-hide-on-mobile\">
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\"><i class=\"ti-layout-grid3-alt\"></i></a>
\t\t\t\t\t\t<div class=\"ttr-header-submenu ttr-extra-menu\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-music\"></i>
\t\t\t\t\t\t\t\t<span>Musics</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube-play\"></i>
\t\t\t\t\t\t\t\t<span>Videos</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t<span>Emails</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-book\"></i>
\t\t\t\t\t\t\t\t<span>Reports</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-smile-o\"></i>
\t\t\t\t\t\t\t\t<span>Persons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t\t\t\t<span>Pictures</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- header right menu end -->
\t\t\t</div>
\t\t\t<!--header search panel start -->
\t\t\t<div class=\"ttr-search-bar\">
\t\t\t\t<form class=\"ttr-search-form\">
\t\t\t\t\t<div class=\"ttr-search-input-wrapper\">
\t\t\t\t\t\t<input type=\"text\" name=\"qq\" placeholder=\"search something...\" class=\"ttr-search-input\">
\t\t\t\t\t\t<button type=\"submit\" name=\"search\" class=\"ttr-search-submit\"><i class=\"ti-arrow-right\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"ttr-search-close ttr-search-toggle\">
\t\t\t\t\t\t<i class=\"ti-close\"></i>
\t\t\t\t\t</span>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<!--header search panel end -->
\t\t</div>
\t</header>
\t<!-- header end -->
\t<!-- Left sidebar menu start -->
\t<div class=\"ttr-sidebar\">
\t\t<div class=\"ttr-sidebar-wrapper content-scroll\">
\t\t\t<!-- side menu logo start -->
\t\t\t<div class=\"ttr-sidebar-logo\">
\t\t\t\t<a href=\"\"><img alt=\"\" src=\"{{asset('./assets/BackOffice/images/logo.png')}}\" width=\"122\" height=\"27\"></a>
\t\t\t\t<!-- <div class=\"ttr-sidebar-pin-button\" title=\"Pin/Unpin Menu\">
\t\t\t\t\t<i class=\"material-icons ttr-fixed-icon\">gps_fixed</i>
\t\t\t\t\t<i class=\"material-icons ttr-not-fixed-icon\">gps_not_fixed</i>
\t\t\t\t</div> -->
\t\t\t\t<div class=\"ttr-sidebar-toggle-button\">
\t\t\t\t\t<i class=\"ti-arrow-left\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- side menu logo end -->
\t\t\t<!-- sidebar menu start -->
\t\t\t<nav class=\"ttr-sidebar-navi\">
\t\t\t\t<ul>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-home\"></i></span>
\t\t                \t<span class=\"ttr-label\">Dashborad</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/candidat\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-book\"></i></span>
\t\t                \t<span class=\"ttr-label\">Candidats</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/offre\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-book\"></i></span>
\t\t                \t<span class=\"ttr-label\">Offres</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-email\"></i></span>
\t\t                \t<span class=\"ttr-label\">Mailbox</span>
\t\t                \t<span class=\"ttr-arrow-icon\"><i class=\"fa fa-angle-down\"></i></span>
\t\t                </a>
\t\t                <ul>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Mail Box</span></a>
\t\t                \t</li>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Compose</span></a>
\t\t                \t</li>
\t\t\t\t\t\t\t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Mail Read</span></a>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-calendar\"></i></span>
\t\t                \t<span class=\"ttr-label\">Calendar</span>
\t\t                \t<span class=\"ttr-arrow-icon\"><i class=\"fa fa-angle-down\"></i></span>
\t\t                </a>
\t\t                <ul>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Basic Calendar</span></a>
\t\t                \t</li>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">List View</span></a>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-bookmark-alt\"></i></span>
\t\t                \t<span class=\"ttr-label\">Bookmarks</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-comments\"></i></span>
\t\t                \t<span class=\"ttr-label\">Review</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-layout-accordion-list\"></i></span>
\t\t                \t<span class=\"ttr-label\">Add listing</span>
\t\t                </a>
\t\t            </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"\" class=\"ttr-material-button\">
\t\t\t\t\t\t\t<span class=\"ttr-icon\"><i class=\"ti-user\"></i></span>
\t\t                \t<span class=\"ttr-label\">My Profile</span>
\t\t                \t<span class=\"ttr-arrow-icon\"><i class=\"fa fa-angle-down\"></i></span>
\t\t                </a>
\t\t                <ul>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">User Profile</span></a>
\t\t                \t</li>
\t\t                \t<li>
\t\t                \t\t<a href=\"\" class=\"ttr-material-button\"><span class=\"ttr-label\">Teacher Profile</span></a>
\t\t                \t</li>
\t\t                </ul>
\t\t            </li>
\t\t            <li class=\"ttr-seperate\"></li>
\t\t\t\t</ul>
\t\t\t\t<!-- sidebar menu end -->
\t\t\t</nav>
\t\t\t<!-- sidebar menu end -->
\t\t</div>
\t</div>
\t<!-- Left sidebar menu end -->

\t<!--Main container start -->
\t<main class=\"ttr-wrapper\"style=\"background-color:white\">
\t\t<div class=\"container-fluid\" style=\"background-color:white\">
\t\t\t{% block body %}

\t\t\t{% endblock %}
\t\t</div>
    </main>
\t<div class=\"ttr-overlay\"style=\"background-color:white\"></div>

<!-- External JavaScripts -->
<script src=\"{{asset('./assets/BackOffice/js/jquery.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/bootstrap/js/popper.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/bootstrap/js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/bootstrap-select/bootstrap-select.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/magnific-popup/magnific-popup.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/counter/waypoints-min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/counter/counterup.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/imagesloaded/imagesloaded.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/masonry/masonry.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/masonry/filter.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/owl-carousel/owl.carousel.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/scroll/scrollbar.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/js/functions.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/chart/chart.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/js/admin.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/calendar/moment.min.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/calendar/fullcalendar.js')}}\"></script>
<script src=\"{{asset('./assets/BackOffice/vendors/switcher/switcher.js')}}\"></script>
<script>
  \$(document).ready(function() {

    \$('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2019-03-12',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow \"more\" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2019-03-11',
          end: '2019-03-13'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T10:30:00',
          end: '2019-03-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2019-03-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2019-03-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2019-03-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2019-03-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2019-03-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2019-03-28'
        }
      ]
    });

  });

</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>", "baseBack.html.twig", "C:\\Users\\sheima\\Desktop\\Evolution-main\\templates\\baseBack.html.twig");
    }
}
