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

/* @KiyoTheme/storefront/layout/header/logo.html.twig */
class __TwigTemplate_d4748659044d988c9a650de626c79de3e9eff194f7f4029dbb516abe2d64b516 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_header_logo_link' => [$this, 'block_layout_header_logo_link'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/header/logo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/header/logo.html.twig", "@KiyoTheme/storefront/layout/header/logo.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_layout_header_logo_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h2>Sup</h2>
";
    }

    public function getTemplateName()
    {
        return "@KiyoTheme/storefront/layout/header/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KiyoTheme/storefront/layout/header/logo.html.twig", "/var/www/html/custom/plugins/KiyoTheme/src/Resources/views/storefront/layout/header/logo.html.twig");
    }
}
