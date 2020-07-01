<?php

/* modular/aboutrov.html.twig */
class __TwigTemplate_fe54a922c80d51ddb5ccbf0d079ea3c46b08608e996813dc5364b01a3bcd1517 extends Twig_Template
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
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-7 col-sm-12\">
                <h2>";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array());
        echo "</h2>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 10
            echo "                <p><h5>";
            echo $this->getAttribute($context["para"], "avsnitt", array());
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "tittel", array());
        echo "</h3>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 17
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", array());
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
            echo $this->getAttribute(($context["image"] ?? null), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_align", array()))), "method");
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
        return array (  88 => 25,  82 => 23,  80 => 22,  75 => 19,  66 => 17,  62 => 16,  58 => 15,  53 => 12,  44 => 10,  40 => 9,  36 => 8,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
", "modular/aboutrov.html.twig", "C:\\xampp\\htdocs\\user\\themes\\quark\\templates\\modular\\aboutrov.html.twig");
    }
}
