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

/* home/index.html.twig */
class __TwigTemplate_2961affb179aeb73a788be0eee682d33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Blog: Accueil
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
        $this->loadTemplate("layouts/_navbar.html.twig", "home/index.html.twig", 7)->display($context);
        // line 8
        echo "\t<section class=\"bg-gray-50\">
\t\t<div class=\"px-4 py-32 mx-auto max-w-screen-xl lg:h-screen lg:items-center lg:flex\">
\t\t\t<div class=\"max-w-xl mx-auto text-center\">
\t\t\t\t<h1 class=\"text-3xl text-gray-600 font-extrabold sm:text-5xl\">
\t\t\t\t\tIsmailo.
\t\t\t\t\t<strong class=\"font-extrabold text-red-700 sm:block\">
\t\t\t\t\t\tBlog.
\t\t\t\t\t</strong>
\t\t\t\t</h1>

\t\t\t\t<p class=\"mt-4 sm:leading-relaxed font-bold text-gray-800 sm:text-xl text-2xl\">
\t\t\t\t\tBlog développé par Ismail Hassan, Etudiant à la plateforme.
\t\t\t\t</p>

\t\t\t\t<div class=\"flex flex-wrap justify-center mt-8 gap-4\">
\t\t\t\t\t<a class=\"block w-full px-12 py-3 text-sm font-medium text-white bg-red-600 rounded shadow sm:w-auto active:bg-red-500 hover:bg-red-700 focus:outline-none focus:ring\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_create");
        echo "\">
\t\t\t\t\t\tPublier un article
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t";
        // line 30
        $this->loadTemplate("layouts/_footer.html.twig", "home/index.html.twig", 30)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  109 => 23,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog: Accueil
{% endblock %}

{% block body %}
    {% include \"layouts/_navbar.html.twig\" %}
\t<section class=\"bg-gray-50\">
\t\t<div class=\"px-4 py-32 mx-auto max-w-screen-xl lg:h-screen lg:items-center lg:flex\">
\t\t\t<div class=\"max-w-xl mx-auto text-center\">
\t\t\t\t<h1 class=\"text-3xl text-gray-600 font-extrabold sm:text-5xl\">
\t\t\t\t\tIsmailo.
\t\t\t\t\t<strong class=\"font-extrabold text-red-700 sm:block\">
\t\t\t\t\t\tBlog.
\t\t\t\t\t</strong>
\t\t\t\t</h1>

\t\t\t\t<p class=\"mt-4 sm:leading-relaxed font-bold text-gray-800 sm:text-xl text-2xl\">
\t\t\t\t\tBlog développé par Ismail Hassan, Etudiant à la plateforme.
\t\t\t\t</p>

\t\t\t\t<div class=\"flex flex-wrap justify-center mt-8 gap-4\">
\t\t\t\t\t<a class=\"block w-full px-12 py-3 text-sm font-medium text-white bg-red-600 rounded shadow sm:w-auto active:bg-red-500 hover:bg-red-700 focus:outline-none focus:ring\" href=\"{{path('article_create')}}\">
\t\t\t\t\t\tPublier un article
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t{% include \"layouts/_footer.html.twig\" %}
{% endblock %}
", "home/index.html.twig", "/home/ismail/laplateforme/blog/templates/home/index.html.twig");
    }
}
