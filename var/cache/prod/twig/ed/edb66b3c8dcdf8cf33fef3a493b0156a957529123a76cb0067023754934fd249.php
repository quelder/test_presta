<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig */
class __TwigTemplate_37122f0e9003c8e603336387e9f63093c2ad934e55dcd49f12e9d7019b363966 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    \$('body').on(
      'moduleCatalogLoaded',
      function() {
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryTab"], "method")) {
            // line 34
            echo "        \$('.module-category-menu[data-category-tab=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryTab"], "method"), "html", null, true);
            echo "\"]').click();
        ";
        }
        // line 36
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryRef"], "method")) {
            // line 37
            echo "        \$('.module-category-menu[data-category-ref=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "filterCategoryRef"], "method"), "html", null, true);
            echo "\"]').click();
        ";
        }
        // line 39
        echo "      }
    );
  </script>
";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        // line 45
        echo "  <div class=\"justify-content-center\">
    <div class=\"module-catalog-page\">
      ";
        // line 48
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 48)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 49
        echo "      ";
        // line 50
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_prestatrust.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 50)->display($context);
        // line 51
        echo "      ";
        // line 52
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 52)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
        // line 53
        echo "      ";
        // line 54
        echo "      ";
        $this->loadTemplate("@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/Includes/menu_top.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 54)->display($context);
        // line 55
        echo "      <div class=\"module-catalog-page-result\">
        ";
        // line 57
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_loader.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 57)->display($context);
        // line 58
        echo "        ";
        // line 59
        echo "        ";
        if ($this->getAttribute(($context["topMenuData"] ?? null), "categories", [], "any", true, true)) {
            // line 60
            echo "          ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/categories_grid.html.twig", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", 60)->display(twig_array_merge($context, ["categories" => $this->getAttribute(($context["topMenuData"] ?? null), "categories", [])]));
            // line 61
            echo "        ";
        }
        // line 62
        echo "      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 62,  115 => 61,  112 => 60,  109 => 59,  107 => 58,  104 => 57,  101 => 55,  98 => 54,  96 => 53,  93 => 52,  91 => 51,  88 => 50,  86 => 49,  83 => 48,  79 => 45,  76 => 44,  69 => 39,  63 => 37,  60 => 36,  54 => 34,  52 => 33,  43 => 28,  40 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mbo/views/templates/admin/controllers/module_catalog/catalog.html.twig", "C:\\OSPanel\\domains\\localhost\\modules\\ps_mbo\\views\\templates\\admin\\controllers\\module_catalog\\catalog.html.twig");
    }
}
