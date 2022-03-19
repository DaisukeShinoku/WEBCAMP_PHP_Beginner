<?php
$file_string = file_get_contents(__FILE__);

file_put_contents("./file_copy.php", $file_string);