<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_04fa845cce618186df9040ca5d92c2fc54bd8097aea6f185843b69788f5fd0e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/thumbnail.html.twig"));

        // line 2
        if ( !array_key_exists("load", $context)) {
            // line 3
            echo "    ";
            $context["load"] = true;
        }
        // line 5
        echo "
";
        // line 8
        if ( !array_key_exists("loadOriginalImage", $context)) {
            // line 9
            echo "    ";
            $context["loadOriginalImage"] = false;
        }
        // line 11
        echo "
";
        // line 14
        if (($context["autoColumnSizes"] ?? null)) {
            // line 15
            echo "    ";
            $context["autoColumnSizes"] = true;
        }
        // line 17
        echo "
";
        // line 18
        if ( !array_key_exists("attributes", $context)) {
            // line 19
            echo "    ";
            $context["attributes"] = [];
        }
        // line 21
        echo "
";
        // line 22
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "alt", [], "any", true, true, false, 22) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 22), "alt", [], "any", true, true, false, 22))) {
            // line 23
            echo "    ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["alt" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 23), "alt", [], "any", false, false, false, 23)]);
        }
        // line 25
        echo "
";
        // line 26
        if (( !sw_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "title", [], "any", true, true, false, 26) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, true, false, 26), "title", [], "any", true, true, false, 26))) {
            // line 27
            echo "    ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["title" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "translated", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27)]);
        }
        // line 29
        echo "
