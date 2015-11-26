<?php

//Autore: Alex Vezzelli - Alex Soluzioni Web
//url: http://www.alexsoluzioniweb.it/

/**
 * Creazione della pagina amministrativa personalizzata
 */
function create_my_admin_page(){
    
    
    // Create post object
    $post = array(
      'post_title'    => 'My admin area 2',
      'post_content'  => 'This is my second admin area.',
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type'      => 'page',
      'post_name'      => 'my-admin-page-01'
    );
    
    wp_insert_post( $post, $wp_error );
    
    }

?>