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

/* profile/edit.html.twig */
class __TwigTemplate_b0d9a519716bf562358ca4858ed1a2a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Blog: Edition profil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        $this->loadTemplate("layouts/_navbar.html.twig", "profile/edit.html.twig", 7)->display($context);
        // line 8
        echo "
\t<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
  <div class=\"max-w-lg mx-auto text-center\">
    <h1 class=\"text-2xl font-bold sm:text-3xl\">Modifiez vos informations!</h1>
  </div>
 ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
  <div class=\"max-w-md mx-auto mt-8 mb-0 space-y-4\">
    <div>
      
\t  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Votre adresse mail"]);
        echo "

      <div class=\"relative\">
\t  \t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'errors');
        echo "
\t\t</div>
      </div>
    </div>

\t<div>
      ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Votre prénom"]);
        echo "
      <div class=\"relative\">
        \t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 30, $this->source); })()), "firstName", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t</div>
      </div>
    </div>

\t<div>
       ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 38, $this->source); })()), "lastName", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Votre nom"]);
        echo "

      <div class=\"relative\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 41, $this->source); })()), "lastName", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 43, $this->source); })()), "lastName", [], "any", false, false, false, 43), 'errors');
        echo "
\t\t</div>
      </div>
    </div>

    <div class=\"flex items-center justify-between\">

      <button
        type=\"submit\"
        class=\"inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg\"
      >
        Mettre à jour votre profil
      </button>
    </div>
  </div>
  ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["profilForm"]) || array_key_exists("profilForm", $context) ? $context["profilForm"] : (function () { throw new RuntimeError('Variable "profilForm" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 58,  156 => 43,  151 => 41,  145 => 38,  136 => 32,  131 => 30,  126 => 28,  117 => 22,  112 => 20,  106 => 17,  99 => 13,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog: Edition profil
{% endblock %}

{% block body %}
\t{% include \"layouts/_navbar.html.twig\" %}

\t<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
  <div class=\"max-w-lg mx-auto text-center\">
    <h1 class=\"text-2xl font-bold sm:text-3xl\">Modifiez vos informations!</h1>
  </div>
 {{form_start(profilForm)}}
  <div class=\"max-w-md mx-auto mt-8 mb-0 space-y-4\">
    <div>
      
\t  {{form_label(profilForm.email, 'Votre adresse mail', {'label_attr': {'class':'text-gray-500'}})}}

      <div class=\"relative\">
\t  \t{{form_widget(profilForm.email, {'attr': {'class': 'w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(profilForm.email)}}
\t\t</div>
      </div>
    </div>

\t<div>
      {{form_label(profilForm.firstName, 'Votre prénom', {'label_attr': {'class':'text-gray-500'}})}}
      <div class=\"relative\">
        \t{{form_widget(profilForm.firstName, {'attr': {'class': 'w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(profilForm.firstName)}}
\t\t</div>
      </div>
    </div>

\t<div>
       {{form_label(profilForm.lastName, 'Votre nom', {'label_attr': {'class':'text-gray-500'}})}}

      <div class=\"relative\">
        {{form_widget(profilForm.lastName, {'attr': {'class': 'w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(profilForm.lastName)}}
\t\t</div>
      </div>
    </div>

    <div class=\"flex items-center justify-between\">

      <button
        type=\"submit\"
        class=\"inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg\"
      >
        Mettre à jour votre profil
      </button>
    </div>
  </div>
  {{form_end(profilForm)}}
</div>
\t{# <main class=\"profile-edit\">
\t\t<section class=\"relative py-16 bg-gray-300\">
\t\t\t<div class=\"container mx-auto px-4 bg-green-400\">
               {{form(profilForm)}}
\t\t\t   <h1 class=\"relative py-16 bg-gray-300\">
\t\t\t   \t\tEdition de profil
\t\t\t  </h1>
            </div>
\t\t</section>
\t</main> #}
{% endblock %}
", "profile/edit.html.twig", "/home/ismail/laplateforme/blog/templates/profile/edit.html.twig");
    }
}
