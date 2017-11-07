<?php
// "HTTP/1.0 404 Not Found"
function status_header($code = 200) {
    $messege = [
        200 => "OK",
        100 => "Continue",
        301 => "Moved permanently",
        302 => "Found",
        403 => "Forbiden",
        404 => "Not found",
        500 => "Internal Server Error",
        501 => "Not Implemented"
    ];

    header("HTTP/1.0 ".$code." ".$messege[$code]);
}

status_header(302);

// [header => värde]
function headers(array $headers = []) {
    foreach ($headers as $key => $value) {
        header($key . ":" . $value);
    }
    
}
headers([
    "Connection" => "Wololo",
    "Vary" => "I work"
]);

function redirect($url, $code = 302) {
    status_header($code);
    header('Location:'.$url);
}