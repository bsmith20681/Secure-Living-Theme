<?php

/**
 * Security Match Quiz Form Handler
 * Receives form data, sends it to Zapier, and redirects to the thank you page.
 */

// Load WordPress
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    wp_safe_redirect(home_url('/security-match-quiz/'));
    exit;
}

// Sanitize form data
$data = array(
    'property_type' => sanitize_text_field($_POST['property_type'] ?? ''),
    'cameras'       => sanitize_text_field($_POST['cameras'] ?? ''),
    'monitoring'    => sanitize_text_field($_POST['monitoring'] ?? ''),
    'zip_code'      => sanitize_text_field($_POST['zip_code'] ?? ''),
    'email'         => sanitize_email($_POST['email'] ?? ''),
    'first_name'    => sanitize_text_field($_POST['first_name'] ?? ''),
    'last_name'     => sanitize_text_field($_POST['last_name'] ?? ''),
    'phone'         => sanitize_text_field($_POST['phone'] ?? ''),
);

echo '<pre>';
var_dump($data);
echo '</pre>';

// Send data to Zapier webhook
$webhook_url = 'https://hook.us2.make.com/fbck6osqd7flne4mdpndrmfj27oer6mx';

$response = wp_remote_post($webhook_url, array(
    'body'    => wp_json_encode($data),
    'headers' => array('Content-Type' => 'application/json'),
    'timeout' => 10,
));

// Log the response for debugging
if (is_wp_error($response)) {
    error_log('webhook error: ' . $response->get_error_message());
} else {
    error_log('webhook response: ' . wp_remote_retrieve_response_code($response) . ' - ' . wp_remote_retrieve_body($response));
}
error_log('Submitted data: ' . wp_json_encode($data));

// Redirect to thank you page
wp_safe_redirect(add_query_arg(array(
    'cameras'       => urlencode($data['cameras']),
    'monitoring'    => urlencode($data['monitoring']),
    'property_type' => urlencode($data['property_type']),
), home_url('/security-match-quiz-thank-you/')));
exit;
