<?php

namespace Drupal\wcp_page\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for wcp_page routes.
 */
class WcpPageController extends ControllerBase {

  public function list(){
     
    // Load nodes of type 'basic page'
     $nodes = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'page']);
     
     // Initialize an array to store information about each node.
     $list = [];  
    
     // Iterate through each node.
     foreach ($nodes as $node) {
        // Get the entity for the 'field_form_article' field.
        $form_article_entity = $node->get('field_form_article')->entity;
        // Get the entity for the 'field_form_type' field.
        $form_type_entity = $node->get('field_form_type')->entity;
     
         $list[] = [
              // Get Title of the node.
             'title' => $node->getTitle(),
             // Get Body value of the node.
             'body' => $node->body->value,
             // Get the date from the 'field_form_date' field.
             'date' => $node->get('field_form_date')->value,
              // Get Label of the 'field_form_article' entity, or NULL if not available.
             'form_article_label' =>  $form_article_entity ? $form_article_entity->label() : NULL,
              // Get ID of the 'field_form_article' entity, or NULL if not available.
              'form_article_id' => $form_article_entity ? $form_article_entity->id() : NULL,
              // Get Name of the 'field_form_type' entity, or NULL if not available.
              'form_type_name' => $form_type_entity ? $form_type_entity->getName() : NULL, 
              // Get ID of the 'field_form_type' entity, or NULL if not available.
              'form_type_id' => $form_type_entity ? $form_type_entity->id() : NULL,
            
         ];
     } 


  return [
        '#theme' => 'nodelist_template',
        '#node_list'=> $list,  
      ];

}
}