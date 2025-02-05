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

/* themes/dxpr_theme/templates/page.html.twig */
class __TwigTemplate_96f006a3c485dc447a80c5a859afcc87 extends Template
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
            'secondary_header' => [$this, 'block_secondary_header'],
            'navbar' => [$this, 'block_navbar'],
            'highlighted' => [$this, 'block_highlighted'],
            'page_title' => [$this, 'block_page_title'],
            'content_top' => [$this, 'block_content_top'],
            'main' => [$this, 'block_main'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_bottom' => [$this, 'block_content_bottom'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 66), "getString", [], "method", false, false, true, 66) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 66), "boxed_layout", [], "any", false, false, true, 66)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 67), "getString", [], "method", false, false, true, 67) == "boxed"))) {
            // line 68
            yield "<div class=\"dxpr-theme-boxed-container\">
";
        }
        // line 70
        yield "
";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 72)) {
            // line 73
            yield "  ";
            yield from $this->unwrap()->yieldBlock('secondary_header', $context, $blocks);
        }
        // line 88
        yield "
";
        // line 90
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 90) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 90))) {
            // line 91
            yield "  ";
            yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        }
        // line 148
        yield "
<div class=\"wrap-containers\">

";
        // line 152
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 152)) {
            // line 153
            yield "  ";
            yield from $this->unwrap()->yieldBlock('highlighted', $context, $blocks);
        }
        // line 157
        yield "
";
        // line 159
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 159) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 159), "page_title_home_hide", [], "any", false, false, true, 159) && ($context["is_front"] ?? null)))) {
            // line 160
            yield "
  ";
            // line 161
            yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        }
        // line 175
        yield "
";
        // line 177
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 177)) {
            // line 178
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_top', $context, $blocks);
        }
        // line 191
        yield "
";
        // line 193
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 273
        yield "
";
        // line 275
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 275)) {
            // line 276
            yield "  ";
            yield from $this->unwrap()->yieldBlock('content_bottom', $context, $blocks);
        }
        // line 289
        yield "</div>

";
        // line 292
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 292)) {
            // line 293
            yield "  ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        }
        // line 308
        yield "
";
        // line 309
        if ((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 309), "getString", [], "method", false, false, true, 309) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 309), "boxed_layout", [], "any", false, false, true, 309)) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 310
