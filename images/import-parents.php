<?php

/*
 * This file searches additional directories to pull images from, so that you don't need to copy over the default images.
 *
 * If you're extending from an extension, you can add it's directory in the $parentDirectories array below to include
 * it's images without needing to duplicate them.
 */

/**
 * Directories to search for images not found here.  First one found serves the image.  MUST HAVE ENDING SLASH
 */
$parentDirectories = array(
    '../../default/images/'
);

$requestUri = $_SERVER['REQUEST_URI'];

$findString = '/images/';
$startPos   = strpos($requestUri, '/images/');

$url = substr($requestUri, $startPos + strlen($findString));

foreach ($parentDirectories as $dir) {
    if (file_exists($dir . $url)) {
        header("HTTP/1.1 301 Found");
        header("Location: " . $dir . $url);
    }
}
