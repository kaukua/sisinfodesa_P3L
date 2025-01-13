<?php

function loadLibraries($class){
    $path = __DIR__."/libraries/";
    require_once $path.$class.".php";
}
sql_autoload_register("loadLibraries");

?>