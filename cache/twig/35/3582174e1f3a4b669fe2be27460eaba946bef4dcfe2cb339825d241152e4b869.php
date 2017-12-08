<?php

/* partials/navigation.html.twig */
class __TwigTemplate_19ea5c039e18d11ef3d48138cc5a67f03e97b422c143e8435b9e3bf3742dec50 extends Twig_Template
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
        echo "<div class=\"navigationTop\">
    <a href=\"http://www.refugethegame.com/\" class=\"logoWhite\"></a>
</div>

<ul class=\"navigation\">
    
    ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "dropdown", array()), "enabled", array())) {
            // line 8
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 11
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 12
                echo "            <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo " buttonBox\">
                <a href=\"";
                // line 13
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    <div class=\"button\">
                        ";
                // line 15
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 16
                echo "                        ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                    </div>
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 23
            echo "        <li>
            <div class=\"buttonBox\">
                <a href=\"";
            // line 25
            echo $this->getAttribute($context["mitem"], "url", array());
            echo " button\">
                    ";
            // line 26
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 27
            echo "                    ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
                </a>
            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</ul>

<div class=\"navigationBottom\">
    <div class=\"download\">
        <p>AVAILABLE THIS DECEMBER</p>
        <a href=\"#\" class=\"downloadLink itchio\"></a>
        <a href=\"#\" class=\"downloadLink steam\"></a>
    </div>
</div>";
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
        return array (  105 => 32,  93 => 27,  87 => 26,  83 => 25,  79 => 23,  74 => 22,  71 => 21,  59 => 16,  53 => 15,  48 => 13,  43 => 12,  40 => 11,  35 => 10,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navigationTop\">
    <a href=\"http://www.refugethegame.com/\" class=\"logoWhite\"></a>
</div>

<ul class=\"navigation\">
    
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }} buttonBox\">
                <a href=\"{{ page.url }}\">
                    <div class=\"button\">
                        {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                        {{ page.menu }}
                    </div>
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li>
            <div class=\"buttonBox\">
                <a href=\"{{ mitem.url }} button\">
                    {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                    {{ mitem.text }}
                </a>
            </div>
        </li>
    {% endfor %}

</ul>

<div class=\"navigationBottom\">
    <div class=\"download\">
        <p>AVAILABLE THIS DECEMBER</p>
        <a href=\"#\" class=\"downloadLink itchio\"></a>
        <a href=\"#\" class=\"downloadLink steam\"></a>
    </div>
</div>", "partials/navigation.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/navigation.html.twig");
    }
}
