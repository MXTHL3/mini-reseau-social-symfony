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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/all_posts.css"), "html", null, true);
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
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showPostCreation.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Fil d'actualité</h1>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["p"]) {
            // line 23
            yield "            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">@";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "creatorName", [], "any", false, false, false, 25), "html", null, true);
            yield "</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "creationDate", [], "any", false, false, false, 26), "html", null, true);
            yield "</h6>
                    <p class=\"card-text\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 27), "html", null, true);
            yield " #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "tag", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["p"], "creatorId", [], "any", false, false, false, 29) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 29, $this->source); })()), "user_id", [], "any", false, false, false, 29))) {
                // line 30
                yield "                            <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_action", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 32))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                    ❌ Supprimer
                                </button>
                            </form>
                        ";
            }
            // line 38
            yield "                        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_check_like_or_unlike", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" method=\"POST\" class=\"d-inline\">
                            <button type=\"submit\" class=\"btn btn-outline-primary btn-sm\">
                                ";
            // line 40
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["p"], "isLikedByTheUser", [], "any", false, false, false, 40)) {
                yield " 👍 Liker ";
            } else {
                yield " 👎 Unliker ";
            }
            // line 41
            yield "                            </button>
                        </form>
                        <button class=\"btn btn-outline-info btn-sm\" data-post-id=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                            🗣️ Commenter
                        </button>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-danger btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 47), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                🚩 Signaler
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "postId", [], "any", false, false, false, 50), "html", null, true);
            yield "\">
                                <li><a class=\"dropdown-item\" href=\"#\">Spam</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Désinformation</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Haine</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Scam</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Incitation à des pratiques illégales</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Pornographie</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            yield "            <p class=\"text-center text-muted\">Aucun post disponible.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['p'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "    </div>

    ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 67, $this->source); })()), "user_id", [], "any", false, false, false, 67) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_session"]) || array_key_exists("user_session", $context) ? $context["user_session"] : (function () { throw new RuntimeError('Variable "user_session" does not exist.', 67, $this->source); })()), "user_name", [], "any", false, false, false, 67))) {
            // line 68
            yield "        <div id=\"postContainer\" class=\"position-fixed bottom-0 start-50 translate-middle-x w-100 max-w-md bg-white border rounded-3 shadow p-3 mb-3\" style=\"display: none; max-width: 500px;\">
            <form action=\"";
            // line 69
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post_interface_action");
            yield "\" method=\"POST\">
                <div class=\"mb-3\">
                    <textarea id=\"postText\" name=\"postText\" class=\"form-control\" rows=\"3\"></textarea>
                </div>
                <div class=\"mb-3\">
                    <label for=\"postTag\" class=\"form-label\">Tag</label>
                    <input id=\"postTag\" name=\"postTag\" class=\"form-control\"/>
                </div>
                <button type=\"submit\" class=\"btn btn-primary w-100\">Poster</button>
            </form>
        </div>
    ";
        }
        // line 81
        yield "
    <div class=\"position-fixed top-0 end-0 m-3\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">🔍</button>
        </div>
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
        return array (  294 => 81,  279 => 69,  276 => 68,  274 => 67,  270 => 65,  263 => 63,  245 => 50,  239 => 47,  232 => 43,  228 => 41,  222 => 40,  216 => 38,  207 => 32,  201 => 30,  199 => 29,  192 => 27,  188 => 26,  184 => 25,  180 => 23,  175 => 22,  170 => 19,  157 => 18,  144 => 15,  138 => 13,  125 => 12,  112 => 9,  108 => 8,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fil d'actualité{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/all_posts.css') }}\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('js/showPostCreation.js') }}\"></script>
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-4\">Fil d'actualité</h1>

        {% for key, p in posts %}
            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">@{{ p.creatorName }}</h5>
                    <h6 class=\"card-subtitle mb-2 text-muted\">{{ p.creationDate }}</h6>
                    <p class=\"card-text\">{{ p.content }} #{{ p.tag }}</p>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        {% if p.creatorId == user_session.user_id %}
                            <form action=\"{{ path('app_delete_action', { 'id': p.postId }) }}\" method=\"POST\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('delete' ~ p.postId) }}\">
                                <button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">
                                    ❌ Supprimer
                                </button>
                            </form>
                        {% endif %}
                        <form action=\"{{ path('app_check_like_or_unlike', { 'id': p.postId }) }}\" method=\"POST\" class=\"d-inline\">
                            <button type=\"submit\" class=\"btn btn-outline-primary btn-sm\">
                                {% if not p.isLikedByTheUser %} 👍 Liker {% else %} 👎 Unliker {% endif %}
                            </button>
                        </form>
                        <button class=\"btn btn-outline-info btn-sm\" data-post-id=\"{{ p.postId }}\">
                            🗣️ Commenter
                        </button>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-danger btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton{{ p.postId }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                🚩 Signaler
                            </button>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton{{ p.postId }}\">
                                <li><a class=\"dropdown-item\" href=\"#\">Spam</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Désinformation</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Haine</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Scam</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Incitation à des pratiques illégales</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\">Pornographie</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-center text-muted\">Aucun post disponible.</p>
        {% endfor %}
    </div>

    {% if user_session.user_id and user_session.user_name %}
        <div id=\"postContainer\" class=\"position-fixed bottom-0 start-50 translate-middle-x w-100 max-w-md bg-white border rounded-3 shadow p-3 mb-3\" style=\"display: none; max-width: 500px;\">
            <form action=\"{{ path('app_post_interface_action') }}\" method=\"POST\">
                <div class=\"mb-3\">
                    <textarea id=\"postText\" name=\"postText\" class=\"form-control\" rows=\"3\"></textarea>
                </div>
                <div class=\"mb-3\">
                    <label for=\"postTag\" class=\"form-label\">Tag</label>
                    <input id=\"postTag\" name=\"postTag\" class=\"form-control\"/>
                </div>
                <button type=\"submit\" class=\"btn btn-primary w-100\">Poster</button>
            </form>
        </div>
    {% endif %}

    <div class=\"position-fixed top-0 end-0 m-3\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">🔍</button>
        </div>
    </div>
{% endblock %}", "main_interface/index.html.twig", "C:\\Users\\Maxime\\symfonyPjs\\pj1\\templates\\main_interface\\index.html.twig");
    }
}
