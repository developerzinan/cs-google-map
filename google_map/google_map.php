<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Gmap
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */ 

require dirname(__FILE__).'/inc/gmap-hook.php';

class CSFramework_Option_google_map extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output(){

    echo $this->element_before();
	
    $defaults_value = array(
      'address'  => '',
      'lat'  => '',
      'lon'  => '',
    );	
	
    $value = wp_parse_args( $this->element_value(), $defaults_value );

    echo '<input type="text" id="'. $this->field['id'] .'" style="width: 100%" name="'. $this->element_name( '[address]' ) .'" value="'. $value['address'] .'"/>';
    echo '<div class="details">';
    echo '<input type="hidden" data-geo="lat" name="'. $this->element_name( '[lat]' ) .'" value="'. $value['lat'] .'"/>';
    echo '<input type="hidden" data-geo="lng" name="'. $this->element_name( '[lon]' ) .'" value="'. $value['lon'] .'"/>';
    echo '</div>';
    
    echo '<div id="'. $this->field['id'] .'_iframe" style="width: 100%; height: 400px; margin: 10px 0;"></div>';
    
    echo '<script>(function($){ $("#'. $this->field['id'] .'").geocomplete({ map: "#'. $this->field['id'] .'_iframe", location: "'. $value['address'] .'", details: ".details", detailsAttribute: "data-geo", }); })(jQuery);</script>';

    echo $this->element_after();

  }

}
