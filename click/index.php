<?php
$newUrl = 'https://anandsweets.in';

header("HTTP/1.1 301 Moved Permanently");

header("Location: " . $newUrl);

exit();
?>
