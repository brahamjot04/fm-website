<?php

/**
 * @file
 * CSS color variable styles.
 */

use Drupal\Component\Utility\Color;

/**
 * Generate css color variables css styles.
 *
 * @param string $theme
 *   Theme machine name.
 * @param string $css
 *   Generated css styles string.
 * @param array $palette
 *   Theme palette array.
 */
function colors_theme_settings_css($theme, &$css, array $palette) {
  $color_prefix = _dxpr_theme_get_const('cssColorPrefix');

  // Add RGB CSS variable.
  $palette['header-rgb'] = implode(',', Color::hexToRgb($palette['header']));

  $css_variables = implode(";\n", array_map(
    function ($key, $value) use ($color_prefix) {
      return '  ' . $color_prefix . $key . ': ' . $value;
    },
    array_keys($palette),
    $palette
  ));

  if ($css_variables) {
    $css .= ":root.dxpr-scheme-custom {\n" . $css_variables . ";\n}\n\n";
  }
}
