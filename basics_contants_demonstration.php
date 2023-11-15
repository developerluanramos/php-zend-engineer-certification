<?php 

define("UNITS", ['MILES_CONVERSION' => 1.6, "INCHES_CONVERSION" => '2.14']);
const NUMBER_OF_KM = 21.87654;

echo NUMBER_OF_KM." km(s) in miles is " . NUMBER_OF_KM * UNITS['MILES_CONVERSION']."\n";