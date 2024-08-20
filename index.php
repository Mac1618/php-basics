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


// Constant: value that doesn't change. Used for environment setup || .env.local

// usage 1:
// const name ||  value
define('DB_NAME', 'php_db');
echo constant('DB_NAME');           // to console.log the constant 'DB_NAME'

// usage 2:
const MIN_AGE = 35;
echo constant('MIN_AGE');


// OPERATORS
echo 2 + 2;     // plus
echo 2 - 2;     // minus
echo 2 * 2;     // times
echo 2 / 2;     // divide
echo 7 % 2;     // modular || remainder
echo 4 ** 3;    // raise to the power of <number>


// ASSIGNMENT OPERATORS
$num = 4;     // assigning 4 to '$num'
$num += 4;    // adding 4 and re-assignning back to 4     ||     4 + 4
$num -= 2;    // subtracting 2 and re-assignning back to 4    ||    2 - 4

$num++;       // add 1    ||    4 + 1
$num++;       // add 1    ||    4 + 1

$num--;       // minus 1    ||    4 - 1
$num--;       // minus 1    ||    4 - 1

echo $num;


// ARRAYS
$arr2  = array(2, 'hi', false, [5, 3]);     // using array function
$arr1 = [2, 'hi', [5, 3]];         // assigning array

// calling arrays
var_dump($arr1);        // console.log the whole array
var_dump($arr1[0]);     // show single index    ||   2
var_dump($arr1[2]);     // show the 2nd array inside '$arr1'    ||    [5, 3]
var_dump($arr1[2][0]);  // show sing index from 2nd array     ||    5


// ASSOCIATED ARRAYS
$arr3 = [
  'name' => 'Jon',
  'age' => 35,
  'pet' => 'dog'
];

$arr4 = array(
  'name' => 'Jon',
  'age' => 35,
  'pet' => 'dog'
);

// calling associated arrays
var_dump($arr3);          // console.log the whole array
var_dump($arr3['name']);  // show only the 'name'


// MULTI-DIMENTINAL ARRAYS
// 1st example
$arr5 = [
  [
    'name' => 'Jon',
    'age' => 35,
    'pet' => 'dog'
  ],
  [
    'name' => 'Mike',
    'age' => 24,
    'pet' => 'cat'
  ]
];

// calling multi-dimentional arrays
var_dump($arr5);              // console.log the whole array
var_dump($arr5[1]);           // show 2nd array inside $arr5
var_dump($arr5[1]['name']);   // show 'name' inside of 2nd array from $arr5   ||    'name' => 'Mike'

// 2nd example
$arr6 = [
  'person1' => [
    'name' => 'Jon',
    'age' => 35,
    'pet' => 'dog'
  ],
  'person2' => [
    'name' => 'Mike',
    'age' => 24,
    'pet' => 'cat'
  ]
];

var_dump($arr6['person1']['name']);   // value: 'name' => 'Mike


// ARRAY FUNCTIONS
$arr7 = [
  'name' => 'Jon',
  'age' => 35,
  'pet' => 'dog'
];

// get the lenght of array
var_dump(count($arr7));       // int(8)   

// check if '35' inside '$arr7' exist
var_dump(in_array(35, $arr7));     // Returning a boolean

array_pop($arr7);       // deletes the LAST INDEX
array_shift($arr7);     // deletes the FIRST INDEX

// Adding value inside an array
// method 1:
$arr7[] = 'red';                                            // this will automatically add an key for 'red'    ||    [0] => 'red'
$arr7['color'] = 'blue';                                    // assigning a key for 'blue'    ||    'color' => 'blue'

// method 2:
array_push($arr7, 'end 1', 'end 2', 'end 3');               // add at the END of array and can have multiple values
array_unshift($arr7, 'start 1', 'start 2', 'start 3');      // add at the BEGINNING of array

