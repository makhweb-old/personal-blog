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

/* C:\laragon\www\cms/themes/makhweb/pages/post.htm */
class __TwigTemplate_b136e832ce6b85baf302e472b1870feb5dff866e38481df81f74d6206dfc82b6 extends \Twig\Template
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
        echo "<div id=\"content\" class=\"mx-auto container mt-8\">
    <div>
      <a href=\"#\" class=\"text-3xl font-semibold\">
        ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
      </a>
      <div class=\"text-sm text-blue-500 mt-1\">
        <a class=\"pr-2 hover:underline\" href=\"#\">Programming,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">PHP,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">Tricks</a>
      </div>
    </div>
    <div class=\"mt-8\">
      ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 13);
        echo "
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"content\" class=\"mx-auto container mt-8\">
    <div>
      <a href=\"#\" class=\"text-3xl font-semibold\">
        {{ post.title }}
      </a>
      <div class=\"text-sm text-blue-500 mt-1\">
        <a class=\"pr-2 hover:underline\" href=\"#\">Programming,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">PHP,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">Tricks</a>
      </div>
    </div>
    <div class=\"mt-8\">
      {{ post.content_html | raw }}
    </div>
  </div>", "C:\\laragon\\www\\cms/themes/makhweb/pages/post.htm", "");
    }
}
