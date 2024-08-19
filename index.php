<?php
// Always use ';' for best practices.

// Consoles
echo "Hello", 325, false;                 // can have multiple output
print "Holla";                            // 1 output only.
print_r([1, 2, 3, 4, 'five', 'six']);     // used for printing arrays
var_dump('hi', 23, [2, 3]);               // output: data type, lenght, value. Mainly used for debugging


// Data types
var_dump('hi');          // string
var_dump(5);             // int
var_dump(5.1);           // float
var_dump(false);         // boolean
var_dump([2, 1, 3]);     // array


// Variables              // Rules
$name = 'Jon';            // can start with strin
$_name = 'Rex';           // can start with underscore
$Name = 'John';           // can start with big letter
//                           can only use letters, numbers and underscore.


// Concatination
$fname = "klaus likes cats";
$age = 32;

echo "$fname is $age";         // "": Only works with double quotation
echo "{$fname}'s are $age";    // {}: Adding a string with the variable

var_dump(strlen($fname));           // returns the length as an Int

var_dump(strpos($fname, 'a'));      // returns the index of the FIRST string that shows 'a'
var_dump(strrpos($fname, 'a'));     // returns the index of the LAST string that shows 'a'
var_dump(strrpos($fname, 'kl'));    // returns the index of the LAST string that shows 'kl' 

var_dump(strtolower($fname));       // converts the string to LOWERCASE
var_dump(strtoupper($fname));       // converts the string to UPPERCASE
var_dump(ucwords($fname));          // makes the FIRST LETTER IN A WORD CAPITALIZED

var_dump(str_starts_with($fname, 'jon'));       // returns a boolean that check if the FIRST LETTER is 'jon'
var_dump(str_ends_with($fname, 'cats'));        // returns a boolean that check if the LAST LETTER is 'cats'

// convert HTML to string
$str = '<h1> Hello </h1>';
echo $str;                      // return an html element in the browser
echo htmlspecialchars($str);    // converts html elemnt into a string and helps to prevent hackers to get access


// good for notification from api
$raw_str = "Hello %s, welcome %s";
printf($raw_str, 'Jonny', 'back'); // changes '%s' into 'Johnny' or 'back' depends on order
