<?php

// add_action( 'admin_post_nopriv_contact_form', 'handle_contact_form' );
// add_action( 'admin_post_contact_form', 'handle_contact_form' );

// function handle_contact_form() {
//     if ( ! isset( $_POST['contact_form_nonce'] ) || ! wp_verify_nonce( $_POST['contact_form_nonce'], 'contact_form' ) ) {
//         wp_die( 'Sorry, your form submission could not be processed.' );
//     }
    
//     $name    = sanitize_text_field( $_POST['name'] );
//     $email   = sanitize_email( $_POST['email'] );
//     $message = wp_kses_post( $_POST['message'] );
    
//     $to      = 'ck.hasan113@gmail.com';
//     $subject = 'New contact form submission from ' . $name;
//     $body    = "Name: $name\n\nEmail: $email\n\nMessage: $message";
    
//     wp_mail( $to, $subject, $body );
    
//     wp_redirect( get_permalink( $_POST['_wp_http_referer'] ) . '?success=true' );
//     exit;
// }

// add_action('wp_loaded', 'handle_contact_form');

// function handle_contact_form(){
//     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
//         $name = sanitize_text_field($_POST['name']);
//         $email = sanitize_email($_POST['email']);
//         $message = sanitize_textarea_field($_POST['message']);
//         $subject = sanitize_text_field($_POST['subject']);

//         // Use wp_mail function to send the email
//         wp_mail('ck.hasan113@gmail.com', $subject, $message, "From: $name <$email>");

//         // Redirect to a thank you page
//         wp_redirect(home_url('/thank-you.php/'));
//         exit;
//     }
// }


// add_action('admin_post_handle_contact_form', 'handle_contact_form');
// add_action('admin_post_nopriv_handle_contact_form', 'handle_contact_form');

// add_action('wp_loaded', 'handle_contact_form');
// function handle_contact_form(){
//     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
//         $name = sanitize_text_field($_POST['name']);
//         $email = sanitize_email($_POST['email']);
//         $message = sanitize_textarea_field($_POST['message']);
//         $subject = 'New contact form submission: ' . $name;

//         // Use wp_mail function to send the email
//         wp_mail('your_email@example.com', $subject, $message, "From: $name <$email>");

//         // Redirect to a thank you page
//         // wp_redirect(home_url('/thank-you/'));
//         echo '<p>Thank you for contacting us. We will get back to you soon.</p>';
//         exit;
//     }
// }

// Function to handle the form submission
function handle_contact_form_submission() {
  if (isset($_POST['submit'])) {
  
      // Collect the form values
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
  
      // Set the recipient email address
      $to = 'ck.hasan113@gmail.com';
  
      // Set the email subject
      $subject = 'Contact Form Submission';
  
      // Set the email message
      $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;
  
      // Set the email headers
      $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();
  
      // Send the email
      wp_mail($to, $subject, $body, $headers);
  
      // Start output buffering
      ob_start();
  
      // Redirect to the thank-you page
      wp_redirect(home_url( '/thank-you.php/' ));
      exit;
  }
}
add_action('init', 'handle_contact_form_submission');

