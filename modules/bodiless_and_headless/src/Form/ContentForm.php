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
    $content = file_get_contents('C:\projects\bodiless-drupal\sample.txt');

    // Editable Textarea
    $form['content'] = array(
      '#type' => 'textarea',
      '#title' => $this->t('Sourcefile Contents'),
      '#default_value' => $content,
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
    if ($form_state->getValue('content') == '') {
      $form_state->setErrorByName('content', $this->t('Content may not be empty!'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Update the file
    $fhandle = fopen('C:\projects\bodiless-drupal\sample.txt',"w");
    fwrite($fhandle, $form_state->getValue('content'));
    fclose($fhandle);
  }

}
