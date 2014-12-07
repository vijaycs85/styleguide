<?php

/**
 * @file
 * Contains \Drupal\styleguide\Plugin\styleguide\Select.
 */

namespace Drupal\styleguide\Plugin\styleguide\item;

use Drupal\Core\Block\StyleGuideItemBase;

/**
 * Provides a form basic style guide item.
 *
 * @StyleGuideItem(
 *   id = "h1",
 *   title = @Translation("Heading 1"),
 *   category = "text",
 *   type = "render_element"
 * )
 */
class HeadingOne extends StyleGuideItemBase {

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
