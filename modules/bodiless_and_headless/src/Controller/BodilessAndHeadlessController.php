<?php
/**
 * @file
 * Contains \Drupal\bodiless_and_headless\Controller\BodilessAndHeadlessController.
 */

namespace Drupal\bodiless_and_headless\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormBuilderInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class BodilessAndHeadlessController extends ControllerBase {

  /**
   * @var string $filepath Filepath to the static sample file
   */
  private $filepath = '/Users/quoadmin/_http/opa_d8/nodejs-bodiless-headless-drupal/sample.txt';

  /**
   * The form builder.
   *
   * @var \Drupal\Core\Form\FormBuilderInterface
   */
  protected $formBuilder;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('form_builder')
    );
  }

  /**
   * Constructs an AdminController object.
   *
   * @param \Drupal\Core\Form\FormBuilderInterface $form_builder
   *   The form builder.
   */
  public function __construct(FormBuilderInterface $form_builder) {
    $this->formBuilder = $form_builder;
  }

  public function editBodilessAndHeadless(Request $request) {
    return $this->formBuilder->getForm('\Drupal\bodiless_and_headless\Form\ContentForm');
  }


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
