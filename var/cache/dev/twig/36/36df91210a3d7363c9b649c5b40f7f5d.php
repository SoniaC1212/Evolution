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

/* offre/_form.html.twig */
class __TwigTemplate_c2f83b5861ceb352b796f4dce3bd5e70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/_form.html.twig"));

        // line 1
        echo "<div class=\"card-body card-block\">
        ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), 'label', ["label" => "Titre :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 9
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "titre", [], "any", false, false, false, 9), 'errors'))) {
            // line 10
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), 'errors');
            echo "</small>
                    ";
        }
        // line 12
        echo "                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'label', ["label" => "Description :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 20
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'errors'))) {
            // line 21
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'errors');
            echo "</small>
                    ";
        }
        // line 23
        echo "                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "proprietaire", [], "any", false, false, false, 27), 'label', ["label" => "Proprietaire :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "proprietaire", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 31
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "proprietaire", [], "any", false, false, false, 31), 'errors'))) {
            // line 32
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "proprietaire", [], "any", false, false, false, 32), 'errors');
            echo "</small>
                    ";
        }
        // line 34
        echo "                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "candidats", [], "any", false, false, false, 38), 'label', ["label" => "Candidats :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "candidats", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 42
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "candidats", [], "any", false, false, false, 42), 'errors'))) {
            // line 43
            echo "                        <small class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "candidats", [], "any", false, false, false, 43), 'errors');
            echo "</small>
                    ";
        }
        // line 45
        echo "                </div>
            </div>
            
            <div align=\"center\" class=\"card-footer\">
                <button class=\"btn\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                <button class=\"btn btn-outline-secondary\"><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        echo "\">Back To List</a></button>
            </div>
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 52,  152 => 50,  148 => 49,  142 => 45,  136 => 43,  134 => 42,  130 => 41,  124 => 38,  118 => 34,  112 => 32,  110 => 31,  106 => 30,  100 => 27,  94 => 23,  88 => 21,  86 => 20,  82 => 19,  76 => 16,  70 => 12,  64 => 10,  62 => 9,  58 => 8,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-body card-block\">
        {{ form_start(form,{'attr':{'novalidate':'novalidate'}},{'attr':{'class':'form-horizontal'}}) }}
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.titre,\"Titre :\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.titre,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.titre) is not empty %}
                        <small class=\"form-text text-muted\">{{ form_errors(form.titre) }}</small>
                    {% endif %}
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.description,\"Description :\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.description,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.description) is not empty %}
                        <small class=\"form-text text-muted\">{{ form_errors(form.description) }}</small>
                    {% endif %}
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.proprietaire,\"Proprietaire :\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.proprietaire,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.proprietaire) is not empty %}
                        <small class=\"form-text text-muted\">{{ form_errors(form.proprietaire) }}</small>
                    {% endif %}
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.candidats,\"Candidats :\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.candidats,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.candidats) is not empty %}
                        <small class=\"form-text text-muted\">{{ form_errors(form.candidats) }}</small>
                    {% endif %}
                </div>
            </div>
            
            <div align=\"center\" class=\"card-footer\">
                <button class=\"btn\">{{ button_label|default('Save') }}</button>
                <button class=\"btn btn-outline-secondary\"><a href=\"{{ path('app_offre_index') }}\">Back To List</a></button>
            </div>
        {{ form_end(form) }}
    </div>
", "offre/_form.html.twig", "C:\\Users\\azizo\\OneDrive\\Bureau\\Evolution-main\\templates\\offre\\_form.html.twig");
    }
}
