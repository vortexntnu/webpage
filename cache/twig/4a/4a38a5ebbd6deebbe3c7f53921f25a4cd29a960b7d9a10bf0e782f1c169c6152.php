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

/* modular/features.html.twig */
class __TwigTemplate_facf452daf59d7b7297c8b1f4e711a4fa68f2cbdfb440ffe837f8c4d339c1933 extends \Twig\Template
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
        $context["columns"] = ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []) == "small")) ? ("col-3 col-md-4 col-sm-6") : ("col-4 col-md-6 col-sm-12"));
        // line 3
        echo "<section id=\"modular-features\" class=\"section ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
        <section class=\"container ";
        // line 4
        echo ($context["grid_size"] ?? null);
        echo "\">
            <div class=\"frame-box\">

                ";
        // line 7
        echo ($context["content"] ?? null);
        echo "

                <div class=\"columns\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", []));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 11
            echo "                   <div class=\"column ";
            echo ($context["columns"] ?? null);
            echo "\">
                       <div class=\"feature-icon\">
                           <i class=\"fa fa-fw ";
            // line 13
            echo $this->getAttribute($context["feature"], "icon", []);
            echo "\"></i>
                           ";
            // line 14
            if ($this->getAttribute($context["feature"], "header", [])) {
                // line 15
                echo "                               <h6>";
                echo $this->getAttribute($context["feature"], "header", []);
                echo "</h6>
                           ";
            }
            // line 17
            echo "                       </div>
                       <div class=\"feature-content\">
                           ";
            // line 19
            if ($this->getAttribute($context["feature"], "text", [])) {
                // line 20
                echo "                            <p>";
                echo $this->getAttribute($context["feature"], "text", []);
                echo "</p>
                           ";
            }
            // line 22
            echo "                       </div>
                   </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </div>
            </div>
        </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  85 => 22,  79 => 20,  77 => 19,  73 => 17,  67 => 15,  65 => 14,  61 => 13,  55 => 11,  51 => 10,  45 => 7,  39 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
{% set columns = page.header.class == 'small' ? 'col-3 col-md-4 col-sm-6' : 'col-4 col-md-6 col-sm-12'  %}
<section id=\"modular-features\" class=\"section {{ page.header.class}}\">
        <section class=\"container {{ grid_size }}\">
            <div class=\"frame-box\">

                {{ content }}

                <div class=\"columns\">
                {% for feature in page.header.features %}
                   <div class=\"column {{ columns }}\">
                       <div class=\"feature-icon\">
                           <i class=\"fa fa-fw {{ feature.icon }}\"></i>
                           {% if feature.header %}
                               <h6>{{ feature.header }}</h6>
                           {% endif %}
                       </div>
                       <div class=\"feature-content\">
                           {% if feature.text %}
                            <p>{{ feature.text }}</p>
                           {% endif %}
                       </div>
                   </div>
                {% endfor %}
                </div>
            </div>
        </section>
</section>
", "modular/features.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/modular/features.html.twig");
    }
}
