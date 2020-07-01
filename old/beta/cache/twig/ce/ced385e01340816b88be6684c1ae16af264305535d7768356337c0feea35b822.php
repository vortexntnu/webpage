<?php

/* partials/base.html.twig */
class __TwigTemplate_4590e679979972da498b285e19c82a091d4d274034295736164eb490eccf9304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'hero' => array($this, 'block_hero'),
            'body' => array($this, 'block_body'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc(array(0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"));
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production_mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "site", array()), "default_lang", array())));
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
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 121)->display(array_merge($context, array("tree" => true)));
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
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
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
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))), "method");
        // line 20
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))), "method");
        }
        // line 21
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))), "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/line-awesome.min.css"), "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://js/slick/slick/slick.css"), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://js/slick/slick/slick-theme.css"), "method");
        // line 27
        echo "    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slick/slick/slick.min.js", 1 => 90), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.treemenu.js", 1 => array("group" => "bottom")), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/site.js", 1 => array("group" => "bottom")), "method");
        // line 35
        echo "    ";
    }

    // line 40
    public function block_body_classes($context, array $blocks = array())
    {
        echo ($context["body_classes"] ?? null);
    }

    // line 42
    public function block_header($context, array $blocks = array())
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
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
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 53
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "                            ";
    }

    // line 74
    public function block_hero($context, array $blocks = array())
    {
    }

    // line 77
    public function block_body($context, array $blocks = array())
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
    public function block_messages($context, array $blocks = array())
    {
        // line 81
        echo "                        ";
        try {
            $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 81)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 82
        echo "                    ";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        // line 91
        echo "    <section id=\"footer\" class=\"section\" style=\"background-color: black;\">
        <section class=\"container ";
        // line 92
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"column col-12 col-sm-12\">
        <div class=\"column col-4 col-sm-12\" style=\"horizontal-align:center;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Statoil_Logo_Bottom.png\" /></a>
        </div><br>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Blueye.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/FFU.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Waterlinked.png\" /></a>
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
    public function block_bottom($context, array $blocks = array())
    {
        // line 127
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
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
        return array (  355 => 127,  352 => 126,  326 => 92,  323 => 91,  320 => 90,  315 => 83,  311 => 82,  303 => 81,  300 => 80,  294 => 84,  291 => 83,  289 => 80,  285 => 79,  282 => 78,  279 => 77,  274 => 74,  270 => 54,  267 => 53,  264 => 52,  248 => 60,  242 => 58,  240 => 57,  236 => 55,  234 => 52,  224 => 47,  218 => 44,  215 => 43,  212 => 42,  206 => 40,  202 => 35,  199 => 34,  196 => 33,  193 => 32,  190 => 31,  187 => 30,  183 => 27,  180 => 26,  177 => 25,  174 => 24,  171 => 23,  168 => 22,  163 => 21,  158 => 20,  155 => 19,  152 => 18,  144 => 36,  142 => 30,  136 => 28,  134 => 18,  129 => 16,  125 => 15,  122 => 14,  120 => 13,  109 => 9,  106 => 8,  103 => 7,  97 => 129,  95 => 126,  89 => 122,  87 => 121,  83 => 119,  81 => 118,  75 => 114,  73 => 90,  68 => 87,  66 => 77,  62 => 75,  60 => 74,  57 => 73,  55 => 42,  50 => 40,  47 => 39,  45 => 7,  40 => 5,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
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

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
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
        <div class=\"column col-4 col-sm-12\" style=\"horizontal-align:center;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Statoil_Logo_Bottom.png\" /></a>
        </div><br>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Blueye.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/FFU.png\" /></a>
        </div>
        <div class=\"column col-2 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
        <a src=\"\"><img style=\"width:100%; height:auto;\" src=\"/user/themes/quark/images/Waterlinked.png\" /></a>
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
", "partials/base.html.twig", "C:\\xampp\\htdocs\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
}
