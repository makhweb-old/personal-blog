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

/* C:\laragon\www\cms/themes/makhweb/pages/404.htm */
class __TwigTemplate_04953dff96090a24e1b1732b21119f295eab80152891c4f96412e1a552ed6e2c extends \Twig\Template
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
        echo "<div class=\"py-12 text-center\">
    <p class=\"text-2xl\">The content can't be found!</p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"py-12 text-center\">
    <p class=\"text-2xl\">The content can't be found!</p>
</div>", "C:\\laragon\\www\\cms/themes/makhweb/pages/404.htm", "");
    }
}
