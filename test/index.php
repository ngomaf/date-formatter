<?php

use Ngomafortuna\DateFormatter\DateFormatter;

require_once dirname(__FILE__, 2) . '/vendor/autoload.php';

echo PHP_EOL;

$myDate = date('Y-m-d H:i:s');

$dateFormatter = new DateFormatter;

var_dump($dateFormatter->date($myDate)->datetime);
var_dump($dateFormatter->dateShort($myDate)->datetime);