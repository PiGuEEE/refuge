<?php

/* partials/image-slider.html.twig */
class __TwigTemplate_a374470df464d3369c3168400acb82b0dc3d6ab84dc407b3ac4f2c5028a344b4 extends Twig_Template
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
            
            <div class=\"imageBox\">
            \t<img src=\"user/themes/refuge-theme/img/screenshot3.png\" alt=\"Screenshot 1\" class=\"sliderImage\">
            \t<img src=\"user/themes/refuge-theme/img/screenshot2.png\" alt=\"Screenshot 1\" class=\"sliderImage\">
            \t<img src=\"user/themes/refuge-theme/img/screenshot1.png\" alt=\"Screenshot 1\" class=\"sliderImage\">
            </div>
            
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
            
            <div class=\"imageBox\">
            \t<img src=\"user/themes/refuge-theme/img/screenshot3.png\" alt=\"Screenshot 1\" class=\"sliderImage\">
            \t<img src=\"user/themes/refuge-theme/img/screenshot2.png\" alt=\"Screenshot 1\" class=\"sliderImage\">
            \t<img src=\"user/themes/refuge-theme/img/screenshot1.png\" alt=\"Screenshot 1\" class=\"sliderImage\">
            </div>
            
        </div>
    </div>
</section>", "partials/image-slider.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/partials/image-slider.html.twig");
    }
}
