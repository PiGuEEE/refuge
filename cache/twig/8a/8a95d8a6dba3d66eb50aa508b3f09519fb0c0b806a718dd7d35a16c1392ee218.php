<?php

/* contact.html.twig */
class __TwigTemplate_1e4cbff56e0097e14a707396989a75efbbb3ac84986514ae280b10351743955d extends Twig_Template
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
        $this->loadTemplate("contact.html.twig", "contact.html.twig", 6, "2006962642")->display($context);
        // line 52
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
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/contact.css", 1 => 103), "method");
        // line 4
        echo "    
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 52,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/contact.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

    

\t
\t{% block content %}

\t\t<section class=\"yourDecision\">
       \t\t
       \t\t{% include 'partials/header-internals.html.twig' %}
\t\t\t
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"formContainer\">
\t\t\t\t\t<form class=\"form\" id=\"contactForm\">
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"text\" required name=\"name\" maxlength=\"50\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"name\">Your name</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"email\" required name=\"email\" maxlength=\"100\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<textarea name=\"message\" required class=\"input textarea\"></textarea>
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"SEND\" class=\"button submit\" class=\"submit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<p class=\"successMessage\">EMAIL SENT, THANKS!</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<script type=\"text/javascript\" src=\"user/themes/refuge-theme/js/contact-form.js\"></script>

\t{% endblock %}

{% endembed %}


", "contact.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/contact.html.twig");
    }
}


/* contact.html.twig */
class __TwigTemplate_1e4cbff56e0097e14a707396989a75efbbb3ac84986514ae280b10351743955d_2006962642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("partials/base-internal.html.twig", "contact.html.twig", 6);
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
\t\t<section class=\"yourDecision\">
       \t\t
       \t\t";
        // line 15
        $this->loadTemplate("partials/header-internals.html.twig", "contact.html.twig", 15)->display($context);
        // line 16
        echo "\t\t\t
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"formContainer\">
\t\t\t\t\t<form class=\"form\" id=\"contactForm\">
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"text\" required name=\"name\" maxlength=\"50\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"name\">Your name</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"email\" required name=\"email\" maxlength=\"100\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<textarea name=\"message\" required class=\"input textarea\"></textarea>
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"SEND\" class=\"button submit\" class=\"submit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<p class=\"successMessage\">EMAIL SENT, THANKS!</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<script type=\"text/javascript\" src=\"user/themes/refuge-theme/js/contact-form.js\"></script>

\t";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 21,  160 => 16,  158 => 15,  153 => 12,  150 => 11,  133 => 6,  38 => 4,  36 => 3,  33 => 2,  30 => 1,  24 => 52,  22 => 6,  20 => 1,);
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
    
    {% do assets.addCss('theme://css/contact.css', 103) %}
    
{% endblock %}
{% embed 'partials/base-internal.html.twig' %}

    

\t
\t{% block content %}

\t\t<section class=\"yourDecision\">
       \t\t
       \t\t{% include 'partials/header-internals.html.twig' %}
\t\t\t
\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"decisionText\">
\t\t\t\t\t
\t\t\t\t\t{{ page.content }}

\t\t\t\t</div>
\t\t\t\t<div class=\"formContainer\">
\t\t\t\t\t<form class=\"form\" id=\"contactForm\">
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"text\" required name=\"name\" maxlength=\"50\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"name\">Your name</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"email\" required name=\"email\" maxlength=\"100\" class=\"input\">
\t\t\t\t\t\t\t<label for=\"email\">Email</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<textarea name=\"message\" required class=\"input textarea\"></textarea>
\t\t\t\t\t\t\t<label for=\"message\">Message</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"inputContainer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"SEND\" class=\"button submit\" class=\"submit\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<p class=\"successMessage\">EMAIL SENT, THANKS!</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<script type=\"text/javascript\" src=\"user/themes/refuge-theme/js/contact-form.js\"></script>

\t{% endblock %}

{% endembed %}


", "contact.html.twig", "/Applications/MAMP/htdocs/refuge/user/themes/refuge-theme/templates/contact.html.twig");
    }
}
