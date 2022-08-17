<?php 
// ini_set('memory_limit', '2048M');
/**
 * Durch die init brauch der Autoloader und Container
 * nicht überall eingebunden werden. */
require_once "autoload.php";
use App\App\Container;
$container = new Container();

function html(string $str):string {
    $string = htmlentities($str, ENT_QUOTES, 'UTF-8');
    return $string;
}