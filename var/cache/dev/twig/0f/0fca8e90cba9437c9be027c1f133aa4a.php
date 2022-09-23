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

/* security/login.html.twig */
class __TwigTemplate_b6278618f3561e407458cb8bb2779e7d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Blog: Connexion
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
        echo "\t<!--
\t\t\t  This component uses @tailwindcss/forms
\t\t\t
\t\t\t  yarn add @tailwindcss/forms
\t\t\t  npm install @tailwindcss/forms
\t\t\t
\t\t\t  plugins: [require('@tailwindcss/forms')]
\t\t\t-->

\t<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
\t\t<div class=\"max-w-lg mx-auto text-center\">
\t\t\t<h1 class=\"text-2xl font-bold sm:text-3xl\">Connectez-vous</h1>
\t\t</div>

\t\t<form class=\"max-w-md mx-auto mt-8 mb-0 space-y-4\" method=\"post\">
\t\t\t";
        // line 22
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageKey", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 23, $this->source); })()), "messageData", [], "any", false, false, false, 23), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 25
        echo "
\t\t\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "userIdentifier", [], "any", false, false, false, 29), "html", null, true);
            echo ",
\t\t\t\t\t<a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 33
        echo "\t\t\t<div>
\t\t\t\t<label for=\"inputEmail\" class=\"sr-only\">Email</label>
\t\t\t\t<div class=\"relative\">
\t\t\t\t\t<input type=\"email\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" class=\"w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm\" placeholder=\"Enter email\" name=\"email\" id=\"inputEmail\" autocomplete=\"email\" required autofocus/>

\t\t\t\t\t<span class=\"absolute inset-y-0 inline-flex items-center right-4\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 text-gray-400\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t\t<div class=\"relative\">
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required class=\"w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm\" placeholder=\"Enter password\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t<span class=\"absolute inset-y-0 inline-flex items-center right-4\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 text-gray-400\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"flex items-center justify-between\">
\t\t\t\t<p class=\"text-sm text-gray-500\">
\t\t\t\t\tPas encore inscrit ?
\t\t\t\t\t<a class=\"underline\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Inscription</a>
\t\t\t\t</p>

\t\t\t\t<button type=\"submit\" class=\"inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-green-500 rounded-lg\">
\t\t\t\t\tConnexion
\t\t\t\t</button>
\t\t\t</div>
\t\t</form>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 63,  155 => 50,  138 => 36,  133 => 33,  127 => 30,  123 => 29,  119 => 27,  117 => 26,  114 => 25,  108 => 23,  106 => 22,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog: Connexion
{% endblock %}

{% block body %}
\t<!--
\t\t\t  This component uses @tailwindcss/forms
\t\t\t
\t\t\t  yarn add @tailwindcss/forms
\t\t\t  npm install @tailwindcss/forms
\t\t\t
\t\t\t  plugins: [require('@tailwindcss/forms')]
\t\t\t-->

\t<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
\t\t<div class=\"max-w-lg mx-auto text-center\">
\t\t\t<h1 class=\"text-2xl font-bold sm:text-3xl\">Connectez-vous</h1>
\t\t</div>

\t\t<form class=\"max-w-md mx-auto mt-8 mb-0 space-y-4\" method=\"post\">
\t\t\t{% if error %}
\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t{% endif %}

\t\t\t{% if app.user %}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\tYou are logged in as
\t\t\t\t\t{{ app.user.userIdentifier }},
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div>
\t\t\t\t<label for=\"inputEmail\" class=\"sr-only\">Email</label>
\t\t\t\t<div class=\"relative\">
\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" class=\"w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm\" placeholder=\"Enter email\" name=\"email\" id=\"inputEmail\" autocomplete=\"email\" required autofocus/>

\t\t\t\t\t<span class=\"absolute inset-y-0 inline-flex items-center right-4\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 text-gray-400\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<label for=\"inputPassword\" class=\"sr-only\">Mot de passe</label>
\t\t\t\t<div class=\"relative\">
\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required class=\"w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm\" placeholder=\"Enter password\"/>
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t<span class=\"absolute inset-y-0 inline-flex items-center right-4\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 text-gray-400\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\"/>
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"flex items-center justify-between\">
\t\t\t\t<p class=\"text-sm text-gray-500\">
\t\t\t\t\tPas encore inscrit ?
\t\t\t\t\t<a class=\"underline\" href=\"{{path('app_register')}}\">Inscription</a>
\t\t\t\t</p>

\t\t\t\t<button type=\"submit\" class=\"inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-green-500 rounded-lg\">
\t\t\t\t\tConnexion
\t\t\t\t</button>
\t\t\t</div>
\t\t</form>
\t</div>

{% endblock %}
", "security/login.html.twig", "/home/ismail/laplateforme/blog/templates/security/login.html.twig");
    }
}
