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

/* modular/values.html.twig */
class __TwigTemplate_5bec78309c92c0cadea3150574284d445bd0f1096b462bf70888ec216ac6d5b1 extends \Twig\Template
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
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>
        <div class=\"columns\">
        
            <div class=\"column col-4 col-sm-12\">
                <h3>";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []);
        echo "</h3>
                ";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "img", []), [], "array"), "html", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []), 2 => "myclass"], "method");
        echo "
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 13
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
            <div class=\"column col-4 col-sm-12\">
                <h3>";
        // line 17
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "tittel", []);
        echo "</h3>
                ";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "img", []), [], "array"), "html", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "tittel", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "tittel", []), 2 => "myclass"], "method");
        echo "
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 20
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
            <div class=\"column col-4 col-sm-12\">
                <h3>";
        // line 24
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "tittel", []);
        echo "</h3>
                ";
        // line 25
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "img", []), [], "array"), "html", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "tittel", []), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "tittel", []), 2 => "myclass"], "method");
        echo "
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont3", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 27
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/values.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 29,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  98 => 22,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 15,  64 => 13,  60 => 12,  56 => 11,  52 => 10,  45 => 6,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
    <h2>{{ page.header.title }}</h2>
        <div class=\"columns\">
        
            <div class=\"column col-4 col-sm-12\">
                <h3>{{ page.header.cont1.tittel }}</h3>
                {{ page.media[page.header.cont1.img].html(page.header.cont1.tittel,page.header.cont1.tittel, 'myclass') }}
                {% for para in page.header.cont1.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
            </div>
            <div class=\"column col-4 col-sm-12\">
                <h3>{{ page.header.cont2.tittel }}</h3>
                {{ page.media[page.header.cont2.img].html(page.header.cont2.tittel,page.header.cont2.tittel, 'myclass') }}
                {% for para in page.header.cont2.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
            </div>
            <div class=\"column col-4 col-sm-12\">
                <h3>{{ page.header.cont3.tittel }}</h3>
                {{ page.media[page.header.cont3.img].html(page.header.cont3.tittel,page.header.cont3.tittel, 'myclass') }}
                {% for para in page.header.cont3.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
            </div>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
", "modular/values.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/modular/values.html.twig");
    }
}
