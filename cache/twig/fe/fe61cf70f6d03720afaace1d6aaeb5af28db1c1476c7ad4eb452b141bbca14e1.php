<?php

/* partials/base-home.html.twig */
class __TwigTemplate_ecdd703438dd54272a73fbf397794e83472ff6bff791f542081da6ed65b4b60c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 61
        echo "</head>
<body id=\"top\" class=\"";
        // line 62
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    ";
        // line 63
        $this->loadTemplate("partials/navigation-overlay.html.twig", "partials/base-home.html.twig", 63)->display($context);
        // line 64
        echo "    <div id=\"sb-site\">
        ";
        // line 65
        $this->displayBlock('header', $context, $blocks);
        // line 68
        echo "
       <!--  ";
        // line 69
        $this->displayBlock('showcase', $context, $blocks);
        echo " -->

        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 102
        echo "    </div>
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base-home.html.twig", 7)->display($context);
        // line 8
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
        // line 38
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>

    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\" />
    <link rel=\"canonical\" href=\"";
        // line 41
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\" async>

    ";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 45
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/home.css", 1 => 100), "method");
        // line 46
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 47
        echo "    ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 53
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed/typed.min.js"), "method");
        // line 54
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.min.js"), "method");
        // line 55
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imageSlider.min.js"), "method");
        // line 56
        echo "
    ";
    }

    // line 65
    public function block_header($context, array $blocks = array())
    {
        // line 66
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base-home.html.twig", 66)->display($context);
        // line 67
        echo "        ";
    }

    // line 69
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "        </section>
        ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "        <footer id=\"footer\">

            <div class=\"symbol\"></div>
            <p class=\"downloadNow\">Available this December</p>
            
            <div class=\"downloadBtns\">
                <a href=\"http://steamcommunity.com/id/refugethegame/\" rel=\"noopener\" target=\"_blank\" title=\"Available on Steam\" class=\"downloadBtn steam steamFooter\">refugethegame</a>
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
        return "partials/base-home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 78,  219 => 77,  214 => 73,  209 => 74,  207 => 73,  202 => 72,  199 => 71,  194 => 69,  190 => 67,  187 => 66,  184 => 65,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  167 => 52,  164 => 51,  160 => 47,  157 => 46,  154 => 45,  151 => 44,  143 => 58,  141 => 51,  136 => 49,  133 => 48,  131 => 44,  125 => 41,  115 => 38,  83 => 8,  81 => 7,  78 => 6,  75 => 5,  68 => 102,  66 => 77,  63 => 76,  61 => 71,  56 => 69,  53 => 68,  51 => 65,  48 => 64,  46 => 63,  42 => 62,  39 => 61,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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

    <link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\" async>

    {% block stylesheets %}
        {% do assets.addCss('theme://css/home.css', 100) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
    {% endblock %}

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
            {% include 'partials/header.html.twig' %}
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
                <a href=\"http://steamcommunity.com/id/refugethegame/\" rel=\"noopener\" target=\"_blank\" title=\"Available on Steam\" class=\"downloadBtn steam steamFooter\">refugethegame</a>
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
", "partials/base-home.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/base-home.html.twig");
    }
}
