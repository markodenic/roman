<?php

require 'vendor/autoload.php';

$roman = new \Acme\RomanNumeralConverter();

echo $roman->convert(291);
