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

/* C:\laragon\www\cms/themes/makhweb/pages/login.htm */
class __TwigTemplate_58a1654a8ad049d92a744c94f2d8f4c1909299a4e66d601ea0c928d2021712ee extends \Twig\Template
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
        echo "<div class=\"font-sans max-w-full py-24 px-6\">
    <div class=\"max-w-sm mx-auto px-6\">
        <div class=\"relative flex flex-wrap\">
            <div class=\"w-full relative\">
                <div class=\"mt-6\">
                    <div class=\"mb-5 pb-1border-b-2 text-center font-base text-blue-700\">
                    </div>
                    <div class=\"text-center text-2xl font-semibold text-black\">
                        Login
                    </div>

                    <form class=\"mt-8\" method=\"POST\" x-data=\"{ show: true, errors: ";
        // line 12
        echo twig_escape_filter($this->env, json_encode(($context["errors"] ?? null)), "html", null, true);
        echo " }\">
                        <div class=\"mx-auto max-w-lg\">
                            <div class=\"py-2\">
                                <span class=\"px-1 text-sm text-grey-600\">Username</span>
                                <input placeholder=\"\" type=\"text\" name=\"username\"
                                    :class=\"{ 'border-red-500': errors.username, 'border-grey-300': !errors.username }\"
                                    class=\"text-md block px-3 py-2  rounded-lg w-full 
                      bg-white border-2 border-grey-300 placeholder-grey-600 shadow-md focus:placeholder-blue-500 focus:bg-white focus:border-blue-600 focus:outline-none\">
                                <template x-if=\"errors.username\">
                                    <template x-for=\"error in errors.username\">
                                        <p class=\"text-red-500 text-xs italic\" x-text=\"error\"></p>
                                    </template>
                                </template>
                            </div>
                            <div class=\"py-2\">
                                <span class=\"px-1 text-sm text-grey-600\">Password</span>
                                <div class=\"relative\">
                                    <input placeholder=\"\" :type=\"show ? 'password' : 'text'\" name=\"password\"
                                        :class=\"{ 'border-red-500': errors.password, 'border-grey-300': !errors.password }\"
                                        class=\"text-md block px-3 py-2  rounded-lg w-full 
                                                bg-white border-2 border-grey-300 placeholder-grey-600 shadow-md focus:placeholder-blue-500 focus:bg-white focus:border-blue-600 focus:outline-none\">
                                    <template x-if=\"errors.password\">
                                        <template x-for=\"error in errors.password\">
                                            <p class=\"text-red-500 text-xs italic\" x-text=\"error\"></p>
                                        </template>
                                    </template>
                                    <div class=\"absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5\">

                                        <svg class=\"h-6 text-blue-700\" fill=\"none\" @click=\"show = !show\"
                                            :class=\"{'hidden': !show, 'block':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                            viewbox=\"0 0 576 512\">
                                            <path fill=\"currentColor\"
                                                d=\"M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z\">
                                            </path>
                                        </svg>

                                        <svg class=\"h-6 text-blue-700\" fill=\"none\" @click=\"show = !show\"
                                            :class=\"{'block': !show, 'hidden':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                            viewbox=\"0 0 640 512\">
                                            <path fill=\"currentColor\"
                                                d=\"M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z\">
                                            </path>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class=\"flex justify-between\"><label class=\"block select-none font-bold my-4\"><input
                                        type=\"checkbox\" name=\"remember\" class=\"leading-loose text-pink-600\"> <span
                                        class=\"py-2 leading-snug\"> Remember
                                        Me </span></label> <label class=\"block text-blue-500 font-bold my-4\"><a href=\"#\"
                                        class=\"cursor-pointer tracking-tighter text-black border-b-2 border-blue-200 hover:border-blue-400\"><span>Forgot
                                            Password?</span></a></label></div> <button class=\"mt-3 text-lg font-semibold 
                      bg-blue-800 w-full text-white rounded-lg
                      px-6 py-3 block shadow-xl hover:text-white hover:bg-black\">
                                Login
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\cms/themes/makhweb/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"font-sans max-w-full py-24 px-6\">
    <div class=\"max-w-sm mx-auto px-6\">
        <div class=\"relative flex flex-wrap\">
            <div class=\"w-full relative\">
                <div class=\"mt-6\">
                    <div class=\"mb-5 pb-1border-b-2 text-center font-base text-blue-700\">
                    </div>
                    <div class=\"text-center text-2xl font-semibold text-black\">
                        Login
                    </div>

                    <form class=\"mt-8\" method=\"POST\" x-data=\"{ show: true, errors: {{ errors | json_encode }} }\">
                        <div class=\"mx-auto max-w-lg\">
                            <div class=\"py-2\">
                                <span class=\"px-1 text-sm text-grey-600\">Username</span>
                                <input placeholder=\"\" type=\"text\" name=\"username\"
                                    :class=\"{ 'border-red-500': errors.username, 'border-grey-300': !errors.username }\"
                                    class=\"text-md block px-3 py-2  rounded-lg w-full 
                      bg-white border-2 border-grey-300 placeholder-grey-600 shadow-md focus:placeholder-blue-500 focus:bg-white focus:border-blue-600 focus:outline-none\">
                                <template x-if=\"errors.username\">
                                    <template x-for=\"error in errors.username\">
                                        <p class=\"text-red-500 text-xs italic\" x-text=\"error\"></p>
                                    </template>
                                </template>
                            </div>
                            <div class=\"py-2\">
                                <span class=\"px-1 text-sm text-grey-600\">Password</span>
                                <div class=\"relative\">
                                    <input placeholder=\"\" :type=\"show ? 'password' : 'text'\" name=\"password\"
                                        :class=\"{ 'border-red-500': errors.password, 'border-grey-300': !errors.password }\"
                                        class=\"text-md block px-3 py-2  rounded-lg w-full 
                                                bg-white border-2 border-grey-300 placeholder-grey-600 shadow-md focus:placeholder-blue-500 focus:bg-white focus:border-blue-600 focus:outline-none\">
                                    <template x-if=\"errors.password\">
                                        <template x-for=\"error in errors.password\">
                                            <p class=\"text-red-500 text-xs italic\" x-text=\"error\"></p>
                                        </template>
                                    </template>
                                    <div class=\"absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5\">

                                        <svg class=\"h-6 text-blue-700\" fill=\"none\" @click=\"show = !show\"
                                            :class=\"{'hidden': !show, 'block':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                            viewbox=\"0 0 576 512\">
                                            <path fill=\"currentColor\"
                                                d=\"M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z\">
                                            </path>
                                        </svg>

                                        <svg class=\"h-6 text-blue-700\" fill=\"none\" @click=\"show = !show\"
                                            :class=\"{'block': !show, 'hidden':show }\" xmlns=\"http://www.w3.org/2000/svg\"
                                            viewbox=\"0 0 640 512\">
                                            <path fill=\"currentColor\"
                                                d=\"M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z\">
                                            </path>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class=\"flex justify-between\"><label class=\"block select-none font-bold my-4\"><input
                                        type=\"checkbox\" name=\"remember\" class=\"leading-loose text-pink-600\"> <span
                                        class=\"py-2 leading-snug\"> Remember
                                        Me </span></label> <label class=\"block text-blue-500 font-bold my-4\"><a href=\"#\"
                                        class=\"cursor-pointer tracking-tighter text-black border-b-2 border-blue-200 hover:border-blue-400\"><span>Forgot
                                            Password?</span></a></label></div> <button class=\"mt-3 text-lg font-semibold 
                      bg-blue-800 w-full text-white rounded-lg
                      px-6 py-3 block shadow-xl hover:text-white hover:bg-black\">
                                Login
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>", "C:\\laragon\\www\\cms/themes/makhweb/pages/login.htm", "");
    }
}
