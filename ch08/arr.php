<?php
$awk1 = [ 123 ];
var_dump($awk1);

$awk2 = [ 999, "Hello", 3.14];
var_dump($awk2);

var_dump( $awk2[0] );

$awk2[0] = 654321;
var_dump( $awk2[0] );

$awk1[] = 1.41421356;
$awk1[] = "string value";
var_dump($awk1);