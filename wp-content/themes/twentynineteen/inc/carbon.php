<?php

require_once get_template_directory() . "/library/carbon-fields/vendor/autoload.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function prefix_post_meta() {
    /* Container::make('post_meta',__('Sample Metabox', 'twentynineteen'))
    ->set_priority( 'core' )
    ->set_context('side')
    ->where('post_type','=','page')
    ->add_fields([
        Field::make('text','prefix_address')->set_value('Sample Address'),
        Field::make('text','prefix_opening'),
        Field::make('checkbox','prefix_open','Is Active')->set_option_value('yes'),
    ]); */

    Container::make('post_meta',__('Only Image', 'twentynineteen'))
    ->set_priority( 'default' )
    ->set_context('side')
    ->where('post_type','=','post')
    ->where('post_format','=','image')
    ->add_fields([
        Field::make('text','prefix_image_title','Image Title'),
    ]);

    Container::make('post_meta',__('For Homepage', 'twentynineteen'))
    ->where('post_type','=','page')
    ->where('post_template','=','page-templates/template.php')
    ->set_context('side')
    ->set_priority( 'default' )
    ->add_fields([
        Field::make('text','prefix_homepage','Homepage Info'),
    ]);

    Container::make('post_meta',__('Custom Condition', 'twentynineteen'))
    ->where('post_type','=','page')
    ->where('post_id','CUSTOM',function($id){
        if(carbon_get_post_meta($id, 'prefix_homepage') == 'abcd'){
            return true;
        }
        return false;
    })
    ->set_priority( 'default' )
    ->add_fields([
        Field::make('text','prefix_custom','Custom'),
    ]);
}
add_action('carbon_fields_register_fields','prefix_post_meta');

function prefix_load(){
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme','prefix_load');