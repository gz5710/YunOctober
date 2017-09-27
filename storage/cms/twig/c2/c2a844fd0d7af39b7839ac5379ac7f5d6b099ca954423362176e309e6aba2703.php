<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/layouts/generic.htm */
class __TwigTemplate_6c8e161ea41f8f9828906e265ab78603ca34871698aaa28a889f06f156829c60 extends Twig_Template
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
        echo "<html>
<head>
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("html_base/meta_head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</head>
<body>
    <div id=\"wrapper\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all_pages/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all_pages/navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        <div id=\"main\">
            <section id=\"content\" class=\"main\">
                ";
        // line 11
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 12
        echo "            </section>
        </div>
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "    </div>
    ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/layouts/generic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 16,  55 => 15,  51 => 14,  47 => 12,  45 => 11,  41 => 9,  36 => 8,  32 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
    {% partial \"html_base/meta_head\" %}
</head>
<body>
    <div id=\"wrapper\">
        {% partial \"all_pages/header\" %}
        {% partial \"all_pages/navigation\" %}
        <div id=\"main\">
            <section id=\"content\" class=\"main\">
                {% page %}
            </section>
        </div>
        {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"html_base/scripts\" %}
</body>
</html>", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/layouts/generic.htm", "");
    }
}
