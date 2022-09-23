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

/* article/show.html.twig */
class __TwigTemplate_3addb48a0f50e8dc144efe689444220e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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

        echo "Blog: Artilce|Commentaires
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
        $this->loadTemplate("layouts/_navbar.html.twig", "article/show.html.twig", 7)->display($context);
        // line 8
        echo "\t<section class=\"text-gray-600 body-font\">
\t\t<div class=\"container mx-auto flex flex-col px-5 py-16 justify-center items-center\">
\t\t\t<img class=\"lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded\" alt=\"hero\" src=\"/images/articles/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "imageName", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
\t\t\t<div class=\"w-full md:w-2/3 flex flex-col  items-center text-center\">
\t\t\t\t<h1 class=\"mb-3 title-font sm:text-4xl text-3xl font-medium text-gray-900\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
\t\t\t\t<p class=\"leading-relaxed\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"mx-auto max-w-screen-sm mb-4\">
\t\t\t
\t\t\t";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            echo "\t\t\t
\t\t\t\t";
            // line 21
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 21, $this->source); })()), 'form_start');
            echo "
\t\t\t\t";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22), 'label', ["label" => "Contenu"]);
            echo "
\t\t\t\t";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "border-gray-700 w-full p-3 h-30 text-sm rounded-lg"]]);
            echo "
\t\t\t\t";
            // line 24
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 24, $this->source); })()), 'form_end');
            echo "
\t\t\t";
        } else {
            // line 26
            echo "\t\t\t<h3 class=\"text-lg\">Vous voulez réagir ? <a class=\"text-red-700\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connectez-vous</a> </h3>
\t\t\t";
        }
        // line 28
        echo "\t\t\t
\t\t\t";
        // line 30
        echo "\t\t</div>
\t\t<div class=\"antialiased mx-auto max-w-screen-sm\">
\t\t\t<h3 class=\"mb-1 text-lg font-semibold text-gray-900\">Commentaires    (";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "comments", [], "any", false, false, false, 32)), "html", null, true);
        echo ")</h3>

\t\t\t

\t\t\t<div class=\"space-y-4\">
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 37, $this->source); })()), "comments", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 38
            echo "\t\t\t\t<div class=\"flex\">
\t\t\t\t\t<div class=\"flex-shrink-0 mr-3\">
\t\t\t\t\t\t<img class=\"mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/user.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-1 border-4 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed\">
\t\t\t\t\t\t<strong>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t<span class=\"text-md text-gray-400 font-bold\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "publishedAt", [], "any", false, false, false, 44), "medium", "medium", "", null, "gregorian", "fr"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<p class=\"text-sm\">
\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t</div>
\t\t</div>

\t</div>
</section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 51,  180 => 46,  175 => 44,  171 => 43,  165 => 40,  161 => 38,  157 => 37,  149 => 32,  145 => 30,  142 => 28,  136 => 26,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  116 => 20,  114 => 19,  105 => 13,  101 => 12,  96 => 10,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog: Artilce|Commentaires
{% endblock %}

{% block body %}
\t{% include \"layouts/_navbar.html.twig\" %}
\t<section class=\"text-gray-600 body-font\">
\t\t<div class=\"container mx-auto flex flex-col px-5 py-16 justify-center items-center\">
\t\t\t<img class=\"lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded\" alt=\"hero\" src=\"/images/articles/{{article.imageName}}\">
\t\t\t<div class=\"w-full md:w-2/3 flex flex-col  items-center text-center\">
\t\t\t\t<h1 class=\"mb-3 title-font sm:text-4xl text-3xl font-medium text-gray-900\">{{article.title}}</h1>
\t\t\t\t<p class=\"leading-relaxed\">{{article.content}}</p>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"mx-auto max-w-screen-sm mb-4\">
\t\t\t
\t\t\t{% if app.user %}
\t\t\t
\t\t\t\t{{form_start(commentForm)}}
\t\t\t\t{{form_label(commentForm.content, \"Contenu\")}}
\t\t\t\t{{form_widget(commentForm.content, {'attr': {'class' : 'border-gray-700 w-full p-3 h-30 text-sm rounded-lg'}})}}
\t\t\t\t{{form_end(commentForm)}}
\t\t\t{% else %}
\t\t\t<h3 class=\"text-lg\">Vous voulez réagir ? <a class=\"text-red-700\" href=\"{{path('app_login')}}\">Connectez-vous</a> </h3>
\t\t\t{% endif %}
\t\t\t
\t\t\t{# <a href=\"\" class=\"inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg\">Laisser un commentaire</a> #}
\t\t</div>
\t\t<div class=\"antialiased mx-auto max-w-screen-sm\">
\t\t\t<h3 class=\"mb-1 text-lg font-semibold text-gray-900\">Commentaires    ({{article.comments|length}})</h3>

\t\t\t

\t\t\t<div class=\"space-y-4\">
\t\t\t\t{% for comment in article.comments %}
\t\t\t\t<div class=\"flex\">
\t\t\t\t\t<div class=\"flex-shrink-0 mr-3\">
\t\t\t\t\t\t<img class=\"mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10\" src=\"{{asset('/images/user.png')}}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-1 border-4 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed\">
\t\t\t\t\t\t<strong>{{comment.user.firstName}}</strong>
\t\t\t\t\t\t<span class=\"text-md text-gray-400 font-bold\">{{comment.publishedAt|format_datetime(locale=\"fr\")}}</span>
\t\t\t\t\t\t<p class=\"text-sm\">
\t\t\t\t\t\t\t{{comment.content}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>

\t</div>
</section>{% endblock %}
", "article/show.html.twig", "/home/ismail/laplateforme/blog/templates/article/show.html.twig");
    }
}
