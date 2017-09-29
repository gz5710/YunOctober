<?php

/* C:\xampp\htdocs\octobre/themes/laratify-octobercms-octaskin/partials/pages-all/footer.htm */
class __TwigTemplate_113465cc3bc0b3ccf9ed2864fb8f0a8579c9ead4e11e7b58167bfc09327c4161 extends Twig_Template
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
        echo "<div class=\"lt-row row\">
  <div class=\"col m3 s12\">
    <!-- Promo Content 1 goes here -->
    <span  class=\"flow-text\">关于我们</span>
    <hr/>
    <p>
        跨时教育（Rocross Edu.)，成立于2014年，美国分公司Post-App.Inc.于同年成立于美国特拉华州。Post-App.Inc.曾荣获美国国家科学基金会（NSF）的资金支持。公司本着更好地服务更多中国学生的理念，先后在中美开展了多个针对留学生，准留学生的项目，并获得来自学生、家长、美国招生官等多方好评。
    </p>
  </div>
  <div class=\"col m3 s12\">
    <!-- Promo Content 1 goes here -->
    <span class=\"flow-text\">联系我们</span>
    <hr/>
    <span>
        <blockquote>Tel : 01010101010101</blockquote>
        <blockquote>Wechat : 01010101010101</blockquote>
        <blockquote>Email : 01010101010101</blockquote>
    </span>
  </div>
  <div class=\"col m3 s12\"><!-- Empty Block --></div>
  <div class=\"col m3 s12\">
    <!-- Promo Content 1 goes here -->
    <span  class=\"flow-text\">微信二维码</span>
    <div class=\"center-align\">
        <hr/>
        <img width=\"100%\" src=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/pages/home/QRcode/wechat.jpg");
        echo "\" alt=\" \" title=\"team\">
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/laratify-octobercms-octaskin/partials/pages-all/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"lt-row row\">
  <div class=\"col m3 s12\">
    <!-- Promo Content 1 goes here -->
    <span  class=\"flow-text\">关于我们</span>
    <hr/>
    <p>
        跨时教育（Rocross Edu.)，成立于2014年，美国分公司Post-App.Inc.于同年成立于美国特拉华州。Post-App.Inc.曾荣获美国国家科学基金会（NSF）的资金支持。公司本着更好地服务更多中国学生的理念，先后在中美开展了多个针对留学生，准留学生的项目，并获得来自学生、家长、美国招生官等多方好评。
    </p>
  </div>
  <div class=\"col m3 s12\">
    <!-- Promo Content 1 goes here -->
    <span class=\"flow-text\">联系我们</span>
    <hr/>
    <span>
        <blockquote>Tel : 01010101010101</blockquote>
        <blockquote>Wechat : 01010101010101</blockquote>
        <blockquote>Email : 01010101010101</blockquote>
    </span>
  </div>
  <div class=\"col m3 s12\"><!-- Empty Block --></div>
  <div class=\"col m3 s12\">
    <!-- Promo Content 1 goes here -->
    <span  class=\"flow-text\">微信二维码</span>
    <div class=\"center-align\">
        <hr/>
        <img width=\"100%\" src=\"{{ 'assets/img/pages/home/QRcode/wechat.jpg'|theme }}\" alt=\" \" title=\"team\">
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\octobre/themes/laratify-octobercms-octaskin/partials/pages-all/footer.htm", "");
    }
}
