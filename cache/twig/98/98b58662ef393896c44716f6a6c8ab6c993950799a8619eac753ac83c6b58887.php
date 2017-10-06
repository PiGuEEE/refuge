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
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "
       <!--  ";
        // line 46
        $this->displayBlock('showcase', $context, $blocks);
        echo " -->

        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "    </div>

    <!--
     KIND OF A SIDEBAR? 
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        //{ /% /include 'partials/navigation.html.twig' %}
        </div>
    </div> 
    ";
        // line 81
        $this->displayBlock('bottom', $context, $blocks);
        // line 93
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
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base-internal.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=VT323\" rel=\"stylesheet\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/blog.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 20
        echo "
        ";
        // line 21
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 22
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 23
            echo "        ";
        }
        // line 24
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 26
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 27
            echo "        ";
        }
        // line 28
        echo "    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 35
        echo "    ";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "            ";
        $this->loadTemplate("partials/header-internals.html.twig", "partials/base-internal.html.twig", 43)->display($context);
        // line 44
        echo "        ";
    }

    // line 46
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        // line 49
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "        </section>
        ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
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

    // line 81
    public function block_bottom($context, array $blocks = array())
    {
        // line 82
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
        return "partials/base-internal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 82,  251 => 81,  231 => 55,  228 => 54,  223 => 50,  218 => 51,  216 => 50,  211 => 49,  208 => 48,  203 => 46,  199 => 44,  196 => 43,  193 => 42,  189 => 35,  186 => 34,  183 => 33,  180 => 32,  177 => 31,  173 => 28,  170 => 27,  167 => 26,  164 => 25,  161 => 24,  158 => 23,  155 => 22,  153 => 21,  150 => 20,  147 => 19,  144 => 18,  141 => 17,  138 => 16,  135 => 15,  132 => 14,  124 => 36,  122 => 31,  116 => 29,  114 => 14,  108 => 11,  104 => 10,  101 => 9,  99 => 8,  91 => 7,  88 => 6,  85 => 5,  78 => 93,  76 => 81,  65 => 72,  63 => 54,  60 => 53,  58 => 48,  53 => 46,  50 => 45,  48 => 42,  43 => 40,  40 => 39,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
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
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
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
        {% do assets.addJs('theme://js/main.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
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
", "partials/base-internal.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/base-internal.html.twig");
    }
}
