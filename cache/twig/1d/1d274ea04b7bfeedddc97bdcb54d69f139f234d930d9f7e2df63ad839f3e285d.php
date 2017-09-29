<?php

/* home.html.twig */
class __TwigTemplate_e1ea4b6ea867660186e8128b9118112ff1c7cd33a61143fb720b021958c01da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->loadTemplate("home.html.twig", "home.html.twig", 6, "560455289")->display($context);
        // line 55
        echo "

";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    
    ";
        // line 3
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/home.css", 1 => 103), "method");
        // line 4
        echo "    
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 55,  22 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    
    {% do assets.addCss('theme://css/home.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-home.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<section class=\"mainHome\">
\t\t\t<figure class=\"symbolTop\"></figure>
\t\t\t<div class=\"mainContent\">
\t\t\t\t<div class=\"refugeSymbol\"></div>
\t\t\t\t<h1 class=\"refuge\">Refuge</h1>
\t\t\t\t<p class=\"by\">A VIDEOGAME BY NOT-YET</p>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"Download Now\">DOWNLOAD NOW</a>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"yourDecision\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t\t<div class=\"gameplay\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- <div class=\"blog-header\">
\t\t</div> -->

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}


", "home.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/home.html.twig");
    }
}


/* home.html.twig */
class __TwigTemplate_e1ea4b6ea867660186e8128b9118112ff1c7cd33a61143fb720b021958c01da0_560455289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("partials/base-home.html.twig", "home.html.twig", 6);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base-home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 12
        echo "
\t\t";
        // line 13
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 14
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 16
            echo "\t\t<section class=\"mainHome\">
\t\t\t<figure class=\"symbolTop\"></figure>
\t\t\t<div class=\"mainContent\">
\t\t\t\t<div class=\"refugeSymbol\"></div>
\t\t\t\t<h1 class=\"refuge\">Refuge</h1>
\t\t\t\t<p class=\"by\">A VIDEOGAME BY NOT-YET</p>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"Download Now\">DOWNLOAD NOW</a>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"yourDecision\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"gameplay\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- <div class=\"blog-header\">
\t\t</div> -->

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 44
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "home.html.twig", 44)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 45
            echo "\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                ";
        // line 47
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 48
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "home.html.twig", 48)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 49
            echo "                ";
        }
        // line 50
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 50,  248 => 49,  245 => 48,  243 => 47,  240 => 46,  226 => 45,  223 => 44,  206 => 43,  189 => 30,  173 => 16,  167 => 14,  165 => 13,  162 => 12,  159 => 11,  156 => 10,  152 => 6,  150 => 8,  136 => 6,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 55,  22 => 6,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    
    {% do assets.addCss('theme://css/home.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-home.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
\t\t{% else %}
\t\t<section class=\"mainHome\">
\t\t\t<figure class=\"symbolTop\"></figure>
\t\t\t<div class=\"mainContent\">
\t\t\t\t<div class=\"refugeSymbol\"></div>
\t\t\t\t<h1 class=\"refuge\">Refuge</h1>
\t\t\t\t<p class=\"by\">A VIDEOGAME BY NOT-YET</p>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"Download Now\">DOWNLOAD NOW</a>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"yourDecision\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t\t<div class=\"gameplay\">

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- <div class=\"blog-header\">
\t\t</div> -->

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t{% for child in collection %}
\t\t\t        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
\t\t\t    {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}


", "home.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/home.html.twig");
    }
}
