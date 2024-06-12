<?php

$requestUri = $_SERVER['REQUEST_URI'];

// Remove query string from the request URI
$requestUri = explode('?', $requestUri, 2)[0];

// Remove trailing slashes
$requestUri = rtrim($requestUri, '/');

// Remove .php extension if present
if (substr($requestUri, -4) === '.php') {
    $requestUri = substr($requestUri, 0, -4);
}

// Redirect to the clean URL
header("Location: https://digitalnidom2.up.railway.app/pocetna.php", true, 301);
exit();
?>
