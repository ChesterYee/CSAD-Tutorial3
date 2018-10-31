<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PLAYGROUND</title>
</head>
<body>
<?php

// Commeting in PHP
# Commeting in PHP
/*
    Block commeting in PHP
*/
echo "My first PHP script!";
echo "<br>"; // Line break
echo "Hello World!";

$color = "red";
echo "My car is " . $color . "<br>";

$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $x + $y;
echo "<br>";
echo $x;

echo "<br>";


 // Global variables
$a = 100;
$b = 150;
function myTest() {
    // Use global keyword to access global variables
    global $a, $b;
    $a = $a + $b;
}

myTest();
echo $a; // outputs 15
echo "<br>"; 
var_dump($x); // returns data type and value


$cars = array("BMW", "Mercedes", "Volvo");
print_r($cars);
echo "<br>";


// PHP OBJECTS
class Car {
    function Car() {
        $this->model = "AMG";
    }
}
// create an object
$mercedes = new Car();

// show object properties
echo $mercedes->model;

echo "<br>";


$nullValue = "Hello World";
$nullValue = null;
var_dump($nullValue);

echo "<br>";


echo strlen("Hello world!"); // String length

echo "<br>";

echo str_word_count("Hello world!"); // Number of words in string

echo "<br>";

echo strrev("Hello world!"); // Reverses string

echo "<br>";

echo strpos("Hello world!", "world"); // outputs 6

echo "<br>";

echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

echo "<br>";


// CONSTANTS ARE GLOBAL
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>";

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}



















?>

</body>
</html>

