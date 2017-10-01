<?php

/* about.html.twig */
class __TwigTemplate_e0a8179e3df8b4e5b694cde32f7fea9c06b1771f7662dcaa11811a5f7a897ca5 extends Twig_Template
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
        $this->loadTemplate("about.html.twig", "about.html.twig", 6, "2124739375")->display($context);
        // line 43
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/about.css", 1 => 103), "method");
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
        return array (  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 43,  22 => 6,  20 => 1,);
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
\t\t\t\t\t<div class=\"gameplay\"></div>
\t\t\t\t\t<a href=\"#\" class=\"button\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>

\t\t{% include 'the-game.html.twig' %}
\t\t
\t\t{% include 'partials/image-slider.html.twig' %}

\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\">
\t\t\t\t<div class=\"text\">This is seriously one of the most interesting games I’ve played so far. Its story is so captivating, highly recommend!</div>
\t\t\t\t<div class=\"author\">Author Joel @ Steam</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}


", "about.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/about.html.twig");
    }
}


/* about.html.twig */
class __TwigTemplate_e0a8179e3df8b4e5b694cde32f7fea9c06b1771f7662dcaa11811a5f7a897ca5_2124739375 extends Twig_Template
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
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
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"gameplayBox\">
\t\t\t\t\t<div class=\"gameplay\"></div>
\t\t\t\t\t<a href=\"#\" class=\"button\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>

\t\t";
        // line 29
        $this->loadTemplate("the-game.html.twig", "about.html.twig", 29)->display($context);
        // line 30
        echo "\t\t
\t\t";
        // line 31
        $this->loadTemplate("partials/image-slider.html.twig", "about.html.twig", 31)->display($context);
        // line 32
        echo "
\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\">
\t\t\t\t<div class=\"text\">This is seriously one of the most interesting games I’ve played so far. Its story is so captivating, highly recommend!</div>
\t\t\t\t<div class=\"author\">Author Joel @ Steam</div>
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
        return array (  177 => 32,  175 => 31,  172 => 30,  170 => 29,  156 => 18,  147 => 11,  144 => 10,  140 => 6,  138 => 8,  124 => 6,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 43,  22 => 6,  20 => 1,);
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
\t\t\t\t\t<div class=\"gameplay\"></div>
\t\t\t\t\t<a href=\"#\" class=\"button\" title=\"More Gameplay Videos\">MORE GAMEPLAY VIDEOS</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</section>

\t\t{% include 'the-game.html.twig' %}
\t\t
\t\t{% include 'partials/image-slider.html.twig' %}

\t\t<section class=\"testimonials\">
\t\t\t<div class=\"testimonial\">
\t\t\t\t<div class=\"text\">This is seriously one of the most interesting games I’ve played so far. Its story is so captivating, highly recommend!</div>
\t\t\t\t<div class=\"author\">Author Joel @ Steam</div>
\t\t\t</div>
\t\t</section>

\t{% endblock %}

{% endembed %}


", "about.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/about.html.twig");
    }
}
