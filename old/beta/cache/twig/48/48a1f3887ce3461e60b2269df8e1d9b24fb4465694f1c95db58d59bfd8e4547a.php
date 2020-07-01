<?php

/* modular/teams.html.twig */
class __TwigTemplate_e0e513666a76af5670abf39d582186c641bbfe9ba8d13ff671fc58eed0542e91 extends Twig_Template
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
            <div class=\"column col-12 col-sm-12\">
            <ul class=\"tab tab-block\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                    <li class=\"tab-item\" style=\"cursor: pointer;\" onclick=\"openCity(event, '";
            echo $context["item"];
            echo "')\">
                    <a>";
            // line 11
            echo $context["item"];
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>

";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "years", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cont"]) {
            // line 17
            echo "<div id=\"";
            echo $this->getAttribute($context["cont"], "year", array());
            echo "\" class=\"tabcontent column col-12 col-sm-12\" style=\"display:none;\">
    <h3>Team ";
            // line 18
            echo $this->getAttribute($context["cont"], "year", array());
            echo "</h3>
    <p>";
            // line 19
            echo $this->getAttribute($context["cont"], "description", array());
            echo "</p>
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cont"], "content", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["gruppe"]) {
                // line 21
                echo "    <div id=\"wrapper\" style=\"display:table-cell;\">
        <div class=\"column col-3 col-sm-12 hide-sm\" style=\"vertical-align:top;display: inline-block;\">
            <img src='";
                // line 23
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "image", array()), array(), "array"), "url", array());
                echo "'/>
            <p><h6 style=\"padding-left: 1.5em;text-indent:-1.5em;\">";
                // line 24
                echo $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "name", array());
                echo "</h6>";
                echo $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "role", array());
                echo "<br>";
                echo $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "from", array());
                echo "</p>
        </div>
        <div class=\"float-right column col-9 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
            <h4>";
                // line 27
                echo $this->getAttribute($context["gruppe"], "title", array());
                echo "</h4>
            <p>";
                // line 28
                echo $this->getAttribute($context["gruppe"], "description", array());
                echo "</p>
            <div class=\"column col-3 col-sm-12 show-sm\" style=\"vertical-align:top;display: inline-block;\">
            <img src='";
                // line 30
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "image", array()), array(), "array"), "url", array());
                echo "'/>
            <p><h6 style=\"padding-left: 1.5em;text-indent:-1.5em;\">";
                // line 31
                echo $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "name", array());
                echo "</h6>";
                echo $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "role", array());
                echo "<br>";
                echo $this->getAttribute($this->getAttribute($context["gruppe"], "leader", array()), "from", array());
                echo "</p>
        </div>
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gruppe"], "members", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                    // line 34
                    echo "            <div class=\"column col-3 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
            <img src='";
                    // line 35
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["member"], "image", array()), array(), "array"), "url", array());
                    echo "'/>
            <p>";
                    // line 36
                    echo $this->getAttribute($context["member"], "name", array());
                    echo "<br><i>";
                    echo $this->getAttribute($context["member"], "role", array());
                    echo "</i><br><small>";
                    echo $this->getAttribute($context["member"], "from", array());
                    echo "</small></p>
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        </div>
    </div>
    <br>
    <div class=\"divider\"></div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gruppe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cont'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName(\"tabcontent\");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = \"none\";
                    }
                    tablinks = document.getElementsByClassName(\"tab-item\");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
                    }
                    document.getElementById(cityName).style.display = \"block\";
                    evt.currentTarget.className += \" active\";
                }
                
                // Get the element with id=\"defaultOpen\" and click on it
                document.getElementsByClassName(\"tab-item\")[0].click();
            </script>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/teams.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 46,  154 => 44,  144 => 39,  131 => 36,  127 => 35,  124 => 34,  120 => 33,  111 => 31,  107 => 30,  102 => 28,  98 => 27,  88 => 24,  84 => 23,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  63 => 17,  59 => 16,  55 => 14,  46 => 11,  41 => 10,  37 => 9,  30 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
            <div class=\"column col-12 col-sm-12\">
            <ul class=\"tab tab-block\">
                {% for item in page.header.items %}
                    <li class=\"tab-item\" style=\"cursor: pointer;\" onclick=\"openCity(event, '{{ item }}')\">
                    <a>{{ item }}</a>
                    </li>
                {% endfor %}
            </ul>

{% for cont in page.header.years %}
<div id=\"{{ cont.year }}\" class=\"tabcontent column col-12 col-sm-12\" style=\"display:none;\">
    <h3>Team {{ cont.year }}</h3>
    <p>{{ cont.description }}</p>
    {% for gruppe in cont.content %}
    <div id=\"wrapper\" style=\"display:table-cell;\">
        <div class=\"column col-3 col-sm-12 hide-sm\" style=\"vertical-align:top;display: inline-block;\">
            <img src='{{ page.media[gruppe.leader.image].url }}'/>
            <p><h6 style=\"padding-left: 1.5em;text-indent:-1.5em;\">{{ gruppe.leader.name }}</h6>{{ gruppe.leader.role }}<br>{{ gruppe.leader.from }}</p>
        </div>
        <div class=\"float-right column col-9 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
            <h4>{{ gruppe.title }}</h4>
            <p>{{ gruppe.description }}</p>
            <div class=\"column col-3 col-sm-12 show-sm\" style=\"vertical-align:top;display: inline-block;\">
            <img src='{{ page.media[gruppe.leader.image].url }}'/>
            <p><h6 style=\"padding-left: 1.5em;text-indent:-1.5em;\">{{ gruppe.leader.name }}</h6>{{ gruppe.leader.role }}<br>{{ gruppe.leader.from }}</p>
        </div>
            {% for member in gruppe.members %}
            <div class=\"column col-3 col-sm-12\" style=\"vertical-align:top;display: inline-block;\">
            <img src='{{ page.media[member.image].url }}'/>
            <p>{{ member.name }}<br><i>{{ member.role }}</i><br><small>{{ member.from }}</small></p>
            </div>
            {% endfor %}
        </div>
    </div>
    <br>
    <div class=\"divider\"></div>
    {% endfor %}
</div>
{% endfor %}


            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName(\"tabcontent\");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = \"none\";
                    }
                    tablinks = document.getElementsByClassName(\"tab-item\");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(\" active\", \"\");
                    }
                    document.getElementById(cityName).style.display = \"block\";
                    evt.currentTarget.className += \" active\";
                }
                
                // Get the element with id=\"defaultOpen\" and click on it
                document.getElementsByClassName(\"tab-item\")[0].click();
            </script>
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
", "modular/teams.html.twig", "C:\\xampp\\htdocs\\user\\themes\\quark\\templates\\modular\\teams.html.twig");
    }
}
