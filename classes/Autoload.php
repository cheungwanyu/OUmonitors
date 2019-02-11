<?php
function Autoload($className) {    
    $filename = __DIR__ ."/" .$className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register('Autoload');