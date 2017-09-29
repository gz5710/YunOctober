<?php

/* C:\xampp\htdocs\octobre/themes/jtherczeg-multi/layouts/default.htm */
class __TwigTemplate_699e95c405c777d19ea5130d7f28b9c9260e8723e4cd899101b29a50eab4d5cf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</header><!--/header-->

<section id=\"main-slider\">
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("slides"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</section><!--/#main-slider-->
    
<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 19
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("cta.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 20
        echo "        </div>
    </div>
</section><!--/#cta-->

<section id=\"features\">
    ";
        // line 25
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 26
        echo "</section><!--/#features-->

<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("cta2"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        </div>
    </div>
</section>

<section id=\"services\" >
    ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "</section><!--/#services-->

<section id=\"portfolio\">
    ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("portfolio"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "</section><!--/#portfolio-->

<section id=\"about\">
    ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("about"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "</section><!--/#about-->

<section id=\"work-process\">
    <div class=\"container\">
        ";
        // line 50
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("process.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 51
        echo "    </div>
</section><!--/#work-process-->

<section id=\"meet-team\">
    ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("team"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "</section><!--/#meet-team-->

<section id=\"animated-number\">
    ";
        // line 59
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("facts.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 60
        echo "</section><!--/#animated-number-->

<section id=\"pricing\">
    ";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("pricing"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "</section><!--/#pricing-->

<section id=\"testimonial\">
    ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("feedback"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "</section><!--/#testimonial-->

<section id=\"blog\">
    ";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blogs"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            ";
        // line 77
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("precontact.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 78
        echo "        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    ";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "</section><!--/#contact-->

<footer id=\"footer\">
    ";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 91
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 92
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 93
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 94
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 97
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 101
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 102
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 103
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 103,  248 => 102,  241 => 101,  237 => 100,  233 => 99,  229 => 98,  225 => 97,  221 => 96,  217 => 95,  213 => 94,  209 => 93,  205 => 92,  201 => 91,  196 => 88,  192 => 87,  187 => 84,  183 => 83,  176 => 78,  172 => 77,  165 => 72,  161 => 71,  156 => 68,  152 => 67,  147 => 64,  143 => 63,  138 => 60,  134 => 59,  129 => 56,  125 => 55,  119 => 51,  115 => 50,  109 => 46,  105 => 45,  100 => 42,  96 => 41,  91 => 38,  87 => 37,  80 => 32,  76 => 31,  69 => 26,  65 => 25,  58 => 20,  54 => 19,  47 => 14,  43 => 13,  38 => 10,  34 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"meta\" %}


<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    {% partial \"nav\" %}
</header><!--/header-->

<section id=\"main-slider\">
    {% partial \"slides\" %}
</section><!--/#main-slider-->
    
<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            {% content 'cta.htm' %}
        </div>
    </div>
</section><!--/#cta-->

<section id=\"features\">
    {% partial \"features\" %}
</section><!--/#features-->

<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            {% partial \"cta2\" %}
        </div>
    </div>
</section>

<section id=\"services\" >
    {% partial \"services\" %}
</section><!--/#services-->

<section id=\"portfolio\">
    {% partial \"portfolio\" %}
</section><!--/#portfolio-->

<section id=\"about\">
    {% partial \"about\" %}
</section><!--/#about-->

<section id=\"work-process\">
    <div class=\"container\">
        {% content 'process.htm' %}
    </div>
</section><!--/#work-process-->

<section id=\"meet-team\">
    {% partial \"team\" %}
</section><!--/#meet-team-->

<section id=\"animated-number\">
    {% content 'facts.htm' %}
</section><!--/#animated-number-->

<section id=\"pricing\">
    {% partial \"pricing\" %}
</section><!--/#pricing-->

<section id=\"testimonial\">
    {% partial \"feedback\" %}
</section><!--/#testimonial-->

<section id=\"blog\">
    {% partial \"blogs\" %}
</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            {% content 'precontact.htm' %}
        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    {% partial \"contact\" %}
</section><!--/#contact-->

<footer id=\"footer\">
    {% partial \"footer\" %}
</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/mousescroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/smoothscroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.inview.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/layouts/default.htm", "");
    }
}
