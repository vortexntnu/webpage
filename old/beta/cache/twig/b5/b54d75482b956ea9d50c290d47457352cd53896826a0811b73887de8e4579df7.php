<?php

/* partials/google-maps.html.twig */
class __TwigTemplate_820430a0f546bac10bab7093b81b0f7fafc54cf5ad0b2cedac9ff4fe7a9dd39b extends Twig_Template
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
        echo ($context["hash"] ?? null);
        echo "\" class=\"google-map\" style=\"width: ";
        echo ($context["width"] ?? null);
        echo "; height: ";
        echo ($context["height"] ?? null);
        echo "\"
     data-lat=\"";
        // line 2
        echo ($context["lat"] ?? null);
        echo "\"
     data-lng=\"";
        // line 3
        echo ($context["lng"] ?? null);
        echo "\"
     data-zoom=\"";
        // line 4
        echo ($context["zoom"] ?? null);
        echo "\"
     data-scrollwheel=\"";
        // line 5
        echo ($context["scrollwheel"] ?? null);
        echo "\"
     data-draggable=\"";
        // line 6
        echo ($context["draggable"] ?? null);
        echo "\"
     data-pancontrol=\"";
        // line 7
        echo ($context["pancontrol"] ?? null);
        echo "\"
     data-iconurl=\"";
        // line 8
        echo ($context["iconurl"] ?? null);
        echo "\"
     data-infowindow=\"";
        // line 9
        echo ($context["infowindow"] ?? null);
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
", "partials/google-maps.html.twig", "C:\\xampp\\htdocs\\user\\plugins\\google-maps\\templates\\partials\\google-maps.html.twig");
    }
}
