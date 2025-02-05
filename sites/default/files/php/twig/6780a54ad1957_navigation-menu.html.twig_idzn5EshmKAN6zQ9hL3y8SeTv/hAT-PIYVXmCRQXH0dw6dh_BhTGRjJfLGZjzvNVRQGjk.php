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

/* core/modules/navigation/templates/navigation-menu.html.twig */
class __TwigTemplate_6e088508c80c6a6ca3a0f288add1c3e6 extends Template
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
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        $context["menu_heading_id"] = ("menu--" . \Drupal\Component\Utility\Html::getUniqueId($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 2, $this->source)));
        // line 3
        yield "<div class=\"admin-toolbar__item\">
  <h4 id=\"";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 4, $this->source), "html", null, true);
        yield "\" class=\"toolbar-block__title visually-hidden focusable\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\" aria-labelledby=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 5, $this->source), "html", null, true);
        yield "\">
    ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 6, $context, $this->getSourceContext()));
        yield "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "menu_name", "title", "items", "attributes", "menu_level", "v"]);        yield from [];
    }

    // line 10
    public function macro_menu_items($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                yield "
    ";
                // line 13
                $context["item_link_tag"] = "a";
                // line 14
                yield "
    ";
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15), "isRouted", [], "any", false, false, true, 15)) {
                    // line 16
                    yield "      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16), "routeName", [], "any", false, false, true, 16) == "<nolink>")) {
                        // line 17
                        yield "        ";
                        $context["item_link_tag"] = Twig\Extension\CoreExtension::constant("\\Drupal\\Core\\GeneratedNoLink::TAG");
                        // line 18
                        yield "      ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 18), "routeName", [], "any", false, false, true, 18) == "<button>")) {
                        // line 19
                        yield "        ";
                        $context["item_link_tag"] = Twig\Extension\CoreExtension::constant("\\Drupal\\Core\\GeneratedButton::TAG");
                        // line 20
                        yield "      ";
                    }
                    // line 21
                    yield "    ";
                }
                // line 22
                yield "
    ";
                // line 23
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 23), "options", [], "any", false, false, true, 23), "attributes", [], "any", false, false, true, 23))) {
                    // line 24
                    yield "      ";
                    $context["item_link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
                    // line 25
                    yield "    ";
                } else {
                    // line 26
                    yield "      ";
                    $context["item_link_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 26), "options", [], "any", false, false, true, 26), "attributes", [], "any", false, false, true, 26), 26, $this->source));
                    // line 27
                    yield "    ";
                }
                // line 28
                yield "
    ";
                // line 29
                $context["item_id"] = \Drupal\Component\Utility\Html::getUniqueId(("navigation-link--" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_link", [], "any", false, false, true, 29), "pluginId", [], "any", false, false, true, 29), 29, $this->source)));
                // line 30
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 31
                    yield "      ";
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 31))) {
                        // line 32
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 32, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item\">
          ";
                        // line 33
                        yield from                         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/navigation-menu.html.twig", 33)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 34
($context["item_link_attributes"] ?? null), "setAttribute", ["href", Twig\Extension\CoreExtension::default($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 34)), null)], "method", false, false, true, 34), "setAttribute", ["data-drupal-tooltip", CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 34)], "method", false, false, true, 34), "setAttribute", ["data-drupal-tooltip-class", "admin-toolbar__tooltip"], "method", false, false, true, 34), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 35
$context["item"], "class", [], "any", false, false, true, 35)), "html_tag" =>                         // line 36
($context["item_link_tag"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 37
$context["item"], "title", [], "any", false, false, true, 37), "modifiers" => Twig\Extension\CoreExtension::filter($this->env, ["collapsible", (((                        // line 40
($context["item_link_tag"] ?? null) == "span")) ? ("non-interactive") : (null))],                         // line 41
function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !(null === ($context["v"] ?? null)); })]));
                        // line 43
                        yield "        </li>
      ";
                    } else {
                        // line 45
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 45, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item toolbar-popover\" data-toolbar-popover>
          ";
                        // line 46
                        yield from                         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/navigation-menu.html.twig", 46)->unwrap()->yield(CoreExtension::toArray(["action" => t("Extend"), "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" =>                         // line 50
($context["item_id"] ?? null), "data-toolbar-popover-control" => true, "data-has-safe-triangle" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 54
$context["item"], "class", [], "any", false, false, true, 54)), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 55
$context["item"], "title", [], "any", false, false, true, 55), "modifiers" => ["expand--side", "collapsible"], "extra_classes" => ["toolbar-popover__control"]]));
                        // line 64
                        yield "          <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper inert>
            ";
                        // line 65
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 65)) {
                            // line 66
                            yield "              ";
                            yield from                             $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/navigation-menu.html.twig", 66)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,                             // line 67
($context["item_link_attributes"] ?? null), "setAttribute", ["href", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67))], "method", false, false, true, 67), "html_tag" =>                             // line 68
($context["item_link_tag"] ?? null), "text" => CoreExtension::getAttribute($this->env, $this->source,                             // line 69
$context["item"], "title", [], "any", false, false, true, 69), "modifiers" => ["large", "dark"], "extra_classes" => ["toolbar-popover__header"]]));
                            // line 78
                            yield "            ";
                        } else {
                            // line 79
                            yield "              ";
                            yield from                             $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/navigation-menu.html.twig", 79)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "modifiers" => ["large", "dark", "non-interactive"], "extra_classes" => ["toolbar-popover__header"], "html_tag" => "span", "text" => CoreExtension::getAttribute($this->env, $this->source,                             // line 90
$context["item"], "title", [], "any", false, false, true, 90)]));
                            // line 92
                            yield "            ";
                        }
                        // line 93
                        yield "            <ul class=\"toolbar-menu toolbar-popover__menu\">
              ";
                        // line 94
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 94), ($context["attributes"] ?? null), 1], 94, $context, $this->getSourceContext()));
                        yield "
            </ul>
          </div>
        </li>
      ";
                    }
                    // line 99
                    yield "
    ";
                } elseif ((                // line 100
($context["menu_level"] ?? null) == 1)) {
                    // line 101
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 101, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 102
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 102))) {
                        // line 103
                        yield "          ";
                        yield from                         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/navigation-menu.html.twig", 103)->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,                         // line 104
($context["item_link_attributes"] ?? null), "setAttribute", ["href", Twig\Extension\CoreExtension::default($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 104)), null)], "method", false, false, true, 104), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 105
$context["item"], "title", [], "any", false, false, true, 105), "html_tag" =>                         // line 106
($context["item_link_tag"] ?? null), "extra_classes" => [(((                        // line 108
($context["item_link_tag"] ?? null) == "span")) ? ("toolbar-button--non-interactive") : (""))]]));
                        // line 111
                        yield "        ";
                    } else {
                        // line 112
                        yield "          ";
                        yield from                         $this->loadTemplate("navigation:toolbar-button", "core/modules/navigation/templates/navigation-menu.html.twig", 112)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "data-toolbar-menu-trigger" =>                         // line 115
($context["menu_level"] ?? null)]), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 117
$context["item"], "title", [], "any", false, false, true, 117), "modifiers" => ["expand--down"]]));
                        // line 120
                        yield "          <ul class=\"toolbar-menu toolbar-menu--level-";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 121
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 121), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 121, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 124
                    yield "      </li>
    ";
                } else {
                    // line 126
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 126, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 127
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 127))) {
                        // line 128
                        yield "          ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 128), 128, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 128), 128, $this->source), ["class" => ["toolbar-menu__link", ("toolbar-menu__link--" . $this->sandbox->ensureToStringAllowed(                        // line 131
($context["menu_level"] ?? null), 131, $this->source))], "data-index-text" => Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,                         // line 133
$context["item"], "title", [], "any", false, false, true, 133), 133, $this->source)))]), "html", null, true);
                        // line 134
                        yield "
        ";
                    } else {
                        // line 136
                        yield "          <button
            class=\"toolbar-menu__link toolbar-menu__link--";
                        // line 137
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 137, $this->source), "html", null, true);
                        yield "\"
            data-toolbar-menu-trigger=\"";
                        // line 138
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 138, $this->source), "html", null, true);
                        yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                        // line 140
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 140), 140, $this->source))), "html", null, true);
                        yield "\"
          >
            <span data-toolbar-action class=\"toolbar-menu__link-action visually-hidden\">";
                        // line 142
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                        yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                        // line 143
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
                        yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                        // line 145
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 146
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 146), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 146, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 149
                    yield "      </li>
    ";
                }
                // line 151
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/navigation/templates/navigation-menu.html.twig";
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
        return array (  304 => 151,  300 => 149,  294 => 146,  290 => 145,  285 => 143,  281 => 142,  276 => 140,  271 => 138,  267 => 137,  264 => 136,  260 => 134,  258 => 133,  257 => 131,  255 => 128,  253 => 127,  248 => 126,  244 => 124,  238 => 121,  233 => 120,  231 => 117,  230 => 115,  228 => 112,  225 => 111,  223 => 108,  222 => 106,  221 => 105,  220 => 104,  218 => 103,  216 => 102,  211 => 101,  209 => 100,  206 => 99,  198 => 94,  195 => 93,  192 => 92,  190 => 90,  188 => 79,  185 => 78,  183 => 69,  182 => 68,  181 => 67,  179 => 66,  177 => 65,  174 => 64,  172 => 55,  171 => 54,  170 => 50,  169 => 46,  164 => 45,  160 => 43,  158 => 41,  157 => 40,  156 => 37,  155 => 36,  154 => 35,  153 => 34,  152 => 33,  147 => 32,  144 => 31,  141 => 30,  139 => 29,  136 => 28,  133 => 27,  130 => 26,  127 => 25,  124 => 24,  122 => 23,  119 => 22,  116 => 21,  113 => 20,  110 => 19,  107 => 18,  104 => 17,  101 => 16,  99 => 15,  96 => 14,  94 => 13,  91 => 12,  86 => 11,  72 => 10,  61 => 6,  57 => 5,  51 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/navigation/templates/navigation-menu.html.twig", "/var/www/html/fmcrs/core/modules/navigation/templates/navigation-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "set" => 2, "macro" => 10, "for" => 11, "if" => 15, "include" => 33);
        static $filters = array("clean_unique_id" => 2, "escape" => 4, "default" => 34, "render" => 34, "clean_class" => 35, "filter" => 41, "t" => 47, "lower" => 133, "first" => 133);
        static $functions = array("constant" => 17, "create_attribute" => 24, "link" => 128);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'for', 'if', 'include'],
                ['clean_unique_id', 'escape', 'default', 'render', 'clean_class', 'filter', 't', 'lower', 'first'],
                ['constant', 'create_attribute', 'link'],
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
