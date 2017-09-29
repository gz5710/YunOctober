<?php

/* C:\xampp\htdocs\octobre/themes/jtherczeg-multi/layouts/fallback.htm */
class __TwigTemplate_3beb2acd130289314b1889af72b3a3712f3755ed5e9d24b2079ef0cf4a7530b2 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->pageFunction();
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "C:\\xampp\\htdocs\\octobre/themes/jtherczeg-multi/layouts/fallback.htm", "");
    }
}
