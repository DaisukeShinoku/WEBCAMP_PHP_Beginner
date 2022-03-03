<?php
echo "普通に比較\n";
$f = 0.3;
var_dump($f === 0.3);
echo "0.1 + 0.2 と 0.3 を比較\n";
$f = 0.1 + 0.2;
var_dump($f === 0.3);
echo "0.1 + 0.2 と 0.3 をprintfで表示\n";
printf("0.1+0.2: %f \n", $f);
printf("0.3: %f \n", 0.3);
echo "0.1 + 0.2 と 0.3 をprintf高精度で表示\n";
printf("0.1+0.2: %.32f \n", $f);
printf("0.3: %.32f \n", 0.3);
// 精度6桁での正しい比較
echo "\n";
echo "0.1 + 0.2 と 0.3 の現実的な比較\n";
define('FLOAT_PRECISION', 0.000001); // 精度は至る所で使うので定数化しておく
var_dump( abs($f - 0.3) < FLOAT_PRECISION); // absで絶対値を取得し6桁の誤差内許容