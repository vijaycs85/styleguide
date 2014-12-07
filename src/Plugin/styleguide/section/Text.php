<?php

/**
 * @file
 * Contains \Drupal\styleguide\Plugin\styleguide\FormBasic.
 */

namespace Drupal\styleguide\Plugin\styleguide\section;

use Drupal\styleguide\StyleGuideSectionBase;

/**
 * Provides a form basic style guide item.
 *
 * @StyleGuideSection(
 *   id = "text",
 *   title = @Translation("Text")
 * )
 */
class Text extends StyleGuideSectionBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#title' => 'Text'
    );
  }

}