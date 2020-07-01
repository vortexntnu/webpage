<?php

/* modular/values.html.twig */
class __TwigTemplate_a2cfb48c88dec68e3c1b74f50aae4a74ed4ab69db09d6a7c2671ef4d5f63fc56 extends Twig_Template
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
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
        <div class=\"columns\">
        
            <div class=\"column col-4 col-sm-12\">
                <h3>";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array());
        echo "</h3>
                ";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "img", array()), array(), "array"), "html", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array()), 2 => "myclass"), "method");
        echo "
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 13
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", array());
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "tittel", array());
        echo "</h3>
                ";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "img", array()), array(), "array"), "html", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "tittel", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "tittel", array()), 2 => "myclass"), "method");
        echo "
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont2", array()), "content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 20
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", array());
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont3", array()), "tittel", array());
        echo "</h3>
                ";
        // line 25
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont3", array()), "img", array()), array(), "array"), "html", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont3", array()), "tittel", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont3", array()), "tittel", array()), 2 => "myclass"), "method");
        echo "
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont3", array()), "content", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 27
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", array());
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
        return array (  112 => 29,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 15,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  34 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
", "modular/values.html.twig", "C:\\xampp\\htdocs\\user\\themes\\quark\\templates\\modular\\values.html.twig");
    }
}
