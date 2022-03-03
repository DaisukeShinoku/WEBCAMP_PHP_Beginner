<?php
// ユーザーの情報
$age = 20;
$point = 499;

echo "\n";
echo "「かつ」の場合\n";
var_dump( ($age >= 20)&&($point >= 500) );
echo "\n";
echo "「または」の場合\n";
var_dump( ($age >= 20)||($point >= 500) );
