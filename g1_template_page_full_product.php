<?php
/**
 * Template Name: Page: Full Sections Product
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
?>
<?php
    // Add proper body classes
    add_filter( 'body_class', array(G1_Theme(), 'secondary_none_body_class') );
    add_filter( 'body_class', array(G1_Theme(), 'primary_full_body_class') );
?>
<?php get_header(); ?>
	<?php get_template_part( 'template-parts/g1_primary_page_post' ); ?>
<?php get_footer(); ?>