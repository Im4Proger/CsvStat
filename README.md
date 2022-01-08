# PHP-class for calculating column and row statistics for the csv file

PHP-class for calculating column and row statistics for the csv file
Requirements:
- PHP 8`


## Installation

```
See example below.
```


## Example

```php
<?php
include 'Im4Proger/CsvStat/CsvStat.php';
use Im4Proger\CsvStat\CsvStat;

$csv_content = file_get_contents('csv_example.csv');

$result_object = new CsvStat($csv_content);
?>
```


## Features

- [x] calculating column and row