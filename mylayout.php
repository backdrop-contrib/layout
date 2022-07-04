<?php
/**
 * @file
 * Preprocess functions to set or alter variables for the MyLayout layout.
 */

/**
 * Prepares variables for layout--mylayout templates.
 *
 * @see layout--mylayout.tpl.php
 */
function template_preprocess_layout__mylayout(&$variables) {
  $variables['foo'] = 'bar';
}
