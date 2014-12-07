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
abstract class StyleGuideItemBase extends ContextAwarePluginBase implements StyleGuideItemInterface {



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

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition)  {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->elementInfoManager = \Drupal::service('element_info');
  }

}
