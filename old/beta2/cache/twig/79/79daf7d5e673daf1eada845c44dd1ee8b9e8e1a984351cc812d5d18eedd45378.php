<?php

/* partials/google-maps.html.twig */
class __TwigTemplate_88495836c9f77f856176a125ef7b4317fcf77cce6c7bd5aa2cbda8ff1ad5a4bc extends Twig_Template
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
        echo "<div id=\"map-";
        echo (isset($context["hash"]) ? $context["hash"] : null);
        echo "\" class=\"google-map\" style=\"width: ";
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "; height: ";
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\"
     data-lat=\"";
        // line 2
        echo (isset($context["lat"]) ? $context["lat"] : null);
        echo "\"
     data-lng=\"";
        // line 3
        echo (isset($context["lng"]) ? $context["lng"] : null);
        echo "\"
     data-zoom=\"";
        // line 4
        echo (isset($context["zoom"]) ? $context["zoom"] : null);
        echo "\"
     data-scrollwheel=\"";
        // line 5
        echo (isset($context["scrollwheel"]) ? $context["scrollwheel"] : null);
        echo "\"
     data-draggable=\"";
        // line 6
        echo (isset($context["draggable"]) ? $context["draggable"] : null);
        echo "\"
     data-pancontrol=\"";
        // line 7
        echo (isset($context["pancontrol"]) ? $context["pancontrol"] : null);
        echo "\"
     data-iconurl=\"";
        // line 8
        echo (isset($context["iconurl"]) ? $context["iconurl"] : null);
        echo "\"
     data-infowindow=\"";
        // line 9
        echo (isset($context["infowindow"]) ? $context["infowindow"] : null);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/google-maps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"map-{{ hash }}\" class=\"google-map\" style=\"width: {{ width }}; height: {{ height }}\"
     data-lat=\"{{ lat }}\"
     data-lng=\"{{ lng }}\"
     data-zoom=\"{{ zoom }}\"
     data-scrollwheel=\"{{ scrollwheel }}\"
     data-draggable=\"{{ draggable }}\"
     data-pancontrol=\"{{ pancontrol }}\"
     data-iconurl=\"{{ iconurl }}\"
     data-infowindow=\"{{ infowindow }}\">
</div>
", "partials/google-maps.html.twig", "/home/3/v/vortexntnu/www/beta/user/plugins/google-maps/templates/partials/google-maps.html.twig");
    }
}
