<?php

require_once get_template_directory() . "/library/carbon-fields/vendor/autoload.php";

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function prefix_post_meta() {
    Container::make('post_meta','Sample Metabox')
    ->where('post_type','=','page')
    ->add_fields([
        Field::make('text','prefix_address')->set_value('Sample Address'),
        Field::make('text','prefix_opening'),
        Field::make('checkbox','prefix_open','Is Active')->set_option_value('yes'),
    ]);
}
add_action('carbon_fields_register_fields','prefix_post_meta');


function prefix_load(){
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme','prefix_load');