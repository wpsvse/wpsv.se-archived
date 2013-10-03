<?php
//
//  Gravity forms functions
//

//**************************************************
// Set default file path 
//**************************************************

add_filter("gform_upload_path", "change_upload_path", 10, 2);
function change_upload_path($path_info, $form_id){
   $path_info["path"] = "/home/wpsv_se/wpsv.se/fil/";
   $path_info["url"] = "http://wpsv.se/fil/";
   return $path_info;
}

//**************************************************
// Notify User When Submitted Post is Published
// - For NOT logged in users
//**************************************************

//add_action('publish_post', 'notify_on_publish');
//function notify_on_publish($post_id) {
//    global $post;
//    
//    $custom_field_name = 'your_custom_field_name';
//    $from_name = 'WordPress Sverige';
//    $from_email = 'no-reply@wpsv.se';
//    $subject = 'Your Subject Here';
//    $message = 'Your message here.';
//    
//    /* No need to edit beyond this point */
//    
//    // if this meta key is not set, this post was not created by a Gravity Form
//    if(!get_post_meta($post_id, '_gform-form-id', true))
//        return;
//    
//    // make sure we havne't already sent a notification for this post
//    if(get_post_meta($post_id, '_gform-notified', true))
//        return;
//    
//    $email = get_post_meta($post_id, $custom_field_name, true);
//    
//    $headers = "From: '$from_name' <$from_email> rn";
//    $headers .= "Content-type: text/html; charset=" . get_option('blog_charset') . "rn";
//    
//    wp_mail($email, $subject, $message, $headers);
//    
//    update_post_meta($post_id, '_gform-notified', 1);    
//}

//**************************************************
// Notify User When Submitted Post is Published
// - For logged in users
//**************************************************

//add_action('publish_post', 'notify_author_on_publish');
//function notify_author_on_publish($post_id) {
//    global $post;
//    
//    $from_name = 'WordPress Sverige';
//    $from_email = 'no-reply@wpsv.se';
//    $subject = 'Your Subject Here';
//    $message = 'Your message here.';
//    
//    /* No need to edit beyond this point */
//    
//    // if this meta key is not set, this post was not created by a Gravity Form
//    if(!get_post_meta($post_id, '_gform-form-id', true))
//        return;
//    
//    // make sure we havne't already sent a notification for this post
//    if(get_post_meta($post_id, '_gform-notified', true))
//        return;
//    
//    $author = new WP_User($post->post_author);
//    $email = $author->get('user_email');
//    
//    $headers = "From: '$from_name' <$from_email> rn";
//    $headers .= "Content-type: text/html; charset=" . get_option('blog_charset') . "rn";
//    
//    wp_mail($email, $subject, $message, $headers);
//    
//    update_post_meta($post_id, '_gform-notified', 1);
//    
//}
?>