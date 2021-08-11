<?php

require_once('./reader.php');

$csvReader = new CsvFileReader('lines.csv');
$content = $csvReader->readAllFile();

foreach ($content as $line) {
    printf('%s is %d years old%s', $line[0], $line[1], PHP_EOL);
}
