<?php

/*
 * Aim of this Routing script to allow running php code segments
 * in html pages without having to use a .htaccess
 */

$ROOT = __DIR__ . "/..";

if (preg_match("/\.(?:php|html)$/", $_SERVER["REQUEST_URI"])) {
    // Explicit url to .html or .php page
    include $ROOT . $_SERVER["REQUEST_URI"];
} else if (preg_match("/\/[A-z]*$/", $_SERVER["REQUEST_URI"])) {
    // Urls ending with a slash or has no extension
    // E.g. /user/ or /user
    // We try serving index.php first
    // Otherwise try index.html
    $prefix = $ROOT . $_SERVER["REQUEST_URI"];
    $html = $prefix . "/index.html";
    $php = $prefix . "/index.php";
    if (file_exists($php)) {
        include $php;
    }
    include $html;
    return;
} else {
    // Serve any other file as is
    return false;
}

