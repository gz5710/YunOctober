<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm */
class __TwigTemplate_262401f7b26bc65df8ec7c5772d77738df13bc66b60bab819dac65155a4b5a0a extends Twig_Template
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
        echo "<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.svg");
        echo "\" alt=\"Logo\" /></span>
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
    <p>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "description", array());
        echo "</p>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Header -->
<header id=\"header\" class=\"alt\">
    <span class=\"logo\"><img src=\"{{'assets/images/logo.svg'|theme}}\" alt=\"Logo\" /></span>
    <h1>{{ this.page.title }}</h1>
    <p>{{ this.page.description|raw }}</p>
</header>", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/all_pages/header.htm", "");
    }
}
