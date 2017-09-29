<?php

/* C:\xampp\htdocs\octobre/themes/jtherczeg-multi/partials/meta.htm */
class __TwigTemplate_d8b9692aae6dfc1e2d4da0e0b517c43143f42b7f4e3369138f965f9d91d752fa extends Twig_Template
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
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.transitions.css", 5 => "assets/css/prettyPhoto.css", 6 => "assets/css/main.css"));
        // line 18
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head><!--/head-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 27,  60 => 26,  56 => 25,  52 => 24,  48 => 23,  41 => 18,  39 => 10,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">
    <meta name=\"author\" content=\"{{ this.page.meta_author }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href=\"{{ [
            'assets/css/bootstrap.min.css',
            'assets/css/font-awesome.min.css',
            'assets/css/animate.min.css',
            'assets/css/owl.carousel.css',
            'assets/css/owl.transitions.css',
            'assets/css/prettyPhoto.css',
            'assets/css/main.css',
        ]|theme }}\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/ico/favicon.ico'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ 'images/ico/apple-touch-icon-144-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ 'images/ico/apple-touch-icon-114-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ 'images/ico/apple-touch-icon-72-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'images/ico/apple-touch-icon-57-precomposed.png'|theme }}\">
</head><!--/head-->", "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/meta.htm", "");
    }
}