($context["node"] ?? null), "field_dth_page_layout", [], "any", false, false, true, 310), "getString", [], "method", false, false, true, 310) == "boxed"))) {
            // line 311
            yield "</div><!-- end dxpr-theme-boxed-container -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "theme", "page", "is_front", "title_bg_image_path", "page_title_attributes", "_self", "content_attributes", "action_links", "region"]);        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_secondary_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 74), "full_width_containers", [], "any", false, false, true, 74), "cnt_secondary_header", [], "any", false, false, true, 74)) ? ("dxpr-theme-fluid") : ("container"));
        // line 75
        yield "    <header id=\"secondary-header\" class=\"dxpr-theme-secondary-header clearfix ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 75), "secondary_header_hide", [], "any", false, false, true, 75), 75, $this->source)), "html", null, true);
        yield "\" role=\"banner\">
      <div class=\"";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 76, $this->source), "html", null, true);
        yield " secondary-header-container\">
        ";
        // line 77
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 77), "full_width_containers", [], "any", false, false, true, 77), "cnt_secondary_header", [], "any", false, false, true, 77)) {
            // line 78
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 80
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        yield "
        ";
        // line 81
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 81), "full_width_containers", [], "any", false, false, true, 81), "cnt_secondary_header", [], "any", false, false, true, 81)) {
            // line 82
            yield "          </div></div>
        ";
        }
        // line 84
        yield "      </div>
    </header>
  ";
        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 92
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 92), "header_position", [], "any", false, false, true, 92)) {
            // line 93
            yield "      ";
            // line 94
            $context["navbar_classes"] = ["navbar dxpr-theme-header dxpr-theme-header--top", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 96
($context["theme"] ?? null), "settings", [], "any", false, false, true, 96), "navbar_position", [], "any", false, false, true, 96)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 96), "navbar_position", [], "any", false, false, true, 96), 96, $this->source))) : ("")), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 97
($context["theme"] ?? null), "settings", [], "any", false, false, true, 97), "header_side_align", [], "any", false, false, true, 97)];
            // line 100
            yield "    ";
        } else {
            // line 101
            yield "      ";
            // line 102
            $context["navbar_classes"] = ["navbar dxpr-theme-header clearfix", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 104
($context["theme"] ?? null), "settings", [], "any", false, false, true, 104), "header_position", [], "any", false, false, true, 104)) ? ("dxpr-theme-header--side") : ("dxpr-theme-header--top")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 105
($context["theme"] ?? null), "settings", [], "any", false, false, true, 105), "navbar_position", [], "any", false, false, true, 105)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 105), "navbar_position", [], "any", false, false, true, 105), 105, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 106
($context["theme"] ?? null), "settings", [], "any", false, false, true, 106), "header_top_layout", [], "any", false, false, true, 106)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 106), "header_top_layout", [], "any", false, false, true, 106), 106, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["theme"] ?? null), "settings", [], "any", false, false, true, 107), "header_style", [], "any", false, false, true, 107)) ? (("dxpr-theme-header--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 107), "header_style", [], "any", false, false, true, 107), 107, $this->source)))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["theme"] ?? null), "settings", [], "any", false, false, true, 108), "menu_hover", [], "any", false, false, true, 108)) ? (("dxpr-theme-header--hover-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 108), "menu_hover", [], "any", false, false, true, 108), 108, $this->source)))) : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 109
($context["theme"] ?? null), "settings", [], "any", false, false, true, 109), "header_top_fixed", [], "any", false, false, true, 109) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 109), "header_top_sticky", [], "any", false, false, true, 109))) ? ("dxpr-theme-header--sticky") : ("")), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 110
($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_fixed", [], "any", false, false, true, 110) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 110), "header_top_sticky", [], "any", false, false, true, 110))) ? ("dxpr-theme-header--fixed") : (""))];
            // line 113
            yield "    ";
        }
        // line 114
        yield "    ";
        $context["mark_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 114), "mark_menu_with_children", [], "any", false, false, true, 114)) ? ("dxpr-theme-menu--has-children") : (""));
        // line 115
        yield "    ";
        $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "removeClass", ["container"], "method", false, false, true, 115), "addClass", [($context["navbar_classes"] ?? null)], "method", false, false, true, 115);
        // line 116
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 116), "header_top_fixed", [], "any", false, false, true, 116) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 116), "header_top_sticky", [], "any", false, false, true, 116))) {
            // line 117
            yield "      ";
            $context["navbar_attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "setAttribute", ["data-spy", "affix"], "method", false, false, true, 117), "setAttribute", ["data-offset-top", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 117), "header_top_height_sticky_offset", [], "any", false, false, true, 117)], "method", false, false, true, 117);
            // line 118
            yield "    ";
        }
        // line 119
        yield "    ";
        $context["hamburger_menu"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 119), "hamburger_menu", [], "any", false, false, true, 119)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 119), "hamburger_menu", [], "any", false, false, true, 119)) : ("three-dash"));
        // line 120
        yield "
    <header";
        // line 121
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 121, $this->source), "html", null, true);
        yield ">
      ";
        // line 122
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 122), "full_width_containers", [], "any", false, false, true, 122), "cnt_header_nav", [], "any", false, false, true, 122)) ? ("dxpr-theme-fluid") : ("container"));
        // line 123
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 123, $this->source), "html", null, true);
        yield " navbar-container\">
        ";
        // line 124
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 124), "full_width_containers", [], "any", false, false, true, 124), "cnt_header_nav", [], "any", false, false, true, 124)) {
            // line 125
            yield "          <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 127
        yield "        <div class=\"navbar-header\">
          ";
        // line 128
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 128), 128, $this->source), "html", null, true);
        yield "
          ";
        // line 130
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 130)) {
            // line 131
            yield "            <a id=\"dxpr-theme-menu-toggle\" href=\"#\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hamburger_menu"] ?? null), 131, $this->source), "html", null, true);
            yield "\"><span></span><div class=\"screenreader-text visually-hidden\">Toggle menu</div></a>
          ";
        }
        // line 133
        yield "        </div>

        ";
        // line 136
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 136)) {
            // line 137
            yield "            <nav role=\"navigation\" id=\"dxpr-theme-main-menu\" class=\"dxpr-theme-main-menu ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mark_menu"] ?? null), 137, $this->source), "html", null, true);
            yield "\">
            ";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            yield "
            </nav>
        ";
        }
        // line 141
        yield "        ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 141), "full_width_containers", [], "any", false, false, true, 141), "cnt_header_nav", [], "any", false, false, true, 141)) {
            // line 142
            yield "          </div></div>
        ";
        }
        // line 144
        yield "      </div>
    </header>
  ";
        yield from [];
    }

    // line 153
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_highlighted(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 154
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 162
        yield "  ";
        if (($context["title_bg_image_path"] ?? null)) {
            // line 163
            yield "    <style>
      #page-title-full-width-container::after{ background-image:url(";
            // line 164
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["title_bg_image_path"] ?? null), 164, $this->source)), "html", null, true);
            yield ");}
    </style>
  ";
        }
        // line 167
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_attributes"] ?? null), 167, $this->source), "html", null, true);
        yield " class=\"page-title-full-width-container\" id=\"page-title-full-width-container\">
    ";
        // line 168
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 168), "full_width_containers", [], "any", false, false, true, 168), "cnt_page_title", [], "any", false, false, true, 168)) ? ("dxpr-theme-fluid") : ("container"));
        // line 169
        yield "      <header role=\"banner\" id=\"page-title\" class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 169, $this->source), "html", null, true);
        yield " page-title-container\">
        ";
        // line 170
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
        yield "
      </header>
    </div>
  ";
        yield from [];
    }

    // line 178
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 179
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 179), "full_width_containers", [], "any", false, false, true, 179), "cnt_content_top", [], "any", false, false, true, 179)) ? ("dxpr-theme-fluid") : ("container"));
        // line 180
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 180, $this->source), "html", null, true);
        yield " content-top-container\">
      ";
        // line 181
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 181), "full_width_containers", [], "any", false, false, true, 181), "cnt_content_top", [], "any", false, false, true, 181)) {
            // line 182
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 184
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
        yield "
      ";
        // line 185
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 185), "full_width_containers", [], "any", false, false, true, 185), "cnt_content_top", [], "any", false, false, true, 185)) {
            // line 186
            yield "      </div></div>
      ";
        }
        // line 188
        yield "    </div>
  ";
        yield from [];
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 194
        yield "  ";
        $context["has_sidebar_first"] = CoreExtension::callMacro($macros["_self"], "macro_hasContent", [CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 194)], 194, $context, $this->getSourceContext());
        // line 195
        yield "  ";
        $context["has_sidebar_second"] = CoreExtension::callMacro($macros["_self"], "macro_hasContent", [CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 195)], 195, $context, $this->getSourceContext());
        // line 196
        yield "  ";
        $context["container"] = ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 196), "full_width_containers", [], "any", false, false, true, 196), "cnt_content", [], "any", false, false, true, 196) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 197
