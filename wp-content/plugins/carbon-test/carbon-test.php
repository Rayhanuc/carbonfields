<?php

  /**
 * 
 * Plugin Name: Carbon Demo
 * Plugin URI:  https://
 * Description: Carbon Test Plugin
 * Version:     1.0
 * Author:      Rayhan Uddin Chowdhury
 * Author URI:  https://
 * License:     GPLv2 or later
 * License URI: https://
 * Text Domain: carbon-demo
 * Domain Path: /languages/
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

/*require_once "carbon-fields/vendor/autoload.php";

function carbontest_boot() {
    \Carbon_Fields\Carbon_Fields::boot();
    // carbontest_demo_metabox();
}
 add_action('plugins_loaded','carbontest_boot');*/

function cbd_load() {
    require_once "carbon-fields/vendor/autoload.php";
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('plugins_loaded','cbd_load');

/*function carbontest_demo_metabox() {
    Container::make("post_meta",__('Sample Metabox', 'carbon-demo'))
    ->where('post_type','=','page')
    ->set_context('side')
    ->set_priority('high')
    ->add_fields([
        Field::make('text','ct_number_of_posts',__('Number of Posts', 'carbon-demo')),
        Field::make('text','ct_number_of_words',__('Number of Words', 'carbon-demo')),
    ]);
    Container::make("post_meta",__('Sample Metabox 2', 'carbon-demo'))
    ->where('post_type','=','page')
    ->set_context('side')
    ->add_fields([
        Field::make('text','ct_number_of_posts2',__('Number of Posts2', 'carbon-demo')),
        Field::make('text','ct_number_of_words2',__('Number of Words2', 'carbon-demo')),
    ]);
}
add_action('carbon_fields_register_fields','carbontest_demo_metabox');*/


function cbd_tabedui() {
    // Container::make("post_meta",__('Office Details', 'carbon-demo'))
    Container::make("theme_options",__('Office Details', 'carbon-demo'))
    // ->where('post_type','=','page')
    ->add_tab(__("Office Details"),[
        Field::make('textarea','cbd_office_address',__('Office Address', 'carbon-demo'))->set_width(50),
        Field::make('text','cbd_office_timing',__('Office Timing', 'carbon-demo'))->set_width(50),
    ])
    ->add_tab(__("Office Location"),[
        Field::make('text','cbd_let',__('Lattitude', 'carbon-demo'))->set_width(50),
        Field::make('text','cbd_lon',__('Longitude', 'carbon-demo'))->set_width(50),
        Field::make('text','cbd_dummy_ta',__('Extra Info', 'carbon-demo')),
    ]);

    Container::make("post_meta",__('Example of Complex Fields', 'carbon-demo'))
    ->where('post_type','=', 'page')
    ->add_fields(array(
        Field::make( 'complex', 'crb_media_item' )
            // ->set_layout('tabbed-vertical')
            ->set_layout('tabbed-horizontal')
            ->set_duplicate_groups_allowed( false )
            ->add_fields( 'photograph', array(
                Field::make( 'image', 'image' ),
                Field::make( 'text', 'caption' ),
            ) )
            ->add_fields( 'movie', array(
                Field::make( 'file', 'video' ),
                Field::make( 'text', 'title' ),
                Field::make( 'text', 'length' ),
            ) )
            ->add_fields( 'image', array(
                Field::make( 'file', 'video' ),
                Field::make( 'text', 'title' ),
                Field::make( 'text', 'length' ),
            ) )
            ->add_fields( 'poster', array(
                Field::make( 'file', 'video' ),
                Field::make( 'text', 'title' ),
                Field::make( 'text', 'length' ),
            ) ),

    ));


}
add_action('carbon_fields_register_fields','cbd_tabedui');






add_action('carbon_fields_register_fields','cbd_tabedui');