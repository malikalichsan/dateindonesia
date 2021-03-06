<?php

require __DIR__ . '/../vendor/autoload.php';

use Malikalichsan\DateIndonesia\DateIndonesia;
use Carbon\Carbon;

$test = new DateIndonesia('en');
$test = $test->getFormatted(Carbon::now()->format('w d m Y H i T'));
print_r($test);

$testAgain = (new DateIndonesia())->getFormatted(Carbon::now()->format('w d m Y H i T'));
print_r($testAgain);