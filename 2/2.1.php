<?php

$i = 0;
$x = $_POST['number'];

while ($i <= 5){
    $y = rand(0, 1000);
    $tablica[$i] = $y;
    $i++;
}

echo $tablica[$x];

?>
















