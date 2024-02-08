<?php

namespace Drupal\wcp_page\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a Wcp page form.
 */
class CustomForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'wcp_page_custom';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
     // Load taxonomy terms for the "Form Type" select list.
     $vid = 'form_type';
     $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree('form_type');
     $term_data = [];
     foreach ($terms as $term) {
       $id = $term->tid;
       $name = $term->name;
     $term_data[$id] = $name;
     } 

     // Add Title field
   $form['title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Title'),
      '#suffix' => '<div class="title-validation-message"></div>', 
    ];
    // Add Body field.
    $form['body'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Body'), 
      '#suffix' => '<div class="body-validation-message"></div>',
    ];
    // Add Article Reference field.
    $form['article_reference'] = [
      '#type' => 'entity_autocomplete',
      '#target_type' => 'node',
      '#title' => $this->t('Article Reference'),
      '#description' => $this->t('Start typing to search and select an article.'),
      '#selection_settings' => [
        'target_bundles' => ['article'], // Specify the content type(s).
      ],
      '#suffix' => '<div class="article_reference-validation-message"></div>',
    ];
     // Add Form Type field.
     $form['select2'] = [
      '#type' => 'select2',
      '#title' => t('Form Type'),
      '#options' => $term_data,
      '#select2' => [
        'allowClear' => TRUE,
        'multiple' => TRUE,
      ],
      '#suffix' => '<div class="select2-validation-message"></div>',
    ];
    // Add Date field.
    $form['date'] = [
      '#type' => 'date',
      '#title' => $this->t('Date'),
      '#date_date_format' => 'Y-m-d', 
      '#suffix' => '<div class="date-validation-message"></div>',
      
    ];
    // Add submit button
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Send'),
    ];
    $form['#prefix'] = '<div class="container wcp-container">';
    $form['#suffix'] = '</div>';

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate Title.
    if (empty($form_state->getValue('title'))) {  
      $form_state->setErrorByName('title', $this->t('Title is required.'));
     
    
      }
   // Validate body
   if (empty($form_state->getValue('body'))) {  
      $form_state->setErrorByName('body', $this->t('Body is required.'));
     
    }
   // Validate article
   if (empty($form_state->getValue('article_reference'))) {  
      $form_state->setErrorByName('article_reference', $this->t('Article is required.'));
      
    }
   // Validate form type
   if (empty($form_state->getValue('select2'))) {  
      $form_state->setErrorByName('select2', $this->t('Form Type is required.'));
     
    
    }
  // Validate date
  if (empty($form_state->getValue('date'))) {  
      $form_state->setErrorByName('date', $this->t('Date is required.'));
      
    } 
  }
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve values from the submitted form.
    $title = $form_state->getValue('title');
    $body = $form_state->getValue('body');
    $date = $form_state->getValue('date');
    $article_reference = $form_state->getValue('article_reference');
    $form_type = $form_state->getValue('select2');


  // Create a new node entity with the retrieved values.
    $new_node = \Drupal\node\Entity\Node::create([
    'type' => 'page', // Specify the content type for the new node.
    'title'=> $title, // Set the title of the new node.
    'body' => $body, // Set the body field of the new node.
    'field_form_article' => $article_reference, // Set the custom article field of the new node.
    'field_form_type' => $form_type, // Set the custom form type field of the new node.
    'field_form_date' => $date, // Set the custom date field of the new node.
    
 
]);
   // Save the newly created node.
      $new_node->save();
    
   // Set a message to inform the user that the node was saved.
   \Drupal::messenger()->addMessage($this->t('Page has been created sucessfully.'));
     
  }
  
}
