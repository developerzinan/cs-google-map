<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Gmap
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */ 

if( ! function_exists( 'cs_google_map_scripts' ) ) {  
  function cs_google_map_scripts(){
      wp_enqueue_script( "gmap-api", "//maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" );
      wp_enqueue_script( "gmap-script", "//cdn.jsdelivr.net/jquery.geocomplete/1.6.5/jquery.geocomplete.min.js", array("jquery"), "1.6.5", false );
    }
  add_action( "admin_enqueue_scripts", "cs_google_map_scripts" );
}