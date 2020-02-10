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

/* partials/navigation.html.twig */
class __TwigTemplate_b99798fe3aeb21ace0bcfb3ec6a2cf67faf9be89dc1484c11e3178168cb8cf78 extends \Twig\Template
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
        // line 22
        echo "
<ul ";
        // line 23
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 24
        echo $this->getAttribute($this, "nav_loop", [0 => ($context["pages"] ?? null)], "method");
        echo "
</ul>

";
    }

    // line 1
    public function getnav_loop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "            <li>
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <ul>
                    ";
                    // line 10
                    echo $this->getAttribute($this, "nav_loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 14
                    echo "            <li>
                <a href=\"";
                    // line 15
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page"] ?? null);
                    echo "\">
                    ";
                    // line 16
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  99 => 16,  93 => 15,  90 => 14,  83 => 10,  77 => 7,  71 => 6,  68 => 5,  65 => 4,  62 => 3,  57 => 2,  45 => 1,  37 => 24,  33 => 23,  30 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_loop(page) %}
    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages) }}
</ul>

", "partials/navigation.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/partials/navigation.html.twig");
    }
}