";
        // line 31
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 31)), 0))) {
            // line 32
            echo "    ";
            if (((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null)) &&  !array_key_exists("sizes", $context))) {
                // line 33
                echo "        ";
                // line 34
                echo "        ";
                $context["sizes"] = ["xs" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm") - 1) . "px"), "sm" => (($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1) . "px"), "md" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1) /                 // line 37
($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round((($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl") - 1) /                 // line 38
($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 40
                echo "
        ";
                // line 42
                echo "        ";
                if ((0 === twig_compare(($context["layout"] ?? null), "full-width"))) {
                    // line 43
                    echo "            ";
                    $context["container"] = 100;
                    // line 44
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 45
                    echo "        ";
                } else {
                    // line 46
                    echo "            ";
                    $context["container"] = 1360;
                    // line 47
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "    ";
            }
            // line 50
            echo "
    ";
            // line 51
            $context["thumbnails"] = twig_reverse_filter($this->env, twig_sort_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 51)));
            // line 52
            echo "
    ";
            // line 54
            echo "    ";
            ob_start();
            ob_start();
            // line 55
            echo "        ";
            if (($context["loadOriginalImage"] ?? null)) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, (sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 55) + 1), "html", null, true);
                echo "w, ";
            }
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(sw_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 55)), "html", null, true);
                echo " ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 55), "html", null, true);
                echo "w";
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 55)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    ";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 54
            echo twig_spaceless($___internal_parse_1_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            echo "
    ";
            // line 59
            echo "    ";
            ob_start();
            ob_start();
            // line 60
            echo "        ";
            $context["sizeFallback"] = 100;
            // line 61
            echo "
        ";
            // line 63
            echo "        ";
            if ((($context["autoColumnSizes"] ?? null) && ($context["columns"] ?? null))) {
                // line 64
                echo "            ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 65
                echo "        ";
            }
            // line 66
            echo "
        ";
            // line 67
            $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
            // line 74
            echo "
        ";
            // line 75
            if ((1 === twig_compare(sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 75), twig_first($this->env, twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)))))) {
                // line 76
                echo "            ";
                // line 77
                echo "            ";
                $context["maxWidth"] = sw_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 77);
                // line 78
                echo "        ";
            }
            // line 79
            echo "
        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["breakpoint"] ?? null)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                echo "(min-width: ";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo sw_escape_filter($this->env, (($__internal_compile_0 = ($context["sizes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                if ( !sw_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 80)) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo sw_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
    ";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo twig_spaceless($___internal_parse_2_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 83
        echo "<img ";
        if (($context["load"] ?? null)) {
            echo "src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        } else {
            echo "data-src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo "\" ";
        }
        // line 84
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 84)), 0))) {
            // line 85
            echo "        ";
            if (($context["load"] ?? null)) {
                echo "srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            } else {
                echo "data-srcset=\"";
                echo sw_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
                echo "\" ";
            }
            // line 86
            echo "        ";
            if ((($__internal_compile_1 = ($context["sizes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["default"] ?? null) : null)) {
                // line 87
                echo "        sizes=\"";
                echo sw_escape_filter($this->env, (($__internal_compile_2 = ($context["sizes"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["default"] ?? null) : null), "html", null, true);
                echo "\"
        ";
            } elseif ((1 === twig_compare(twig_length_filter($this->env,             // line 88
($context["sizes"] ?? null)), 0))) {
                // line 89
                echo "        sizes=\"";
                echo sw_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 91
            echo "    ";
        }
        // line 92
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ((0 !== twig_compare($context["value"], ""))) {
                echo " ";
                echo sw_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "/>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 93,  329 => 92,  326 => 91,  320 => 89,  318 => 88,  313 => 87,  310 => 86,  299 => 85,  296 => 84,  285 => 83,  281 => 59,  240 => 80,  237 => 79,  234 => 78,  231 => 77,  229 => 76,  227 => 75,  224 => 74,  222 => 67,  219 => 66,  216 => 65,  213 => 64,  210 => 63,  207 => 61,  204 => 60,  200 => 59,  197 => 57,  194 => 54,  191 => 56,  148 => 55,  144 => 54,  141 => 52,  139 => 51,  136 => 50,  133 => 49,  130 => 48,  127 => 47,  124 => 46,  121 => 45,  118 => 44,  115 => 43,  112 => 42,  109 => 40,  107 => 38,  106 => 37,  104 => 34,  102 => 33,  99 => 32,  97 => 31,  94 => 29,  90 => 27,  88 => 26,  85 => 25,  81 => 23,  79 => 22,  76 => 21,  72 => 19,  70 => 18,  67 => 17,  63 => 15,  61 => 14,  58 => 11,  54 => 9,  52 => 8,  49 => 5,  45 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# activate load per default. If it is not activated only a data-src is set instead of the src tag. #}
{% if load is not defined %}
    {% set load = true %}
{% endif %}

{# By default no original image will be loaded as soon as thumbnails are available. #}
{# When set to true the orginal image will be loaded when the viewport is greater than the largest available thumbnail. #}
{% if loadOriginalImage is not defined %}
    {% set loadOriginalImage = false %}
{% endif %}

{# By default the srcset sizes will be calculated automatically if `columns` are present and no `sizes` are configured. #}
{# When set to false the sizes attribute will not be generated automatically. #}
{% if autoColumnSizes %}
    {% set autoColumnSizes = true %}
{% endif %}

{% if attributes is not defined %}
    {% set attributes = {} %}
{% endif %}

{% if attributes.alt is not defined and media.translated.alt is defined %}
    {% set attributes = attributes|merge({'alt': media.translated.alt}) %}
{% endif %}

{% if attributes.title is not defined and media.translated.title is defined %}
    {% set attributes = attributes|merge({'title': media.translated.title}) %}
{% endif %}

{# uses cms block column count and all available thumbnails to determine the correct image size for the current viewport #}
{% if media.thumbnails|length > 0 %}
    {% if autoColumnSizes and columns and sizes is not defined %}
        {# set image size for every viewport #}
        {% set sizes = {
            'xs': (theme_config('breakpoint.sm') - 1) ~'px',
            'sm': (theme_config('breakpoint.md') - 1) ~'px',
            'md': ((theme_config('breakpoint.lg') - 1) / columns)|round(0, 'ceil') ~'px',
            'lg': ((theme_config('breakpoint.xl') - 1) / columns)|round(0, 'ceil') ~'px'
        } %}

        {# set image size for largest viewport depending on the cms block sizing mode (boxed or full-width) #}
        {% if layout == 'full-width' %}
            {% set container = 100 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'vw'}) %}
        {% else %}
            {% set container = 1360 %}
            {% set sizes = sizes|merge({ 'xl': (container / columns)|round(0, 'ceil') ~'px'}) %}
        {% endif %}
    {% endif %}

    {% set thumbnails = media.thumbnails|sort|reverse %}

    {# generate srcset with all available thumbnails #}
    {% set srcsetValue %}{% apply spaceless %}
        {% if loadOriginalImage %}{{ media|sw_encode_media_url }} {{ thumbnails|first.width + 1 }}w, {% endif %}{% for thumbnail in thumbnails %}{{ thumbnail.url | sw_encode_url }} {{ thumbnail.width }}w{% if not loop.last %}, {% endif %}{% endfor %}
    {% endapply %}{% endset %}

    {# generate sizes #}
    {% set sizesValue %}{% apply spaceless %}
        {% set sizeFallback = 100 %}

        {# set largest size depending on column count of cms block #}
        {% if autoColumnSizes and columns %}
            {% set sizeFallback = (sizeFallback / columns)|round(0, 'ceil') %}
        {% endif %}

        {% set breakpoint = {
            'xs': theme_config('breakpoint.xs'),
            'sm': theme_config('breakpoint.sm'),
            'md': theme_config('breakpoint.md'),
            'lg': theme_config('breakpoint.lg'),
            'xl': theme_config('breakpoint.xl')
        } %}

        {% if thumbnails|first.width > breakpoint|reverse|first %}
            {# @deprecated tag:v6.5.0 - Variable `maxWidth` and parent condition will be removed #}
            {% set maxWidth = thumbnails|first.width %}
        {% endif %}

        {% for key, value in breakpoint|reverse %}(min-width: {{ value }}px) {{ sizes[key] }}{% if not loop.last %}, {% endif %}{% endfor %}, {{ sizeFallback }}vw
    {% endapply %}{% endset %}
{% endif %}
<img {% if load %}src=\"{{ media|sw_encode_media_url }}\" {% else %}data-src=\"{{ media|sw_encode_media_url }}\" {% endif %}
    {% if media.thumbnails|length > 0 %}
        {% if load %}srcset=\"{{ srcsetValue }}\" {% else %}data-srcset=\"{{ srcsetValue }}\" {% endif %}
        {% if sizes['default'] %}
        sizes=\"{{ sizes['default'] }}\"
        {% elseif sizes|length > 0 %}
        sizes=\"{{ sizesValue }}\"
        {% endif %}
    {% endif %}
    {% for key, value in attributes %}{% if value != '' %} {{ key }}=\"{{ value }}\"{% endif %}{% endfor %}
/>
", "@Storefront/storefront/utilities/thumbnail.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}
