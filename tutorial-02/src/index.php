<?php

// Data types

// Scalar

// bool
true;
false;

if (true) {
  // This will always run
}

if (false) {
  // This will never be run
}

// integer

123;
-123;
0x1;
0b1;

// float

1.1;
-1.1;
1E-1;
-.1;

// string

$myVariable = true;

// echo '$myVariable';

// echo "{$myVariable}";

<<<EOT
EOT;

// Compound

// array

$mapArray = [
  'first' => 4,
  'second' => 5,
  'last' => 25
];

// echo $mapArray['first'];

$myArray = array(4,5,25);
// echo $myArray[2];

// object

$myObject = new stdClass;
$myObject->first = 100;

// echo $myObject->first;

// $myObject->myFunc();

Class MyClass {
  public function myFunc() {
    return 'myFuncValue';
  }
}

$myClass = new MyClass;

// echo $myClass->myFunc();

(object) null;

// Special

// null

$noValue = null;

var_dump(empty($noValue));
