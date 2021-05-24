<?php
echo "hello world" . '<br>';
echo '<button> Click me </button>' . '<br>';
echo "here i am" . '<br>';
//single line comments

#single line comments

/*this is a multi
line comment*/

#variables
$name = 'Socrates';
$age = 22;
$height = 1.70;
$unit = 'cm';

// String concatenation
echo 'My name is ' . $name . ' I am ' . $age . '<br>';

#shows type of variable
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($height) . '<br>';

#shows type of variable, number of chars, and value
var_dump($name, $age, $height);

#variable checking, 1 if true, 0 if false
echo is_string($name) . '<br>';
echo is_int($age) . '<br>';
echo is_float($height) . '<br>';

#checks if variables are defined, 1 if true, 0 if false
echo isset($name) . '<br>';

#constants
define('PI', 3.14);
echo PI . '<br>';

#php built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';

#declaring numbers
$a = 6;
$b = 8;
$c = 1.2;

#arithmetic operations
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

#assignment with math operators
# +=, -=, *=, /=, %=

#increments, decrements
// echo $a++ . '<br>'; prints first, then increments
// echo ++$a . '<br>'; increments first, then prints
// echo $a-- . '<br>';
// echo --$a . '<br>';

// Numeric checking
// is_int() = is_integer()
// is_float
// is_double
// is_numeric()

// Conversion
// $strNum = '12.34';
// $num = (int)$strNum; or $num = intval($strNum);
// var_dump($num);

// Number functions
// abs, ceil, floor, round, pow, sqrt, min, max

// PHP documentation
// https://www.php.net/manual/en/index.php

// Arrays
$fruits = ['apple', 'pear', 'banana'];
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// print some position of the array
echo $fruits[1] . '<br>';

// Set an element with position
$fruits[0] = 'strawberry';
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Check if array has elements at given index
isset($fruits[3]);

// Append element
$fruits[] = 'Orange';
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Print length of an array
echo count($fruits) . '<br>';

// Add element at the end of the array
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Remove the last element of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Remove element at the beginning of the array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '<pre>';

// Split the string into an array
$colors = 'Red,Green,Blue';
echo '<pre>';
var_dump(explode(',', $colors));
echo '<pre>';

// Combine array elements into a string
echo implode('&', $fruits);

// Check if an element exists in an array
echo '<pre>';
var_dump(in_array('Orange', $fruits));
echo '<pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('Orange', $fruits));
echo '<pre>';

// Merge two arrays
$vegetables = ['potato', 'cucumber'];
echo '<pre>';
// var_dump(array_merge($fruits, $vegetables)); old way of doing
// php 7.4 way of doing things
var_dump([...$fruits, ...$vegetables]);
echo '<pre>';

// Sorting an array
sort($fruits);
// or use rsort to reverse sort
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Associative arrays
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];

echo '<pre>';
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'] . '<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator

// if (!isset($person['address'])) {
//     $person['address'] = 'unknown'; This is the old way of doing things
// }

// This is the php 7.4 way of doing things

$person['address'] ??= 'unknown';

echo '<pre>';
var_dump($person);
echo '</pre>';

// Print the keys of an array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of an array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sort associative array by value
asort($person);
// ksort for keys
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$todos = [
    ['tittle' => 'Todo tittle 1', 'completed' => true],
    ['tittle' => 'Todo tittle 2', 'completed' => false]

];

echo '<pre>';
var_dump($todos);
echo '</pre>';


// Conditionals
// == and === are the same concept as with JS
$salary = 300000;

if ($age === 22) {
    echo '1' . '<br>';
}

if ($age > 20) {
    echo 'old' . '<br>';
} else {
    echo 'young' . '<br>';
}

if ($age > 20 && $salary === 300000) {
    echo 'You are rich' . '<br>';
} else {
    echo 'You are in debt' . '<br>';
}

// Ternary operator
echo $age < 30 ? 'Single' . '<br>' : 'Married' . '<br>';

// Short ternary
$myAge = $age ?: 18;
// If age exists takes age value, else takes 18 as value

// Null coalescing operator
$myName = isset($name) ? $name : 'Socrates';
$myName = $name ?? 'Socrates';

echo $myName . '<br>';

// Switch
$userRole = 'admin'; //admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'admin' . '<br>';
        break;

    case 'editor':
        echo 'editor' . '<br>';
        break;

    case 'user':
        echo 'user' . '<br>';
        break;
    default:
        echo 'invalid role' . '<br>';
        break;
}

// Loops
while ($a <= 10) {
    echo $a . '<br>';
    $a++;
}

// do while
// for
for ($i = 0; $i < $a; $i++) {
    echo 'the value of i is ' . $i . '<br>';
}

// for each
foreach ($fruits as $index => $fruit) {
    echo $index . ' ' . $fruit . '<br>';
}

// for each into an associative array
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . ' ' . implode(',', $value) . '<br>';
    } else {
        echo $key . ' ' . $value . '<br>';
    }
}

// Functions
function hello()
{
    echo "Hello, I am Socrates" . '<br>';
}

hello();

function helloThere($pName)
{
    return "Hello, my name is $pName";
}

echo helloThere('Socrates') . '<br>';

function sum(...$nums)
{
    $sum = 0;
    foreach ($nums as $n) {
        $sum += $n;
    }

    return $sum;
}

echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9) . '<br>';

// Arrow functions

function sum2(...$nums2)
{
    return array_reduce($nums2, fn ($carry, $nmbr) => $carry + $nmbr);
}

echo sum2(1, 3, 5, 7, 9) . '<br>';


// Dates
// print the current date
echo date('Y-m-d H:i:s') . '<br>';

// print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// Print with different format, check the official documentation
echo date('F j Y, H:i:s') . '<br>';

// Print current timestamp
echo time() . '<br>';

// Parse date
$parsedDate = date_parse('2021-05-02 09:00:00');
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format
$dateString = 'May 10 2021 12:45:55';

$parsedDate2 = date_parse_from_format('F j Y H:i:s', $dateString);

echo '<pre>';
var_dump($parsedDate2);
echo '</pre>';
