<?php

/* modular/bronse.html.twig */
class __TwigTemplate_d8efde0f1830bc90142a69c4468df5b13d71c54b8df2eaa5b923baea007996a2 extends Twig_Template
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
    <h4>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h4>
    <section class=\"container ";
        // line 6
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-2 col-sm-2\">
                <h3>";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array());
        echo "</h3>
                ";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "img", array()), array(), "array"), "html", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "cont1", array()), "tittel", array()), 2 => "myclass"), "method");
        echo "
            </div>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/bronse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  40 => 9,  34 => 6,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
    <h4>{{ page.header.title }}</h4>
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-2 col-sm-2\">
                <h3>{{ page.header.cont1.tittel }}</h3>
                {{ page.media[page.header.cont1.img].html(page.header.cont1.tittel,page.header.cont1.tittel, 'myclass') }}
            </div>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>", "modular/bronse.html.twig", "/Library/WebServer/Documents/webpage/user/themes/quark/templates/modular/bronse.html.twig");
    }
}
