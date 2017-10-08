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
        // line 66
        echo "</head>
<body id=\"top\" class=\"";
        // line 67
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    ";
        // line 68
        $this->loadTemplate("partials/navigation-overlay.html.twig", "partials/base-internal.html.twig", 68)->display($context);
        // line 69
        echo "    <div id=\"sb-site\">
        ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
       <!--  ";
        // line 74
        $this->displayBlock('showcase', $context, $blocks);
        echo " -->

        ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
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
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

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
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 40
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 41
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">

    ";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/blog.css", 1 => 100), "method");
        // line 46
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 47
        echo "
        ";
        // line 48
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 49
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 50
            echo "        ";
        }
        // line 51
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 52
            echo "            
        ";
        }
        // line 54
        echo "    ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 59
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed/typed.min.js"), "method");
        // line 60
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.min.js"), "method");
        // line 61
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imageSlider.min.js"), "method");
        // line 62
        echo "    ";
    }

    // line 70
    public function block_header($context, array $blocks = array())
    {
        // line 71
        echo "            ";
        $this->loadTemplate("partials/header-internals.html.twig", "partials/base-internal.html.twig", 71)->display($context);
        // line 72
        echo "        ";
    }

    // line 74
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
        // line 77
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "        </section>
        ";
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        // line 83
        echo "        <footer id=\"footer\">

            <div class=\"symbol\"></div>
            <p class=\"downloadNow\">Available this December</p>
            
            <div class=\"downloadBtns\">
                <a href=\"#\" class=\"downloadBtn steam\">refugethegame</a>
                <a href=\"#\" class=\"downloadBtn itchio\">refugethegame</a>
            </div>

            <div class=\"copyright\">
                <p class=\"refuge\">Refuge</p>
                <p>Copyright 2017 - All rights reserved.</p>
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
        return array (  243 => 83,  240 => 82,  235 => 78,  230 => 79,  228 => 78,  223 => 77,  220 => 76,  215 => 74,  211 => 72,  208 => 71,  205 => 70,  201 => 62,  198 => 61,  195 => 60,  192 => 59,  189 => 58,  186 => 57,  182 => 54,  178 => 52,  175 => 51,  172 => 50,  169 => 49,  167 => 48,  164 => 47,  161 => 46,  158 => 45,  155 => 44,  147 => 63,  145 => 57,  139 => 55,  137 => 44,  131 => 41,  127 => 40,  124 => 39,  122 => 38,  114 => 37,  83 => 8,  81 => 7,  78 => 6,  75 => 5,  68 => 100,  66 => 82,  63 => 81,  61 => 76,  56 => 74,  53 => 73,  51 => 70,  48 => 69,  46 => 68,  42 => 67,  39 => 66,  37 => 5,  32 => 3,  29 => 2,  27 => 1,);
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css/blog.css', 100) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            
        {% endif %}
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

            <div class=\"copyright\">
                <p class=\"refuge\">Refuge</p>
                <p>Copyright 2017 - All rights reserved.</p>
            </div>

        </footer>
        {% endblock %}
    </div>
</body>
</html>
", "partials/base-internal.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/base-internal.html.twig");
    }
}
