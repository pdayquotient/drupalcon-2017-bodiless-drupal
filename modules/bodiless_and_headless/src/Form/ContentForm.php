<?php
/**
 * @file
 * Contains \Drupal\bodiless_and_headless\Form\ContentForm.
 */

namespace Drupal\bodiless_and_headless\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Content form.
 */
class ContentForm extends FormBase {

  /**
   * @var string $filepath Filepath to the static sample file served by node.js
   */
  private $filepath = '';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'bodiless_and_headless_content_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Get the file contents
    $content = file_get_contents($this->filepath);

    // Editable Textarea
    $form['content'] = array(
      '#type' => 'text_format',
      '#title' => $this->t('Sourcefile Contents (' . $this->filepath . ')'),
      '#default_value' => $content,
      '#format' => 'full_html',
      '#rows' => 25,
    );

    // Submit button
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $content_array = $form_state->getValue('content');

    if ($content_array['value'] == '') {
      $form_state->setErrorByName('content', $this->t('Content may not be empty!'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Update the file
    $fhandle = fopen($this->filepath, "w");
    $content_array = $form_state->getValue('content');
    fwrite($fhandle, $content_array['value']);
    fclose($fhandle);
  }

}
