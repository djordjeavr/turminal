<?php
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Data',
        'menu_title' => 'Site Data',
        'menu_slug' => 'theme-general-images',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/**************MAIL SENDING ********************************/


function wpb_sender_email($original_email_address)
{
    return get_field('mail_sender_mail', 'option');
}

// Function to change sender name
function wpb_sender_name($original_email_from)
{
    return get_field('mail_sender_name', 'option');
}

// Hooking up our functions to WordPress filters
add_filter('wp_mail_from', 'wpb_sender_email');
add_filter('wp_mail_from_name', 'wpb_sender_name');


/**************END MAIL SENDING********************************/