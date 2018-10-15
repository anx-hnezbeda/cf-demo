<?php
header("Access-Control-Allow-Origin: *");

$x = 0;
$n = 10000;


for ($i = 0; $i < $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
                $x += $j - $i;
        }
}

$x += time();

$test = [
    "x" => $x,
    "instance_index" => $_SERVER['INSTANCE_INDEX'],
    "instance_guid" => $_SERVER['INSTANCE_GUID'],
    "phpversion" => phpversion(),
];

echo json_encode($test);
