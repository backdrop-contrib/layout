<?php
/**
 * @file
 * Preprocess functions to set or alter variables for this layout.
 */

/**
 * Prepares variables for layout--foo templates.
 *
 * @see layout--foo.tpl.php
 */
function template_preprocess_layout__foo(&$variables) {
  $variables['foo'] = 'bar';
}
