<?php

/* modular/banner.html.twig */
class __TwigTemplate_7c4e4a5dd9a87395c96b7360fd6960053877949b3c74f5301323e0ec593ac489 extends Twig_Template
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
        $context["hero_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array())) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "hero_image", array()), array(), "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()))));
        // line 3
        echo "
";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["hero_image"] ?? null));
        echo "

";
        // line 6
        $this->loadTemplate("partials/banner.html.twig", "modular/banner.html.twig", 6)->display(array_merge($context, array("id" => "modular-hero")));
    }

    public function getTemplateName()
    {
        return "modular/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
{% set hero_image = page.header.hero_image ? page.media[page.header.hero_image] : page.media.images|first %}

{{ dump(hero_image) }}

{% include 'partials/banner.html.twig' with {id: 'modular-hero'} %}
", "modular/banner.html.twig", "C:\\xampp\\htdocs\\user\\themes\\quark\\templates\\modular\\banner.html.twig");
    }
}
