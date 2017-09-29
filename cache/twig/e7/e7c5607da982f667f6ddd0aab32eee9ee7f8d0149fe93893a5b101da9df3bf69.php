<?php

/* partials/header-internals.html.twig */
class __TwigTemplate_9b77a65cc18fae8de90a385939308f115b003c9451a346571005f3f5bfb033df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"headerInternal\">
    <div class=\"downloadAt\">
        <a href=\"#\" class=\"link steam\" title=\"Download Refuge on Steam\"></a>
        <a href=\"#\" class=\"link itchio\" title=\"Download Refuge on Itch.io\"></a>
    </div>
    <div class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\">
        <div class=\"left\">
            <div class=\"small\"></div>
            <div class=\"big\"></div>
        </div>
        <div class=\"right\">
            <div class=\"big\"></div>
            <div class=\"small\"></div>
        </div>
    </div>
    <nav class=\"navOverlay\">      

        ";
        // line 18
        $this->displayBlock('header_extra', $context, $blocks);
        // line 19
        echo "        
        ";
        // line 20
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 23
        echo "
    </nav>
</header>";
    }

    // line 18
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 20
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        $this->loadTemplate("partials/navigation-internal.html.twig", "partials/header-internals.html.twig", 21)->display($context);
        // line 22
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/header-internals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  61 => 21,  58 => 20,  53 => 18,  47 => 23,  45 => 20,  42 => 19,  40 => 18,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"headerInternal\">
    <div class=\"downloadAt\">
        <a href=\"#\" class=\"link steam\" title=\"Download Refuge on Steam\"></a>
        <a href=\"#\" class=\"link itchio\" title=\"Download Refuge on Itch.io\"></a>
    </div>
    <div class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\">
        <div class=\"left\">
            <div class=\"small\"></div>
            <div class=\"big\"></div>
        </div>
        <div class=\"right\">
            <div class=\"big\"></div>
            <div class=\"small\"></div>
        </div>
    </div>
    <nav class=\"navOverlay\">      

        {% block header_extra %}{% endblock %}
        
        {% block header_navigation %}
            {% include 'partials/navigation-internal.html.twig' %}
        {% endblock %}

    </nav>
</header>", "partials/header-internals.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/header-internals.html.twig");
    }
}
