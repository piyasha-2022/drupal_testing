<?php

namespace Drupal\movies_details\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configures forms module settings.
 */
class ModuleConfigurationForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'movies_details_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'movies_details.admin_settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('movies_details.admin_settings');
    $form['movies_budget'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Movie Budget'),
      '#default_value' => $config->get('movies_budget'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('movies_details.admin_settings')
      ->set('movies_budget', $form_state->getValue('movies_budget'))
      ->save();
    parent::submitForm($form, $form_state);
  }
}