<?php
// 元の文字列:「;」で区切られるていると想定
$base_string = "Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の文字列 \n";
var_dump($base_string);
// expolode()で、;のところで分解
$explode_array = explode(";", $base_string);
echo "\n explodeした配列 \n";
var_dump($explode_array);
// implode()で、,(カンマ)でつなげて再組み立て
$imploded_string = implode(",", $explode_array);
echo "\n impoldeした文字列 \n";
var_dump($imploded_string);
