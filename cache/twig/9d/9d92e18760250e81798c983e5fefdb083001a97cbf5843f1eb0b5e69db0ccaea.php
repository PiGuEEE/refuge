<?php

/* the-game.html.twig */
class __TwigTemplate_62447a1cb3480388633f2f42e8644d3349740629ea3451f4a56bb14f9a05cf39 extends Twig_Template
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
        echo "<section class=\"theGame\">

\t<h2>THE GAME</h2>

\t<div class=\"textContainer\">
\t\t<p>Refuge is an immersive decision making game, where every single decision relies on you, and your luck of course.</p>
\t\t<p>Feliz has found himself lost in his devastaded city, and now he needs to make his way to a safer place. But, is is not that simple.</p>
\t\t<p>Escaping from a country devastaded by war and that is still under control of both army and rebels is a terrifying experience that set families apart and ruines entire civilization's cultures.</p>
\t\t<p>Feliz has got the chance to start his journey, but wise decisions have to be made in order to successfully making it to a new place, safe to restart his life besides his loved ones.</p>
\t</div>
\t<p class=\"yourCall\">Every journey ends.</p>

\t<!-- ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo " -->

</section>

\t\t


";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "the-game.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  47 => 13,  36 => 15,  34 => 13,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"theGame\">

\t<h2>THE GAME</h2>

\t<div class=\"textContainer\">
\t\t<p>Refuge is an immersive decision making game, where every single decision relies on you, and your luck of course.</p>
\t\t<p>Feliz has found himself lost in his devastaded city, and now he needs to make his way to a safer place. But, is is not that simple.</p>
\t\t<p>Escaping from a country devastaded by war and that is still under control of both army and rebels is a terrifying experience that set families apart and ruines entire civilization's cultures.</p>
\t\t<p>Feliz has got the chance to start his journey, but wise decisions have to be made in order to successfully making it to a new place, safe to restart his life besides his loved ones.</p>
\t</div>
\t<p class=\"yourCall\">Every journey ends.</p>

\t<!-- {% block content %}
\t\t{{ page.content }}
\t{% endblock %} -->

</section>

\t\t


", "the-game.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/the-game.html.twig");
    }
}
