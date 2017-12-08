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
<body class=\"";
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
        ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('footer', $context, $blocks);
        // line 96
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
        echo "    <meta charset=\"utf-8\" />
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base-internal.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes\">

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
        // line 40
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 41
        $this->loadTemplate("partials/metadata.html.twig", "partials/base-internal.html.twig", 41)->display($context);
        // line 42
        echo "    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\" />

    <link rel=\"canonical\" href=\"";
        // line 44
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">

    
    ";
        // line 48
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 49
        echo "    
    ";
        // line 50
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        // line 53
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 54
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.min.js"), "method");
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
    public function block_body($context, array $blocks = array())
    {
        // line 68
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "        ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    // line 71
    public function block_footer($context, array $blocks = array())
    {
        // line 72
        echo "        
        <footer id=\"footer\">

            <div class=\"symbol\"></div>
            <p class=\"downloadNow\">Available this December</p>
            
            <div class=\"downloadBtns\">
                <a href=\"https://refuge.itch.io/\" target=\"_blank\" rel=\"noopener\" title=\"Available on Itch.io\" class=\"downloadBtn itchio itchFooter\">refuge</a>
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
        return array (  195 => 72,  192 => 71,  187 => 68,  183 => 69,  180 => 68,  177 => 67,  173 => 65,  170 => 64,  167 => 63,  163 => 55,  160 => 54,  157 => 53,  154 => 52,  146 => 56,  144 => 52,  139 => 50,  136 => 49,  134 => 48,  127 => 44,  123 => 42,  121 => 41,  113 => 40,  81 => 10,  79 => 9,  76 => 8,  74 => 7,  71 => 6,  68 => 5,  61 => 96,  59 => 71,  56 => 70,  54 => 67,  51 => 66,  49 => 63,  46 => 62,  44 => 61,  40 => 60,  37 => 59,  35 => 5,  30 => 3,  27 => 2,  25 => 1,);
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
    <meta charset=\"utf-8\" />
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=yes\">

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
    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\" />

    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">

    
    {% do assets.addCss('theme://css/custom.css', 100) %}
    
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/main.min.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body class=\"{{ page.header.body_classes }}\">
    {% include 'partials/navigation-overlay.html.twig' %}
    <div id=\"sb-site\">
        {% block header %}
            {% include 'partials/header-internals.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
        
        <footer id=\"footer\">

            <div class=\"symbol\"></div>
            <p class=\"downloadNow\">Available this December</p>
            
            <div class=\"downloadBtns\">
                <a href=\"https://refuge.itch.io/\" target=\"_blank\" rel=\"noopener\" title=\"Available on Itch.io\" class=\"downloadBtn itchio itchFooter\">refuge</a>
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
