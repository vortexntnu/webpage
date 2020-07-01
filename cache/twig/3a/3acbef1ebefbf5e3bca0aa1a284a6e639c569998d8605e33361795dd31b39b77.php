<?php

/* forms/fields/select/select.html.twig */
class __TwigTemplate_66c803fc3a4503d7128cca59c7aa53b717bc0e9940da4ca9498865a10e2aa903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/select/select.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", array(), "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    ";
        // line 5
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_input($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-select-wrapper")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
        echo "\">
        <select name=\"";
        // line 10
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["field"] ?? null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
        echo "\"
                class=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["form_field_select_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
        echo "\"
                ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 19
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "form", array())) {
            echo "form=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "form", array()), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "key", array())) {
            // line 22
            echo "                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                ";
        }
        // line 24
        echo "                >
            ";
        // line 25
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "<option value=\"\" disabled selected>";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            } else {
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            }
            echo "</option>";
        }
        // line 26
        echo "
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 28
            echo "                ";
            $context["selected"] = (($this->getAttribute(($context["field"] ?? null), "selectize", array())) ? ($context["text"]) : ($context["key"]));
            // line 29
            echo "                ";
            $context["item_value"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", array()) && $this->getAttribute(($context["field"] ?? null), "multiple", array()))) ? ($context["text"]) : ($context["key"]));
            // line 30
            echo "                <option ";
            if ((($context["key"] == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", array()) && twig_in_filter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["item_value"] ?? null), "html", null, true);
            echo "\">";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($context["text"]);
            } else {
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($context["text"]);
            }
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </select>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 32,  150 => 30,  147 => 29,  144 => 28,  140 => 27,  137 => 26,  127 => 25,  124 => 24,  118 => 22,  115 => 21,  108 => 20,  103 => 19,  98 => 18,  93 => 17,  88 => 16,  83 => 15,  78 => 14,  71 => 13,  65 => 12,  59 => 11,  55 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-select-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <select name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                class=\"{{ form_field_select_classes }} {{ field.classes }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.form %}form=\"{{ field.form }}\"{% endif %}
                {% if field.key %}
                    data-key-observe=\"{{ (scope ~ field.name)|fieldName }}\"
                {% endif %}
                >
            {% if field.placeholder %}<option value=\"\" disabled selected>{% if grav.twig.twig.filters['tu'] is defined %}{{ field.placeholder|tu|raw }}{% else %}{{ field.placeholder|t|raw }}{% endif %}</option>{% endif %}

            {% for key, text in field.options %}
                {% set selected = field.selectize ? text : key %}
                {% set item_value = field.selectize and field.multiple ? text : key %}
                <option {% if key == value or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ item_value }}\">{% if grav.twig.twig.filters['tu'] is defined %}{{ text|tu|raw }}{% else %}{{ text|t|raw }}{% endif %}</option>
            {% endfor %}
        </select>
    </div>
{% endblock %}
", "forms/fields/select/select.html.twig", "/home/3/v/vortexntnu/www/user/plugins/form/templates/forms/fields/select/select.html.twig");
    }
}
