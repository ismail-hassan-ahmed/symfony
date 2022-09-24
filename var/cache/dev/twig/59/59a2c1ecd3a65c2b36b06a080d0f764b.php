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

/* registration/register.html.twig */
class __TwigTemplate_ba2ae2a6133b63330998e6bad9600a67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Blog: Inscription
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
        echo "
";
        // line 8
        $this->loadTemplate("layouts/_navbar.html.twig", "registration/register.html.twig", 8)->display($context);
        // line 9
        echo "
<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
  <div class=\"max-w-lg mx-auto text-center\">
    <h1 class=\"text-2xl font-bold sm:text-3xl\">Inscrivez et publiez des articles !</h1>
  </div>
 ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
  <div class=\"max-w-md mx-auto mt-8 mb-0 space-y-4\">
    <div>
      
\t  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Prénom"]);
        echo "

      <div class=\"relative\">
\t  \t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "firstName", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "firstName", [], "any", false, false, false, 32), 'errors');
        echo "
\t\t</div>
      </div>
    </div>

\t<div>
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "lastName", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Nom"]);
        echo "
      <div class=\"relative\">
        \t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "lastName", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "lastName", [], "any", false, false, false, 42), 'errors');
        echo "
\t\t</div>
      </div>
    </div>

\t<div>
       ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Email"]);
        echo "

      <div class=\"relative\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "email", [], "any", false, false, false, 53), 'errors');
        echo "
\t\t</div>
      </div>
    </div>

    <div>
       ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Mot de passe"]);
        echo "
      <div class=\"relative\">
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "plainPassword", [], "any", false, false, false, 63), 'errors');
        echo "
\t\t</div>

      </div>
    </div>

\t<div>
       ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "agreeTerms", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "text-gray-500"], "label" => "Je comprends"]);
        echo "

      <div class=\"relative\">
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "agreeTerms", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => " p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm"]]);
        echo "
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "agreeTerms", [], "any", false, false, false, 75), 'errors');
        echo "
\t\t</div>
      </div>
    </div>

    <div class=\"flex items-center justify-between\">
      <p class=\"text-sm text-gray-500\">
        Vous avez déja un compte ?
        <a class=\"underline\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous</a>
      </p>

      <button
        type=\"submit\"
        class=\"inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg\"
      >
        Inscription
      </button>
    </div>
  </div>
  ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
</div>

\t";
        // line 110
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 110,  232 => 94,  218 => 83,  207 => 75,  202 => 73,  196 => 70,  186 => 63,  181 => 61,  176 => 59,  167 => 53,  162 => 51,  156 => 48,  147 => 42,  142 => 40,  137 => 38,  128 => 32,  123 => 30,  117 => 27,  110 => 23,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog: Inscription
{% endblock %}

{% block body %}

{% include \"layouts/_navbar.html.twig\" %}

<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
  <div class=\"max-w-lg mx-auto text-center\">
    <h1 class=\"text-2xl font-bold sm:text-3xl\">Inscrivez et publiez des articles !</h1>
  </div>
 {{form_start(registrationForm)}}
  <div class=\"max-w-md mx-auto mt-8 mb-0 space-y-4\">
    <div>
      
\t  {{form_label(registrationForm.firstName, 'Prénom', {'label_attr': {'class':'text-gray-500'}})}}

      <div class=\"relative\">
\t  \t{{form_widget(registrationForm.firstName, {'attr': {'class': 'w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(registrationForm.firstName)}}
\t\t</div>
      </div>
    </div>

\t<div>
      {{form_label(registrationForm.lastName, 'Nom', {'label_attr': {'class':'text-gray-500'}})}}
      <div class=\"relative\">
        \t{{form_widget(registrationForm.lastName, {'attr': {'class': 'w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(registrationForm.lastName)}}
\t\t</div>
      </div>
    </div>

\t<div>
       {{form_label(registrationForm.email, 'Email', {'label_attr': {'class':'text-gray-500'}})}}

      <div class=\"relative\">
        {{form_widget(registrationForm.email, {'attr': {'class': 'w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(registrationForm.email)}}
\t\t</div>
      </div>
    </div>

    <div>
       {{form_label(registrationForm.plainPassword, 'Mot de passe', {'label_attr': {'class':'text-gray-500'}})}}
      <div class=\"relative\">
        {{form_widget(registrationForm.plainPassword, {'attr': {'class': 'w-full p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(registrationForm.plainPassword)}}
\t\t</div>

      </div>
    </div>

\t<div>
       {{form_label(registrationForm.agreeTerms, 'Je comprends', {'label_attr': {'class':'text-gray-500'}})}}

      <div class=\"relative\">
        {{form_widget(registrationForm.agreeTerms, {'attr': {'class': ' p-4 pr-12 text-sm border-gray-700 rounded-lg shadow-sm'}})}}
\t\t<div class=\"text-red-500 font-semibold text-xs bg-white\">
\t\t\t{{form_errors(registrationForm.agreeTerms)}}
\t\t</div>
      </div>
    </div>

    <div class=\"flex items-center justify-between\">
      <p class=\"text-sm text-gray-500\">
        Vous avez déja un compte ?
        <a class=\"underline\" href=\"{{path('app_login')}}\">Connectez-vous</a>
      </p>

      <button
        type=\"submit\"
        class=\"inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg\"
      >
        Inscription
      </button>
    </div>
  </div>
  {{form_end(registrationForm)}}
</div>

\t{# <h1>Register</h1>

\t{{ form_start(registrationForm) }}
\t{{form_row(registrationForm.firstName)}}
\t{{form_row(registrationForm.lastName)}}
\t{{ form_row(registrationForm.email) }}
\t{{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
\t{{ form_row(registrationForm.agreeTerms) }}

\t<button type=\"submit\" class=\"btn\">Register</button>
\t{{ form_end(registrationForm) }} #}


{% endblock %}
", "registration/register.html.twig", "/home/ismail/laplateforme/blog/templates/registration/register.html.twig");
    }
}
