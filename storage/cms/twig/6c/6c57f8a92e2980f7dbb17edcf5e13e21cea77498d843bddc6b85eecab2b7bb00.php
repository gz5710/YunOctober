<?php

/* C:\xampp\htdocs\octobre/themes/zwiebl-zwiebl_stellar/pages/blog-post.htm */
class __TwigTemplate_bebd990892f4d35f7442eea1c24bdfd33eb3fdba886b7676a8a70d6d3337f0cb extends Twig_Template
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
        if (($context["post"] ?? null)) {
            // line 2
            echo "<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
            echo "</h2>

";
            // line 4
            $context["post"] = $this->getAttribute(($context["blogPost"] ?? null), "post", array());
            // line 5
            echo "
<div class=\"content\">";
            // line 6
            echo $this->getAttribute(($context["post"] ?? null), "content_html", array());
            echo "</div>

";
            // line 8
            if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "featured_images", array()), "count", array())) {
                // line 9
                echo "    <div class=\"featured-images text-center\">
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "featured_images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 11
                    echo "            <p>
                <img
                    data-src=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                    echo "\"
                    src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\"
                    alt=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                    echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    </div>
";
            }
            // line 21
            echo "
<p class=\"info\">
    Posted
    ";
            // line 24
            if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "categories", array()), "count", array())) {
                echo " in
        ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "categories", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 26
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 27
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "    ";
            }
            // line 29
            echo "    on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
            echo "
</p>

";
        } else {
            // line 33
            echo "<h2>Post not found</h2>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/pages/blog-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  124 => 29,  121 => 28,  107 => 27,  98 => 26,  81 => 25,  77 => 24,  72 => 21,  68 => 19,  58 => 15,  54 => 14,  50 => 13,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  32 => 6,  29 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if post %}
<h2>{{ post.title }}</h2>

{% set post = blogPost.post %}

<div class=\"content\">{{ post.content_html|raw }}</div>

{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}

<p class=\"info\">
    Posted
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</p>

{% else %}
<h2>Post not found</h2>
{% endif %}", "C:\\xampp\\htdocs\\octobre/themes/zwiebl-zwiebl_stellar/pages/blog-post.htm", "");
    }
}
