<?php

/* default.html.twig */
class __TwigTemplate_165a72f396f45304eead739cb0a0378c606a92dee0e98ac2b6c25693297c81e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base-internal.html.twig", "default.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
\t<section class=\"section\">
\t\t
\t\t";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

\t</section>

";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base-internal.html.twig' %}


{% block content %}

\t<section class=\"section\">
\t\t
\t\t{{ page.content }}

\t</section>

{% endblock %}
", "default.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/default.html.twig");
    }
}
