<?php

$requestUri = $_SERVER['REQUEST_URI'];

// Remove query string from the request URI
$requestUri = explode('?', $requestUri, 2)[0];

// Remove trailing slashes
$requestUri = rtrim($requestUri, '/');

// Check if the request is for a PHP file
if (substr($requestUri, -4) === '.php') {
    // Remove the .php extension
    $cleanUrl = substr($requestUri, 0, -4);
} else {
    $cleanUrl = $requestUri;
}

// Redirect to the clean URL
header("Location: https://digitalnidom2.up.railway.app$cleanUrl", false, 301);
exit();
?>
