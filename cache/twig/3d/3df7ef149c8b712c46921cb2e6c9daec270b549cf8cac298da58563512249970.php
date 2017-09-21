<?php

/* partials/header.html.twig */
class __TwigTemplate_256c841d3e58919fe92e2545dc2227cae18861aadd989ad48b68eaff471441a2 extends Twig_Template
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
        echo "<header class=\"headerHome\">
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
        // line 19
        $this->displayBlock('header_extra', $context, $blocks);
        // line 20
        echo "        
        ";
        // line 21
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 24
        echo "
    </nav>
</header>";
    }

    // line 19
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 21
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 22)->display($context);
        // line 23
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  62 => 22,  59 => 21,  54 => 19,  48 => 24,  46 => 21,  43 => 20,  41 => 19,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"headerHome\">
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
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

    </nav>
</header>", "partials/header.html.twig", "/Applications/MAMP/htdocs/grav/user/themes/refuge-theme/templates/partials/header.html.twig");
    }
}
