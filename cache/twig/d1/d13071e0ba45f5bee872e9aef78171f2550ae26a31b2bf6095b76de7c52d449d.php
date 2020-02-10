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

/* modular/main.html.twig */
class __TwigTemplate_7ea447b8997f592056e7608b7b04b19da5e04eef652302d73fe5a26e760978f9 extends \Twig\Template
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
        $context["hero_image"] = (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", [])) ? ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 3
        echo "
";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, ($context["hero_image"] ?? null));
        echo "

<div style=\"background-image: ";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "media_order", []), [], "array"), "url", []);
        echo ";height:auto;width=100%;\"><img src=\"";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "media_order", []), [], "array"), "url", []);
        echo "\" /></div>
";
    }

    public function getTemplateName()
    {
        return "modular/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
{% set hero_image = page.header.hero_image ? page.media[page.header.hero_image] : page.media.images|first %}

{{ dump(hero_image) }}

<div style=\"background-image: {{ page.media[page.header.media_order].url }};height:auto;width=100%;\"><img src=\"{{ page.media[page.header.media_order].url }}\" /></div>
", "modular/main.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/modular/main.html.twig");
    }
}
