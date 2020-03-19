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
      <!-- Metas -->
      <meta charset=\"utf-8\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
      <!-- Icons && Styles -->
      <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/app.css");
        echo "\" rel=\"stylesheet\">
      ";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 10
        echo "      <!-- Scripts -->
      <script src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/alpine/app.js");
        echo "\" defer></script>
      <title>Makhweb - ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</title>
    </head>
    <body x-data=\"";
        // line 14
        echo twig_escape_filter($this->env, json_encode(($context["data"] ?? null)), "html", null, true);
        echo "\">

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "        </header>

        <!-- Content -->
        <section class=\"mx-auto container mt-8\" id=\"layout-content\">
            ";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 24
        echo "        </section>


        ";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 28
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
        return array (  92 => 28,  89 => 27,  84 => 24,  82 => 23,  76 => 19,  72 => 18,  65 => 14,  60 => 12,  56 => 11,  53 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
      <!-- Metas -->
      <meta charset=\"utf-8\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
      <!-- Icons && Styles -->
      <link href=\"{{ 'assets/css/app.css' | theme }}\" rel=\"stylesheet\">
      {% styles %}
      <!-- Scripts -->
      <script src=\"{{ 'assets/js/alpine/app.js' | theme }}\" defer></script>
      <title>Makhweb - {{ this.page.title }}</title>
    </head>
    <body x-data=\"{{ data | json_encode }}\">

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'nav' %}
        </header>

        <!-- Content -->
        <section class=\"mx-auto container mt-8\" id=\"layout-content\">
            {% page %}
        </section>


        {% scripts %}

    </body>
</html>", "C:\\laragon\\www\\cms/themes/makhweb/layouts/default.htm", "");
    }
}
