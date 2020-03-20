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

/* C:\laragon\www\cms/themes/makhweb/pages/category.htm */
class __TwigTemplate_04a740da819725946a2afa175ca313077b5e9678bf2c88ba4b6c8ed0b8e56cb7 extends \Twig\Template
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
        echo "<div class=\"py-8\">
  <p class=\"text-3xl font-serif pb-3\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "</p>
  <hr>
  <div id=\"posts\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "posts", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "    <div class=\"mt-3\">
      <a href=\"";
            // line 7
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 7), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 7)]);
            echo "\" class=\"text-xl font-semibold\">
        ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "
      </a>
      <div class=\"mt-5\">
        ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 11), "html", null, true);
            echo "
      </div>
      <a class=\"text-sm text-blue-500 mt-3 block\" href=\"";
            // line 13
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 13), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 13)]);
            echo "\">Show
        more</a>

      <div class=\"my-3 border inline-block py-1 \">
        <div class=\"px-4 inline\">
          <img width=\"25\" src=\"";
            // line 18
            echo call_user_func_array($this->env->getFilter('icon')->getCallable(), ["view"]);
            echo "\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">+11</span>
        </div>
        <div class=\"px-4 inline\">
          <img width=\"20\" src=\"";
            // line 22
            echo call_user_func_array($this->env->getFilter('icon')->getCallable(), ["comment"]);
            echo "\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 23), "count", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
        </div>
      </div>
      <hr />
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  87 => 23,  83 => 22,  76 => 18,  68 => 13,  63 => 11,  57 => 8,  53 => 7,  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"py-8\">
  <p class=\"text-3xl font-serif pb-3\">{{ category.name }}</p>
  <hr>
  <div id=\"posts\">
    {% for post in category.posts %}
    <div class=\"mt-3\">
      <a href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}\" class=\"text-xl font-semibold\">
        {{ post.title }}
      </a>
      <div class=\"mt-5\">
        {{ post.excerpt }}
      </div>
      <a class=\"text-sm text-blue-500 mt-3 block\" href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}\">Show
        more</a>

      <div class=\"my-3 border inline-block py-1 \">
        <div class=\"px-4 inline\">
          <img width=\"25\" src=\"{{ 'view' | icon }}\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">+11</span>
        </div>
        <div class=\"px-4 inline\">
          <img width=\"20\" src=\"{{ 'comment' | icon }}\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">{{ post.comments.count }}</span>
        </div>
      </div>
      <hr />
    </div>
    {% endfor %}
  </div>
</div>", "C:\\laragon\\www\\cms/themes/makhweb/pages/category.htm", "");
    }
}
