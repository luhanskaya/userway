<?php

function enable_more_buttons($buttons)
{
    $buttons[] = 'subscript';
    $buttons[] = 'superscript';
    return $buttons;
}
add_filter("mce_buttons_2", "enable_more_buttons");


// Callback function to insert 'styleselect' into the $buttons array (to proper work in Gutenberg)
function add_styleselect_button($buttons)
{
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'add_styleselect_button');


function my_mce_before_init_insert_formats($init_array)
{
    // Define the style_formats array

    $style_formats = array(
        /*
        * Each array child is a format with it's own settings
        * Notice that each array has title, block, classes, and wrapper arguments
        * Title is the label which will be visible in Formats menu
        * Block defines whether it is a span, div, selector, or inline style
        * Classes allows you to define CSS classes
        * Wrapper whether or not to add a new block-level element around any selected elements
        */
        array(
            'title' => 'Font Weight',
            'items' => array(
                array(
                    'title' => 'Normal',
                    'block' => 'span',
                    'classes' => 'fw-normal',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Medium',
                    'block' => 'span',
                    'classes' => 'fw-medium',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Semibold',
                    'block' => 'span',
                    'classes' => 'fw-semibold',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Bold',
                    'block' => 'span',
                    'classes' => 'fw-bold',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Extra Bold',
                    'block' => 'span',
                    'classes' => 'fw-bolder',
                    'wrapper' => true,
                ),
            ),
        ),

        array(
            'title' => 'Classes Headings',
            'items' => array(
                array(
                    'title' => 'Heading 1',
                    'block' => 'span',
                    'classes' => 'h1',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Heading 2',
                    'block' => 'span',
                    'classes' => 'h2',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Heading 3',
                    'block' => 'span',
                    'classes' => 'h3',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Heading 4',
                    'block' => 'span',
                    'classes' => 'h4',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Heading 5',
                    'block' => 'span',
                    'classes' => 'h5',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Heading 6',
                    'block' => 'span',
                    'classes' => 'h6',
                    'wrapper' => true,
                ),
            ),
        ),

        array(
            'title' => 'Custom Underline',
            'items' => array(
                array(
                    'title' => 'Normal',
                    'block' => 'span',
                    'classes' => 'underline-title',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Dark',
                    'block' => 'span',
                    'classes' => 'underline-title underline-dark',
                    'wrapper' => true,
                ),
            ),
        ),

        array(
            'title' => 'Text Transform',
            'items' => array(
                array(
                    'title' => 'Capitalize',
                    'block' => 'span',
                    'classes' => 'text-capitalize',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Uppercase',
                    'block' => 'span',
                    'classes' => 'text-uppercase',
                    'wrapper' => true,
                ),
                array(
                    'title' => 'Lowercase',
                    'block' => 'span',
                    'classes' => 'text-lowercase',
                    'wrapper' => true,
                ),
            ),
        ),
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode($style_formats);

    return $init_array;
}
// Attach callback to 'tiny_mce_before_init'
add_filter('tiny_mce_before_init', 'my_mce_before_init_insert_formats');
