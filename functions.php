<?php

function my_assets() { // maak een functie

    // functie voor het toevoegen van css.
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    // get_stylesheet_uri is de default locatie van je style.css

    // functie voor het plaatsen van javascript.
    wp_deregister_script('jquery'); // verwijder eventuele jQuery versies geplaatst door plugins
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js','','3.3.1',true);
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/js/scripts.min.js','',null,true);
    // get_template_directory_uri is de default locatie van je thema's root
    // in de voorlaatste parameter kun je een versienummer weergeven van het script. Met 'null' geef je aan dat er geen versienummer hoef te staan. Hier kan ook 1.0 of andere versie staan wanneer nodig
    // de laatste parameter 'true' plaats scripts in de footer. false zet het in de footer

    wp_deregister_script('wp-embed');
}

add_action( 'wp_enqueue_scripts', 'my_assets' ); // voer de 'my_assets' functie uit


/*REMOVE WYSIWYG EDITOR*/

//remove wysiwyg editor
/**
 * Hide editor on specific pages.
 *
 */
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  $newsname = get_the_title($post_id);
  if($homepgname == 'Home'){ 
    remove_post_type_support('page', 'editor');
  }
    if($homepgname == 'About'){ 
    remove_post_type_support('page', 'editor');
  }
    if($homepgname == 'Blog'){ 
    remove_post_type_support('page', 'editor');
  }
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'my-page-template.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}
