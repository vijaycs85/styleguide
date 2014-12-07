<?php

/**
 * @file
 * Contains Drupal\styleguide\StyleGuideItemManager
 */

namespace Drupal\styleguide;

use Drupal\contact\MailHandlerInterface;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\Context\ContextAwarePluginManagerTrait;
use Drupal\Core\Plugin\DefaultPluginManager;
use Drupal\Core\StringTranslation\StringTranslationTrait;

class StyleGuideItemManager extends DefaultPluginManager implements StyleGuideItemManagerInterface {

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
    parent::__construct('Plugin/styleguide/item', $namespaces, $module_handler, 'Drupal\styleguide\StyleGuideItemInterface', 'Drupal\styleguide\Annotation\StyleGuideItem');
    $this->setCacheBackend($cache_backend, 'styleguide_item_plugins');
  }

  /**
   * {@inheritdoc}
   */
  public function getCategories() {
    $categories = array_unique(array_values(array_map(function ($definition) {
      return $definition['category'];
    }, $this->getDefinitions())));
    natcasesort($categories);
    return $categories;
  }

  /**
   * {@inheritdoc}
   */
  public function getSortedDefinitions() {
    // Sort the plugins first by category, then by label.
    $definitions = $this->getDefinitionsForContexts();
    uasort($definitions, function ($a, $b) {
      if ($a['category'] != $b['category']) {
        return strnatcasecmp($a['category'], $b['category']);
      }
      return strnatcasecmp($a['admin_label'], $b['admin_label']);
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