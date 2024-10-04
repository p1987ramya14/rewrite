<?php
// Set the new location (URL) to redirect to
$url = 'https://www.greentreenursery.in/miraccle-fruit-plant/pid-2034747439';

// Issue a 301 Moved Permanently response
header("HTTP/1.1 301 Moved Permanently");

// Redirect to the new URL
header("Location: $url");

// Ensure the script stops executing after the redirect
exit();
?>
