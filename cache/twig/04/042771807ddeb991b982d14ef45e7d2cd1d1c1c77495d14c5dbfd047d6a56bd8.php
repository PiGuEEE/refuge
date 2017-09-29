<?php

/* testimonials.html.twig */
class __TwigTemplate_be859e900c092f6b5e018577bbb9614cda8e80a88ca454f2caa1146987491ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\t";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
\t<div class=\"ha\">
\t    <h1>TESTIMONIALS</h1>
\t</div>
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    ";
        // line 9
        $this->loadTemplate("partials/blog_item_read.html.twig", "testimonials.html.twig", 9)->display(array_merge($context, array("blog" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "parent", array()), "truncate" => false)));
        // line 10
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "testimonials.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  41 => 9,  33 => 3,  30 => 2,  25 => 13,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
\t{% block content %}

\t<div class=\"ha\">
\t    <h1>TESTIMONIALS</h1>
\t</div>
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3 h-entry\">
\t\t\t    {% include 'partials/blog_item_read.html.twig' with {'blog':page.parent, 'truncate':false} %}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

", "testimonials.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/testimonials.html.twig");
    }
}
