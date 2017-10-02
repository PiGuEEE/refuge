<?php

/* partials/image-slider.html.twig */
class __TwigTemplate_8464bc63a4739f513a6809501f142d201fad00c1d332d872ce8fe81cd0c51405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"gameScreenshots\">
    <div class=\"container\">
        <div class=\"image\">

            <div class=\"button previous\"> < </div>
            <div class=\"button next\"> > </div>
            
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/image-slider.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"gameScreenshots\">
    <div class=\"container\">
        <div class=\"image\">

            <div class=\"button previous\"> < </div>
            <div class=\"button next\"> > </div>
            
        </div>
    </div>
</section>", "partials/image-slider.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/image-slider.html.twig");
    }
}
