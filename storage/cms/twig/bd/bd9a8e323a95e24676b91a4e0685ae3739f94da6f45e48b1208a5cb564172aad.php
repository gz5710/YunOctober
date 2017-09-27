<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm */
class __TwigTemplate_8617d79a50437990344bbfb81284b191a112a434dcc9440663e0702f66f29f9e extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home Onepager</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\">Blog</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("generic");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "generic")) {
            echo "active";
        }
        echo "\">Generic</a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("elements");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "elements")) {
            echo "active";
        }
        echo "\">Elements</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("404");
        echo "\" class=\"";
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "404")) {
            echo "active";
        }
        echo "\">Not Found</a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  44 => 7,  36 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"nav\">
    <ul>
        <li><a href=\"{{ 'home'|page }}\">Home Onepager</a></li>
        <li><a href=\"{{ 'blog'|page }}\" class=\"{% if this.page.id == 'blog' %}active{% endif %}\">Blog</a></li>
        <li><a href=\"{{ 'generic'|page }}\" class=\"{% if this.page.id == 'generic' %}active{% endif %}\">Generic</a></li>
        <li><a href=\"{{ 'elements'|page }}\" class=\"{% if this.page.id == 'elements' %}active{% endif %}\">Elements</a></li>
        <li><a href=\"{{ '404'|page }}\" class=\"{% if this.page.id == '404' %}active{% endif %}\">Not Found</a></li>
    </ul>
</nav>", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/all_pages/navigation.htm", "");
    }
}
