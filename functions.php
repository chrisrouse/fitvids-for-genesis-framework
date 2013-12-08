// Add the following code to the end of functions.php in your Genesis child theme.

add_action('genesis_after_footer', 'child_script_managment');
function child_script_managment() {
      wp_enqueue_script( 'fitvids', get_stylesheet_directory_uri() . '/js/FitVids.js-master/jquery.fitvids.js', array('jquery'), '', TRUE);
      wp_enqueue_script( 'fitvids-xtra', get_stylesheet_directory_uri() . '/js/FitVids.js', array(), '', TRUE);
}
