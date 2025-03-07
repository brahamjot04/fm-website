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

/* themes/gin/templates/form/details.html.twig */
class __TwigTemplate_46354420add5611a8e8a6c2576895f33 extends Template
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
        // line 27
        $context["show_description_toggle"] = (($context["description_toggle"] ?? null) && ($context["description"] ?? null));
        // line 29
        $context["classes"] = ["claro-details", ((        // line 31
($context["accordion"] ?? null)) ? ("claro-details--accordion") : ("")), ((        // line 32
($context["accordion_item"] ?? null)) ? ("claro-details--accordion-item") : ("")), ((        // line 33
($context["show_description_toggle"] ?? null)) ? ("help-icon__description-container") : (""))];
        // line 37
        $context["content_wrapper_classes"] = ["claro-details__wrapper", "details-wrapper", ((        // line 40
($context["accordion"] ?? null)) ? ("claro-details__wrapper--accordion") : ("")), ((        // line 41
($context["accordion_item"] ?? null)) ? ("claro-details__wrapper--accordion-item") : (""))];
        // line 45
        $context["inner_wrapper_classes"] = ["claro-details__content", ((        // line 47
($context["accordion"] ?? null)) ? ("claro-details__content--accordion") : ("")), ((        // line 48
($context["accordion_item"] ?? null)) ? ("claro-details__content--accordion-item") : (""))];
        // line 52
        $context["description_classes"] = ["claro-details__description", ((        // line 54
($context["disabled"] ?? null)) ? ("is-disabled") : ("")), (((        // line 55
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 58
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        yield ">";
        // line 59
        if (($context["title"] ?? null)) {
            // line 61
            $context["summary_classes"] = ["claro-details__summary", ((            // line 63
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 64
($context["required"] ?? null)) ? ("form-required") : ("")), ((            // line 65
($context["accordion"] ?? null)) ? ("claro-details__summary--accordion") : ("")), ((            // line 66
($context["accordion_item"] ?? null)) ? ("claro-details__summary--accordion-item") : (""))];
            // line 69
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            yield ">";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 70, $this->source), "html", null, true);
            // line 71
            yield "<span class=\"required-mark\"></span>
      ";
            // line 72
            if (($context["show_description_toggle"] ?? null)) {
                // line 73
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("gin/gin_description_toggle"), "html", null, true);
                yield "
        <button class=\"help-icon__description-toggle\"></button>
      ";
            }
            // line 76
            yield "    </summary>";
        }
        // line 78
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        yield ">
    ";
        // line 79
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 80
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => $this->sandbox->ensureToStringAllowed(($context["inner_wrapper_classes"] ?? null), 80, $this->source)]), "html", null, true);
            yield ">
    ";
        }
        // line 82
        yield "
      ";
        // line 83
        if (($context["errors"] ?? null)) {
            // line 84
            yield "        <div class=\"form-item form-item--error-message\">
          ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 85, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 88
        if (($context["description"] ?? null)) {
            // line 89
            yield "<div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 89), 89, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 89, $this->source), "html", null, true);
            yield "</div>";
        }
        // line 91
        if (($context["children"] ?? null)) {
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 92, $this->source), "html", null, true);
        }
        // line 94
        if (($context["value"] ?? null)) {
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 95, $this->source), "html", null, true);
        }
        // line 98
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 99
            yield "    </div>
    ";
        }
        // line 101
        yield "  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["description_toggle", "description", "accordion", "accordion_item", "disabled", "description_display", "attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "children", "value"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/gin/templates/form/details.html.twig";
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
        return array (  148 => 101,  144 => 99,  142 => 98,  139 => 95,  137 => 94,  134 => 92,  132 => 91,  125 => 89,  123 => 88,  117 => 85,  114 => 84,  112 => 83,  109 => 82,  103 => 80,  101 => 79,  96 => 78,  93 => 76,  86 => 73,  84 => 72,  81 => 71,  79 => 70,  75 => 69,  73 => 66,  72 => 65,  71 => 64,  70 => 63,  69 => 61,  67 => 59,  63 => 58,  61 => 55,  60 => 54,  59 => 52,  57 => 48,  56 => 47,  55 => 45,  53 => 41,  52 => 40,  51 => 37,  49 => 33,  48 => 32,  47 => 31,  46 => 29,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/gin/templates/form/details.html.twig", "/var/www/html/fmcrs/themes/gin/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 59);
        static $filters = array("escape" => 58);
        static $functions = array("attach_library" => 73, "create_attribute" => 80);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['attach_library', 'create_attribute'],
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
