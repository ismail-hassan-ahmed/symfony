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

/* article/create.html.twig */
class __TwigTemplate_df3fabb0276a6456d727c40c242235c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/create.html.twig", 1);
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

        echo "Hello ArticleController!
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
        $this->loadTemplate("layouts/_navbar.html.twig", "article/create.html.twig", 7)->display($context);
        // line 8
        echo "\t<section class=\"bg-gray-100\">
\t\t<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
\t\t\t<div class=\"grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5\">
\t\t\t\t<div class=\"lg:py-12 lg:col-span-2\">
\t\t\t\t\t<p class=\"max-w-xl text-lg\">
\t\t\t\t\t\tAt the same time, the fact that we are wholly owned and totally independent from manufacturer and other group
\t\t\t\t\t\t          control gives you confidence that we will only recommend what is right for you.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"p-8 bg-white rounded-lg shadow-lg lg:p-12 lg:col-span-3\">
\t\t\t\t\t<div class=\"space-y-4\">
\t\t\t\t\t\t";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => ""], "label" => "Titre de l'article"]);
        echo "
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "w-full p-3 text-sm border-gray-700 rounded-lg"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), 'errors');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"grid grid-cols-1 gap-4 sm:grid-cols-2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 29, $this->source); })()), "imageFile", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => ""], "label" => "Télécharger une image"]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 30, $this->source); })()), "imageFile", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "w-full p-3 text-sm border-gray-400 rounded-lg"]]);
        echo "
\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 31, $this->source); })()), "imageFile", [], "any", false, false, false, 31), 'errors');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 35, $this->source); })()), "content", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => ""], "label" => "Contenu de l'article"]);
        echo "
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "border-gray-700 w-full p-3 h-40 text-sm rounded-lg"]]);
        echo "
\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 37, $this->source); })()), "content", [], "any", false, false, false, 37), 'errors');
        echo "

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto\">
\t\t\t\t\t\t\t\t<span class=\"font-medium\">
\t\t\t\t\t\t\t\t\tPublier
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ml-3\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M14 5l7 7m0 0l-7 7m7-7H3\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["FormArticle"]) || array_key_exists("FormArticle", $context) ? $context["FormArticle"] : (function () { throw new RuntimeError('Variable "FormArticle" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 52,  150 => 37,  146 => 36,  142 => 35,  135 => 31,  131 => 30,  127 => 29,  119 => 24,  115 => 23,  111 => 22,  106 => 20,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ArticleController!
{% endblock %}

{% block body %}
\t{% include \"layouts/_navbar.html.twig\" %}
\t<section class=\"bg-gray-100\">
\t\t<div class=\"px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8\">
\t\t\t<div class=\"grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5\">
\t\t\t\t<div class=\"lg:py-12 lg:col-span-2\">
\t\t\t\t\t<p class=\"max-w-xl text-lg\">
\t\t\t\t\t\tAt the same time, the fact that we are wholly owned and totally independent from manufacturer and other group
\t\t\t\t\t\t          control gives you confidence that we will only recommend what is right for you.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"p-8 bg-white rounded-lg shadow-lg lg:p-12 lg:col-span-3\">
\t\t\t\t\t<div class=\"space-y-4\">
\t\t\t\t\t\t{{form_start(FormArticle)}}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{{form_label(FormArticle.title, \"Titre de l'article\", {'label_attr': {'class': ''}})}}
\t\t\t\t\t\t\t{{form_widget(FormArticle.title, {'attr': {'class' : 'w-full p-3 text-sm border-gray-700 rounded-lg'}})}}
\t\t\t\t\t\t\t{{form_errors(FormArticle.title)}}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"grid grid-cols-1 gap-4 sm:grid-cols-2\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{{form_label(FormArticle.imageFile, \"Télécharger une image\", {'label_attr': {'class': ''}})}}
\t\t\t\t\t\t\t\t{{form_widget(FormArticle.imageFile, {'attr': {'class' : 'w-full p-3 text-sm border-gray-400 rounded-lg'}})}}
\t\t\t\t\t\t\t\t{{form_errors(FormArticle.imageFile)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{{form_label(FormArticle.content, \"Contenu de l'article\", {'label_attr': {'class': ''}})}}
\t\t\t\t\t\t\t{{form_widget(FormArticle.content, {'attr': {'class' : 'border-gray-700 w-full p-3 h-40 text-sm rounded-lg'}})}}
\t\t\t\t\t\t\t{{form_errors(FormArticle.content)}}

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto\">
\t\t\t\t\t\t\t\t<span class=\"font-medium\">
\t\t\t\t\t\t\t\t\tPublier
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5 ml-3\" fill=\"none\" viewbox=\"0 0 24 24\" stroke=\"currentColor\">
\t\t\t\t\t\t\t\t\t<path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M14 5l7 7m0 0l-7 7m7-7H3\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{form_end(FormArticle)}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %}
", "article/create.html.twig", "/home/ismail/laplateforme/blog/templates/article/create.html.twig");
    }
}
