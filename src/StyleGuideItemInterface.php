<?php

/**
 * @file
 * Contains \Drupal\Core\Block\BlockPluginInterface.
 */

namespace Drupal\styleguide;

use Drupal\Core\Cache\CacheableInterface;

/**
 * Defines the required interface for all style guide item plugins.
 *
 * @todo Add detailed documentation here explaining the block system's
 *   architecture and the relationships between the various objects, including
 *   brief references to the important components that are not coupled to the
 *   interface.
 *
 * @ingroup block_api
 */
interface StyleGuideItemInterface extends CacheableInterface {

  /**
   * @return mixed
   */
  public function build();

}
