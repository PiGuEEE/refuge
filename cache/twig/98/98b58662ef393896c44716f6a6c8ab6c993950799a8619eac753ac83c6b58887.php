<?php

/* partials/base-internal.html.twig */
class __TwigTemplate_a58fa2ca7690f9b65eab04071c7478c5404e30b0af7a16763909608f8f6c5d07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 59
        echo "</head>
<body id=\"top\" class=\"";
        // line 60
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    ";
        // line 61
        $this->loadTemplate("partials/navigation-overlay.html.twig", "partials/base-internal.html.twig", 61)->display($context);
        // line 62
        echo "    <div id=\"sb-site\">
        ";
        // line 63
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "
       <!--  ";
        // line 67
        $this->displayBlock('showcase', $context, $blocks);
        echo " -->

        ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 100
        echo "    </div>
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "   <meta charset=\"utf-8\" />
    ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base-internal.html.twig", 7)->display($context);
        // line 8
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\">

    <!-- facebook tags -->
    <meta property=\"og:description\" content=\"Refuge takes place in a war torn world, in a nation in chaos. Citizens are arrested by the military and executed for minor offences every day. The player takes control of Sayid, who gets arrested for missing curfew and finds himself leading a small group of refugees when they are forced to run to escape execution. \">
    <meta property=\"og:image\" content=\"http://www.refugethegame.com/user/themes/refuge-theme/img/facebook-image.png\">
    <meta property=\"og:locale:alternate\" content=\"en_AU\">
    <meta property=\"og:title\" content=\"Refuge, the game.\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:site_name\" content=\"Refuge\">
    <meta property=\"og:url\" content=\"https://www.refugethegame.com\">

    <!-- twitter -->
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:url\" content=\"https://www.refugethegame.com\">
    <meta name=\"twitter:title\" content=\"Refuge\">
    <meta name=\"twitter:description\" content=\"Refuge takes place in a war torn world, in a nation in chaos. Citizens are arrested by the military and executed for minor offences every day. The player takes control of Sayid, who gets arrested for missing curfew and finds himself leading a small group of refugees when they are forced to run to escape execution. \">
    <meta name=\"twitter:image\" content=\"\">

    <!-- g+ and schema.org -->
    <meta itemprop=\"name\" content=\"Refuge, the Game\">
    <meta itemprop=\"description\" content=\"Refuge takes place in a war torn world, in a nation in chaos. Citizens are arrested by the military and executed for minor offences every day. The player takes control of Sayid, who gets arrested for missing curfew and finds himself leading a small group of refugees when they are forced to run to escape execution. \">
    <meta itemprop=\"image\" content=\"\">

    <!-- iOS and safari -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Way360 Group\">

    <!-- android -->
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <title>";
        // line 37
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 38
        $this->loadTemplate("partials/metadata.html.twig", "partials/base-internal.html.twig", 38)->display($context);
        // line 39
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes\">
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\" />

    <link rel=\"canonical\" href=\"";
        // line 42
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">

    
    ";
        // line 46
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/blog.css", 1 => 100), "method");
        // line 47
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 48
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 52
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed/typed.min.js"), "method");
        // line 53
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.min.js"), "method");
        // line 54
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imageSlider.min.js"), "method");
        // line 55
        echo "    ";
    }

    // line 63
    public function block_header($context, array $blocks = array())
    {
        // line 64
        echo "            ";
        $this->loadTemplate("partials/header-internals.html.twig", "partials/base-internal.html.twig", 64)->display($context);
        // line 65
        echo "        ";
    }

    // line 67
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "        </section>
        ";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "        <footer id=\"footer\">

            <div class=\"symbol\"></div>
            <p class=\"downloadNow\">Available this December</p>
            
            <div class=\"downloadBtns\">
                <a href=\"#\" class=\"downloadBtn steam\">refugethegame</a>
                <a href=\"#\" class=\"downloadBtn itchio\">refugethegame</a>
            </div>

            <div class=\"line\"></div>

            <div class=\"copyright\">
                <p class=\"refuge\">Refuge</p>
                <p>Copyright 2017 - All rights reserved.</p>
            </div>

            <div class=\"social\">
                <a href=\"https://www.facebook.com/GetRefugeTheGame/\" class=\"facebook\" rel=\"noopener\" target=\"_blank\" title=\"Refuge on Facebook\"></a>
                <a href=\"https://twitter.com/refugethegame\" class=\"twitter\" rel=\"noopener\" target=\"_blank\" title=\"Refuge on Twitter\" ></a>
            </div>

        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "partials/base-internal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 76,  210 => 75,  205 => 71,  200 => 72,  198 => 71,  193 => 70,  190 => 69,  185 => 67,  181 => 65,  178 => 64,  175 => 63,  171 => 55,  168 => 54,  165 => 53,  162 => 52,  159 => 51,  156 => 50,  148 => 56,  146 => 50,  140 => 48,  137 => 47,  135 => 46,  128 => 42,  123 => 39,  121 => 38,  113 => 37,  82 => 8,  80 => 7,  77 => 6,  74 => 5,  67 => 100,  65 => 75,  62 => 74,  60 => 69,  55 => 67,  52 => 66,  50 => 63,  47 => 62,  45 => 61,  41 => 60,  38 => 59,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
   <meta charset=\"utf-8\" />
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes\">

    <!-- facebook tags -->
    <meta property=\"og:description\" content=\"Refuge takes place in a war torn world, in a nation in chaos. Citizens are arrested by the military and executed for minor offences every day. The player takes control of Sayid, who gets arrested for missing curfew and finds himself leading a small group of refugees when they are forced to run to escape execution. \">
    <meta property=\"og:image\" content=\"http://www.refugethegame.com/user/themes/refuge-theme/img/facebook-image.png\">
    <meta property=\"og:locale:alternate\" content=\"en_AU\">
    <meta property=\"og:title\" content=\"Refuge, the game.\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:site_name\" content=\"Refuge\">
    <meta property=\"og:url\" content=\"https://www.refugethegame.com\">

    <!-- twitter -->
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:url\" content=\"https://www.refugethegame.com\">
    <meta name=\"twitter:title\" content=\"Refuge\">
    <meta name=\"twitter:description\" content=\"Refuge takes place in a war torn world, in a nation in chaos. Citizens are arrested by the military and executed for minor offences every day. The player takes control of Sayid, who gets arrested for missing curfew and finds himself leading a small group of refugees when they are forced to run to escape execution. \">
    <meta name=\"twitter:image\" content=\"\">

    <!-- g+ and schema.org -->
    <meta itemprop=\"name\" content=\"Refuge, the Game\">
    <meta itemprop=\"description\" content=\"Refuge takes place in a war torn world, in a nation in chaos. Citizens are arrested by the military and executed for minor offences every day. The player takes control of Sayid, who gets arrested for missing curfew and finds himself leading a small group of refugees when they are forced to run to escape execution. \">
    <meta itemprop=\"image\" content=\"\">

    <!-- iOS and safari -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-title\" content=\"Way360 Group\">

    <!-- android -->
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes\">
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\" />

    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">

    
    {% do assets.addCss('theme://css/blog.css', 100) %}
    {% do assets.addCss('theme://css/custom.css', 100) %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/typed/typed.min.js') %}
        {% do assets.addJs('theme://js/main.min.js') %}
        {% do assets.addJs('theme://js/imageSlider.min.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    {% include 'partials/navigation-overlay.html.twig' %}
    <div id=\"sb-site\">
        {% block header %}
            {% include 'partials/header-internals.html.twig' %}
        {% endblock %}

       <!--  {% block showcase %}{% endblock %} -->

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\">

            <div class=\"symbol\"></div>
            <p class=\"downloadNow\">Available this December</p>
            
            <div class=\"downloadBtns\">
                <a href=\"#\" class=\"downloadBtn steam\">refugethegame</a>
                <a href=\"#\" class=\"downloadBtn itchio\">refugethegame</a>
            </div>

            <div class=\"line\"></div>

            <div class=\"copyright\">
                <p class=\"refuge\">Refuge</p>
                <p>Copyright 2017 - All rights reserved.</p>
            </div>

            <div class=\"social\">
                <a href=\"https://www.facebook.com/GetRefugeTheGame/\" class=\"facebook\" rel=\"noopener\" target=\"_blank\" title=\"Refuge on Facebook\"></a>
                <a href=\"https://twitter.com/refugethegame\" class=\"twitter\" rel=\"noopener\" target=\"_blank\" title=\"Refuge on Twitter\" ></a>
            </div>

        </footer>
        {% endblock %}
    </div>
</body>
</html>
", "partials/base-internal.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/base-internal.html.twig");
    }
}
