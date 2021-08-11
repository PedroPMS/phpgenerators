<?php

$file = fopen('lines.csv', 'w');

for ($i = 0; $i < 10_000_000; $i++) {
    $name = "Name: $i";
    $age = rand(18, 42);
    fputcsv($file, [$name, $age]);
}

fclose($file);
