<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function add_theme_scripts() {
    // Lees de versie uit het bestand
    $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
    
    // Voeg CSS-bestanden toe aan de queue met een versienummer
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), $version);
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwindcss-styles/style.css', array(), $version);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), $version);
    
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/*
|--------------------------------------------------------------------------
| Back-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function load_custom_wp_admin_style(){
    wp_enqueue_style( 'gutenberg',  'https://hostdashboard.nl/devdocs/css/gutenberg.css');
    // wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.2', 'all');
    // wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), '1.2', true);
 
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/*
|--------------------------------------------------------------------------
| Menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}

add_action( 'after_setup_theme', 'day_six_config', 0 );




/*
|--------------------------------------------------------------------------
| ACF blocks
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*
|--------------------------------------------------------------------------
| Categorie
|--------------------------------------------------------------------------
*/
add_filter('block_categories_all', function ($categories) {

    array_unshift($categories,   
      [
        'slug'  => 'achtergrond',
        'title' => 'Achtergronden',
        'icon'  => null
    ],        
    [
        'slug'  => 'bibliotheek',
        'title' => 'Pagina secties',
        'icon'  => null
    ],  
    [
        'slug'  => 'elementen',
        'title' => 'Losse elementen',
        'icon'  => null
    ],

  
);

return $categories;
}, 10, 1);


/*
|--------------------------------------------------------------------------
| All allowed blocks
|--------------------------------------------------------------------------
*/
add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
    $blocks = get_blocks();
    $acf_blocks = []; 
    foreach ($blocks as $block) { 
        $acf_blocks[] = 'acf/' . $block;
    }

    $core_blocks = [
        // 'core/paragraph',
        // 'core/heading',
    ];

    return array_merge($acf_blocks, $core_blocks);
}, 10, 2);


/*
|--------------------------------------------------------------------------
| Register blocks
|--------------------------------------------------------------------------
*/
add_action( 'init', 'register_acf_blocks', 5 );
function register_acf_blocks() {

    $blocks = get_blocks();
    foreach ($blocks as $block) {
            register_block_type( __DIR__ . '/blocks/'.$block );
    }
}

/*
|--------------------------------------------------------------------------
| Get all blocks name from the folder name
|--------------------------------------------------------------------------
*/
function get_blocks() {
	$theme   = wp_get_theme();
	$blocks  = get_option( 'cwp_blocks' );
	$version = get_option( 'cwp_blocks_version' );
	if ( empty( $blocks ) || version_compare( $theme->get( 'Version' ), $version ) || ( function_exists( 'wp_get_environment_type' )  ) ) {
		$blocks = scandir( get_template_directory() . '/blocks/' );
		$blocks = array_values( array_diff( $blocks, array( '..', '.', '.DS_Store', '_base-block' ) ) );

		update_option( 'cwp_blocks', $blocks );
		update_option( 'cwp_blocks_version', $theme->get( 'Version' ) );
	}
	return $blocks;
}



/*
|--------------------------------------------------------------------------
| Script for one block
|--------------------------------------------------------------------------
*/
function cwp_register_block_script() {
    $blocks = get_blocks();
    foreach ($blocks as $block) {
        wp_register_script( $block, get_template_directory_uri() . '/blocks/'.$block.'/script.js' );
    }

}
add_action( 'init', 'cwp_register_block_script' );
/*
|--------------------------------------------------------------------------
| ACF json files
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/**
 * Save the ACF fields as JSON in the specified folder.
 * 
 * @param string $path
 * @returns string
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
/**
 * Load the ACF fields as JSON in the specified folder.
 *
 * @param array $paths
 * @returns array
 */
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});



/*
|--------------------------------------------------------------------------
| ACF icon picker
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// modify the path to the icons directory
add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
    return 'img/icons-acf/';
}

// modify the path to the above prefix
add_filter( 'acf_icon_path', 'acf_icon_path' );

function acf_icon_path( $path_suffix ) {
    return plugin_dir_path( __FILE__ );
}

// modify the URL to the icons directory to display on the page
add_filter( 'acf_icon_url', 'acf_icon_url' );

function acf_icon_url( $path_suffix ) {
    return plugin_dir_url( __FILE__ );
}





/*
|--------------------------------------------------------------------------
| Add an dublicate knop
|--------------------------------------------------------------------------
|
| 
| 
|
*/


