<?php

/* contact.html.twig */
class __TwigTemplate_e6113276bf5c1b7a8f619c7783ce893096b36fad528f1d6c4d46ec335b073b10 extends Twig_Template
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
        $this->loadTemplate("contact.html.twig", "contact.html.twig", 6, "1396225640")->display($context);
        // line 52
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/contact.css", 1 => 103), "method");
        // line 4
        echo "    
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 52,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/contact.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\"></div>
\t\t{% endif %}

\t\t<section class=\"yourDecision\">
       \t\t
       \t\t{% include 'partials/header-internals.html.twig' %}
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"formContainer\">
\t\t\t\t\t<form class=\"form\" id=\"contactForm\">
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"text\" required name=\"name\" maxlength=\"50\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"name\">Your name</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"email\" required name=\"email\" maxlength=\"100\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<textarea name=\"message\" required class=\"input textarea\"></textarea>
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"SEND\" class=\"button submit\" class=\"submit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}


", "contact.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/contact.html.twig");
    }
}


/* contact.html.twig */
class __TwigTemplate_e6113276bf5c1b7a8f619c7783ce893096b36fad528f1d6c4d46ec335b073b10_1396225640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("partials/base-internal.html.twig", "contact.html.twig", 6);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base-internal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 12
        echo "
\t\t";
        // line 13
        if (($context["blog_image"] ?? null)) {
            // line 14
            echo "\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", array());
            echo ");\"></div>
\t\t";
        }
        // line 16
        echo "
\t\t<section class=\"yourDecision\">
       \t\t
       \t\t";
        // line 19
        $this->loadTemplate("partials/header-internals.html.twig", "contact.html.twig", 19)->display($context);
        // line 20
        echo "\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 24
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"formContainer\">
\t\t\t\t\t<form class=\"form\" id=\"contactForm\">
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"text\" required name=\"name\" maxlength=\"50\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"name\">Your name</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"email\" required name=\"email\" maxlength=\"100\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<textarea name=\"message\" required class=\"input textarea\"></textarea>
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"SEND\" class=\"button submit\" class=\"submit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 24,  177 => 20,  175 => 19,  170 => 16,  164 => 14,  162 => 13,  159 => 12,  156 => 11,  153 => 10,  149 => 6,  147 => 8,  133 => 6,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 52,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/contact.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}
\t\t{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

\t\t{% if blog_image %}
\t\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\"></div>
\t\t{% endif %}

\t\t<section class=\"yourDecision\">
       \t\t
       \t\t{% include 'partials/header-internals.html.twig' %}
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"formContainer\">
\t\t\t\t\t<form class=\"form\" id=\"contactForm\">
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"text\" required name=\"name\" maxlength=\"50\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"name\">Your name</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"email\" required name=\"email\" maxlength=\"100\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<textarea name=\"message\" required class=\"input textarea\"></textarea>
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"SEND\" class=\"button submit\" class=\"submit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}


", "contact.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/contact.html.twig");
    }
}
