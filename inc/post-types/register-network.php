<?php
 
$network = new CPT(array(
    'post_type_name' => 'network',
    'singular' => __('Network', 'dandelion'),
    'plural' => __('Network', 'dandelion'),
    'slug' => 'network'
),
  array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments'),
    'menu_icon' => 'dashicons-groups'
));
 
$network->register_taxonomy(array(
    'taxonomy_name' => 'network_tags',
    'singular' => __('Network Tag', 'dandelion'),
    'plural' => __('Network Tags', 'dandelion'),
    'slug' => 'network-tag'
));

?>