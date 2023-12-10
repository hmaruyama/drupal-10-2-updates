<?php

namespace Drupal\marucha\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * This is module setting form using ConfigFormBase.
 */
class MaruchaConfigForm extends ConfigFormBase {

  /**
   * {@inheritDoc}
   */
  public function getFormId() {
    return 'marucha_config_form';
  }

  /**
   * {@inheritDoc}
   */
  protected function getEditableConfigNames() {
    return ['marucha.settings'];
  }

  /**
   * {@inheritDoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('marucha.settings');
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => $config->get('name'),
      '#config_target' => 'marucha.settings:name',
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritDoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('marucha.settings')
      ->set('name', $form_state->getValue('name'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
