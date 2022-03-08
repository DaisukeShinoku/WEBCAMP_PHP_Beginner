<?php
$arr = ["Red", "Yellow", "Green", "Blue", "Black"];

foreach($arr as $color) {
  echo "{$color} \n";
}

$arr2 = [
  "Red" => "#ff0000",
  "Yellow" => "#ffff00",
  "Green" => "#00ff00",
  "Blue" => "#0000ff",
  "Black" => "#000000",
];

foreach($arr2 as $k => $v){
  echo "{$k} : {$v} \n";
}