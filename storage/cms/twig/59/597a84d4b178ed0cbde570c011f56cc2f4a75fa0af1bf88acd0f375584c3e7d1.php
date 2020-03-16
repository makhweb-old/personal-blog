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

/* C:\laragon\www\cms/themes/makhweb/pages/homepage.htm */
class __TwigTemplate_020da471a6b41718185badb88379c581d64e0618ca429e384a2e54fc87891657 extends \Twig\Template
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
  <div id=\"posts\">
    <div class=\"lg:flex bg-gray-100 shadow p-5\">
      <div class=\"lg:w-1/3 lg:block\">
        <img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/laravel-7.png");
        echo "\" class=\"rounded-md\" alt=\"featured image\" />
      </div>
      <div class=\"mt-3 ml-3 lg:w-2/3\">
        <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "slug", [], "any", false, false, false, 8), "id" => twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "id", [], "any", false, false, false, 8)]);
        echo "\" class=\"text-3xl font-semibold font-mono\">
          ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "
        </a>
        <div class=\"mt-5\">
          ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "excerpt", [], "any", false, false, false, 12), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    <div class=\"mt-5\">
      <p class=\"text-2xl font-serif\">Last posts</p>
      <hr />
      <div class=\"pt-2\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "        <div class=\"pb-5\">
          <a class=\"text-blue-700 font-bold\" href=\"";
            // line 22
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 22), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 22)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
          <div class=\"text-sm mt-1\">
            ";
            // line 24
            echo call_user_func_array($this->env->getFunction('readingTime')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 24)]);
            echo " minutes reading -
            <a class=\"font-semibold\" href=\"";
            // line 25
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 25), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 25)]);
            echo "#comments\">Comments</a>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </div>
      <hr />
      <a class=\"text-sm text-blue-500\" href=\"#\">Show more</a>
    </div>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["otherPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "    <div class=\"mt-3\">
      <a href=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 35), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35)]);
            echo "\" class=\"text-xl font-semibold\">
        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "
      </a>
      <div class=\"text-sm text-blue-500 mt-1\">
        <a class=\"pr-2 hover:underline\" href=\"#\">Programming,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">PHP,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">Tricks</a>
      </div>
      <a href=\"";
            // line 43
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 43)]);
            echo "\"
        class=\"border border-purple-500 hover:bg-purple-500 hover:text-white text-purple-900 rounded text-sm inline-block mt-2 p-1\">
        Translate
      </a>
      <div class=\"mt-5\">
        ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 48), "html", null, true);
            echo "
      </div>
      <a class=\"text-sm text-blue-500 mt-3 block\" href=\"";
            // line 50
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 50), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 50)]);
            echo "\">Show more</a>

      <div class=\"my-3 border inline-block py-1 \">
        <div class=\"px-4 inline\">
          <img width=\"25\" src=\"";
            // line 54
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/eye.svg");
            echo "\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">+11</span>
        </div>
        <div class=\"px-4 inline\">
          <img width=\"20\" src=\"";
            // line 58
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/icons/blog.svg");
            echo "\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">88</span>
        </div>
      </div>
      <hr />
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  152 => 58,  145 => 54,  138 => 50,  133 => 48,  125 => 43,  115 => 36,  111 => 35,  108 => 34,  104 => 33,  98 => 29,  88 => 25,  84 => 24,  77 => 22,  74 => 21,  70 => 20,  59 => 12,  53 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"content\" class=\"mx-auto container mt-8\">
  <div id=\"posts\">
    <div class=\"lg:flex bg-gray-100 shadow p-5\">
      <div class=\"lg:w-1/3 lg:block\">
        <img src=\"{{ 'assets/images/laravel-7.png' | theme }}\" class=\"rounded-md\" alt=\"featured image\" />
      </div>
      <div class=\"mt-3 ml-3 lg:w-2/3\">
        <a href=\"{{ 'post' | page({ slug: pinnedPost.slug, id: pinnedPost.id }) }}\" class=\"text-3xl font-semibold font-mono\">
          {{ pinnedPost.title }}
        </a>
        <div class=\"mt-5\">
          {{ pinnedPost.excerpt }}
        </div>
      </div>
    </div>
    <div class=\"mt-5\">
      <p class=\"text-2xl font-serif\">Last posts</p>
      <hr />
      <div class=\"pt-2\">
        {% for post in newPosts %}
        <div class=\"pb-5\">
          <a class=\"text-blue-700 font-bold\" href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}\">{{ post.title }}</a>
          <div class=\"text-sm mt-1\">
            {{ readingTime(post.content) }} minutes reading -
            <a class=\"font-semibold\" href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}#comments\">Comments</a>
          </div>
        </div>
        {% endfor %}
      </div>
      <hr />
      <a class=\"text-sm text-blue-500\" href=\"#\">Show more</a>
    </div>
    {% for post in otherPosts %}
    <div class=\"mt-3\">
      <a href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}\" class=\"text-xl font-semibold\">
        {{ post.title }}
      </a>
      <div class=\"text-sm text-blue-500 mt-1\">
        <a class=\"pr-2 hover:underline\" href=\"#\">Programming,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">PHP,</a>
        <a class=\"pr-2 hover:underline\" href=\"#\">Tricks</a>
      </div>
      <a href=\"{{ 'post' | page({ slug: post.slug }) }}\"
        class=\"border border-purple-500 hover:bg-purple-500 hover:text-white text-purple-900 rounded text-sm inline-block mt-2 p-1\">
        Translate
      </a>
      <div class=\"mt-5\">
        {{ post.excerpt }}
      </div>
      <a class=\"text-sm text-blue-500 mt-3 block\" href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}\">Show more</a>

      <div class=\"my-3 border inline-block py-1 \">
        <div class=\"px-4 inline\">
          <img width=\"25\" src=\"{{ 'assets/icons/eye.svg' | theme }}\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">+11</span>
        </div>
        <div class=\"px-4 inline\">
          <img width=\"20\" src=\"{{ 'assets/icons/blog.svg' | theme }}\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">88</span>
        </div>
      </div>
      <hr />
    </div>
    {% endfor %}
  </div>
</div>", "C:\\laragon\\www\\cms/themes/makhweb/pages/homepage.htm", "");
    }
}
