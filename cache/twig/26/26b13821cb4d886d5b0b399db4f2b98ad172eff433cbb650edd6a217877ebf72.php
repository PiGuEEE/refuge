<?php

/* partials/blog_item_read.html.twig */
class __TwigTemplate_021c5d441b4ae7c134a6faf3fb318287dc153f94c4c3c3c66c22adc39fb998b1 extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header blog-read\">
        ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 10
            echo "            <h4 class=\"p-name\">
                ";
            // line 11
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 12
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 14
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 17
            echo "            <h4 class=\"p-name\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 19
        echo "        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 20
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "c");
        echo "\">
                <span>";
        // line 21
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d/m/y");
        echo "</span>
            </time>
        </span>

        ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 26
            echo "        <span class=\"tags\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 28
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </span>
        ";
        }
        // line 32
        echo "        <div class=\"image-container\">
            ";
        // line 33
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 34
            echo "                ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 35
                echo "                    ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 36
                echo "                ";
            } else {
                // line 37
                echo "                    ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 38
                echo "                ";
            }
            // line 39
            echo "                ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
            ";
        }
        // line 41
        echo "        </div>

    </div>

    <div class=\"list-blog-padding\">

        <div class=\"blogText\">        
            ";
        // line 48
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>

        ";
        // line 51
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 52
            echo "
            <p class=\"prev-next\">
                ";
            // line 54
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 55
                echo "                    <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "</a>
                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 59
                echo "                    <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
                ";
            }
            // line 61
            echo "            </p>
        ";
        }
        // line 63
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item_read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 63,  179 => 61,  171 => 59,  169 => 58,  166 => 57,  158 => 55,  156 => 54,  152 => 52,  150 => 51,  144 => 48,  135 => 41,  129 => 39,  126 => 38,  123 => 37,  120 => 36,  117 => 35,  114 => 34,  112 => 33,  109 => 32,  105 => 30,  91 => 28,  87 => 27,  84 => 26,  82 => 25,  75 => 21,  71 => 20,  68 => 19,  60 => 17,  51 => 14,  45 => 12,  43 => 11,  40 => 10,  38 => 9,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header blog-read\">
        {% if page.header.link %}
            <h4 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h4>
        {% endif %}
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d/m/y\") }}</span>
            </time>
        </span>

        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        <div class=\"image-container\">
            {% if header_image %}
                {% if header_image_file %}
                    {% set header_image_media = page.media.images[header_image_file] %}
                {% else %}
                    {% set header_image_media = page.media.images|first %}
                {% endif %}
                {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
            {% endif %}
        </div>

    </div>

    <div class=\"list-blog-padding\">

        <div class=\"blogText\">        
            {{ page.content }}
        </div>

        {% if show_prev_next %}

            <p class=\"prev-next\">
                {% if not page.isFirst %}
                    <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ 'BLOG.ITEM.NEXT_POST'|t }}</a>
                {% endif %}

                {% if not page.isLast %}
                    <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'BLOG.ITEM.PREV_POST'|t }} <i class=\"fa fa-chevron-right\"></i></a>
                {% endif %}
            </p>
        {% endif %}

    </div>
</div>
", "partials/blog_item_read.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/blog_item_read.html.twig");
    }
}
