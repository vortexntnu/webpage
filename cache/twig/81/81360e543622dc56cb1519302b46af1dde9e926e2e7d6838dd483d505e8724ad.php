<?php

/* modular/hoved.html.twig */
class __TwigTemplate_c1ced19a9cea905b41938ba8e9b1c0626b6681002bafffaa5387b6a72f962e89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        echo "
<section id=\"modular-text\" class=\"section ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo " bg-gray\">
    <h2>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
    <section class=\"container ";
        // line 6
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-4 col-sm-12\">
                <h2>";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array());
        echo "</h2>
                ";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "img", array()), array(), "array"), "html", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array()), 2 => "myclass"), "method");
        echo "
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 12
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", array());
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </div>
            <div class=\"centered column col-6 col-sm-12\">
                ";
        // line 16
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "img", array()), array(), "array"), "html", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "tittel", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "tittel", array()), 2 => "myclass"), "method");
        echo "
            </div>
        </div>
    </section>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/hoved.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  61 => 14,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  34 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set grid_size = theme_var('grid-size') %}
{% set image = page.media.images|first %}

<section id=\"modular-text\" class=\"section {{ page.header.class}} bg-gray\">
    <h2>{{ page.header.title }}</h2>
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-4 col-sm-12\">
                <h2>{{ page.header.cont1.tittel }}</h2>
                {{ page.media[page.header.cont1.img].html(page.header.cont1.tittel,page.header.cont1.tittel, 'myclass') }}
                {% for para in page.header.cont1.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
            </div>
            <div class=\"centered column col-6 col-sm-12\">
                {{ page.media[page.header.cont2.img].html(page.header.cont2.tittel,page.header.cont2.tittel, 'myclass') }}
            </div>
        </div>
    </section>
</section>", "modular/hoved.html.twig", "/Library/WebServer/Documents/webpage/user/themes/quark/templates/modular/hoved.html.twig");
    }
}
