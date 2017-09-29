<?php

/* C:\xampp\htdocs\octobre/themes/jtherczeg-multi/partials/slides.htm */
class __TwigTemplate_9c3c84fc58c554ca4e53e448549b424565d53b30f19501922fd193976430682e extends Twig_Template
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
        echo "<div class=\"owl-carousel\">
            <div class=\"item\" style=\"background-image: url(";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/bg1.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span>Multi</span> is the best Onepage html template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class=\"item\" style=\"background-image: url(";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/bg2.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"owl-carousel\">
            <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/bg1.jpg'|theme }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span>Multi</span> is the best Onepage html template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/bg2.jpg'|theme }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->", "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/slides.htm", "");
    }
}
