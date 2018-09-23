<?php 


$str = "Bonjour ____ ";


$str_changed = str_replace('____', "Artois", $str);

var_dump($str_changed);

/**
 *
 * Return 
 * string 'Bonjour Artois ' (length=15)
 */