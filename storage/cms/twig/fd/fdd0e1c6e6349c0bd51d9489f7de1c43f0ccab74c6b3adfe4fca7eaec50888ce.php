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

/* C:\laragon\www\cms/themes/makhweb/partials/nav.htm */
class __TwigTemplate_1d6be67c77e5e4bcbbd245941a2d360e62247241d00097e816cf0b009c7d2edc extends \Twig\Template
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
        echo "<header class=\"shadow\">
      <div class=\"container mx-auto h-16\">
        <div class=\"flex justify-between items-center h-full\">
          <div class=\"flex items-center\">
            <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\" class=\"text-3xl pr-3 text-indigo-600 font-bold\"
              >Makh<span class=\"text-blue-900\">web</span></a
            >
            <div class=\"text-lg text-gray-500 font-semibold\">
              <a class=\"px-1 lg:px-3 hover:text-red-500\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["id" => 6, "slug" => "laravel"]);
        echo "\">Laravel</a>/
              <a class=\"px-1 lg:px-3 hover:text-blue-500\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["id" => 4, "slug" => "php"]);
        echo "\">PHP</a>/
              <a class=\"px-1 lg:px-3 hover:text-yellow-500\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["id" => 3, "slug" => "javascript"]);
        echo "\"
                >JavaScript</a
              >/
              <a class=\"px-1 lg:px-3 hover:text-blue-700\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["id" => 5, "slug" => "tricks"]);
        echo "\">Tricks</a>/
              <a class=\"px-1 lg:px-3 hover:text-green-500\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["id" => 7, "slug" => "other-categories"]);
        echo "\"
                >Other categories</a
              >
            </div>
          </div>
         <template x-if=\"user\">
            <div class=\"text-lg text-blue-500 font-semibold rounded\">
              <a href=\"#\" class=\"px-3 hover:text-blue-900\" x-text=\"user.name\"></a>
            </div>
          </template>
          <template x-if=\"!user\">
            <div class=\"text-lg text-blue-500 font-semibold rounded\">
              <a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\" class=\"px-3 hover:text-blue-900\">Login</a>/
              <a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("register");
        echo "\" class=\"px-3 hover:text-blue-900\">Sign up</a>
            </div>
          </template>
        </div>
     </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  83 => 27,  68 => 15,  64 => 14,  58 => 11,  54 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"shadow\">
      <div class=\"container mx-auto h-16\">
        <div class=\"flex justify-between items-center h-full\">
          <div class=\"flex items-center\">
            <a href=\"{{ 'homepage' | page }}\" class=\"text-3xl pr-3 text-indigo-600 font-bold\"
              >Makh<span class=\"text-blue-900\">web</span></a
            >
            <div class=\"text-lg text-gray-500 font-semibold\">
              <a class=\"px-1 lg:px-3 hover:text-red-500\" href=\"{{ 'category' | page({ id: 6, slug: 'laravel' }) }}\">Laravel</a>/
              <a class=\"px-1 lg:px-3 hover:text-blue-500\" href=\"{{ 'category' | page({ id: 4, slug: 'php' }) }}\">PHP</a>/
              <a class=\"px-1 lg:px-3 hover:text-yellow-500\" href=\"{{ 'category' | page({ id: 3, slug: 'javascript' }) }}\"
                >JavaScript</a
              >/
              <a class=\"px-1 lg:px-3 hover:text-blue-700\" href=\"{{ 'category' | page({ id: 5, slug: 'tricks' }) }}\">Tricks</a>/
              <a class=\"px-1 lg:px-3 hover:text-green-500\" href=\"{{ 'category' | page({ id: 7, slug: 'other-categories' }) }}\"
                >Other categories</a
              >
            </div>
          </div>
         <template x-if=\"user\">
            <div class=\"text-lg text-blue-500 font-semibold rounded\">
              <a href=\"#\" class=\"px-3 hover:text-blue-900\" x-text=\"user.name\"></a>
            </div>
          </template>
          <template x-if=\"!user\">
            <div class=\"text-lg text-blue-500 font-semibold rounded\">
              <a href=\"{{ 'login' | page }}\" class=\"px-3 hover:text-blue-900\">Login</a>/
              <a href=\"{{ 'register' | page }}\" class=\"px-3 hover:text-blue-900\">Sign up</a>
            </div>
          </template>
        </div>
     </div>
</header>", "C:\\laragon\\www\\cms/themes/makhweb/partials/nav.htm", "");
    }
}
