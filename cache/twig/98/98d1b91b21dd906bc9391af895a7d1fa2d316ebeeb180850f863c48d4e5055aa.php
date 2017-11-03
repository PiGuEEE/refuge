<?php

/* about.html.twig */
class __TwigTemplate_6e995a4cde07645e8ab645412d5940f4635cddaf52f36e261cfb1bda9ce520d9 extends Twig_Template
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
        $this->loadTemplate("about.html.twig", "about.html.twig", 6, "1397466023")->display($context);
        // line 44
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/about.css", 1 => 103), "method");
        // line 4
        echo "    
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  35 => 2,  32 => 1,  24 => 44,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/about.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}

\t\t<section class=\"yourDecision\">
       \t\t
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"gameplayBox\">
\t\t\t\t\t<div class=\"gameplay\">
\t\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/cC0YUB8Lx0Y?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"button moreGameplay\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>

\t\t{% include 'the-game.html.twig' %}
\t\t
\t\t{% include 'partials/image-slider.html.twig' %}

\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\" id=\"testimonialAbout\">
\t\t\t\t
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}




", "about.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/about.html.twig");
    }
}


/* about.html.twig */
class __TwigTemplate_6e995a4cde07645e8ab645412d5940f4635cddaf52f36e261cfb1bda9ce520d9_1397466023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("partials/base-internal.html.twig", "about.html.twig", 6);
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
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t\t<section class=\"yourDecision\">
       \t\t
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 18
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"gameplayBox\">
\t\t\t\t\t<div class=\"gameplay\">
\t\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/cC0YUB8Lx0Y?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"button moreGameplay\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>

\t\t";
        // line 31
        $this->loadTemplate("the-game.html.twig", "about.html.twig", 31)->display($context);
        // line 32
        echo "\t\t
\t\t";
        // line 33
        $this->loadTemplate("partials/image-slider.html.twig", "about.html.twig", 33)->display($context);
        // line 34
        echo "
\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\" id=\"testimonialAbout\">
\t\t\t\t
\t\t\t</div>
\t\t</section>

\t";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 34,  182 => 33,  179 => 32,  177 => 31,  161 => 18,  152 => 11,  149 => 10,  145 => 6,  143 => 8,  129 => 6,  40 => 4,  38 => 3,  35 => 2,  32 => 1,  24 => 44,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/about.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

\t{% set collection = page.collection() %}

\t{% block content %}

\t\t<section class=\"yourDecision\">
       \t\t
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"gameplayBox\">
\t\t\t\t\t<div class=\"gameplay\">
\t\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/cC0YUB8Lx0Y?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"#\" class=\"button moreGameplay\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>

\t\t{% include 'the-game.html.twig' %}
\t\t
\t\t{% include 'partials/image-slider.html.twig' %}

\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\" id=\"testimonialAbout\">
\t\t\t\t
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}




", "about.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/about.html.twig");
    }
}
