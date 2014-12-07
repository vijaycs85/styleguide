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
 *   id = "form_basic",
 *   title = @Translation("Basic form elements")
 * )
 */
class FormBasic extends StyleGuideSectionBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build[''] = array(

    );
  }

}