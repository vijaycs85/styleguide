<?php

/**
 * @file
 * Contains \Drupal\styleguide\Annotation\StyleGuideSection.
 */

namespace Drupal\styleguide\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a style guide item annotation object.
 *
 * @Annotation
 */
class StyleGuideSection extends Plugin {

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

}
