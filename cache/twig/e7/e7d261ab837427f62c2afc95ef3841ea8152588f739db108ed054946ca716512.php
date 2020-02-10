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

/* modular/aboutrov.html.twig */
class __TwigTemplate_1b0c5f9fd9f2a7c8fb91a28818638b184a1d0c5dfcef3b3ebaec1710a9f8abb7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "
<section id=\"modular-text\" class=\"section ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo " bg-gray\">
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-7 col-sm-12\">
                <h2>";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []);
        echo "</h2>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 10
            echo "                <p><h5>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</h5></p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </div>
            <div class=\"float-right column col-5 col-sm-12\">
            <blockquote>
                <h3>";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "tittel", []);
        echo "</h3>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 17
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </blockquote>
            </div>
            <div class=\"column col-6 col-md-12-auto\">
                ";
        // line 22
        if (($context["image"] ?? null)) {
            // line 23
            echo "                    ";
            echo $this->getAttribute(($context["image"] ?? null), "html", [0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_align", []))], "method");
            echo "
                ";
        }
        // line 25
        echo "            </div>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/aboutrov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  93 => 23,  91 => 22,  86 => 19,  77 => 17,  73 => 16,  69 => 15,  64 => 12,  55 => 10,  51 => 9,  47 => 8,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set image = page.media.images|first %}

<section id=\"modular-text\" class=\"section {{ page.header.class}} bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-7 col-sm-12\">
                <h2>{{ page.header.cont1.tittel }}</h2>
                {% for para in page.header.cont1.content %}
                <p><h5>{{ para.avsnitt }}</h5></p>
                {% endfor %}
            </div>
            <div class=\"float-right column col-5 col-sm-12\">
            <blockquote>
                <h3>{{ page.header.cont2.tittel }}</h3>
                {% for para in page.header.cont2.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
                </blockquote>
            </div>
            <div class=\"column col-6 col-md-12-auto\">
                {% if image %}
                    {{ image.html('','','align-'~page.header.image_align) }}
                {% endif %}
            </div>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
", "modular/aboutrov.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/modular/aboutrov.html.twig");
    }
}
