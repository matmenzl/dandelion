<?php
 
$badge = new CPT(array(
    'post_type_name' => 'badge',
    'singular' => __('Badge', 'dandelion'),
    'plural' => __('Badge', 'dandelion'),
    'slug' => 'badge'
),
  array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-megaphone'
));
 
?>