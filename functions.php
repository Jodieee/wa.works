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


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page("General settings");
	
}

/*hide all widgets dashboard*/
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
 
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_activity']);
 
}
 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );



    
    
/*Hide multiple items if role is author*/

if(user_can( $current_user, 'author' )){ 
    
 
    
    add_action( 'admin_menu', 'remove_menu_links' );
    function remove_menu_links() {
        
    remove_menu_page( 'tools.php' ); //tools
        /*remove general settings for author role*/

        remove_menu_page('index.php'); //dashboard

    global $submenu;

    // Remove media for non-admins
    if( !current_user_can('manage_options') )
        remove_menu_page('upload.php'); //media
        

    // Still need to update cap requirements even when hidden
    foreach( $submenu['upload.php'] as $position => $data ) {
        $submenu['upload.php'][$position][1] = 'manage_options';
    }
}
    
    
}


/*Hide multiple items if role is editor*/

if(user_can( $current_user, 'editor' )){ 
    
 
    
    add_action( 'admin_menu', 'remove_menu_links' );
    function remove_menu_links() {
        
    remove_menu_page( 'tools.php' ); //tools
        /*remove general settings for author role*/

        remove_menu_page('index.php'); //dashboard

    global $submenu;

    // Remove media for non-admins
    if( !current_user_can('manage_options') )
        remove_menu_page('upload.php'); //media
        
        remove_menu_page('admin.php?page=acf-options'); //general settings
        

    // Still need to update cap requirements even when hidden
    foreach( $submenu['upload.php'] as $position => $data ) {
        $submenu['upload.php'][$position][1] = 'manage_options';
    }
}
    
    
}


 


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



/*Custom post type blog*/
function create_post_type() {
    register_post_type( 'blog', // naam voor query in bijvoorbeeld loop
        array(
            'labels' => array( // naam zoals zichtbaar in specieke admin-schermen
                'name' => __( 'Blog' ),
                'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'menu_icon'   => 'dashicons-editor-quote',// zichtbaar in admin?
        )
    );
}
add_action( 'init', 'create_post_type' );


//remove comments

// Removes from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

/*hide posts from admin*/

function post_remove ()      //creating functions post_remove for removing menu item
        { 
     remove_menu_page('edit.php');
        }

        add_action('admin_menu', 'post_remove');   //adding action for triggering function call

// Removes comments from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

