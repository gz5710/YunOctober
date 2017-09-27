<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm */
class __TwigTemplate_498958d8f8174875f4c1a696a1d95ef4152971a6e758d58b27ceb113884e08b8 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->partialFunction("home_page/navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        <div id=\"main\">
            ";
        // line 10
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 11
        echo "
            ";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "show_section_one", array())) {
            // line 13
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/section_one"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 14
            echo "            ";
        }
        // line 15
        echo "
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "show_section_two", array())) {
            // line 17
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/section_two"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "show_section_three", array())) {
            // line 21
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/section_three"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "show_section_four", array())) {
            // line 25
            echo "                ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("home_page/section_four"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "            ";
        }
        // line 27
        echo "        </div>
        ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("all_pages/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "    </div>
    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("html_base/scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  108 => 30,  105 => 29,  101 => 28,  98 => 27,  95 => 26,  90 => 25,  88 => 24,  85 => 23,  82 => 22,  77 => 21,  75 => 20,  72 => 19,  69 => 18,  64 => 17,  62 => 16,  59 => 15,  56 => 14,  51 => 13,  49 => 12,  46 => 11,  44 => 10,  41 => 9,  36 => 8,  32 => 7,  27 => 4,  23 => 3,  19 => 1,);
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
        {% partial \"home_page/navigation\" %}
        <div id=\"main\">
            {% page %}

            {% if this.theme.show_section_one %}
                {% partial \"home_page/section_one\" %}
            {% endif %}

            {% if this.theme.show_section_two %}
                {% partial \"home_page/section_two\" %}
            {% endif %}

            {% if this.theme.show_section_three %}
                {% partial \"home_page/section_three\" %}
            {% endif %}

            {% if this.theme.show_section_four %}
                {% partial \"home_page/section_four\" %}
            {% endif %}
        </div>
        {% partial \"all_pages/footer\" %}
    </div>
    {% partial \"html_base/scripts\" %}
</body>
</html>", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/layouts/stellar.htm", "");
    }
}
