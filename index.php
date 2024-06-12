<?php
// Get the requested URI
$requestUri = $_SERVER['REQUEST_URI'];

// Remove query string from the request URI
$requestUri = explode('?', $requestUri, 2)[0];

// Remove leading slash
$requestUri = ltrim($requestUri, '/');

// If the request is for the root directory, load the default index.php
if ($requestUri == '') {
    $requestUri = 'index.php';
} else {
    // Append .php extension to the requested URI
    $requestUri .= '.php';
}

// Check if the file exists
if (file_exists($requestUri)) {
    include $requestUri;
} else {
    // If the file doesn't exist, return a 404 response
    http_response_code(404);
    echo '404 Not Found';
}
?>
