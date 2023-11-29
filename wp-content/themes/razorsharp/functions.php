<?php

add_action('init', function()
{

wp_enqueue_style('boot01',get_template_directory_uri().'/assets/css/bootstrap.min.css');
wp_enqueue_script('bootjs',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),'',true);

});
