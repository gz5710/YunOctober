<?php

/* C:\xampp\htdocs\octobre/themes/jtherczeg-multi/partials/feedback.htm */
class __TwigTemplate_3239e1254f30334563f1999d2c15a2273c63f71eed5c3fe1b5e12a3e717fa9f0 extends Twig_Template
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
                <div class=\"col-sm-8 col-sm-offset-2\">

                    <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/testimonial/01.jpg");
        echo "\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class=\"item\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/testimonial/01.jpg");
        echo "\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class=\"btns\">
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/feedback.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  29 => 9,  19 => 1,);
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
                <div class=\"col-sm-8 col-sm-offset-2\">

                    <div id=\"carousel-testimonial\" class=\"carousel slide text-center\" data-ride=\"carousel\">
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            <div class=\"item active\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"{{ 'assets/images/testimonial/01.jpg'|theme }}\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class=\"item\">
                                <p><img class=\"img-circle img-thumbnail\" src=\"{{ 'assets/images/testimonial/01.jpg'|theme }}\" alt=\"\"></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class=\"btns\">
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"prev\">
                                <span class=\"fa fa-angle-left\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"btn btn-primary btn-sm\" href=\"#carousel-testimonial\" role=\"button\" data-slide=\"next\">
                                <span class=\"fa fa-angle-right\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/feedback.htm", "");
    }
}
