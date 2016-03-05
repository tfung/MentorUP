<?php

// hook the function to the cmb2_init action
add_action( 'cmb2_init', 'post_metabox' );
 
// create the function that creates metaboxes and populates them with fields
function post_metabox() {
     
    // set the prefix (start with an underscore to hide it from the custom fields list
    $prefix = '_postdata_';
     
    $cmb = new_cmb2_box( array(
        'id'            => 'event_data',
        'title'         => 'Event Data',
        'object_types'  => array( 'post' ), // post type
        'context'       => 'normal', // 'normal', 'advanced' or 'side'
        'priority'      => 'high', // 'high', 'core', 'default' or 'low'
        'show_names'    => true, // show field names on the left
        'cmb_styles'    => true, // false to disable the CMB stylesheet
        'closed'        => false, // keep the metabox closed by default
    ));

    $cmb->add_field(array(
        'id'   => 'event_location',
        'name' => 'Location',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'id'   => 'event_date',
        'name' => 'Date',
        'type' => 'text_date_timestamp',
    ));

    $cmb->add_field(array(
        'id'   => 'event_start_time',
        'name' => 'Start Time',
        'type' => 'text_time',
    ));

    $cmb->add_field(array(
        'id'   => 'event_end_time',
        'name' => 'End Time',
        'type' => 'text_time',
    ));

    $cmb->add_field(array(
        'id'   => 'event_ticket_url',
        'name' => 'Ticket URL',
        'type' => 'text_url',
    ));

    $cmb->add_field( array(
        'id' => 'event_ticket_cost',
        'name' => 'Ticket Cost',
        'type' => 'textarea'
    ));

    $cmb->add_field( array(
        'id'      => 'event_image',
        'name'    => 'Image',
        'type'    => 'file',

        'options' => array(
            'url' => false,
            'add_upload_file_text' => 'Add Image'
        ),
    ));
}

?>