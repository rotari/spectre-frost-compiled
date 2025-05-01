<?php

/**
 * @file
 * Preprocess.
 */

use Drupal\Component\Utility\Html;
use Drupal\Core\Template\Attribute;

/**
 * Implements hook_preprocess_views_view().
 */
function spectre_frost_theme_preprocess_views_view(&$vars) {
  // Make displays, mostly pages, look like stripes, but only their content.

  $displays = [
    'block_1',
    'block_2',
    'block_3',
    'block_4',
    'block_6',
  ];

  if ($vars['id'] === 'node' && in_array($vars['display_id'], $displays)) {
    $vars['content_attributes']['class'][] = 'flex-wrap--wrap';
    $vars['content_attributes']['class'][] = 'layout--flex-row';
    $vars['content_attributes']['class'][] = 'layout--horizontal';
  }
}
