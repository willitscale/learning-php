<?php

// If statements

$today = '2018-12-25';
$dateOfBirth = '2018-12-13';
$christmas = '2018-12-25';

if($today == $dateOfBirth) {
    echo 'Happy Birthday';
} elseif($today == $christmas) {
    echo 'Happy Christmas';
} else {
    echo 'Another day';
    echo 'A second line';
}

// Switch statements

switch($today) {
    case $dateOfBirth:
        echo 'Happy Birthday';
    break;
    case $christmas:
        echo 'Happy Christmas';
    break;
    default:
        echo 'Another day';
    break;
}

