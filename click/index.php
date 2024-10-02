<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the 'referrer' query parameter exists
if (isset($_GET['referrer'])) {
    // Extract the query parameters from 'referrer'
    parse_str($_GET['referrer'], $params);

    // Check if 'singular_click_id' exists within the parsed parameters
    if (isset($params['singular_click_id']) && !empty($params['singular_click_id'])) {
        $singular_click_id = $params['singular_click_id'];

        // Define the final URL and append the singular_click_id
        $finalUrl = "https://www.anandsweets.in/collections/barfi-sweets/?referrer=singular_click_id=" . urlencode($singular_click_id);

        // Perform the redirection to the final URL
        header("Location: " . $finalUrl);
        exit();
    } else {
        // If singular_click_id is not found or empty, log an error
        error_log("singular_click_id not found in the referrer parameters.");
    }
} else {
    // Log a message if referrer is not present in the URL
    error_log("No referrer parameter found in the URL.");
}

// Default fallback if no singular_click_id is provided or there's an issue
header("Location: https://www.anandsweets.in/collections/barfi-sweets");
exit();
?>
