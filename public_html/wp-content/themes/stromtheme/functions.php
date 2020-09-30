<?php

function load_stylesheets(){
  wp_deregister_style('css');
  wp_register_style('css', get_template_directory_uri() . '/css/stylesheet.css', array(), 1, 'all');
  wp_enqueue_style('css');
}

add_action('wp_enqueue_scripts', load_stylesheets);

function load_jquery_scripts(){

  wp_deregister_script('jquery-scripts');
  wp_register_script('jquery-scripts', get_template_directory_uri() . '/script/jquery-3.5.1.min.js', array('jquery'), '1.0', true);
  wp_enqueue_script('jquery-scripts');


}

add_action('wp_enqueue_scripts', load_jquery_scripts);


function load_scripts(){


  
  wp_deregister_script('scripts');
  wp_register_script('scripts', get_template_directory_uri() . '/script/javascript.js', array(), 0, 1, 1);
  wp_enqueue_script('scripts');
   

}

add_action('wp_enqueue_scripts', load_scripts);



/*
//media library fix
function wpse222583_media_library_filter() {
    ?>
      <script type="text/javascript">
        jQuery( document ).on( 'DOMNodeInserted', function() {
            jQuery( 'select.attachment-filters [value="uploaded"]' ).attr( 'selected', true ).parent().trigger( 'change' );
        } );
      </script>
    <?php
}
add_action( 'admin_footer-post-new.php', 'wpse222583_media_library_filter' );
add_action( 'admin_footer-post.php', 'wpse222583_media_library_filter' );
*/

//menu support
add_theme_support('menus');


//register menus

register_nav_menus(
    array( top-menu => __('Top menu', 'stromtheme'), )
  );


 ?>
