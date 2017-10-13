<?php

/* home.html.twig */
class __TwigTemplate_16b7ccf9b14fbeef31ada4e2190cce8b104e691958039ef9ef30bdedaa66af47 extends Twig_Template
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
        $this->loadTemplate("home.html.twig", "home.html.twig", 6, "1638730457")->display($context);
        // line 101
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
        return array (  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 101,  22 => 6,  20 => 1,);
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
\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\"></div>
\t\t{% endif %}
\t\t<section class=\"mainHome\">
\t\t\t<video autoplay id=\"videoViewport\" loop class=\"videoBg\" src=\"user/themes/refuge-theme/video/refuge-every-journey-ends.mp4\"></video>
\t\t\t<figure class=\"symbolTop\"></figure>
\t\t\t<div class=\"mainContent\">
\t\t\t\t<div class=\"refugeSymbol\"></div>
\t\t\t\t<h1 class=\"refuge\" id=\"mainRefuge\"></h1>
\t\t\t\t<h2 class=\"refuge smaller\" id=\"secondRefuge\"></h2>
\t\t\t\t<p class=\"by\" id=\"by\"></p>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"Download Now\">DOWNLOAD NOW</a>
\t\t\t</div>
\t\t\t<div class=\"keepExploring\">
\t\t\t\t<div class=\"arrowDown\"></div>
\t\t\t\t<div class=\"arrowDownSmall\"></div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"yourDecision\">
       \t\t
       \t\t{% include 'partials/header-internals.html.twig' %}
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"gameplayBox\">
\t\t\t\t\t<div class=\"gameplay\">
\t\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" title=\"Refuge Trailer\" src=\"https://www.youtube.com/embed/cC0YUB8Lx0Y?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"button moreGameplay\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\">
\t\t\t
\t\t\t</div>
\t\t</section>

\t\t{% include 'partials/image-slider.html.twig' %}

\t\t{% include 'the-game.html.twig' %}

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

\t\t<script>
\t\t    (function(h,o,t,j,a,r){
\t\t        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
\t\t        h._hjSettings={hjid:654180,hjsv:6};
\t\t        a=o.getElementsByTagName('head')[0];
\t\t        r=o.createElement('script');r.async=1;
\t\t        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
\t\t        a.appendChild(r);
\t\t    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
\t\t</script>

\t{% endblock %}

\t{% block javascripts %}

        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/typed/typed.min.js') %}
        {% do assets.addJs('theme://js/main.min.js') %}
        {% do assets.addJs('theme://js/imageSlider.min.js') %}
        {% do assets.addJs('theme://js/home.min.js') %}

    {% endblock %}\t


{% endembed %}


", "home.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/home.html.twig");
    }
}


/* home.html.twig */
class __TwigTemplate_16b7ccf9b14fbeef31ada4e2190cce8b104e691958039ef9ef30bdedaa66af47_1638730457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("partials/base-home.html.twig", "home.html.twig", 6);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
            echo "\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\"></div>
\t\t";
        }
        // line 16
        echo "\t\t<section class=\"mainHome\">
\t\t\t<video autoplay id=\"videoViewport\" loop class=\"videoBg\" src=\"user/themes/refuge-theme/video/refuge-every-journey-ends.mp4\"></video>
\t\t\t<figure class=\"symbolTop\"></figure>
\t\t\t<div class=\"mainContent\">
\t\t\t\t<div class=\"refugeSymbol\"></div>
\t\t\t\t<h1 class=\"refuge\" id=\"mainRefuge\"></h1>
\t\t\t\t<h2 class=\"refuge smaller\" id=\"secondRefuge\"></h2>
\t\t\t\t<p class=\"by\" id=\"by\"></p>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"Download Now\">DOWNLOAD NOW</a>
\t\t\t</div>
\t\t\t<div class=\"keepExploring\">
\t\t\t\t<div class=\"arrowDown\"></div>
\t\t\t\t<div class=\"arrowDownSmall\"></div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"yourDecision\">
       \t\t
       \t\t";
        // line 34
        $this->loadTemplate("partials/header-internals.html.twig", "home.html.twig", 34)->display($context);
        // line 35
        echo "\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 39
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"gameplayBox\">
\t\t\t\t\t<div class=\"gameplay\">
\t\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" title=\"Refuge Trailer\" src=\"https://www.youtube.com/embed/cC0YUB8Lx0Y?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"button moreGameplay\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\">
\t\t\t
\t\t\t</div>
\t\t</section>

