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

/* article/index.html.twig */
class __TwigTemplate_27679187b9cd1ac7545281c6a9d92cf3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        echo "Blog: Articles
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
        echo "    ";
        $this->loadTemplate("layouts/_navbar.html.twig", "article/index.html.twig", 7)->display($context);
        // line 8
        echo "\t<div class=\"px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20\">
\t\t<div class=\"grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "\t\t\t<div class=\"overflow-hidden transition-shadow duration-300 bg-white rounded\">
\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" aria-label=\"Article\"><img src=\"/images/articles/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "imageName", [], "any", false, false, false, 12), "html", null, true);
            echo "\" class=\"object-cover w-full h-64 rounded\" alt=\"\"/></a>
\t\t\t\t<div class=\"py-5\">
\t\t\t\t\t<p class=\"mb-2 text-md font-semibold text-gray-600\">
\t\t\t\t\t\tPublié le ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [], "any", false, false, false, 15), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "user", [], "any", false, false, false, 15), "firstName", [], "any", false, false, false, 15), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" aria-label=\"Article\" class=\"inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700\">
\t\t\t\t\t\t<p class=\"text-2xl font-bold leading-5\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
\t\t\t\t\t</a>
\t\t\t\t\t<p class=\"mb-4 text-md text-gray-700\">
\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 21)), "truncate", [0 => 100], "method", false, false, false, 21), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"flex space-x-4\">
\t\t\t\t\t\t<a href=\"/\" aria-label=\"Likes\" class=\"flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group\">
\t\t\t\t\t\t\t<div class=\"mr-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700\">
\t\t\t\t\t\t\t\t\t<polyline points=\"6 23 1 23 1 12 6 12\" fill=\"none\" stroke-miterlimit=\"10\"></polyline>
\t\t\t\t\t\t\t\t\t<path d=\"M6,12,9,1H9a3,3,0,0,1,3,3v6h7.5a3,3,0,0,1,2.965,3.456l-1.077,7A3,3,0,0,1,18.426,23H6Z\" fill=\"none\" stroke=\"currentColor\" stroke-miterlimit=\"10\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"font-semibold\">0</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"/\" aria-label=\"Comments\" class=\"flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group\">
\t\t\t\t\t\t\t<div class=\"mr-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700\">
\t\t\t\t\t\t\t\t\t<polyline points=\"23 5 23 18 19 18 19 22 13 18 12 18\" fill=\"none\" stroke-miterlimit=\"10\"></polyline>
\t\t\t\t\t\t\t\t\t<polygon points=\"19 2 1 2 1 14 5 14 5 19 12 14 19 14 19 2\" fill=\"none\" stroke=\"currentColor\" stroke-miterlimit=\"10\"></polygon>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"font-semibold\">";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "comments", [], "any", false, false, false, 40)), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 46,  150 => 40,  128 => 21,  122 => 18,  118 => 17,  111 => 15,  103 => 12,  100 => 11,  96 => 10,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog: Articles
{% endblock %}

{% block body %}
    {% include \"layouts/_navbar.html.twig\" %}
\t<div class=\"px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20\">
\t\t<div class=\"grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full\">
\t\t\t{% for article in articles %}
\t\t\t<div class=\"overflow-hidden transition-shadow duration-300 bg-white rounded\">
\t\t\t\t<a href=\"{{path('article_show', {'slug': article.slug })}}\" aria-label=\"Article\"><img src=\"/images/articles/{{article.imageName}}\" class=\"object-cover w-full h-64 rounded\" alt=\"\"/></a>
\t\t\t\t<div class=\"py-5\">
\t\t\t\t\t<p class=\"mb-2 text-md font-semibold text-gray-600\">
\t\t\t\t\t\tPublié le {{article.publishedAt|format_datetime(locale=\"fr\")}} par {{article.user.firstName}}
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"{{path('article_show', {'slug': article.slug })}}\" aria-label=\"Article\" class=\"inline-block mb-3 text-black transition-colors duration-200 hover:text-deep-purple-accent-700\">
\t\t\t\t\t\t<p class=\"text-2xl font-bold leading-5\">{{article.title}}</p>
\t\t\t\t\t</a>
\t\t\t\t\t<p class=\"mb-4 text-md text-gray-700\">
\t\t\t\t\t\t{{article.content|u.truncate(100)}}
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"flex space-x-4\">
\t\t\t\t\t\t<a href=\"/\" aria-label=\"Likes\" class=\"flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group\">
\t\t\t\t\t\t\t<div class=\"mr-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700\">
\t\t\t\t\t\t\t\t\t<polyline points=\"6 23 1 23 1 12 6 12\" fill=\"none\" stroke-miterlimit=\"10\"></polyline>
\t\t\t\t\t\t\t\t\t<path d=\"M6,12,9,1H9a3,3,0,0,1,3,3v6h7.5a3,3,0,0,1,2.965,3.456l-1.077,7A3,3,0,0,1,18.426,23H6Z\" fill=\"none\" stroke=\"currentColor\" stroke-miterlimit=\"10\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"font-semibold\">0</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"/\" aria-label=\"Comments\" class=\"flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group\">
\t\t\t\t\t\t\t<div class=\"mr-2\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700\">
\t\t\t\t\t\t\t\t\t<polyline points=\"23 5 23 18 19 18 19 22 13 18 12 18\" fill=\"none\" stroke-miterlimit=\"10\"></polyline>
\t\t\t\t\t\t\t\t\t<polygon points=\"19 2 1 2 1 14 5 14 5 19 12 14 19 14 19 2\" fill=\"none\" stroke=\"currentColor\" stroke-miterlimit=\"10\"></polygon>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"font-semibold\">{{article.comments|length}}</p>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            {% endfor %}
\t\t</div>
\t</div>
{% endblock %}
", "article/index.html.twig", "/home/ismail/laplateforme/blog/templates/article/index.html.twig");
    }
}
