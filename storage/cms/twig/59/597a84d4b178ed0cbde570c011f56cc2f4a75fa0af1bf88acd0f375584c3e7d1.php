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
        echo "<div id=\"content\" class=\"py-8\">
  <div id=\"posts\">
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "exists", [], "any", false, false, false, 3)) {
            // line 4
            echo "    <div class=\"lg:flex bg-gray-100 shadow p-5\">
      <div class=\"lg:w-1/3 lg:block\">
        <img src=\"";
            // line 6
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/laravel-7.png");
            echo "\" class=\"rounded-md\" alt=\"featured image\" />
      </div>
      <div class=\"mt-3 ml-3 lg:w-2/3\">
        <a href=\"";
            // line 9
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "slug", [], "any", false, false, false, 9), "id" => twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "id", [], "any", false, false, false, 9)]);
            echo "\"
          class=\"text-3xl font-semibold font-mono\">
          ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "
        </a>
        <div class=\"mt-5\">
          ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pinnedPost"] ?? null), "excerpt", [], "any", false, false, false, 14), "html", null, true);
            echo "
        </div>
      </div>
    </div>
    ";
        }
        // line 19
        echo "    <div class=\"mt-5\">
      <p class=\"text-2xl font-serif\">Last posts</p>
      <hr />
      <div class=\"pt-2\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "        <div class=\"pb-5\">
          <a class=\"text-blue-700 font-bold\"
            href=\"";
            // line 26
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 26), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 26)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
          <div class=\"text-sm mt-1\">
            ";
            // line 28
            echo call_user_func_array($this->env->getFunction('readingTime')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 28)]);
            echo " minutes reading -
            <a class=\"font-semibold\" href=\"";
            // line 29
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 29), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 29)]);
            echo "#comments\">Comments</a>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </div>
      <hr />
      <a class=\"text-sm text-blue-500\" href=\"#\">Show more</a>
    </div>
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["otherPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 38
            echo "    <div class=\"mt-3\">
      <a href=\"";
            // line 39
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 39), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 39)]);
            echo "\" class=\"text-xl font-semibold\">
        ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "
      </a>
      <div class=\"text-sm text-blue-500 mt-1\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 43));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 44
                echo "        <a class=\"pr-1 hover:underline\"
          href=\"";
                // line 45
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45), "slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 45)]);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 45), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 45)) {
                    echo ",";
                }
                echo "</a>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "      </div>
      <div class=\"mt-5\">
        ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 49), "html", null, true);
            echo "
      </div>
      <a class=\"text-sm text-blue-500 mt-3 block\" href=\"";
            // line 51
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 51), "id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 51)]);
            echo "\">Show
        more</a>

      <div class=\"my-3 border inline-block py-1 \">
        <div class=\"px-4 inline\">
          <img width=\"25\" src=\"";
            // line 56
            echo call_user_func_array($this->env->getFilter('icon')->getCallable(), ["view"]);
            echo "\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">11</span>
        </div>
        <div class=\"px-4 inline\">
          <img width=\"20\" src=\"";
            // line 60
            echo call_user_func_array($this->env->getFilter('icon')->getCallable(), ["comment"]);
            echo "\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments_count", [], "any", false, false, false, 61), "html", null, true);
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
        // line 67
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
        return array (  211 => 67,  199 => 61,  195 => 60,  188 => 56,  180 => 51,  175 => 49,  171 => 47,  150 => 45,  147 => 44,  130 => 43,  124 => 40,  120 => 39,  117 => 38,  113 => 37,  107 => 33,  97 => 29,  93 => 28,  86 => 26,  82 => 24,  78 => 23,  72 => 19,  64 => 14,  58 => 11,  53 => 9,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"content\" class=\"py-8\">
  <div id=\"posts\">
    {% if pinnedPost.exists %}
    <div class=\"lg:flex bg-gray-100 shadow p-5\">
      <div class=\"lg:w-1/3 lg:block\">
        <img src=\"{{ 'assets/images/laravel-7.png' | theme }}\" class=\"rounded-md\" alt=\"featured image\" />
      </div>
      <div class=\"mt-3 ml-3 lg:w-2/3\">
        <a href=\"{{ 'post' | page({ slug: pinnedPost.slug, id: pinnedPost.id }) }}\"
          class=\"text-3xl font-semibold font-mono\">
          {{ pinnedPost.title }}
        </a>
        <div class=\"mt-5\">
          {{ pinnedPost.excerpt }}
        </div>
      </div>
    </div>
    {% endif %}
    <div class=\"mt-5\">
      <p class=\"text-2xl font-serif\">Last posts</p>
      <hr />
      <div class=\"pt-2\">
        {% for post in newPosts %}
        <div class=\"pb-5\">
          <a class=\"text-blue-700 font-bold\"
            href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}\">{{ post.title }}</a>
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
        {% for category in post.categories %}
        <a class=\"pr-1 hover:underline\"
          href=\"{{ 'category' | page({ id: category.id, slug: category.slug }) }}\">{{ category.name }}{% if not loop.last %},{% endif %}</a>
        {% endfor %}
      </div>
      <div class=\"mt-5\">
        {{ post.excerpt }}
      </div>
      <a class=\"text-sm text-blue-500 mt-3 block\" href=\"{{ 'post' | page({ slug: post.slug, id: post.id }) }}\">Show
        more</a>

      <div class=\"my-3 border inline-block py-1 \">
        <div class=\"px-4 inline\">
          <img width=\"25\" src=\"{{ 'view' | icon }}\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">11</span>
        </div>
        <div class=\"px-4 inline\">
          <img width=\"20\" src=\"{{ 'comment' | icon }}\" class=\"inline\" alt=\"\" />
          <span class=\"text-sm text-green-500\">{{ post.comments_count }}</span>
        </div>
      </div>
      <hr />
    </div>
    {% endfor %}
  </div>
</div>", "C:\\laragon\\www\\cms/themes/makhweb/pages/homepage.htm", "");
    }
}
