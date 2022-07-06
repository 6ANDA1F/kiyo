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

/* @Storefront/storefront/utilities/icon.html.twig */
class __TwigTemplate_8ea573c2bb9ce904ca44e751bab9c8d1db67cddb6075b73e24cab1a8f260ba05 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/icon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/icon.html.twig"));

        // line 1
        $this->displayBlock('utilities_icon', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_utilities_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        // line 2
        $context["styles"] = [0 => ($context["size"] ?? null), 1 => ($context["color"] ?? null), 2 => ($context["rotation"] ?? null), 3 => ($context["flip"] ?? null), 4 => ($context["class"] ?? null)];
        // line 4
        if ( !array_key_exists("pack", $context)) {
            // line 5
            $context["pack"] = "default";
        }
        // line 8
        if ( !array_key_exists("namespace", $context)) {
            // line 9
            $context["namespace"] = "Storefront";
        }
        // line 12
        if (sw_get_attribute($this->env, $this->source, ($context["themeIconConfig"] ?? null), ($context["pack"] ?? null), [], "array", true, true, false, 12)) {
            // line 13
            echo "<span class=\"icon icon-";
            echo sw_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo " icon-";
            echo sw_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo "-";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if ((0 !== twig_compare($context["entry"], ""))) {
                    echo " icon-";
                    echo sw_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            ";
            // line 14
            $context["icon"] = twig_source($this->env, (((((("@" . sw_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["pack"] ?? null)] ?? null) : null), "namespace", [], "any", false, false, false, 14)) . "/../") . sw_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["pack"] ?? null)] ?? null) : null), "path", [], "any", false, false, false, 14)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            // line 15
            echo "            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null));
            echo "
        </span>";
        } else {
            // line 18
            echo "<span class=\"icon icon-";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if ((0 !== twig_compare($context["entry"], ""))) {
                    echo " icon-";
                    echo sw_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            ";
            // line 19
            $context["icon"] = twig_source($this->env, (((((("@" . ($context["namespace"] ?? null)) . "/../app/storefront/dist/assets/icon/") . ($context["pack"] ?? null)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            // line 20
            echo "            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null));
            echo "
        </span>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 20,  121 => 19,  105 => 18,  99 => 15,  97 => 14,  77 => 13,  75 => 12,  72 => 9,  70 => 8,  67 => 5,  65 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block utilities_icon -%}
    {% set styles = [ size, color, rotation, flip, class ] %}

    {%- if pack is not defined -%}
        {% set pack = 'default' %}
    {%- endif -%}

    {%- if namespace is not defined -%}
        {% set namespace = 'Storefront' %}
    {%- endif -%}

    {%- if themeIconConfig[pack] is defined -%}
        <span class=\"icon icon-{{ pack }} icon-{{ pack }}-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\">
            {% set icon =  source('@' ~ themeIconConfig[pack].namespace ~ '/../' ~ themeIconConfig[pack].path ~'/'~ name ~ '.svg', ignore_missing = true) %}
            {{ icon|sw_icon_cache|raw }}
        </span>
    {%- else -%}
        <span class=\"icon icon-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\">
            {% set icon = source('@' ~ namespace ~ '/../app/storefront/dist/assets/icon/'~ pack ~'/'~ name ~'.svg', ignore_missing = true) %}
            {{ icon|sw_icon_cache|raw }}
        </span>
    {%- endif -%}
{%- endblock -%}
", "@Storefront/storefront/utilities/icon.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/utilities/icon.html.twig");
    }
}
