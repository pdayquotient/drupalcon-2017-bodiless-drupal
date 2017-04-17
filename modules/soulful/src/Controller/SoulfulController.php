<?php
/**
 * @file
 * Contains \Drupal\soulful\Controller\SoulfulController.
 */

namespace Drupal\soulful\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class SoulfulController extends ControllerBase {

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

    // Generic Symfony Response Object to bypass templating
    $response = new Response();
    $response->setContent($content);
    return $response;
  }

}
