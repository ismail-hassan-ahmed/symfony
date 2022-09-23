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

/* layouts/_navbar.html.twig */
class __TwigTemplate_733abb95d42c1f6cf333ba1662845a1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/_navbar.html.twig"));

        // line 1
        echo "<header class=\"bg-white\">
\t<div class=\"px-4 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
\t\t<div class=\"flex items-center justify-between h-16\">
\t\t\t<div class=\"md:flex md:items-center md:gap-12\">
\t\t\t\t<a class=\"block text-teal-600 font-extrabold\" href=\"/\">
\t\t\t\t\tIsmailo_Blog
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"hidden md:block\">
\t\t\t\t<nav aria-labelledby=\"header-navigation\">
\t\t\t\t\t<h2 class=\"sr-only\" id=\"header-navigation\">Header navigation</h2>

\t\t\t\t\t<ul class=\"flex items-center text-sm gap-6\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"/\">
\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article");
        echo "\">
\t\t\t\t\t\t\t\tArticles
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"#\">
\t\t\t\t\t\t\t\tFAQ
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_create");
        echo "\">
\t\t\t\t\t\t\t\tCréer un article
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div class=\"flex items-center gap-4\">
\t\t\t\t<div class=\"sm:gap-4 sm:flex\">
\t\t\t\t\t";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-white bg-teal-600 rounded-md shadow\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-power-off\"></i> Déconnexion
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-white bg-teal-600 rounded-md shadow\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i> Mon compte\t
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-white bg-teal-600 rounded-md shadow\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class=\"hidden sm:flex\">
\t\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-teal-600 bg-gray-100 rounded-md\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 61
        echo "

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"block md:hidden\">
\t\t\t\t\t<button class=\"p-2 text-gray-600 bg-gray-100 rounded transition hover:text-gray-600/75\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h16\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 61,  119 => 57,  110 => 52,  103 => 48,  96 => 45,  94 => 44,  81 => 34,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"bg-white\">
\t<div class=\"px-4 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
\t\t<div class=\"flex items-center justify-between h-16\">
\t\t\t<div class=\"md:flex md:items-center md:gap-12\">
\t\t\t\t<a class=\"block text-teal-600 font-extrabold\" href=\"/\">
\t\t\t\t\tIsmailo_Blog
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"hidden md:block\">
\t\t\t\t<nav aria-labelledby=\"header-navigation\">
\t\t\t\t\t<h2 class=\"sr-only\" id=\"header-navigation\">Header navigation</h2>

\t\t\t\t\t<ul class=\"flex items-center text-sm gap-6\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"/\">
\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"{{path('app_article')}}\">
\t\t\t\t\t\t\t\tArticles
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"#\">
\t\t\t\t\t\t\t\tFAQ
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"text-gray-600 font-bold transition hover:text-gray-500/75\" href=\"{{path('article_create')}}\">
\t\t\t\t\t\t\t\tCréer un article
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<div class=\"flex items-center gap-4\">
\t\t\t\t<div class=\"sm:gap-4 sm:flex\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-white bg-teal-600 rounded-md shadow\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-power-off\"></i> Déconnexion
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-white bg-teal-600 rounded-md shadow\" href=\"{{path('app_profile')}}\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i> Mon compte\t
\t\t\t\t\t\t</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-white bg-teal-600 rounded-md shadow\" href=\"{{path('app_login')}}\">
\t\t\t\t\t\t\tConnexion
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<div class=\"hidden sm:flex\">
\t\t\t\t\t\t\t<a class=\"px-5 py-2.5 text-sm font-medium text-teal-600 bg-gray-100 rounded-md\" href=\"{{path('app_register')}}\">
\t\t\t\t\t\t\t\tInscription
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"block md:hidden\">
\t\t\t\t\t<button class=\"p-2 text-gray-600 bg-gray-100 rounded transition hover:text-gray-600/75\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 6h16M4 12h16M4 18h16\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
", "layouts/_navbar.html.twig", "/home/ismail/laplateforme/blog/templates/layouts/_navbar.html.twig");
    }
}
