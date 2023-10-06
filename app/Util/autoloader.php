<?php

function myAutoloader($className) {
    // Convert namespace separators to directory separators
    $classFile = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    // Check if the file exists, and if so, include it
    if (file_exists($classFile)) {
        require_once($classFile);
    }
}
spl_autoload_register('myAutoloader');

?>