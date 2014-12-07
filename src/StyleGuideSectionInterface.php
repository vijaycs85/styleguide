<?php

/**
 * @file
 * Contains \Drupal\Core\Block\BlockPluginInterface.
 */

namespace Drupal\styleguide;

use Drupal\Core\Cache\CacheableInterface;

/**
 * Defines the required interface for all style guide item plugins.
 */
interface StyleGuideSectionInterface extends CacheableInterface {

  /**
   * @return mixed
   */
  public function build();

}
