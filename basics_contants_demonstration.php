<?php 

// if you are using a namespace, the define method you generate a warning
define("UNITS", ['MILES_CONVERSION' => 1.6, "INCHES_CONVERSION" => '2.14']); // using define method

// if you have a namespace, you should use const keyword. That is the difference
const NUMBER_OF_KM = 21.87654; // using keyword const

echo NUMBER_OF_KM." km(s) in miles is " . NUMBER_OF_KM * UNITS['MILES_CONVERSION']."\n";