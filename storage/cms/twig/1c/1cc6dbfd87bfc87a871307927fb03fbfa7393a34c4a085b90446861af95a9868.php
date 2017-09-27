<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm */
class __TwigTemplate_4100ba2206e9aa4e22a694a39c8d56727d134f280d17fb5e7921ad1b041fd564 extends Twig_Template
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
        echo "<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Second Section</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Ipsum consequat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("generic");
        echo "\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 24,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"two\" class=\"main\">
    <header class=\"major\">
        <h2>Second Section</h2>
    </header>
    <ul class=\"features\">
        <li>
            <span class=\"icon major style1 fa-code\"></span>
            <h3>Ipsum consequat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style3 fa-copy\"></span>
            <h3>Amed sed feugiat</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
        <li>
            <span class=\"icon major style5 fa-diamond\"></span>
            <h3>Dolor nullam</h3>
            <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
        </li>
    </ul>
    <footer class=\"major\">
        <ul class=\"actions\">
            <li><a href=\"{{'generic'|page}}\" class=\"button\">Learn More</a></li>
        </ul>
    </footer>
</section>", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/partials/home_page/section_two.htm", "");
    }
}
