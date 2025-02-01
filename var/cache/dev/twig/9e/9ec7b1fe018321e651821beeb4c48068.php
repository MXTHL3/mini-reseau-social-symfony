<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_6bd221f94b036d40ef27d39a7d81bd90 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "
        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 15
        yield "    </head>
    <body>
        <header>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_interface");
        yield "\">
                <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\">
            </a>
        </header>
        ";
        // line 22
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 23
        yield "        <div class=\"auth-status\">
            ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 24, $this->source); })()), "user_id", [], "any", false, false, false, 24) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 24, $this->source); })()), "user_name", [], "any", false, false, false, 24))) {
            // line 25
            yield "                <span class=\"status-text\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 25, $this->source); })()), "user_name", [], "any", false, false, false, 25), "html", null, true);
            yield "</span>
                <a href=\"/profile\" class=\"to-auth-or-profile\">Profil</a>
                <a href=\"#\" id=\"showPostCreation\" class=\"to-post-creation\">Nouveau post</a>
            ";
        } else {
            // line 29
            yield "                <span class=\"status-text\">Non-connecté</span>
                <a href=\"/portal\" class=\"to-auth-or-profile\">Authentification</a>
            ";
        }
        // line 32
        yield "        </div>
        ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 33, $this->source); })()), "user_id", [], "any", false, false, false, 33) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 33, $this->source); })()), "user_name", [], "any", false, false, false, 33))) {
            // line 34
            yield "            <div id=\"postContainer\" class=\"post-container\" style=\"display: none;\">
                <form>
                    <div class=\"post-form-group\">
                        <label for=\"post-title\">Titre</label>
                        <input id=\"post-title\" name=\"post-title\"/>
                    </div>
                    <div class=\"post-form-group\">
                        <label for=\"post-text\">Titre</label>
                        <textarea id=\"post-text\" name=\"post-text\"></textarea>
                    </div>
                    <div class=\"post-form-group\">
                        <label for=\"post-tag\">Titre</label>
                        <input id=\"post-tag\" name=\"post-tag\"/>
                    </div>
                </form>
            </div>
        ";
        }
        // line 51
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/post_form.css"), "html", null, true);
        yield "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showPostCreation.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  223 => 22,  209 => 13,  196 => 12,  183 => 9,  178 => 8,  165 => 7,  142 => 5,  129 => 51,  110 => 34,  108 => 33,  105 => 32,  100 => 29,  92 => 25,  90 => 24,  87 => 23,  85 => 22,  79 => 19,  75 => 18,  70 => 15,  68 => 12,  65 => 11,  63 => 7,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/post_form.css') }}\">
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('js/showPostCreation.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        <header>
            <a href=\"{{ path('app_main_interface') }}\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Logo\" class=\"logo\">
            </a>
        </header>
        {% block body %}{% endblock %}
        <div class=\"auth-status\">
            {% if user_session.user_id and user_session.user_name %}
                <span class=\"status-text\">{{ user_session.user_name }}</span>
                <a href=\"/profile\" class=\"to-auth-or-profile\">Profil</a>
                <a href=\"#\" id=\"showPostCreation\" class=\"to-post-creation\">Nouveau post</a>
            {% else %}
                <span class=\"status-text\">Non-connecté</span>
                <a href=\"/portal\" class=\"to-auth-or-profile\">Authentification</a>
            {% endif %}
        </div>
        {% if user_session.user_id and user_session.user_name %}
            <div id=\"postContainer\" class=\"post-container\" style=\"display: none;\">
                <form>
                    <div class=\"post-form-group\">
                        <label for=\"post-title\">Titre</label>
                        <input id=\"post-title\" name=\"post-title\"/>
                    </div>
                    <div class=\"post-form-group\">
                        <label for=\"post-text\">Titre</label>
                        <textarea id=\"post-text\" name=\"post-text\"></textarea>
                    </div>
                    <div class=\"post-form-group\">
                        <label for=\"post-tag\">Titre</label>
                        <input id=\"post-tag\" name=\"post-tag\"/>
                    </div>
                </form>
            </div>
        {% endif %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Maxime\\symfonyPjs\\pj1\\templates\\base.html.twig");
    }
}
