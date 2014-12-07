<?php

/**
 * @file
 * Contains Drupal\styleguide\StyleGuideItemManager
 */

namespace Drupal\styleguide;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\Context\ContextAwarePluginManagerTrait;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\StringTranslation\StringTranslationTrait;

class StyleGuideSectionManager extends DefaultPluginManager implements StyleGuideSectionManagerInterface {

  use StringTranslationTrait;
  use ContextAwarePluginManagerTrait;

  /**
   * Constructs a new \Drupal\Core\Block\BlockManager object.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler to invoke the alter hook with.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/styleguide/section', $namespaces, $module_handler, 'Drupal\styleguide\StyleGuideSectionInterface', 'Drupal\styleguide\Annotation\StyleGuideSection');
    $this->setCacheBackend($cache_backend, 'styleguide_section_plugins');
  }

  /**
   * {@inheritdoc}
   */
  public function getSortedDefinitions() {
    // Sort the plugins first by category, then by label.
    $definitions = $this->getDefinitionsForContexts();
    uasort($definitions, function ($a, $b) {
      return strnatcasecmp($a['title'], $b['title']);
    });
    // Do not display the 'broken' plugin in the UI.
    unset($definitions['broken']);
    return $definitions;
  }

  /**
   * {@inheritdoc}
   */
  public function getFallbackPluginId($plugin_id, array $configuration = array()) {
    return 'broken';
  }

}