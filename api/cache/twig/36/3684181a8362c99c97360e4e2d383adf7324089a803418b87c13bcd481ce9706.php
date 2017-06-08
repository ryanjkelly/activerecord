<?php

/* layout/base.twig */
class __TwigTemplate_5c195ed103ac013acd83986b37e2a748ffdbff56e2b67b8a49b741f730b99273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout/base.twig", "layout/base.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "css/sami.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "css/php-ar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "css/php-ar.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "js/typeahead.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "sami.js"), "html", null, true);
        echo "\"></script>
    <meta name=\"MobileOptimized\" content=\"width\">
    <meta name=\"HandheldFriendly\" content=\"true\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\">
";
    }

    public function getTemplateName()
    {
        return "layout/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"default/layout/base.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path('css/bootstrap-theme.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path('css/sami.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path('css/php-ar.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ path('css/php-ar.css') }}\">
    <script src=\"{{ path('js/jquery-1.11.1.min.js') }}\"></script>
    <script src=\"{{ path('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ path('js/typeahead.min.js') }}\"></script>
    <script src=\"{{ path('sami.js') }}\"></script>
    <meta name=\"MobileOptimized\" content=\"width\">
    <meta name=\"HandheldFriendly\" content=\"true\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1\">
{% endblock %}", "layout/base.twig", "/home/travis/build/php-activerecord/activerecord/docs/sami/themes/php-ar/layout/base.twig");
    }
}
