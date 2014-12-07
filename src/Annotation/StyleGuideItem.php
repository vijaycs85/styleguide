<?php

/**
 * @file
 * Contains \Drupal\styleguide\Annotation\StyleGuideItem.
 */

namespace Drupal\styleguide\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a style guide item annotation object.
 *
 * @Annotation
 */
class StyleGuideItem extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The title of the style guide title.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $title = '';

  /**
   * The category in the admin UI where the block will be listed.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $category = '';


  public $type = '';


}
