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

/* C:\laragon\www\cms/themes/makhweb/partials/comment.htm */
class __TwigTemplate_954d199dc7f132cb9a149c8f2c879e40592ed53452c9aa118093e7c88ec4966a extends \Twig\Template
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
        echo "<div class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "replied_to", [], "any", false, false, false, 1)) ? ("pl-3 mt-6") : (null));
        echo "\">
    <div class=\"mb-6\">
        <p class=\"font-semibold\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "user", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "</p>
        <div class=\"mt-1\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "content", [], "any", false, false, false, 4), "html", null, true);
        echo "</div>
        <a href=\"#comments\" class=\"mt-3 text-sm hover:underline text-blue-600 cursor-pointer\"
            @click=\"\$dispatch('updated', { replied_to: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 6), "html", null, true);
        echo ", name: '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "user", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "' })\">Reply</a>
            ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "comments", [], "any", false, false, false, 7)) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "comments", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["nestedComment"]) {
                // line 9
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['comment'] = $context["nestedComment"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("comment"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 10
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nestedComment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ";
        }
        // line 12
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/partials/comment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  77 => 11,  71 => 10,  65 => 9,  60 => 8,  58 => 7,  52 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ comment.replied_to ? 'pl-3 mt-6' : null }}\">
    <div class=\"mb-6\">
        <p class=\"font-semibold\">{{ comment.user.name }}</p>
        <div class=\"mt-1\">{{ comment.content }}</div>
        <a href=\"#comments\" class=\"mt-3 text-sm hover:underline text-blue-600 cursor-pointer\"
            @click=\"\$dispatch('updated', { replied_to: {{ comment.id }}, name: '{{ comment.user.name }}' })\">Reply</a>
            {% if comment.comments %}
                {% for nestedComment in comment.comments %}
                    {% partial 'comment' comment=nestedComment %}
                {% endfor %}
            {% endif %}
    </div>
</div>", "C:\\laragon\\www\\cms/themes/makhweb/partials/comment.htm", "");
    }
}
