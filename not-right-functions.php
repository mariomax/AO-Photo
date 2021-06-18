<?php
add_action( 'wp_enqueue_scripts', 'enqueue_neve_child' );
function enqueue_neve_child()
{
      wp_enqueue_style('neve-css', './neve/style.css' );
      wp_enqueue_style('neve-child-css', './neve-child/style.css');
      wp_enqueue_script('neve-child-js', './neve-child/js/script.js', array( 'jquery' ), '1.0', true );
}
?>