/*
 * Function for post duplication. Dups appear as drafts. User is redirected to the edit screen
 */

// function rd_duplicate_post_as_draft() {
//   global $wpdb;

//   // Controleer of de actie is toegestaan voor de huidige gebruiker
//   if (!current_user_can('edit_posts')) {
//     wp_die('You do not have permission to duplicate posts.');
//   }

//   if (!isset($_GET['post']) && !isset($_POST['post'])) {
//     wp_die('No post to duplicate has been supplied.');
//   }

//   // Nonce-verificatie
//   if (!isset($_GET['duplicate_nonce']) || !wp_verify_nonce($_GET['duplicate_nonce'], basename(__FILE__))) {
//     wp_die('Security check failed.');
//   }

//   $post_id = (isset($_GET['post']) ? absint($_GET['post']) : absint($_POST['post']));
//   $post = get_post($post_id);

//   // Controleer of het berichttype wordt ondersteund (post, page, product)
//   $supported_post_types = array('post', 'page', 'product');

//   if ($post && in_array($post->post_type, $supported_post_types)) {
//     // Maak een nieuw bericht op basis van het originele bericht
//     $new_post_args = array(
//       'post_type' => $post->post_type,
//       'post_title' => 'Copy of ' . $post->post_title,
//       'post_content' => $post->post_content,
//       'post_status' => 'draft',
//       'post_author' => get_current_user_id(),
//       'post_parent' => $post->post_parent,
//       'post_excerpt' => $post->post_excerpt,
//     );

//     $new_post_id = wp_insert_post($new_post_args);

//     if ($new_post_id) {
//       // Dupliceer categorieën en tags
//       $taxonomies = get_object_taxonomies($post->post_type);

//       foreach ($taxonomies as $taxonomy) {
//         $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
//         wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
//       }

//       // Dupliceer postmeta
//       $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");

//       if ($post_meta_infos) {
//         foreach ($post_meta_infos as $meta_info) {
//           $meta_key = $meta_info->meta_key;

//           if ($meta_key == '_wp_old_slug') continue;

//           $meta_value = $meta_info->meta_value;
//           update_post_meta($new_post_id, $meta_key, $meta_value);
//         }
//       }

//       // Stuur de gebruiker naar het bewerkscherm van het gedupliceerde bericht
//       wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
//       exit;
//     } else {
//       wp_die('Failed to duplicate the post.');
//     }
//   } else {
//     wp_die('Post creation failed, could not find the original post.');
//   }
// }

// add_action('admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft');

// // Voeg de duplicatielink toe aan de acties voor berichten, pagina's en producten
// function rd_duplicate_post_link($actions, $post) {
//   if (current_user_can('edit_posts')) {
//     $actions['duplicate'] = '<a href="' . wp_nonce_url(admin_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID), basename(__FILE__), 'duplicate_nonce') . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
//   }
//   return $actions;
// }

// add_filter('post_row_actions', 'rd_duplicate_post_link', 10, 2);
// add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);

// // Voeg ondersteuning toe voor WooCommerce-producten (indien van toepassing)
// add_filter('product_row_actions', 'rd_duplicate_post_link', 10, 2);






function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function my_custom_js() {
    ?>
      <script>
        document.addEventListener( 'gform_confirmation_loaded', function( event ) {
          if ( event.detail.formId === '1' ) {
            document.getElementById( 'contact-modal' ).style.display = 'block';
          }
        }, false );
      </script>
    <?php
    }




/*
|--------------------------------------------------------------------------
| REMOVE GUTENBERG CSS
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function remove_gutenberg_container_img_css() {
    // Voeg hier de naam van het CSS-bestand van Gutenberg toe waarin de class .block-editor__container img wordt gedefinieerd.
    $gutenberg_css_handle = 'wp-block-library';

    // Verwijder het Gutenberg CSS-bestand.
    wp_dequeue_style( $gutenberg_css_handle );
    wp_deregister_style( $gutenberg_css_handle );
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'admin_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'enqueue_block_editor_assets', 'remove_gutenberg_container_img_css', 100 );


  









