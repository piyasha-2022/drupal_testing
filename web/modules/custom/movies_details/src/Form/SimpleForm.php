<?php
/**
 * @file
 * Contains \Drupal\movies_details\Form\SimpleForm.
 */
namespace Drupal\movies_details\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class SimpleForm extends FormBase {
    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'movies_details_form';
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        // $form['title'] = [
        //     '#type' => 'string',
        //     '#title' => $this->t('Movie Title'),
        //     '#required' => TRUE,
        // ];
        $form['movies_budget'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Movie Budget'),
            '#required' => TRUE,
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('submit'),
        ];
        return $form;
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        drupal_set_messsage($form_state->getValue('movies_budget'));
    }
}
?>