($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 197), "getString", [], "method", false, false, true, 197) == "dxpr-theme-util-full-width-content")) || (((        // line 198
($context["node"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 198), "full_width_content_types", [], "any", false, false, true, 198), CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 198), [], "any", false, false, true, 198)) &&  !        // line 199
($context["has_sidebar_first"] ?? null)) &&  !        // line 200
($context["has_sidebar_second"] ?? null)))) ? ("") : ("container"));
        // line 201
        yield "
  <div role=\"main\" class=\"main-container ";
        // line 202
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 202, $this->source), "html", null, true);
        yield " js-quickedit-main-content clearfix\">
    ";
        // line 203
        if ((($context["container"] ?? null) != "")) {
            // line 204
            yield "    <div class=\"row\">
    ";
        }
        // line 206
        yield "      ";
        // line 207
        yield "      ";
        if (($context["has_sidebar_first"] ?? null)) {
            // line 208
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_first', $context, $blocks);
            // line 213
            yield "      ";
        }
        // line 214
        yield "
      ";
        // line 216
        yield "      ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 216), "getString", [], "method", false, false, true, 216)) {
            // line 217
            yield "        ";
            // line 218
            $context["content_classes"] = [(((            // line 219
($context["has_sidebar_first"] ?? null) && ($context["has_sidebar_second"] ?? null))) ? ("col-sm-6") : ("")), (((            // line 220
($context["has_sidebar_first"] ?? null) &&  !($context["has_sidebar_second"] ?? null))) ? ("col-sm-9") : ("")), (((            // line 221
($context["has_sidebar_second"] ?? null) &&  !($context["has_sidebar_first"] ?? null))) ? ("col-sm-9") : ("")), (((((            // line 222
($context["container"] ?? null) != "") &&  !($context["has_sidebar_first"] ?? null)) &&  !($context["has_sidebar_second"] ?? null))) ? ("col-sm-12") : (""))];
            // line 225
            yield "      ";
        } else {
            // line 226
            yield "        ";
            $context["col"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dth_main_content_width", [], "any", false, false, true, 226), "getString", [], "method", false, false, true, 226);
            // line 227
            yield "        ";
            // line 228
            $context["content_classes"] = [(((            // line 229
($context["col"] ?? null) == "dxpr-theme-util-content-center-4-col")) ? ("col-md-4 offset-md-4") : ("")), (((            // line 230
($context["col"] ?? null) == "dxpr-theme-util-content-center-6-col")) ? ("col-md-6 offset-md-3") : ("")), (((            // line 231
($context["col"] ?? null) == "dxpr-theme-util-content-center-8-col")) ? ("col-md-8 offset-md-2") : ("")), (((            // line 232
($context["col"] ?? null) == "dxpr-theme-util-content-center-10-col")) ? ("col-md-10 offset-md-1") : (""))];
            // line 235
            yield "      ";
        }
        // line 236
        yield "
      <section";
        // line 237
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null)], "method", false, false, true, 237), 237, $this->source), "html", null, true);
        yield ">

        ";
        // line 240
        yield "        ";
        if (($context["action_links"] ?? null)) {
            // line 241
            yield "          ";
            yield from $this->unwrap()->yieldBlock('action_links', $context, $blocks);
            // line 244
            yield "        ";
        }
        // line 245
        yield "
        ";
        // line 247
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 247)) {
            // line 248
            yield "          ";
            yield from $this->unwrap()->yieldBlock('help', $context, $blocks);
            // line 251
            yield "        ";
        }
        // line 252
        yield "
        ";
        // line 254
        yield "        ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 258
        yield "      </section>

      ";
        // line 261
        yield "      ";
        if (($context["has_sidebar_second"] ?? null)) {
            // line 262
            yield "        ";
            yield from $this->unwrap()->yieldBlock('sidebar_second', $context, $blocks);
            // line 267
            yield "      ";
        }
        // line 268
        yield "    ";
        if ((($context["container"] ?? null) != "")) {
            // line 269
            yield "    </div><!-- end .ow -->
    ";
        }
        // line 271
        yield "  </div><!-- end main-container -->
