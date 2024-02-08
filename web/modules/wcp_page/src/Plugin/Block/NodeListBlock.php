<?php

namespace Drupal\wcp_page\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "node_list",
 *   admin_label = @Translation("Node List"),
 *   category = @Translation("Node")
 * )
 */
class NodeListBlock extends BlockBase {


  public function build(){
     
        // Load nodes of type 'basic page'
         $nodes = \Drupal::entityTypeManager()->getStorage('node')->loadByProperties(['type' => 'page']);
         
         // Initialize an array to store information about each node.
         $list = [];  
        
         // Iterate through each node.
         foreach ($nodes as $node) {
         
             $list[] = [
              'title' => $node->getTitle(),
              'body' => $node->body->value,
              'date' => $node->get('field_form_date')->value,
               // Label of the 'field_form_article' entity, or NULL if not available.
               'form_article_label' =>  $form_article_entity ? $form_article_entity->label() : NULL,
               // ID of the 'field_form_article' entity, or NULL if not available.
                'form_article_id' => $form_article_entity ? $form_article_entity->id() : NULL,
                 // Name of the 'field_form_type' entity, or NULL if not available.
               'form_type_name' => $form_type_entity ? $form_type_entity->getName() : NULL, 
               // ID of the 'field_form_type' entity, or NULL if not available.
               'form_type_id' => $form_type_entity ? $form_type_entity->id() : NULL,
             
          ];
         }

         return [
          '#theme' => 'list_template',
          '#node_list' => $list,
        ];
        
}    
}



