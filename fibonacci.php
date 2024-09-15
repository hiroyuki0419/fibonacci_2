<?php
$fibonacci = [0, 1];
$i = 1;
while(end($fibonacci) < 10000) {
    $fibonacci[] = $fibonacci[$i] + $fibonacci[($i - 1)];
    $i++;
}
foreach($fibonacci as $value) {
    echo "{$value} \n";
}