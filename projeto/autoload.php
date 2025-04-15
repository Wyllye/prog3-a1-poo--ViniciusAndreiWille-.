<?php
// filepath: c:\xampp\htdocs\programacao\projeto\autoload.php
function autoload($class_name) {
    $file = 'classes/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoload');
?>