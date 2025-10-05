<?php

define("DIRECTORY_URI",get_template_directory_uri());
$theme_info=wp_get_theme();
define("THEME_VERSION",$theme_info->get('Version'));
var_dump(THEME_VERSION);
function layno_register_style_script(){
    wp_enqueue_style("layno-stylesheet",DIRECTORY_URI."/assets/css/app.css",array(),THEME_VERSION,"all");
    wp_enqueue_script( "layno-script", DIRECTORY_URI."/assets/js/app.js", array(),THEME_VERSION, "all" );
};
add_action("wp_enqueue_scripts","layno_register_style_script");