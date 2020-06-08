<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function carbontest_boot(){
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme','carbontest_boot');


function carbontest_demo_metabox() {
    Container::make("post_meta",__('Sample Metabox', 'carbontest'))
    ->where('post_type','=','page')
    ->set_context('side')
    ->set_priority('high')
    ->add_fields([
        Field::make('text','ct_number_of_posts',__('Number of Posts', 'carbontest')),
        Field::make('text','ct_number_of_words',__('Number of Words', 'carbontest')),
    ]);
    Container::make("post_meta",__('Sample Metabox 2', 'carbontest'))
    ->where('post_type','=','page')
    ->set_context('side')
    ->add_fields([
        Field::make('text','ct_number_of_posts2',__('Number of Posts2', 'carbontest')),
        Field::make('text','ct_number_of_words2',__('Number of Words2', 'carbontest')),
    ]);
}
add_action('carbon_fields_register_fields','carbontest_demo_metabox');