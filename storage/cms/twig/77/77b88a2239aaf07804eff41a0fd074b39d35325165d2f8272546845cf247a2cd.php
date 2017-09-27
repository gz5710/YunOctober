<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm */
class __TwigTemplate_9eca0447d04b3eb9910340dd47de159e407fa90fbb0a54353702bcaf898cc28e extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_description", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "description", array()))), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_author", array()), "html", null, true);
        echo "\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))) : ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "website_url", array()), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/icon.png");
        echo "\" />

    ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_google_fonts", array())) {
            // line 12
            echo "    <link href=\"https://fonts.googleapis.com/css?family=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "google_font_family", array()), "html", null, true);
            echo "\" rel=\"stylesheet\">
    ";
        }
        // line 14
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "load_fontawesome", array())) {
            // line 15
            echo "    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    ";
        }
        // line 17
        echo "
    <!--[if lte IE 8]><script src=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/ie9.css"));
        echo "\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/ie8.css"));
        echo "\" /><![endif]-->


    <link href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/main.css", 1 => "assets/sass/zw_custom.scss"));
        echo "\" rel=\"stylesheet\">
    ";
        // line 24
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  83 => 23,  77 => 20,  73 => 19,  69 => 18,  66 => 17,  62 => 15,  59 => 14,  53 => 12,  51 => 11,  46 => 9,  42 => 8,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
    <meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
    <meta name=\"author\" content=\"{{ this.theme.website_author }}\">
    <title>{{ this.theme.website_name }} - {{ this.page.meta_title|default(this.page.title) }}</title>
    <link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/img/icon.png'|theme }}\" />

    {% if this.theme.load_google_fonts %}
    <link href=\"https://fonts.googleapis.com/css?family={{ this.theme.google_font_family }}\" rel=\"stylesheet\">
    {% endif %}
    {% if this.theme.load_fontawesome %}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\" rel=\"stylesheet\">
    {% endif %}

    <!--[if lte IE 8]><script src=\"{{ 'assets/js/ie/html5shiv.js'|theme }}\"></script><![endif]-->
    <!--[if lte IE 9]><link rel=\"stylesheet\" href=\"{{ ['assets/css/ie9.css']|theme }}\" /><![endif]-->
    <!--[if lte IE 8]><link rel=\"stylesheet\" href=\"{{ ['assets/css/ie8.css']|theme }}\" /><![endif]-->


    <link href=\"{{ ['assets/css/main.css', 'assets/sass/zw_custom.scss']|theme }}\" rel=\"stylesheet\">
    {% styles %}", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/html_base/meta_head.htm", "");
    }
}
