<?php

/* C:\xampp\htdocs\octobre/themes/jtherczeg-multi/partials/team.htm */
class __TwigTemplate_5b1fba26cd431d315f1d53859fa6f374cf651198ff549269663771c73e22a381 extends Twig_Template
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
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/team/01.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/team/02.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/team/03.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/team/04.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
        // line 86
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("team/skills.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 87
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 90
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("team/history.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 91
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 94
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("team/faqs.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 95
        echo "                </div>

            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 95,  136 => 94,  131 => 91,  127 => 90,  122 => 87,  118 => 86,  94 => 65,  73 => 47,  52 => 29,  31 => 11,  19 => 1,);
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
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/01.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/02.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/03.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/04.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    {% content 'team/skills.htm' %}
                </div>

                <div class=\"col-sm-4\">
                    {% content 'team/history.htm' %}
                </div>

                <div class=\"col-sm-4\">
                    {% content 'team/faqs.htm' %}
                </div>

            </div>
        </div>", "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/partials/team.htm", "");
    }
}
