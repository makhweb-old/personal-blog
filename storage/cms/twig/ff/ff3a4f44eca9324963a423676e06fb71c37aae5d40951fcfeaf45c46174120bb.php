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

/* C:\laragon\www\cms/themes/makhweb/layouts/default.htm */
class __TwigTemplate_b30778e4e4ad581bfbe712abb20e19648accbb3d176df055d7b1aa3bfc2a1912 extends \Twig\Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Makhweb - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 8), "author", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 12
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 23
        echo "        </section>


        ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 27
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  91 => 26,  86 => 23,  84 => 22,  78 => 18,  74 => 17,  67 => 12,  64 => 11,  60 => 10,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Makhweb - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"{{ this.theme.author }}\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"{{ 'assets/css/app.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'nav' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>


        {% scripts %}

    </body>
</html>", "C:\\laragon\\www\\cms/themes/makhweb/layouts/default.htm", "");
    }
}
