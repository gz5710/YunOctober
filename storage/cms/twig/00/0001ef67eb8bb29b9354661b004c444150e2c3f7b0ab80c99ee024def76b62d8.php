<?php

/* C:\xampp\htdocs\octobre/themes/jtherczeg-multi/partials/footer.htm */
class __TwigTemplate_3915a7ce31b4b434491a13bfc91831a965891e229392eeb88329fbba4ee5487b extends Twig_Template
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
        echo "<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo ". Designed by <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a> &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125;
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-flickr\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    &copy;  {{ \"now\"|date(\"Y\") }} {{ this.theme.site_name }}. Designed by <a target=\"_blank\" href=\"http://shapebootstrap.net/\" title=\"Free Twitter Bootstrap WordPress Themes and HTML templates\">ShapeBootstrap</a> &#123;&#123; Powered by <a href=\"http://octobercms.com/\">OctoberCMS</a> &#125;&#125;
                </div>
                <div class=\"col-sm-6\">
                    <ul class=\"social-icons\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-flickr\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-github\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/footer.htm", "");
    }
}
