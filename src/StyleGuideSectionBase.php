<?php

/**
 * @file
 * Contains \Drupal\Core\Block\BlockBase.
 */

namespace Drupal\styleguide;

use Drupal\Core\Plugin\ContextAwarePluginBase;

/**
 * Defines a base block implementation that most blocks plugins will extend.
 *
 * This abstract class provides the generic block configuration form, default
 * block settings, and handling for general user-defined block visibility
 * settings.
 *
 * @ingroup block_api
 */
abstract class StyleGuideSectionBase extends ContextAwarePluginBase implements StyleGuideSectionInterface {

  /**
   * @var \Drupal\Core\Render\ElementInfoManager
   */
  protected $elementInfoManager;

  /**
   * {@inheritdoc}
   */
  public function getCacheKeys() {

  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {

  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {

  }

  /**
   * {@inheritdoc}
   */
  public function isCacheable() {

  }

}
