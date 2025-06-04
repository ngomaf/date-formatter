# Date formatter
Simple date formatter (Formatador simples de data)

This component have two features:
- date: to formatter date `2024-12-16` to `16 Janeiro 2024`. Return object with date, time, datetime and others
- dateShort: equal to `date`, bat in short format

## Require
Necessary PHP 8.0 or more (Necessário PHP 8.0 ou superior)

## Install
composer require ngomafortuna/date-formatter

## Syntax and mode of use
```php

$dateFormatter = new DateFormatter;

$dateFormatter->date($myDate)->datetime;
```

## Example
```php
use Ngomafortuna\DateFormatter\DateFormatter;

$myDate = date('Y-m-d H:i:s');

$dateFormatter = new DateFormatter;

var_dump($dateFormatter->date($myDate)->datetime);
var_dump($dateFormatter->dateShort($myDate)->datetime);
```

Results
```shell
string(23) "04 Junho 2025, 19:27:56"
string(21) "04 Jun 2025, 19:27:56"
```

