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

/* profile/index.html.twig */
class __TwigTemplate_1f0af442bf03cca335908435f2fc56cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/index.html.twig", 1);
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
        $this->loadTemplate("layouts/_navbar.html.twig", "profile/index.html.twig", 7)->display($context);
        // line 8
        echo "\t<main class=\"profile-page\">
\t\t<section class=\"relative block\" style=\"height: 500px;\">
\t\t\t<div class=\"absolute top-0 w-full h-full bg-center bg-cover\" style='background-image: url(\"https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80\");'>
\t\t\t\t<span id=\"blackOverlay\" class=\"w-full h-full absolute opacity-50 bg-black\"></span>
\t\t\t</div>
\t\t\t<div class=\"top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden\" style=\"height: 70px;\">
\t\t\t\t<svg class=\"absolute bottom-0 overflow-hidden\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"none\" version=\"1.1\" viewbox=\"0 0 2560 100\" x=\"0\" y=\"0\">
\t\t\t\t\t<polygon class=\"text-gray-300 fill-current\" points=\"2560 0 2560 100 0 100\"></polygon>
\t\t\t\t</svg>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"relative py-16 bg-gray-300\">
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<div class=\"relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64\">
\t\t\t\t\t<div class=\"px-6\">
\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t<div class=\"w-full lg:w-3/12 px-4 lg:order-2 flex justify-center\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/user.png"), "html", null, true);
        echo "\" class=\"shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16\" style=\"max-width: 150px;\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-1\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-center py-4 lg:pt-4 pt-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-4 p-3 text-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-xl font-bold block uppercase tracking-wide text-gray-700\">";
        // line 34
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "articles", [], "any", false, false, false, 34)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-sm text-gray-500\">Posts</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lg:mr-4 p-3 text-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-xl font-bold block uppercase tracking-wide text-gray-700\">";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "comments", [], "any", false, false, false, 38)), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-sm text-gray-500\">Commentaires</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center mt-12\">
\t\t\t\t\t\t\t<h3 class=\"text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2\">
\t\t\t\t\t\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "firstName", [], "any", false, false, false, 46), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "lastName", [], "any", false, false, false, 46), "html", null, true);
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-email mr-2 text-lg text-gray-500\"></i>
\t\t\t\t\t\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-2 text-gray-700 mt-10\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"bg-green-500 text-white p-2  inline-block mt-3  mr-2 text-lg\">Modifier mes informations</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10 py-10 border-t border-gray-300 text-center\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t\t<div class=\"w-full lg:w-9/12 px-4\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-4 text-lg leading-relaxed text-gray-800\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 53,  150 => 50,  141 => 46,  130 => 38,  123 => 34,  112 => 26,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProfileController!
{% endblock %}

{% block body %}
\t{% include \"layouts/_navbar.html.twig\" %}
\t<main class=\"profile-page\">
\t\t<section class=\"relative block\" style=\"height: 500px;\">
\t\t\t<div class=\"absolute top-0 w-full h-full bg-center bg-cover\" style='background-image: url(\"https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80\");'>
\t\t\t\t<span id=\"blackOverlay\" class=\"w-full h-full absolute opacity-50 bg-black\"></span>
\t\t\t</div>
\t\t\t<div class=\"top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden\" style=\"height: 70px;\">
\t\t\t\t<svg class=\"absolute bottom-0 overflow-hidden\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"none\" version=\"1.1\" viewbox=\"0 0 2560 100\" x=\"0\" y=\"0\">
\t\t\t\t\t<polygon class=\"text-gray-300 fill-current\" points=\"2560 0 2560 100 0 100\"></polygon>
\t\t\t\t</svg>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"relative py-16 bg-gray-300\">
\t\t\t<div class=\"container mx-auto px-4\">
\t\t\t\t<div class=\"relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64\">
\t\t\t\t\t<div class=\"px-6\">
\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t<div class=\"w-full lg:w-3/12 px-4 lg:order-2 flex justify-center\">
\t\t\t\t\t\t\t\t<div class=\"relative\">
\t\t\t\t\t\t\t\t\t<img alt=\"...\" src=\"{{asset('/images/user.png')}}\" class=\"shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16\" style=\"max-width: 150px;\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"w-full lg:w-4/12 px-4 lg:order-1\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-center py-4 lg:pt-4 pt-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-4 p-3 text-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-xl font-bold block uppercase tracking-wide text-gray-700\">{{app.user.articles|length}}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-sm text-gray-500\">Posts</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"lg:mr-4 p-3 text-center\">
\t\t\t\t\t\t\t\t\t\t<span class=\"text-xl font-bold block uppercase tracking-wide text-gray-700\">{{app.user.comments|length}}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"text-sm text-gray-500\">Commentaires</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center mt-12\">
\t\t\t\t\t\t\t<h3 class=\"text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2\">
\t\t\t\t\t\t\t\t{{app.user.firstName}} {{app.user.lastName}}
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<div class=\"text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-email mr-2 text-lg text-gray-500\"></i>
\t\t\t\t\t\t\t\t{{app.user.email}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-2 text-gray-700 mt-10\">
\t\t\t\t\t\t\t\t<a href=\"{{path('profile_edit', {'id': app.user.id })}}\" class=\"bg-green-500 text-white p-2  inline-block mt-3  mr-2 text-lg\">Modifier mes informations</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mt-10 py-10 border-t border-gray-300 text-center\">
\t\t\t\t\t\t\t<div class=\"flex flex-wrap justify-center\">
\t\t\t\t\t\t\t\t<div class=\"w-full lg:w-9/12 px-4\">
\t\t\t\t\t\t\t\t\t<p class=\"mb-4 text-lg leading-relaxed text-gray-800\">
\t\t\t\t\t\t\t\t\t\tLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}
", "profile/index.html.twig", "/home/ismail/laplateforme/blog/templates/profile/index.html.twig");
    }
}
