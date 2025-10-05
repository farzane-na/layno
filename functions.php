<?php


define("DIRECTORY_URI",get_template_directory_uri());
var_dump(DIRECTORY_URI);

function layno_register_style(){
    wp_enqueue_style("layno-stylesheet");
};