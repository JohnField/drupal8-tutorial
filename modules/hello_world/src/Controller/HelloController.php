<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

  /**
   * "Hello, World!" Controller.
   */
class HelloController extends ControllerBase {

  /**
   * Returns basic markup.
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}