";
        yield from [];
    }

    // line 208
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_first(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 209
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 210
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 241
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_action_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 242
        yield "            <ul class=\"action-links\" style=\"border: 2px dashed blue\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 242, $this->source), "html", null, true);
        yield "</ul>
          ";
        yield from [];
    }

    // line 248
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 249
        yield "            ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
        yield "
          ";
        yield from [];
    }

    // line 254
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 255
        yield "          <a id=\"main-content\"></a>
          ";
        // line 256
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
        yield "
        ";
        yield from [];
    }

    // line 262
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_second(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 263
        yield "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 264
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 264), 264, $this->source), "html", null, true);
        yield "
          </aside>
        ";
        yield from [];
    }

    // line 276
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 277
        yield "    ";
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 277), "full_width_containers", [], "any", false, false, true, 277), "cnt_content_bottom", [], "any", false, false, true, 277)) ? ("dxpr-theme-fluid") : ("container"));
        // line 278
        yield "    <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 278, $this->source), "html", null, true);
        yield " content-bottom-container\">
      ";
        // line 279
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 279), "full_width_containers", [], "any", false, false, true, 279), "cnt_content_bottom", [], "any", false, false, true, 279)) {
            // line 280
            yield "      <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
      ";
        }
        // line 282
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
        yield "
      ";
        // line 283
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 283), "full_width_containers", [], "any", false, false, true, 283), "cnt_content_bottom", [], "any", false, false, true, 283)) {
            // line 284
            yield "      </div></div>
      ";
        }
        // line 286
        yield "    </div>
  ";
        yield from [];
    }

    // line 293
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 294
        yield "    <footer class=\"dxpr-theme-footer clearfix\" role=\"contentinfo\">
      ";
        // line 295
        $context["container"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 295), "full_width_containers", [], "any", false, false, true, 295), "cnt_footer", [], "any", false, false, true, 295)) ? ("dxpr-theme-fluid") : ("container"));
        // line 296
        yield "      <div class=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 296, $this->source), "html", null, true);
        yield " footer-container\">
        ";
        // line 297
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 297), "full_width_containers", [], "any", false, false, true, 297), "cnt_footer", [], "any", false, false, true, 297)) {
            // line 298
            yield "        <div class=\"row container-row\"><div class=\"col-sm-12 container-col\">
        ";
        }
        // line 300
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 300), 300, $this->source), "html", null, true);
        yield "
        ";
        // line 301
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 301), "full_width_containers", [], "any", false, false, true, 301), "cnt_footer", [], "any", false, false, true, 301)) {
            // line 302
            yield "        </div></div>
        ";
        }
        // line 304
        yield "      </div>
    </footer>
  ";
        yield from [];
    }

    // line 60
    public function macro_hasContent($__region__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "region" => $__region__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 61
            $context["keep_tags"] = "<drupal-render-placeholder><form><embed><hr><iframe><img><input><link><object><script><source><style><video>";
            // line 62
            $context["content"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(Twig\Extension\CoreExtension::replace($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["region"] ?? null), 62, $this->source)), ["
" => "", "" => "", "\t" => ""]), $this->sandbox->ensureToStringAllowed(($context["keep_tags"] ?? null), 62, $this->source)));
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["content"] ?? null)) ? ("TRUE") : ("")));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/dxpr_theme/templates/page.html.twig";
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
        return array (  722 => 63,  719 => 62,  717 => 61,  705 => 60,  698 => 304,  694 => 302,  692 => 301,  687 => 300,  683 => 298,  681 => 297,  676 => 296,  674 => 295,  671 => 294,  664 => 293,  658 => 286,  654 => 284,  652 => 283,  647 => 282,  643 => 280,  641 => 279,  636 => 278,  633 => 277,  626 => 276,  618 => 264,  615 => 263,  608 => 262,  601 => 256,  598 => 255,  591 => 254,  583 => 249,  576 => 248,  568 => 242,  561 => 241,  553 => 210,  550 => 209,  543 => 208,  537 => 271,  533 => 269,  530 => 268,  527 => 267,  524 => 262,  521 => 261,  517 => 258,  514 => 254,  511 => 252,  508 => 251,  505 => 248,  502 => 247,  499 => 245,  496 => 244,  493 => 241,  490 => 240,  485 => 237,  482 => 236,  479 => 235,  477 => 232,  476 => 231,  475 => 230,  474 => 229,  473 => 228,  471 => 227,  468 => 226,  465 => 225,  463 => 222,  462 => 221,  461 => 220,  460 => 219,  459 => 218,  457 => 217,  454 => 216,  451 => 214,  448 => 213,  445 => 208,  442 => 207,  440 => 206,  436 => 204,  434 => 203,  430 => 202,  427 => 201,  425 => 200,  424 => 199,  423 => 198,  422 => 197,  420 => 196,  417 => 195,  414 => 194,  407 => 193,  401 => 188,  397 => 186,  395 => 185,  390 => 184,  386 => 182,  384 => 181,  379 => 180,  376 => 179,  369 => 178,  360 => 170,  355 => 169,  353 => 168,  348 => 167,  342 => 164,  339 => 163,  336 => 162,  329 => 161,  321 => 154,  314 => 153,  307 => 144,  303 => 142,  300 => 141,  294 => 138,  289 => 137,  286 => 136,  282 => 133,  276 => 131,  273 => 130,  269 => 128,  266 => 127,  262 => 125,  260 => 124,  255 => 123,  253 => 122,  249 => 121,  246 => 120,  243 => 119,  240 => 118,  237 => 117,  234 => 116,  231 => 115,  228 => 114,  225 => 113,  223 => 110,  222 => 109,  221 => 108,  220 => 107,  219 => 106,  218 => 105,  217 => 104,  216 => 102,  214 => 101,  211 => 100,  209 => 97,  208 => 96,  207 => 94,  205 => 93,  202 => 92,  195 => 91,  188 => 84,  184 => 82,  182 => 81,  177 => 80,  173 => 78,  171 => 77,  167 => 76,  162 => 75,  159 => 74,  152 => 73,  144 => 311,  142 => 310,  141 => 309,  138 => 308,  134 => 293,  132 => 292,  128 => 289,  124 => 276,  122 => 275,  119 => 273,  117 => 193,  114 => 191,  110 => 178,  108 => 177,  105 => 175,  102 => 161,  99 => 160,  97 => 159,  94 => 157,  90 => 153,  88 => 152,  83 => 148,  79 => 91,  77 => 90,  74 => 88,  70 => 73,  68 => 72,  65 => 70,  61 => 68,  59 => 67,  58 => 66,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/dxpr_theme/templates/page.html.twig", "/var/www/html/fmcrs/themes/dxpr_theme/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 60, "if" => 66, "block" => 73, "set" => 74);
        static $filters = array("escape" => 75, "clean_class" => 75, "trim" => 62, "striptags" => 62, "replace" => 62, "render" => 62);
        static $functions = array("file_url" => 164);

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'block', 'set'],
                ['escape', 'clean_class', 'trim', 'striptags', 'replace', 'render'],
                ['file_url'],
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
