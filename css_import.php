<?php

/**
 *  Given a valid file location (it must be an path starting with "/"), i.e. "/css/style.css",
 *  it returns a string containing the file's mtime, i.e. "/css/style.0123456789.css".
 *  Otherwise, it returns the file location.
 *
 *  @param $file  the file to be loaded.
 */
function auto_version($file) {
    // if it is not a valid path (example: a CDN url)
    if (strpos($file, '/') !== 0 || !file_exists($_SERVER['DOCUMENT_ROOT'] . $file)) return $file;

    // retrieving the file modification time
    // https://www.php.net/manual/en/function.filemtime.php
    $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);

    return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}

const CSS = array(
    '/css/reset.css',
	'/css/style.css',
	'/css/scandinavian.css',
);

foreach (CSS as $css)	
  echo '<link rel="stylesheet" href="' . auto_version($css) . '" type="text/css">';