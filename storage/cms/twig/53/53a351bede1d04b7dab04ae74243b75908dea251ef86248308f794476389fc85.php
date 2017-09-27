<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm */
class __TwigTemplate_26233313ece85d362622592e0fc6c0801fde59d8b75be199888e0905a264bc61 extends Twig_Template
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
        echo "<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
                adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
                Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
            <ul class=\"actions\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/pic01.jpg");
        echo "\" alt=\"image\" /></span>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"one\" class=\"main\">
    <div class=\"spotlight\">
        <div class=\"content\">
            <header class=\"major\">
                <h2>First Section</h2>
            </header>
            <p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
                adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
                Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
            <ul class=\"actions\">
                <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
            </ul>
        </div>
        <span class=\"image\"><img src=\"{{'assets/images/pic01.jpg'|theme}}\" alt=\"image\" /></span>
    </div>
</section>", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/home_page/section_one.htm", "");
    }
}
