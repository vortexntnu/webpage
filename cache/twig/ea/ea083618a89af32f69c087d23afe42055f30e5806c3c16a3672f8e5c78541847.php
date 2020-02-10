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

/* modular/story.html.twig */
class __TwigTemplate_a15655d06793756e7a598c7f966a3235a27a1ffee9b9c02de9437b6da4b2f6dc extends \Twig\Template
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
            <div class=\"column col-6 col-sm-12\">
                <h2>";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []);
        echo "</h2>
                ";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "img", []), [], "array"), "html", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []), 2 => "myclass"], "method");
        echo "
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 11
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </div>
            <div class=\"centered column col-4 col-sm-12\">
                ";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "img", []), [], "array"), "html", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "tittel", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "tittel", []), 2 => "myclass"], "method");
        echo "
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
        echo "                <br>
                ";
        // line 20
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "img", []), [], "array"), "html", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "tittel", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "tittel", []), 2 => "myclass"], "method");
        echo "
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 22
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </div>
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/story.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  100 => 22,  96 => 21,  92 => 20,  89 => 19,  80 => 17,  76 => 16,  72 => 15,  68 => 13,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
            <div class=\"column col-6 col-sm-12\">
                <h2>{{ page.header.cont1.tittel }}</h2>
                {{ page.media[page.header.cont1.img].html(page.header.cont1.tittel,page.header.cont1.tittel, 'myclass') }}
                {% for para in page.header.cont1.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
            </div>
            <div class=\"centered column col-4 col-sm-12\">
                {{ page.media[page.header.cont2.img].html(page.header.cont2.tittel,page.header.cont2.tittel, 'myclass') }}
                {% for para in page.header.cont2.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
                <br>
                {{ page.media[page.header.cont3.img].html(page.header.cont3.tittel,page.header.cont3.tittel, 'myclass') }}
                {% for para in page.header.cont3.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
            </div>
        </div>
    </section>
</section>
", "modular/story.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/modular/story.html.twig");
    }
}
