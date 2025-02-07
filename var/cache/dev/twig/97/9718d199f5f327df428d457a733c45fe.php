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

/* main_interface/index.html.twig */
class __TwigTemplate_4c6763ddf294f5986c56f9e62500248b extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_interface/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_interface/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main_interface/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Fil d'actualité";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all_posts.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/post_form.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/search.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showPostCreation.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "    <div class=\"container\">
        <h1>Fil d'actualité</h1>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["p"]) {
            // line 22
            yield "            <div class=\"post\">
                <div class=\"creator\">@";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "creatorName", [], "any", false, false, false, 23), "html", null, true);
            yield "</div>
                <div class=\"date\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "creationDate", [], "any", false, false, false, 24), "html", null, true);
            yield "</div>
                <div class=\"content\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 25), "html", null, true);
            yield "</div>
                <div class=\"post-buttons\">
                    ";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "creatorId", [], "any", false, false, false, 27) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 27, $this->source); })()), "user_id", [], "any", false, false, false, 27))) {
                // line 28
                yield "                        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" method=\"POST\" style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 30))), "html", null, true);
                yield "\">
                            <button type=\"submit\" class=\"btn btn-outline-danger flag-btn\">
                                ❌ Supprimer
                            </button>
                        </form>
                    ";
            }
            // line 36
            yield "                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_check_like_or_unlike", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" method=\"POST\" style=\"display: inline;\">
                        <button type=\"submit\" class=\"btn btn-outline-primary\">
                            ";
            // line 38
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["p"], "isLikedByTheUser", [], "any", false, false, false, 38)) {
                yield " 👍 Liker ";
            } else {
                yield " 👎 Unliker ";
            }
            // line 39
            yield "                        </button>
                    </form>
                    <button class=\"btn btn-outline-info\" data-post-id=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                        🗣️ Commenter
                    </button>
                    <button class=\"btn btn-outline-danger flag-btn report-button\" style=\"display: flex; gap: 10px\" data-post-id=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 44), "html", null, true);
            yield "\">
                        🚩 Signaler
                        <select class=\"what-report\" style=\"width: 25px\">
                            <option>Désinformation</option>
                            <option>Haine</option>
                            <option>Scam</option>
                            <option>Incitation à des pratiques illégales</option>
                            <option>Pornographie</option>
                        </select>
                    </button>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            yield "            <p class=\"no-posts\">Aucun post disponible.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['p'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "    </div>
    ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 60, $this->source); })()), "user_id", [], "any", false, false, false, 60) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 60, $this->source); })()), "user_name", [], "any", false, false, false, 60))) {
            // line 61
            yield "        <div id=\"postContainer\" class=\"post-container\" style=\"display: none;\">
            <form action=\"";
            // line 62
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_interface_action");
            yield "\" method=\"POST\">
                <div class=\"post-form-group\">
                    <textarea id=\"postText\" name=\"postText\"></textarea>
                </div>
                <div class=\"post-form-group\">
                    <label for=\"postTag\">Tag</label>
                    <input id=\"postTag\" name=\"postTag\"/>
                </div>
                <button type=\"submit\" class=\"post-submit\">Poster</button>
            </form>
        </div>
    ";
        }
        // line 74
        yield "    <div class=\"search-container\">
        <input type=\"text\" placeholder=\"Rechercher...\" class=\"search-input\">
        <button type=\"submit\" class=\"search-button\">🔍</button>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "main_interface/index.html.twig";
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
        return array (  285 => 74,  270 => 62,  267 => 61,  265 => 60,  262 => 59,  255 => 57,  237 => 44,  231 => 41,  227 => 39,  221 => 38,  215 => 36,  206 => 30,  200 => 28,  198 => 27,  193 => 25,  189 => 24,  185 => 23,  182 => 22,  177 => 21,  172 => 18,  159 => 17,  145 => 14,  132 => 13,  119 => 10,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fil d'actualité{% endblock %}

{% block stylesheets %}
    {{ encore_entry_link_tags('app') }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/all_posts.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/post_form.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/search.css') }}\">
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/showPostCreation.js') }}\"></script>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Fil d'actualité</h1>

        {% for key, p in posts %}
            <div class=\"post\">
                <div class=\"creator\">@{{ p.creatorName }}</div>
                <div class=\"date\">{{ p.creationDate }}</div>
                <div class=\"content\">{{ p.content }}</div>
                <div class=\"post-buttons\">
                    {% if p.creatorId == user_session.user_id %}
                        <form action=\"{{ path('app_delete_action', { 'id': p.postId }) }}\" method=\"POST\" style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('delete' ~ p.postId) }}\">
                            <button type=\"submit\" class=\"btn btn-outline-danger flag-btn\">
                                ❌ Supprimer
                            </button>
                        </form>
                    {% endif %}
                    <form action=\"{{ path('app_check_like_or_unlike', { 'id': p.postId }) }}\" method=\"POST\" style=\"display: inline;\">
                        <button type=\"submit\" class=\"btn btn-outline-primary\">
                            {% if not p.isLikedByTheUser %} 👍 Liker {% else %} 👎 Unliker {% endif %}
                        </button>
                    </form>
                    <button class=\"btn btn-outline-info\" data-post-id=\"{{ p.postId }}\">
                        🗣️ Commenter
                    </button>
                    <button class=\"btn btn-outline-danger flag-btn report-button\" style=\"display: flex; gap: 10px\" data-post-id=\"{{ p.postId }}\">
                        🚩 Signaler
                        <select class=\"what-report\" style=\"width: 25px\">
                            <option>Désinformation</option>
                            <option>Haine</option>
                            <option>Scam</option>
                            <option>Incitation à des pratiques illégales</option>
                            <option>Pornographie</option>
                        </select>
                    </button>
                </div>
            </div>
        {% else %}
            <p class=\"no-posts\">Aucun post disponible.</p>
        {% endfor %}
    </div>
    {% if user_session.user_id and user_session.user_name %}
        <div id=\"postContainer\" class=\"post-container\" style=\"display: none;\">
            <form action=\"{{ path('app_post_interface_action') }}\" method=\"POST\">
                <div class=\"post-form-group\">
                    <textarea id=\"postText\" name=\"postText\"></textarea>
                </div>
                <div class=\"post-form-group\">
                    <label for=\"postTag\">Tag</label>
                    <input id=\"postTag\" name=\"postTag\"/>
                </div>
                <button type=\"submit\" class=\"post-submit\">Poster</button>
            </form>
        </div>
    {% endif %}
    <div class=\"search-container\">
        <input type=\"text\" placeholder=\"Rechercher...\" class=\"search-input\">
        <button type=\"submit\" class=\"search-button\">🔍</button>
    </div>
{% endblock %}
", "main_interface/index.html.twig", "C:\\Users\\Maxime\\symfonyPjs\\pj1\\templates\\main_interface\\index.html.twig");
    }
}
