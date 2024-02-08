<?php

namespace Drupal\wcp\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for wcp routes.
 */
class WcpController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
