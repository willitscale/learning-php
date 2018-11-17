<?php

error_reporting(E_ALL);

// Variables & constants

// Variables

$myValue = 22;

$refVariable = 'myValue';

$myFirstVariable = $myVariable = 'a value';
$myInt = 1;
$myDouble = 4.4;

// echo ${$refVariable};

// echo $myVariable;

$myVariable = 'Another value';

// echo $myVariable;

// Constants

define('MY_CONSTANT', $myVariable);

$myVariable = 123;

// echo MY_CONSTANT;

define('MY_CONSTANT2', 'another value');

echo MY_CONSTANT;
