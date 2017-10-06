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
            'bottom' => array($this, 'block_bottom'),
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
        // line 76
        echo "</head>
<body id=\"top\" class=\"";
        // line 77
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    ";
        // line 78
        $this->loadTemplate("partials/navigation-overlay.html.twig", "partials/base-home.html.twig", 78)->display($context);
        // line 79
        echo "    <div id=\"sb-site\">
        ";
        // line 80
        $this->displayBlock('header', $context, $blocks);
        // line 83
        echo "
       <!--  ";
        // line 84
        $this->displayBlock('showcase', $context, $blocks);
        echo " -->

        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "    </div>

    <!--
     KIND OF A SIDEBAR? 
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        //{ /% /include 'partials/navigation.html.twig' %}
        </div>
    </div> 
    ";
        // line 119
        $this->displayBlock('bottom', $context, $blocks);
        // line 131
        echo "-->
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
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- facebook tags -->
    <meta property=\"og:description\" content=\"Refuge takes place in a war torn world, in a nation in chaos. Citizens are arrested by the military and executed for minor offences every day. The player takes control of Sayid, who gets arrested for missing curfew and finds himself leading a small group of refugees when they are forced to run to escape execution. \">
    <meta property=\"og:image\" content=\"https://www.refugethegame.com/social/social-facebook-squared.png\">
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
        // line 46
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 61
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 47
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 48
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 49
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 50
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/blog.css", 1 => 100), "method");
        // line 51
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 52
        echo "
        ";
        // line 53
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 54
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 55
            echo "        ";
        }
        // line 56
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 57
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 58
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 59
            echo "        ";
        }
        // line 60
        echo "    ";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 65
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 66
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed/typed.js"), "method");
        // line 67
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed/initializer.js"), "method");
        // line 68
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/typed/html-parser.js"), "method");
        // line 69
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 70
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imageSlider.js"), "method");
        // line 71
        echo "
    ";
    }

    // line 80
    public function block_header($context, array $blocks = array())
    {
        // line 81
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base-home.html.twig", 81)->display($context);
        // line 82
        echo "        ";
    }

    // line 84
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "        </section>
        ";
    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
    }

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        echo "        <footer id=\"footer\">

            <div class=\"symbol\"></div>
            <p class=\"downloadNow\">Download it now</p>
            
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

    // line 119
    public function block_bottom($context, array $blocks = array())
    {
        // line 120
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
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
        return array (  303 => 120,  300 => 119,  280 => 93,  277 => 92,  272 => 88,  267 => 89,  265 => 88,  260 => 87,  257 => 86,  252 => 84,  248 => 82,  245 => 81,  242 => 80,  237 => 71,  234 => 70,  231 => 69,  228 => 68,  225 => 67,  222 => 66,  219 => 65,  216 => 64,  213 => 63,  209 => 60,  206 => 59,  203 => 58,  200 => 57,  197 => 56,  194 => 55,  191 => 54,  189 => 53,  186 => 52,  183 => 51,  180 => 50,  177 => 49,  174 => 48,  171 => 47,  168 => 46,  160 => 73,  158 => 63,  152 => 61,  150 => 46,  142 => 41,  138 => 40,  129 => 38,  97 => 8,  95 => 7,  92 => 6,  89 => 5,  82 => 131,  80 => 119,  69 => 110,  67 => 92,  64 => 91,  62 => 86,  57 => 84,  54 => 83,  52 => 80,  49 => 79,  47 => 78,  43 => 77,  40 => 76,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
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
    <meta property=\"og:image\" content=\"https://www.refugethegame.com/social/social-facebook-squared.png\">
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

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">



    {% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
        {% do assets.addCss('theme://css-compiled/nucleus.css', 102) %}
        {% do assets.addCss('theme://css-compiled/template.css', 101) %}
        {% do assets.addCss('theme://css/blog.css', 100) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/typed/typed.js') %}
        {% do assets.addJs('theme://js/typed/initializer.js') %}
        {% do assets.addJs('theme://js/typed/html-parser.js') %}
        {% do assets.addJs('theme://js/main.js') %}
        {% do assets.addJs('theme://js/imageSlider.js') %}

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
            <p class=\"downloadNow\">Download it now</p>
            
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

    <!--
     KIND OF A SIDEBAR? 
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        //{ /% /include 'partials/navigation.html.twig' %}
        </div>
    </div> 
    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}-->
</body>
</html>
", "partials/base-home.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/base-home.html.twig");
    }
}
