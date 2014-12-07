<?php

namespace Drupal\styleguide\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\styleguide\StyleGuideItemManagerInterface;
use Drupal\styleguide\StyleGuideSectionManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class StyleGuideController extends ControllerBase {

  /**
   * @var \Drupal\styleguide\StyleGuideItemManagerInterface
   */
  protected $itemManager;

  /**
   * @var \Drupal\styleguide\StyleGuideSectionManagerInterface
   */
  protected $sectionManager;

  public function __construct(StyleGuideItemManagerInterface $item_manager, StyleGuideSectionManagerInterface $section_manager) {
    $this->itemManager = $item_manager;
    $this->sectionManager = $section_manager;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('plugin.manager.styleguide_item'),
      $container->get('plugin.manager.styleguide_section')
    );
  }

  public function listPage() {
    $plugins = $this->itemManager->getSortedDefinitions();
    foreach ($plugins as $plugin_id => $plugin) {
      $category_key = $plugin['category'];
      /** @var  \Drupal\styleguide\StyleGuideItemInterface   $plugin_class */
      $plugin_class = new $plugin['class'];
      $content = $plugin_class->build();
      $category = $this->sectionManager->getDefinition($category_key);
      $page[$category_key][$plugin_id] = array(
        '#type' => 'details',
        '#title' => $category['title'],
        '#open' => TRUE,
        'content' => $content,
      );
    }
  }

}