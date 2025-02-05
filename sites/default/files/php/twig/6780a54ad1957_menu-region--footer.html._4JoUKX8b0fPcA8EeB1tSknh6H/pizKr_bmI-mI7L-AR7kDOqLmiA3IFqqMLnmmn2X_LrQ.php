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

/* core/modules/navigation/templates/menu-region--footer.html.twig */
class __TwigTemplate_fd34c70e85e7a505a945872ddcc19458 extends Template
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
        // line 25
        $context["menu_heading_id"] = ("menu--" . \Drupal\Component\Utility\Html::getUniqueId($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 25, $this->source)));
        // line 26
        yield "<div class=\"admin-toolbar__item\">
  <h4 id=\"";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 27, $this->source), "html", null, true);
        yield "\" class=\"toolbar-block__title visually-hidden focusable\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 27, $this->source), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\">
    ";
        // line 29
        if (($context["help"] ?? null)) {
            // line 30
            yield "      <li class=\"toolbar-block__list-item\">
        ";
            // line 31
            yield from             $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/menu-region--footer.html.twig", 31)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["href" => $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("help.main"), "data-drupal-tooltip" => t("Help"), "data-drupal-tooltip-class" => "admin-toolbar__tooltip"]), "icon" => "help", "html_tag" => "a", "text" => t("Help"), "modifiers" => ["collapsible"]]));
            // line 38
            yield "      </li>
    ";
        }
        // line 40
        yield "    <li id=\"admin-toolbar-user-menu\" class=\"toolbar-block__list-item toolbar-block__list-item--user toolbar-popover\" data-toolbar-popover>
      ";
        // line 41
        yield from         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/menu-region--footer.html.twig", 41)->unwrap()->yield(CoreExtension::toArray(["action" => t("Extend"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" => "admin-toolbar-user-menu", "data-toolbar-popover-control" => true, "data-has-safe-triangle" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(        // line 49
($context["menu_name"] ?? null)), "text" =>         // line 50
($context["title"] ?? null), "modifiers" => ["expand--side", "collapsible"], "extra_classes" => ["toolbar-popover__control"]]));
        // line 59
        yield "      <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper>
        ";
        // line 60
        yield from         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/menu-region--footer.html.twig", 60)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "modifiers" => ["large", "dark", "non-interactive"], "extra_classes" => ["toolbar-popover__header"], "html_tag" => "span", "text" =>         // line 71
($context["title"] ?? null)]));
        // line 73
        yield "        <ul class=\"toolbar-menu toolbar-popover__menu\">
          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            yield "            <li class=\"toolbar-menu__item toolbar-menu__item--level-1\">
              ";
            // line 76
            yield from             $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/menu-region--footer.html.twig", 76)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["href" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source,             // line 77
$context["item"], "url", [], "any", false, false, true, 77))]), "html_tag" => "a", "text" => CoreExtension::getAttribute($this->env, $this->source,             // line 79
$context["item"], "title", [], "any", false, false, true, 79)]));
            // line 81
            yield "            </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "        </ul>
      </div>
    </li>
  </ul>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu_name", "title", "help", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/menu-region--footer.html.twig";
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
        return array (  101 => 83,  94 => 81,  92 => 79,  91 => 77,  90 => 76,  87 => 75,  83 => 74,  80 => 73,  78 => 71,  77 => 60,  74 => 59,  72 => 50,  71 => 49,  70 => 41,  67 => 40,  63 => 38,  61 => 31,  58 => 30,  56 => 29,  49 => 27,  46 => 26,  44 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/menu-region--footer.html.twig", "/var/www/html/fmcrs/core/modules/navigation/templates/menu-region--footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 25, "if" => 29, "include" => 31, "for" => 74);
        static $filters = array("clean_unique_id" => 25, "escape" => 27, "t" => 32, "clean_class" => 49, "render" => 77);
        static $functions = array("create_attribute" => 32, "path" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'for'],
                ['clean_unique_id', 'escape', 't', 'clean_class', 'render'],
                ['create_attribute', 'path'],
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
