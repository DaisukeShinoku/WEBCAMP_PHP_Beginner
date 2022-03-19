<?php
$file_name = __FILE__;

$file_string = file_get_contents($file_name);

var_dump($file_string);