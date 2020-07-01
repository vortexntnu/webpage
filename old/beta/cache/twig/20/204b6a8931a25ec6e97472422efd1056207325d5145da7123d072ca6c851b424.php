<?php

/* modular/contact.html.twig */
class __TwigTemplate_73a5d5732f31547b354644c55e7b31bea9e79be3acec21a7ee2899d06244056d extends Twig_Template
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
            <div class=\"column col-4 col-md-12\">
                <p>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "adress", array());
        echo "</p>
                <p>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "sponsor", array());
        echo "</p>
            </div>
            <div class=\"float-right column col-8 col-md-12\">
                ";
        // line 12
        echo ($context["content"] ?? null);
        echo "
            </div>
        </div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  40 => 9,  36 => 8,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
            <div class=\"column col-4 col-md-12\">
                <p>{{ page.header.adress }}</p>
                <p>{{ page.header.sponsor }}</p>
            </div>
            <div class=\"float-right column col-8 col-md-12\">
                {{ content }}
            </div>
        </div>
    </section>
</section>
", "modular/contact.html.twig", "C:\\xampp\\htdocs\\user\\themes\\quark\\templates\\modular\\contact.html.twig");
    }
}
