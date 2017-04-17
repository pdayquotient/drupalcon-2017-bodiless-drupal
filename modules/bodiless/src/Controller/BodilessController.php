<?php
/**
 * @file
 * Contains \Drupal\bodiless\Controller\BodilessController.
 */

namespace Drupal\bodiless\Controller;

use Drupal\Core\Controller\ControllerBase;

class BodilessController extends ControllerBase {

  /**
   * @var string $filepath Filepath to the static sample file
   */
  private $filepath = '';

  /**
   * {@inheritdoc}
   */
  public function content() {
    // Get the file contents
    $content = file_get_contents($this->filepath);

    $pageContent = array(
      '#theme' => 'bodiless',
      '#main_content' => $content,
    );
    return $pageContent;
  }

}
