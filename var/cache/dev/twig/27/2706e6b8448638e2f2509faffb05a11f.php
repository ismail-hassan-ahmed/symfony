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

/* profile/notes */
class __TwigTemplate_75fb8bae4cb6e24c6910c8ea25dee286 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/notes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/notes"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/notes", 1);
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

        echo "Hello ProfileController!
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
        $this->loadTemplate("layouts/_navbar.html.twig", "profile/notes", 7)->display($context);
        // line 8
        echo "\t<main class=\"profile-page\">
\t\t<section class=\"relative py-16 bg-gray-300\">
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<div class=\"relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64\">
\t\t\t\t\t<div class=\"px-6\">
\t\t\t\t\t\t<div class=\"text-center mt-12\">
\t\t\t\t\t\t\t<h3 class=\"text-5xl font-semibold leading-normal mb-2 text-gray-800 mb-2\">
\t\t\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "firstName", [], "any", false, false, false, 15), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "lastName", [], "any", false, false, false, 16), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-square-envelope\"></i>
\t\t\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

              <div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-square-envelope\"></i>
\t\t\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "articles", [], "any", false, false, false, 25)), "html", null, true);
        echo " Posts
\t\t\t\t\t\t\t</div>

               <div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-square-envelope\"></i>
                  ";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "comments", [], "any", false, false, false, 30)), "html", null, true);
        echo " Commentaires
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\" class=\"bg-green-500 text-white p-2  inline-block mt-3  mr-2 text-lg\">Modifier mes informations</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
        // line 45
        echo "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/notes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  135 => 34,  128 => 30,  120 => 25,  112 => 20,  105 => 16,  101 => 15,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProfileController!
{% endblock %}

{% block body %}
\t{% include \"layouts/_navbar.html.twig\" %}
\t<main class=\"profile-page\">
\t\t<section class=\"relative py-16 bg-gray-300\">
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<div class=\"relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64\">
\t\t\t\t\t<div class=\"px-6\">
\t\t\t\t\t\t<div class=\"text-center mt-12\">
\t\t\t\t\t\t\t<h3 class=\"text-5xl font-semibold leading-normal mb-2 text-gray-800 mb-2\">
\t\t\t\t\t\t\t\t{{app.user.firstName}}
\t\t\t\t\t\t\t\t{{app.user.lastName}}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-square-envelope\"></i>
\t\t\t\t\t\t\t\t{{app.user.email}}
\t\t\t\t\t\t\t</div>

              <div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-square-envelope\"></i>
\t\t\t\t\t\t\t\t{{app.user.articles|length}} Posts
\t\t\t\t\t\t\t</div>

               <div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-square-envelope\"></i>
                  {{app.user.comments|length}} Commentaires
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-2\">
\t\t\t\t\t\t\t\t<a href=\"{{path('profile_edit', {'id': app.user.id })}}\" class=\"bg-green-500 text-white p-2  inline-block mt-3  mr-2 text-lg\">Modifier mes informations</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t{# <div>
\t\t\t\t          <h2>Bienvenue, votre adresse mail est {{app.user.email}}</h2>
\t\t\t\t          <h2>Vous avez publié {{app.user.articles|length}} articles</h2>
\t\t\t\t  </div> #}
\t{% endblock %}
", "profile/notes", "/home/ismail/laplateforme/blog/templates/profile/notes");
    }
}
