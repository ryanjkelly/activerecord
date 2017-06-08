<?php

/* layout/layout.twig */
class __TwigTemplate_ee89a1933ce7819cbfe305960c137cb9637fa986017f4a7b9f89688e8b98e1f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout/layout.twig", "layout/layout.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    <nav id=\"site-nav\" class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-elements\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand navbar-api-link\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "index.html"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 13, $this->getSourceContext()); })()), "config", array(0 => "title"), "method"), "html", null, true);
        echo "</a>
                <a class=\"navbar-brand\" href=\"../\">User docs</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-elements\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "classes.html"), "html", null, true);
        echo "\">Classes</a></li>
                    ";
        // line 19
        if ((isset($context["has_namespaces"]) || array_key_exists("has_namespaces", $context) ? $context["has_namespaces"] : (function () { throw new Twig_Error_Runtime('Variable "has_namespaces" does not exist.', 19, $this->getSourceContext()); })())) {
            // line 20
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "namespaces.html"), "html", null, true);
            echo "\">Namespaces</a></li>
                    ";
        }
        // line 22
        echo "                    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "interfaces.html"), "html", null, true);
        echo "\">Interfaces</a></li>
                    <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "traits.html"), "html", null, true);
        echo "\">Traits</a></li>
                    <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "doc-index.html"), "html", null, true);
        echo "\">Index</a></li>
                    <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "search.html"), "html", null, true);
        echo "\">Search</a></li>
                </ul>
            </div>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  73 => 24,  69 => 23,  64 => 22,  58 => 20,  56 => 19,  52 => 18,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/layout/layout.twig\" %}

{% block menu %}
    <nav id=\"site-nav\" class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-elements\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand navbar-api-link\" href=\"{{ path('index.html') }}\">{{ project.config('title') }}</a>
                <a class=\"navbar-brand\" href=\"../\">User docs</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-elements\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"{{ path('classes.html') }}\">Classes</a></li>
                    {% if has_namespaces %}
                        <li><a href=\"{{ path('namespaces.html') }}\">Namespaces</a></li>
                    {% endif %}
                    <li><a href=\"{{ path('interfaces.html') }}\">Interfaces</a></li>
                    <li><a href=\"{{ path('traits.html') }}\">Traits</a></li>
                    <li><a href=\"{{ path('doc-index.html') }}\">Index</a></li>
                    <li><a href=\"{{ path('search.html') }}\">Search</a></li>
                </ul>
            </div>
        </div>
    </nav>
{% endblock %}", "layout/layout.twig", "/home/travis/build/php-activerecord/activerecord/docs/sami/themes/php-ar/layout/layout.twig");
    }
}
