<?php

/* the-team.html.twig */
class __TwigTemplate_c2d101bb3754e8268d70a6691a189b33feb435b9bf537d3f566b3266c840403a extends Twig_Template
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
        echo "
";
        // line 7
        $this->loadTemplate("the-team.html.twig", "the-team.html.twig", 7, "1475524534")->display($context);
        // line 59
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/team.css", 1 => 103), "method");
        // line 4
        echo "    
";
    }

    public function getTemplateName()
    {
        return "the-team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  35 => 2,  32 => 1,  27 => 59,  25 => 7,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/team.css', 103) %}
    
{% endblock %}

{% embed 'partials/base-internal.html.twig' %}

{% set collection = page.collection() %} 

{% block content %}
\t<section class=\"theTeam\">

\t\t<h2 class=\"pageTitle\">MEET THE TEAM</h2>

\t\t<div class=\"member marginTop\">
\t\t\t<div class=\"image jordon\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Jordon Dodds</p>
\t\t\t\t<p class=\"job\">Project Manager, Programmer, External Talent Liaison</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Originally from Cairns, Queensland, Jordon now lives in Brisbane finishing off his bachelor in video game development. In addition to a borderline obsession with anything zombie related, Jordon also enjoys Marvel Comics and binge watching seasons of tv shows at a time.</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image jacob\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Jacob Duniam</p>
\t\t\t\t<p class=\"job\">Vision Holder, Designer, Team Lead, External Talent Liaison</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Jacob is basically the mind responsible for our game aesthetics and storyline.</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image arthur\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Arthur Finkler</p>
\t\t\t\t<p class=\"job\">Web Designer</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Arthur is responsible for our online presence. He gave life to this website, designing and coding it from scratch. He also takes care of our Social Medias occasionally. Currently, Arthur works @ CareerHub as an UX/UI Designer</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image alex\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Alex Luthe</p>
\t\t\t\t<p class=\"job\">Lead Programmer</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Alex is our mysterious Lead Programmer.</p>
\t\t</div>

\t</section>


{% endblock %}


{% endembed %}

", "the-team.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/the-team.html.twig");
    }
}


/* the-team.html.twig */
class __TwigTemplate_c2d101bb3754e8268d70a6691a189b33feb435b9bf537d3f566b3266c840403a_1475524534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("partials/base-internal.html.twig", "the-team.html.twig", 7);
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
        // line 9
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 7
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t<section class=\"theTeam\">

\t\t<h2 class=\"pageTitle\">MEET THE TEAM</h2>

\t\t<div class=\"member marginTop\">
\t\t\t<div class=\"image jordon\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Jordon Dodds</p>
\t\t\t\t<p class=\"job\">Project Manager, Programmer, External Talent Liaison</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Originally from Cairns, Queensland, Jordon now lives in Brisbane finishing off his bachelor in video game development. In addition to a borderline obsession with anything zombie related, Jordon also enjoys Marvel Comics and binge watching seasons of tv shows at a time.</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image jacob\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Jacob Duniam</p>
\t\t\t\t<p class=\"job\">Vision Holder, Designer, Team Lead, External Talent Liaison</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Jacob is basically the mind responsible for our game aesthetics and storyline.</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image arthur\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Arthur Finkler</p>
\t\t\t\t<p class=\"job\">Web Designer</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Arthur is responsible for our online presence. He gave life to this website, designing and coding it from scratch. He also takes care of our Social Medias occasionally. Currently, Arthur works @ CareerHub as an UX/UI Designer</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image alex\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Alex Luthe</p>
\t\t\t\t<p class=\"job\">Lead Programmer</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Alex is our mysterious Lead Programmer.</p>
\t\t</div>

\t</section>


";
    }

    public function getTemplateName()
    {
        return "the-team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 12,  161 => 11,  157 => 7,  155 => 9,  141 => 7,  40 => 4,  38 => 3,  35 => 2,  32 => 1,  27 => 59,  25 => 7,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/team.css', 103) %}
    
{% endblock %}

{% embed 'partials/base-internal.html.twig' %}

{% set collection = page.collection() %} 

{% block content %}
\t<section class=\"theTeam\">

\t\t<h2 class=\"pageTitle\">MEET THE TEAM</h2>

\t\t<div class=\"member marginTop\">
\t\t\t<div class=\"image jordon\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Jordon Dodds</p>
\t\t\t\t<p class=\"job\">Project Manager, Programmer, External Talent Liaison</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Originally from Cairns, Queensland, Jordon now lives in Brisbane finishing off his bachelor in video game development. In addition to a borderline obsession with anything zombie related, Jordon also enjoys Marvel Comics and binge watching seasons of tv shows at a time.</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image jacob\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Jacob Duniam</p>
\t\t\t\t<p class=\"job\">Vision Holder, Designer, Team Lead, External Talent Liaison</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Jacob is basically the mind responsible for our game aesthetics and storyline.</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image arthur\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Arthur Finkler</p>
\t\t\t\t<p class=\"job\">Web Designer</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Arthur is responsible for our online presence. He gave life to this website, designing and coding it from scratch. He also takes care of our Social Medias occasionally. Currently, Arthur works @ CareerHub as an UX/UI Designer</p>
\t\t</div>

\t\t<div class=\"member\">
\t\t\t<div class=\"image alex\"></div>
\t\t\t<div class=\"titles\">
\t\t\t\t<p class=\"name\">Alex Luthe</p>
\t\t\t\t<p class=\"job\">Lead Programmer</p>
\t\t\t</div>
\t\t\t<p class=\"description\">Alex is our mysterious Lead Programmer.</p>
\t\t</div>

\t</section>


{% endblock %}


{% endembed %}

", "the-team.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/the-team.html.twig");
    }
}
