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

/* modular/rovs.html.twig */
class __TwigTemplate_0f0e4f9ab6fa3a97ce541a6d80ded625ebb7dd4975c19318a3cab3fb7afef349 extends \Twig\Template
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
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "
<section id=\"modular-text\" class=\"section ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo " bg-gray\">
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-7 col-sm-12\">
            <ul class=\"tab tab-block\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "items", []));
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
                <!-- <h2>";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "tittel", []);
        echo "</h2>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont1", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 17
            echo "                <p><h5>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</h5></p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " -->

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "years", []));
        foreach ($context['_seq'] as $context["_key"] => $context["cont"]) {
            // line 21
            echo "<div id=\"";
            echo $this->getAttribute($context["cont"], "year", []);
            echo "\" class=\"tabcontent\" style=\"display:none;\">
    <h3>";
            // line 22
            echo $this->getAttribute($context["cont"], "year", []);
            echo " - ";
            echo $this->getAttribute($context["cont"], "tittel", []);
            echo "</h3>
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cont"], "content", []));
            foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
                // line 24
                echo "        <p>";
                echo $this->getAttribute($context["para"], "avsnitt", []);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cont'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "<!-- <div id=\"2017\" class=\"tabcontent\" style=\"display:none;\">
  <h3>2017</h3>
  <p>London is the capital city of England.</p>
</div> -->
</div>

<div class=\"slick-slider float-right column col-5 col-sm-12\">
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "slides", []));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 36
            echo "    <div><img src='";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $context["slide"], [], "array"), "url", []);
            echo "'/></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </div>

<script type=\"text/javascript\">
    \$(document).ready(function(){
      \$('.slick-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        adaptiveHeight: true,
      });
    });
  </script>
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
            
            <!-- <div class=\"float-right column col-5 col-sm-12\">
            <blockquote>
                <h3>";
        // line 76
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "tittel", []);
        echo "</h3>
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cont2", []), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["para"]) {
            // line 78
            echo "                <p>";
            echo $this->getAttribute($context["para"], "avsnitt", []);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['para'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </blockquote>
            </div>
            <div class=\"column col-6 col-md-12-auto\">
                ";
        // line 83
        if (($context["image"] ?? null)) {
            // line 84
            echo "                    ";
            echo $this->getAttribute(($context["image"] ?? null), "html", [0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_align", []))], "method");
            echo "
                ";
        }
        // line 86
        echo "            </div> -->
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/rovs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 86,  211 => 84,  209 => 83,  204 => 80,  195 => 78,  191 => 77,  187 => 76,  147 => 38,  138 => 36,  134 => 35,  125 => 28,  118 => 26,  109 => 24,  105 => 23,  99 => 22,  94 => 21,  90 => 20,  86 => 18,  77 => 17,  73 => 16,  69 => 15,  66 => 14,  57 => 11,  52 => 10,  48 => 9,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
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
{% set image = page.media.images|first %}

<section id=\"modular-text\" class=\"section {{ page.header.class}} bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-7 col-sm-12\">
            <ul class=\"tab tab-block\">
                {% for item in page.header.items %}
                    <li class=\"tab-item\" style=\"cursor: pointer;\" onclick=\"openCity(event, '{{ item }}')\">
                    <a>{{ item }}</a>
                    </li>
                {% endfor %}
            </ul>
                <!-- <h2>{{ page.header.cont1.tittel }}</h2>
                {% for para in page.header.cont1.content %}
                <p><h5>{{ para.avsnitt }}</h5></p>
                {% endfor %} -->

{% for cont in page.header.years %}
<div id=\"{{ cont.year }}\" class=\"tabcontent\" style=\"display:none;\">
    <h3>{{ cont.year }} - {{ cont.tittel }}</h3>
    {% for para in cont.content %}
        <p>{{ para.avsnitt }}</p>
    {% endfor %}
  </div>
{% endfor %}
<!-- <div id=\"2017\" class=\"tabcontent\" style=\"display:none;\">
  <h3>2017</h3>
  <p>London is the capital city of England.</p>
</div> -->
</div>

<div class=\"slick-slider float-right column col-5 col-sm-12\">
    {% for slide in page.header.slides %}
    <div><img src='{{ page.media[slide].url }}'/></div>
    {% endfor %}
  </div>

<script type=\"text/javascript\">
    \$(document).ready(function(){
      \$('.slick-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        dots: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        adaptiveHeight: true,
      });
    });
  </script>
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
            
            <!-- <div class=\"float-right column col-5 col-sm-12\">
            <blockquote>
                <h3>{{ page.header.cont2.tittel }}</h3>
                {% for para in page.header.cont2.content %}
                <p>{{ para.avsnitt }}</p>
                {% endfor %}
                </blockquote>
            </div>
            <div class=\"column col-6 col-md-12-auto\">
                {% if image %}
                    {{ image.html('','','align-'~page.header.image_align) }}
                {% endif %}
            </div> -->
        </div>
        <div class=\"divider\"></div>
    </section>
</section>
", "modular/rovs.html.twig", "/Library/WebServer/Documents/vortex-master/user/themes/quark/templates/modular/rovs.html.twig");
    }
}
