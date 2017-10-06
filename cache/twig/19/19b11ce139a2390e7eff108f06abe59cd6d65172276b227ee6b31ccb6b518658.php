<?php

/* partials/navigation-overlay.html.twig */
class __TwigTemplate_9748cda8c07855f9d183beda56852eefd2607981fbbd4800262db885c399f6d6 extends Twig_Template
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
        echo "<nav class=\"navOverlay\">      

\t <div class=\"menu-btn\">
        <div class=\"left\">
            <div class=\"small\"></div>
            <div class=\"big\"></div>
        </div>
        <div class=\"right\">
            <div class=\"big\"></div>
            <div class=\"small\"></div>
        </div>
    </div>
    ";
        // line 13
        $this->displayBlock('header_extra', $context, $blocks);
        // line 14
        echo "    
    ";
        // line 15
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 18
        echo "
</nav>";
    }

    // line 13
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 15
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/navigation-overlay.html.twig", 16)->display($context);
        // line 17
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/navigation-overlay.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  55 => 16,  52 => 15,  47 => 13,  42 => 18,  40 => 15,  37 => 14,  35 => 13,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navOverlay\">      

\t <div class=\"menu-btn\">
        <div class=\"left\">
            <div class=\"small\"></div>
            <div class=\"big\"></div>
        </div>
        <div class=\"right\">
            <div class=\"big\"></div>
            <div class=\"small\"></div>
        </div>
    </div>
    {% block header_extra %}{% endblock %}
    
    {% block header_navigation %}
        {% include 'partials/navigation.html.twig' %}
    {% endblock %}

</nav>", "partials/navigation-overlay.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/navigation-overlay.html.twig");
    }
}
