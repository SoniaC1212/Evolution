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

/* offre/indexFront.html.twig */
class __TwigTemplate_d8922b7d7a41964118d92ad39ee6daf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tache' => [$this, 'block_tache'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/indexFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "offre/indexFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 4
        echo "\t<br><br><br>
\t<h1>Offre index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Proprietaire</th>
\t\t\t\t<th>Candidats</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "proprietaire", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["offre"], "candidats", [], "any", false, false, false, 23), " | "), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button class=\"btn\">
\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show_front", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show_front", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 28)])), "html", null, true);
            echo "\" class=\"share facebook\">
\t\t\t\t\t\t\t<svg class=\"w-3 h-3 text-blue-600 fill-current mr-4 icon-facebook\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" style=\"width: 20px; height: 20px;\">
\t\t\t\t\t\t\t\t<path d=\"M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z\"/>
\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td></td>

\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</tbody>
\t</table>
\t<td>
\t\t<button class=\"btn\">
\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exportPDF");
        echo "\">telecharger la liste</a>
\t\t</button>
\t</td>
\t<br><br><br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offre/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  140 => 43,  131 => 39,  115 => 28,  110 => 26,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  89 => 19,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseFront.html.twig\" %}

{% block tache %}
\t<br><br><br>
\t<h1>Offre index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Proprietaire</th>
\t\t\t\t<th>Candidats</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for offre in offres %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ offre.titre }}</td>
\t\t\t\t\t<td>{{ offre.description }}</td>
\t\t\t\t\t<td>{{ offre.proprietaire }}</td>
\t\t\t\t\t<td>{{ offre.candidats|join(' | ') }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button class=\"btn\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_show_front', {'id': offre.id}) }}\">show</a>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u={{ absolute_url(path('app_offre_show_front', {id: offre.id})) }}\" class=\"share facebook\">
\t\t\t\t\t\t\t<svg class=\"w-3 h-3 text-blue-600 fill-current mr-4 icon-facebook\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" style=\"width: 20px; height: 20px;\">
\t\t\t\t\t\t\t\t<path d=\"M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z\"/>
\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td></td>

\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t<td>
\t\t<button class=\"btn\">
\t\t\t<a href=\"{{ path('exportPDF')}}\">telecharger la liste</a>
\t\t</button>
\t</td>
\t<br><br><br>

{% endblock %}
", "offre/indexFront.html.twig", "C:\\Users\\sheima\\Desktop\\GestionOffres\\templates\\offre\\indexFront.html.twig");
    }
}
