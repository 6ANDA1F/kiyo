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

/* @Storefront/storefront/utilities/offcanvas.html.twig */
class __TwigTemplate_6cd287e43bd410c70652ad0b45d1939ae95fc10f7e9f8e911d052e32414fecfd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas' => [$this, 'block_utilities_offcanvas'],
            'utilities_offcanvas_close' => [$this, 'block_utilities_offcanvas_close'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_content_container' => [$this, 'block_utilities_offcanvas_content_container'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
        // line 9
        $context["isAjaxOffcanvas"] = false;
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('utilities_offcanvas_meta', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('utilities_offcanvas', $context, $blocks);
    }

    // line 11
    public function block_utilities_offcanvas_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        if (( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "xmlHttpRequest", [], "any", false, false, false, 13) && ($context["isAjaxOffcanvas"] ?? null))) {
            // line 14
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/utilities/offcanvas.html.twig", 14)->display($context);
            // line 15
            echo "    ";
        }
    }

    // line 18
    public function block_utilities_offcanvas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayBlock('utilities_offcanvas_close', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('utilities_offcanvas_content_container', $context, $blocks);
    }

    // line 19
    public function block_utilities_offcanvas_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        <button class=\"btn btn-light btn-block offcanvas-close js-offcanvas-close sticky-top\">
            ";
        // line 21
        $this->displayBlock('utilities_offcanvas_close_icon', $context, $blocks);
        // line 24
        echo "
            ";
        // line 25
        $this->displayBlock('utilities_offcanvas_close_text', $context, $blocks);
        // line 28
        echo "        </button>
    ";
    }

    // line 21
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/offcanvas.html.twig", 22);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 23
        echo "            ";
    }

    // line 25
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.offcanvasCloseMenu"));
        echo "
            ";
    }

    // line 31
    public function block_utilities_offcanvas_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <div class=\"offcanvas-content-container\">
            ";
        // line 33
        $this->displayBlock('utilities_offcanvas_content', $context, $blocks);
        // line 34
        echo "        </div>
    ";
    }

    // line 33
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 33,  148 => 34,  146 => 33,  143 => 32,  139 => 31,  132 => 26,  128 => 25,  124 => 23,  115 => 22,  111 => 21,  106 => 28,  104 => 25,  101 => 24,  99 => 21,  96 => 20,  92 => 19,  88 => 31,  85 => 30,  82 => 19,  78 => 18,  73 => 15,  70 => 14,  67 => 13,  65 => 12,  61 => 11,  57 => 18,  54 => 17,  52 => 11,  49 => 10,  47 => 9,  44 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/offcanvas.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/utilities/offcanvas.html.twig");
    }
}