// combines 2 arrays
$keys = ['name', 'age', 'pet'];
$vals = ['Alex', 44, 'snake'];
$combine_arr = array_combine($keys, $vals);     // note: these two values should have same lenght

// MAPS and FILTER arrays
$nums = [1, 2, 4, 5, 7, 8];
var_dump(array_map(fn($el) => $el + 1, $nums));        // maps '$nums' and add +1 for each items
var_dump(array_filter($nums, fn($el) => $el >= 5));       // filter each '$nums' items if greather than or equalts to 5 


// CONDITIONAL STATEMENTS
$age = 61;

// IF ELSE with LOGICAL OPERATOR example
// using 'and' operator or '&&'
if (1 == 2 && $age <= 60) {
  echo 'if with and is true';
}

// using 'or' operator or '||'
elseif ($age > 21 || $age < 60) {
  echo 'else if with or is true';
}

// not null
elseif (!$age) {
  echo 'else if with not null is true';
}

// default
else {
  echo 'else is true';
}


// SWITCH CASE
switch ($age) {
  case $age < 11:
    echo "You're a child";
    break;    // break the code or don't continue

  case $age >= 12 && $age <= 18:
    echo "You're a teenager";
    break;

  case $age >= 19:
    echo "You're an adult";
    break;

  default:
    echo "Unidentified age";
    break;
}


// TERNARY OPERATOR
echo $age < 21 ? "You can drink" : "Sorry no drinks for you";


// NULL COALESCING OPERATOR
$val = null;
echo $val;                           // this will not show anything
echo $val ?? 'no value or null';     // if null shows 'no value or null'


// WHILE LOOP example
$a = 0;
while ($a <= 3) {
  echo "while loop: $a<br>";
  $a++;
}


// DO WHILE LOOP example
$b = 1;
do {
  echo "do while loop: $b<br>";
  $b++;
} while ($b <= 3);


// FOR LOOP example
for ($i = 1; $i <= 3; $i++) {
  echo "for loop: $i<br>";
}


// FOR EACH LOOP example
$arrVal = [2, 4, 'six', 'eight'];
foreach ($arrVal as $element) {
  echo "for each loop: $element<br>";
}

// with associate array
$arrVal2 = ['two', 'four', 6, 8];
foreach ($arrVal2 as $element => $value) {
  echo "for each loop2: $element => $value<br>";
}


// BREAK and CONTINUE statement
for ($i = 0; $i < 5; $i++) {

  // skip this number
  if ($i === 2) {
    continue;
  }

  // break the code if '$i' is equals to 4
  if ($i === 4) {
    break;
  }

  echo "break and continue: $i<br>";
}



// FUNCTIONS and SCOPES: Global, Local, Static
$num = 10;            // Global variable

function greet()
{
  $fname = 'Jonny';   // Local varibale
  echo "Greet function: Hello $fname<br>";
}
echo greet();   // calling a function


// Static: saves the value of the scope
function add()
{
  static $a = 0;      // Static variable
  $a++;
  return "Add function: $a<br>";
}
echo add();   // 1: calling a function
echo add();   // 2: calling a function
echo add();   // 3: calling a function


// FUNCTION with DEFAULT PARAMETERS
function pets($petName = 'casper') // '$petName' is parameter and 'casper' is default value
{
  return "Your pet name is $petName<br>";
}

echo pets('Siopao');
echo pets();


// For specific amount of parameter
function addition($x = 0, $y = 0)
{
  return $x - $y;
}
echo addition(2, 1);

// Function REST Operator || SPREAD Operator 
// No specific amount of parameter
function advAddition(...$x) // if you have morethean 1 parameter spread operator should be the last one '($y, ...$x)'
{
  // normal function
  // return array_reduce($x, function ($a, $b) {
  //   return $a + $b;
  // });

  // array function
  return array_reduce($x, fn($a, $b) => $a + $b);
}
var_dump(advAddition(2, 424, 65, 34, 5, 234, 46, 235));
