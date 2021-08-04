<?php

require_once 'vendor/autoload.php';

$array = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
);

while (list($key, $val) = each($array)) {
    echo "$key => $val\n";
}
