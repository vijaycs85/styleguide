<?php

/**
 * @file
 * Contains \Drupal\styleguide\Plugin\styleguide\Select.
 */

namespace Drupal\styleguide\Plugin\styleguide\item;

use Drupal\styleguide\StyleGuideItemBase;

/**
 * Provides a form basic style guide item.
 *
 * @StyleGuideItem(
 *   id = "select",
 *   title = @Translation("Select"),
 *   category = "form_basic",
 *   type = "form_element"
 * )
 */
class Select extends StyleGuideItemBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#title' => 'Select',
      '#options' => array(
        'option1' => $this->t('Option 1'),
        'option2' => $this->t('Option 2'),
        'option3' => $this->t('Option 3'),
        )

      );
  }

}
