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
        echo "<div id=\"content\" class=\"mt-6\">
  <div>
    <a href=\"#\" class=\"text-3xl font-semibold\">
      ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
    </a>
    <div class=\"text-sm text-blue-500 mt-1\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 7));
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
            // line 8
            echo "          <a class=\"pr-1 hover:underline\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 8), "slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 8)]);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 8)) {
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
        // line 10
        echo "    </div>
  </div>
  <div class=\"mt-8\">
    ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 13);
        echo "
  </div>
  
  <div x-show=\"user\">
  <div id=\"comments\" class=\"py-8\" x-data=\"{ replied_to: null, name: null }\"
      @updated=\"replied_to = \$event.detail.replied_to; name = \$event.detail.name\">
      <p class=\"text-2xl font-semibold py-3\">Comments:</p>
      <form method=\"POST\" class=\"mb-3\">
        <textarea
          name=\"content\"
          class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\"
          id=\"username\" type=\"text\" :placeholder=\"replied_to ? 'Reply to ' + name : 'Enter your comment'\"
          rows=\"3\" required></textarea>
        <div x-show=\"replied_to\" @click=\"\$dispatch('updated', { replied_to: null, name: null })\"
          class=\"my-1 hover:underline text-blue-600 cursor-pointer\">Cancel response</div>
        <input type=\"hidden\" name=\"replied_to\" :value=\"replied_to\" />
        <input type=\"submit\" :value=\"replied_to ? 'Reply' : 'Send'\"
          class=\"bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-4\">
      </form>
      <hr>
      <div class=\"py-6\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "comments", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["postComment"]) {
            // line 35
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['comment'] = $context["postComment"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("comment"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "      </div>
    </div>
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
        return array (  132 => 37,  126 => 36,  120 => 35,  116 => 34,  92 => 13,  87 => 10,  65 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"content\" class=\"mt-6\">
  <div>
    <a href=\"#\" class=\"text-3xl font-semibold\">
      {{ post.title }}
    </a>
    <div class=\"text-sm text-blue-500 mt-1\">
      {% for category in post.categories %}
          <a class=\"pr-1 hover:underline\" href=\"{{ 'category' | page({ id: category.id, slug: category.slug }) }}\">{{ category.name }}{% if not loop.last %},{% endif %}</a>
      {% endfor %}
    </div>
  </div>
  <div class=\"mt-8\">
    {{ post.content_html | raw }}
  </div>
  
  <div x-show=\"user\">
  <div id=\"comments\" class=\"py-8\" x-data=\"{ replied_to: null, name: null }\"
      @updated=\"replied_to = \$event.detail.replied_to; name = \$event.detail.name\">
      <p class=\"text-2xl font-semibold py-3\">Comments:</p>
      <form method=\"POST\" class=\"mb-3\">
        <textarea
          name=\"content\"
          class=\"shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline\"
          id=\"username\" type=\"text\" :placeholder=\"replied_to ? 'Reply to ' + name : 'Enter your comment'\"
          rows=\"3\" required></textarea>
        <div x-show=\"replied_to\" @click=\"\$dispatch('updated', { replied_to: null, name: null })\"
          class=\"my-1 hover:underline text-blue-600 cursor-pointer\">Cancel response</div>
        <input type=\"hidden\" name=\"replied_to\" :value=\"replied_to\" />
        <input type=\"submit\" :value=\"replied_to ? 'Reply' : 'Send'\"
          class=\"bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mt-4\">
      </form>
      <hr>
      <div class=\"py-6\">
        {% for postComment in post.comments %}
            {% partial 'comment' comment=postComment %}
        {% endfor %}
      </div>
    </div>
  </div>
  
</div>", "C:\\laragon\\www\\cms/themes/makhweb/pages/post.htm", "");
    }
}
