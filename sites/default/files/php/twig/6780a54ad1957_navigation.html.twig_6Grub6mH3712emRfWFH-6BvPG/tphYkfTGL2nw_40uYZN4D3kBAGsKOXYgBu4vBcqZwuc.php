<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/modules/navigation/layouts/navigation.html.twig */
class __TwigTemplate_f40f16c347c3ee19ef68283a0006f6cc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        $context["control_bar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 21
        yield "
<div ";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["control_bar_attributes"] ?? null), "addClass", ["admin-toolbar-control-bar"], "method", false, false, true, 22), "setAttribute", ["data-drupal-admin-styles", ""], "method", false, false, true, 22), "setAttribute", ["data-offset-top", ""], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        yield ">
  <div class=\"admin-toolbar-control-bar__content\">
    ";
        // line 24
        yield from         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/layouts/navigation.html.twig", 24)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" => "admin-toolbar", "type" => "button"]), "icon" => "burger", "text" => t("Expand sidebar"), "modifiers" => ["small-offset"], "extra_classes" => ["admin-toolbar-control-bar__burger"]]));
        // line 33
        yield "  </div>
</div>

<aside
  ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-toolbar"], "method", false, false, true, 37), "setAttribute", ["id", "admin-toolbar"], "method", false, false, true, 37), "setAttribute", ["data-drupal-admin-styles", true], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        yield "
>
  ";
        // line 40
        yield "  <div class=\"admin-toolbar__displace-placeholder\"></div>

  <div class=\"admin-toolbar__scroll-wrapper\">
    ";
        // line 43
        $context["title_menu"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-title");
        // line 44
        yield "
    ";
        // line 46
        yield "    <nav ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 46), "setAttribute", ["id", "menu-builder"], "method", false, false, true, 46), "addClass", ["admin-toolbar__content"], "method", false, false, true, 46), "setAttribute", ["aria-labelledby", ($context["title_menu"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        yield ">
      <h3 id=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu"] ?? null), 47, $this->source), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar content"));
        yield "</h3>
      ";
        // line 49
        yield "      <div class=\"admin-toolbar__header\">
        ";
        // line 50
        if ( !($context["hide_logo"] ?? null)) {
            // line 51
            yield "          <a class=\"admin-toolbar__logo\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\">
            ";
            // line 52
            if (($context["logo_path"] ?? null)) {
                // line 53
                yield "              <img alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Navigation logo"));
                yield "\" src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["logo_path"] ?? null), 53, $this->source)), "html", null, true);
                yield "\" loading=\"eager\" width=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("logo_width", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["logo_width"] ?? null), 53, $this->source), 40)) : (40)), "html", null, true);
                yield "\" height=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("logo_height", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["logo_height"] ?? null), 53, $this->source), 40)) : (40)), "html", null, true);
                yield "\">
            ";
            } else {
                // line 55
                yield "              ";
                yield from                 $this->loadTemplate("@navigation/logo.svg.twig", "core/modules/navigation/layouts/navigation.html.twig", 55)->unwrap()->yield(CoreExtension::toArray(["label" => t("Navigation logo")]));
                // line 58
                yield "            ";
            }
            // line 59
            yield "          </a>
        ";
        }
        // line 61
        yield "        ";
        yield from         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/layouts/navigation.html.twig", 61)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-toolbar-back-control" => true, "tabindex" => "-1"]), "extra_classes" => ["admin-toolbar__back-button"], "icon" => "back", "text" => t("Back")]));
        // line 67
        yield "        ";
        yield from         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/layouts/navigation.html.twig", 67)->unwrap()->yield(CoreExtension::toArray(["action" => t("Collapse sidebar"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-controls" => "admin-toolbar", "tabindex" => "-1", "type" => "button"]), "extra_classes" => ["admin-toolbar__close-button"], "icon" => "cross"]));
        // line 73
        yield "      </div>

      ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        yield "
    </nav>

    ";
        // line 78
        $context["title_menu_footer"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-footer");
        // line 79
        yield "    <nav ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "footer", [], "any", false, false, true, 79), "setAttribute", ["id", "menu-footer"], "method", false, false, true, 79), "addClass", ["admin-toolbar__footer"], "method", false, false, true, 79), "setAttribute", ["aria-labelledby", ($context["title_menu_footer"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        yield ">
      <h3 id=\"";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu_footer"] ?? null), 80, $this->source), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar footer"));
        yield "</h3>
      ";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "footer", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        yield "
      <button aria-controls=\"admin-toolbar\" class=\"admin-toolbar__expand-button\" type=\"button\">
        <span class=\"visually-hidden\" data-toolbar-text>";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse sidebar"));
        yield "</span>
      </button>
    </nav>
  </div>
</aside>
<div class=\"admin-toolbar-overlay\" aria-controls=\"admin-toolbar\" data-drupal-admin-styles></div>
<script>
  if (localStorage.getItem('Drupal.navigation.sidebarExpanded') !== 'false' && (window.matchMedia('(min-width: 1024px)').matches)) {
    document.documentElement.setAttribute('data-admin-toolbar', 'expanded');
  }
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "region_attributes", "hide_logo", "logo_path", "logo_width", "logo_height", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/layouts/navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  156 => 83,  151 => 81,  145 => 80,  140 => 79,  138 => 78,  132 => 75,  128 => 73,  125 => 67,  122 => 61,  118 => 59,  115 => 58,  112 => 55,  100 => 53,  98 => 52,  93 => 51,  91 => 50,  88 => 49,  82 => 47,  77 => 46,  74 => 44,  72 => 43,  67 => 40,  62 => 37,  56 => 33,  54 => 24,  49 => 22,  46 => 21,  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/layouts/navigation.html.twig", "/var/www/html/fmcrs/core/modules/navigation/layouts/navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "include" => 24, "if" => 50);
        static $filters = array("escape" => 22, "t" => 27, "clean_unique_id" => 43, "default" => 53);
        static $functions = array("create_attribute" => 20, "path" => 51, "file_url" => 53);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape', 't', 'clean_unique_id', 'default'],
                ['create_attribute', 'path', 'file_url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
