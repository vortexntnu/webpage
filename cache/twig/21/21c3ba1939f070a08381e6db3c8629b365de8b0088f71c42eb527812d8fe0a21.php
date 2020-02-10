<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_05f4e59c92a0b0603a71b736a05796c32881b74e46c15f86ddc4ddb09bc4ebc0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc([0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production_mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('hero', $context, $blocks);
        // line 75
        echo "
        <section id=\"start\">
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "        </section>

    </div>
";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        // line 114
        echo "
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 118
        $this->loadTemplate("@images/logo.svg", "partials/base.html.twig", 118)->display($context);
        // line 119
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 121
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 121)->display(twig_array_merge($context, ["tree" => true]));
        // line 122
        echo "            </nav>
        </div>
    </div>

";
        // line 126
        $this->displayBlock('bottom', $context, $blocks);
        // line 129
        echo "
</body>
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/VortexLogo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 20
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://js/slick/slick/slick.css"], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://js/slick/slick/slick-theme.css"], "method");
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slick/slick/slick.min.js", 1 => 90], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 35
        echo "    ";
    }

    // line 40
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 42
    public function block_header($context, array $blocks = [])
    {
        // line 43
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 44
        echo ($context["grid_size"] ?? null);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        <a href=\"";
        // line 47
        echo ($context["home_url"] ?? null);
        echo "\" class=\"navbar-brand mr-10\"><img id=\"thelogo\" src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" /></a>
                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            ";
        // line 52
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 55
        echo "                        </nav>

                        ";
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 58
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 58)->display($context);
            echo "</span>
                        ";
        }
        // line 60
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 52
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 53
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "                            ";
    }

    // line 74
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        // line 78
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 79
        echo ($context["grid_size"] ?? null);
        echo "\">
                    ";
        // line 80
        $this->displayBlock('messages', $context, $blocks);
        // line 83
        echo "                    ";
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "                </section>
            </section>
        ";
    }

    // line 80
    public function block_messages($context, array $blocks = [])
    {
        // line 81
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 81);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 82
        echo "                    ";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        // line 91
        echo "    <section id=\"footer\" class=\"section\" style=\"background-color: black;\">
        <section class=\"container ";
        // line 92
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"column col-12 col-sm-12\">
        <div class=\"column col-5 col-sm-12\" style=\"horizontal-align:center;display: inline-block;\">
        <a src=\"\"><img style=\"width:150%; height:150%;\" src=\"/user/themes/quark/images/Statoil_Logo_Bottom.png\" /></a>
        </div><br>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/nortek.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/FFU.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Innova.png\" /></a>
        </div>
        <div class=\"column col-4 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/ntnu.png\" /></a>
        </div>

        </div>
        </section>
    </section>
";
    }

    // line 126
    public function block_bottom($context, array $blocks = [])
    {
        // line 127
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 127,  366 => 126,  340 => 92,  337 => 91,  334 => 90,  329 => 83,  325 => 82,  314 => 81,  311 => 80,  305 => 84,  302 => 83,  300 => 80,  296 => 79,  293 => 78,  290 => 77,  285 => 74,  281 => 54,  278 => 53,  275 => 52,  259 => 60,  253 => 58,  251 => 57,  247 => 55,  245 => 52,  235 => 47,  229 => 44,  226 => 43,  223 => 42,  217 => 40,  213 => 35,  210 => 34,  207 => 33,  204 => 32,  201 => 31,  198 => 30,  194 => 27,  191 => 26,  188 => 25,  185 => 24,  182 => 23,  179 => 22,  174 => 21,  169 => 20,  166 => 19,  163 => 18,  155 => 36,  153 => 30,  147 => 28,  145 => 18,  140 => 16,  136 => 15,  133 => 14,  131 => 13,  120 => 9,  117 => 8,  114 => 7,  108 => 129,  106 => 126,  100 => 122,  98 => 121,  94 => 119,  92 => 118,  86 => 114,  84 => 90,  79 => 87,  77 => 77,  73 => 75,  71 => 74,  68 => 73,  66 => 42,  61 => 40,  58 => 39,  56 => 7,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production_mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/VortexLogo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
        {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
        {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
        {% do assets.addCss('theme://css-compiled/theme'~compress) %}
        {% do assets.addCss('theme://css/custom.css') %}
        {% do assets.addCss('theme://css/line-awesome.min.css') %}
        {% do assets.addCss('theme://js/slick/slick/slick.css') %}
        {% do assets.addCss('theme://js/slick/slick/slick-theme.css') %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/slick/slick/slick.min.js', 90) %}
        {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
        {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        <a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\"><img id=\"thelogo\" src=\"{{ url('theme://images/logo.png') }}\" /></a>
                    </section>
                    <section class=\"navbar-section\">

                        <nav class=\"dropmenu animated\">
                            {% block header_navigation %}
                        {% include 'partials/navigation.html.twig' %}
                            {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {% block content %}{% endblock %}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>
{% block footer %}
    <section id=\"footer\" class=\"section\" style=\"background-color: black;\">
        <section class=\"container {{ grid_size }}\">
        <div class=\"column col-12 col-sm-12\">
        <div class=\"column col-5 col-sm-12\" style=\"horizontal-align:center;display: inline-block;\">
        <a src=\"\"><img style=\"width:150%; height:150%;\" src=\"/user/themes/quark/images/Statoil_Logo_Bottom.png\" /></a>
        </div><br>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/nortek.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/FFU.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Innova.png\" /></a>
        </div>
        <div class=\"column col-4 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/ntnu.png\" /></a>
        </div>

        </div>
        </section>
    </section>
{% endblock %}

    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include('@images/logo.svg') %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
", "partials/base.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/partials/base.html.twig");
    }
}
