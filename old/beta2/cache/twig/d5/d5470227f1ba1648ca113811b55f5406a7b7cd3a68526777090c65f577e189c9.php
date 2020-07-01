<?php

/* partials/banner.html.twig */
class __TwigTemplate_a438164f8a57af5cbf829220f88dcf108a2385d3e83fa7ac3ce81b08f2564382 extends Twig_Template
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
        echo "<section id=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" class=\"section hero ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "hero_classes", array());
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "background", array()), "parallax", array())) ? ("parallax") : (""));
        echo "\" ";
        if ((isset($context["hero_image"]) ? $context["hero_image"] : null)) {
            echo "style=\"background-image: url(";
            echo $this->getAttribute((isset($context["hero_image"]) ? $context["hero_image"] : null), "url", array());
            echo ");\"";
        }
        echo ">
    <div class=\"image-overlay\"></div>
    <section class=\"container\" style=\"text-align: ";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "hero_align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "hero_align", array()), "center")) : ("center"));
        echo "\">
      <span class=\"text-light\">  ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo " </span>
    </section>
    
</section>";
    }

    public function getTemplateName()
    {
        return "partials/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"{{ id }}\" class=\"section hero {{ page.header.hero_classes }} {{ page.header.background.parallax ? 'parallax' : '' }}\" {% if hero_image %}style=\"background-image: url({{ hero_image.url }});\"{% endif %}>
    <div class=\"image-overlay\"></div>
    <section class=\"container\" style=\"text-align: {{ page.header.hero_align|default('center') }}\">
      <span class=\"text-light\">  {{ content }} </span>
    </section>
    
</section>", "partials/banner.html.twig", "/home/3/v/vortexntnu/www/beta/user/themes/quark/templates/partials/banner.html.twig");
    }
}