\t\t";
        // line 57
        $this->loadTemplate("partials/image-slider.html.twig", "home.html.twig", 57)->display($context);
        // line 58
        echo "
\t\t";
        // line 59
        $this->loadTemplate("the-game.html.twig", "home.html.twig", 59)->display($context);
        // line 60
        echo "
\t\t<!-- <div class=\"blog-header\">
\t\t</div> -->

\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
\t\t\t\t";
        // line 66
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
            // line 67
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "home.html.twig", 67)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 68
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
        // line 69
        echo "
                ";
        // line 70
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 71
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "home.html.twig", 71)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 72
            echo "                ";
        }
        // line 73
        echo "\t\t\t</div>
\t\t</div>

\t\t<script>
\t\t    (function(h,o,t,j,a,r){
\t\t        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
\t\t        h._hjSettings={hjid:654180,hjsv:6};
\t\t        a=o.getElementsByTagName('head')[0];
\t\t        r=o.createElement('script');r.async=1;
\t\t        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
\t\t        a.appendChild(r);
\t\t    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
\t\t</script>

\t";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "
        ";
        // line 91
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 92
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed/typed.min.js"), "method");
        // line 93
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.min.js"), "method");
        // line 94
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imageSlider.min.js"), "method");
        // line 95
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/home.min.js"), "method");
        // line 96
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
        return array (  367 => 96,  364 => 95,  361 => 94,  358 => 93,  355 => 92,  353 => 91,  350 => 90,  347 => 89,  329 => 73,  326 => 72,  323 => 71,  321 => 70,  318 => 69,  304 => 68,  301 => 67,  284 => 66,  276 => 60,  274 => 59,  271 => 58,  269 => 57,  248 => 39,  242 => 35,  240 => 34,  220 => 16,  214 => 14,  212 => 13,  209 => 12,  206 => 11,  203 => 10,  199 => 6,  197 => 8,  182 => 6,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 101,  22 => 6,  20 => 1,);
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
\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\"></div>
\t\t{% endif %}
\t\t<section class=\"mainHome\">
\t\t\t<video autoplay id=\"videoViewport\" loop class=\"videoBg\" src=\"user/themes/refuge-theme/video/refuge-every-journey-ends.mp4\"></video>
\t\t\t<figure class=\"symbolTop\"></figure>
\t\t\t<div class=\"mainContent\">
\t\t\t\t<div class=\"refugeSymbol\"></div>
\t\t\t\t<h1 class=\"refuge\" id=\"mainRefuge\"></h1>
\t\t\t\t<h2 class=\"refuge smaller\" id=\"secondRefuge\"></h2>
\t\t\t\t<p class=\"by\" id=\"by\"></p>
\t\t\t\t<a href=\"#\" class=\"button\" title=\"Download Now\">DOWNLOAD NOW</a>
\t\t\t</div>
\t\t\t<div class=\"keepExploring\">
\t\t\t\t<div class=\"arrowDown\"></div>
\t\t\t\t<div class=\"arrowDownSmall\"></div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"yourDecision\">
       \t\t
       \t\t{% include 'partials/header-internals.html.twig' %}
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"gameplayBox\">
\t\t\t\t\t<div class=\"gameplay\">
\t\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" title=\"Refuge Trailer\" src=\"https://www.youtube.com/embed/cC0YUB8Lx0Y?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"button moreGameplay\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\">
\t\t\t
\t\t\t</div>
\t\t</section>

\t\t{% include 'partials/image-slider.html.twig' %}

\t\t{% include 'the-game.html.twig' %}

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

\t\t<script>
\t\t    (function(h,o,t,j,a,r){
\t\t        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
\t\t        h._hjSettings={hjid:654180,hjsv:6};
\t\t        a=o.getElementsByTagName('head')[0];
\t\t        r=o.createElement('script');r.async=1;
\t\t        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
\t\t        a.appendChild(r);
\t\t    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
\t\t</script>

\t{% endblock %}

\t{% block javascripts %}

        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/typed/typed.min.js') %}
        {% do assets.addJs('theme://js/main.min.js') %}
        {% do assets.addJs('theme://js/imageSlider.min.js') %}
        {% do assets.addJs('theme://js/home.min.js') %}

    {% endblock %}\t


{% endembed %}


", "home.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/home.html.twig");
    }
}
