<?php
function tmc_enqueue_scripts(){
  if(is_page(TMC_PAGE_NAME)){
    wp_enqueue_script( 'calendar-main', TMC_PLUGIN_ASSETS_URL . 'js/main.js', $deps = array(), $ver = false, $in_footer = false );
    wp_enqueue_style( 'calendar-main-styles', TMC_PLUGIN_ASSETS_URL . 'css/calendarstyles.css', $deps = array(), $ver = false, $media = 'all' );
  }
}

add_action( 'wp_enqueue_scripts', 'tmc_enqueue_scripts', $priority = 10, $accepted_args = 1 );
