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

/* offre/AddO.html.twig */
class __TwigTemplate_f021e397c2c51916f56079fdafe89b3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'tache' => [$this, 'block_tache'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/AddO.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/AddO.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/AddO.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter offre
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 5
        echo "\t<main>
\t\t<div class=\"page-wrapper\">
\t\t\t<div id=\"loading-icon-bx\"></div>
\t\t\t<!-- PAGE CONTAINER-->
\t\t\t<header class=\"header rs-nav header-transparent\">
\t\t\t\t<div class=\"top-bar\">
\t\t\t\t\t<div class=\"page-container\">
\t\t\t\t\t\t<div class=\"main-content\">
\t\t\t\t\t\t\t<div class=\"section__content section__content--p30\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<!-- START WHITE BACKGROUND-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"map-data m-b-40\">

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["OR"]) || array_key_exists("OR", $context) ? $context["OR"] : (function () { throw new RuntimeError('Variable "OR" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["OR"]) || array_key_exists("OR", $context) ? $context["OR"] : (function () { throw new RuntimeError('Variable "OR" does not exist.', 22, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["OR"]) || array_key_exists("OR", $context) ? $context["OR"] : (function () { throw new RuntimeError('Variable "OR" does not exist.', 23, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"topbar-right\">
\t\t\t\t\t\t\t\t\t\t<ul></ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sticky-header navbar-expand-lg\">
\t\t\t\t\t\t\t<div class=\"menu-bar clearfix\">
\t\t\t\t\t\t\t\t<div class=\"container clearfix\"></main>

\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offre/AddO.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 23,  111 => 22,  107 => 21,  89 => 5,  79 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Ajouter offre
{% endblock %}
{% block tache %}
\t<main>
\t\t<div class=\"page-wrapper\">
\t\t\t<div id=\"loading-icon-bx\"></div>
\t\t\t<!-- PAGE CONTAINER-->
\t\t\t<header class=\"header rs-nav header-transparent\">
\t\t\t\t<div class=\"top-bar\">
\t\t\t\t\t<div class=\"page-container\">
\t\t\t\t\t\t<div class=\"main-content\">
\t\t\t\t\t\t\t<div class=\"section__content section__content--p30\">
\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<!-- START WHITE BACKGROUND-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"map-data m-b-40\">

\t\t\t\t\t\t\t\t\t\t\t\t{{form_start(OR) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{form_widget(OR) }}
\t\t\t\t\t\t\t\t\t\t\t\t{{form_end(OR) }}

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"topbar-right\">
\t\t\t\t\t\t\t\t\t\t<ul></ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sticky-header navbar-expand-lg\">
\t\t\t\t\t\t\t<div class=\"menu-bar clearfix\">
\t\t\t\t\t\t\t\t<div class=\"container clearfix\"></main>

\t\t\t\t\t\t\t{% endblock %}
", "offre/AddO.html.twig", "C:\\Users\\sheima\\Desktop\\Evolution-main\\templates\\offre\\addO.html.twig");
    }
}
