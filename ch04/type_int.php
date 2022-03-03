<?php
// 整数型の確認
$i = 123;
var_dump($i);

// 整数型の最大/最小値の確認
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

// 最大値を超えた値はどうなる？
$over_max = PHP_INT_MAX + 1;
var_dump($over_max);

// 最小値を下回った値はどうなる？
$over_min = PHP_INT_MIN - 1;
var_dump($over_min);