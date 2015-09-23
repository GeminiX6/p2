<?php

error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)

$numWords = (int)4;    //default number of words to create a password with

$pwWords = Array(
    0 => "baby",
    1 => "forest",
    2 => "color",
    3 => "iron",
    4 => "length",
    5 => "straight",
    6 => "square",
    7 => "sleep",
    8 => "edge",
    9 => "women",
    10 => "trouble",
    11 => "yellow",
    12 => "beautiful",
    13 => "fast",
    14 => "mountain",
    15 => "problem",
    16 => "question",
    17 => "weather",
    18 => "surface",
    19 => "pattern",
    20 => "bottom",
    21 => "center",
    22 => "across",
    23 => "door",
    24 => "today",
    25 => "light",
    26 => "ground",
    27 => "slide",
    28 => "tree",
    29 => "number",
    30 => "people"
);

$symArray = Array(
    0 => "!",
    1 => "@",
    2 => "#",
    3 => "$",
    4 => "%",
    5 => "^",
    6 => "&",
    7 => "*",
);



$finalPW = ""; //final value to concatenate and output as a password, starts blank

if($_POST["totalWords"] > 0){
    $numWords = $_POST["totalWords"];
}
else {
  $numWords = (int)4;
}

$randPW = array_rand($pwWords, $numWords);

foreach ($randPW as $key => $value) {
  $finalPW .= $pwWords[$value] . " "; //add each randomized value in
};

if(isset($_POST["checkNum"])){

  $tempNum = rand(0,9);
  $finalPW .= $tempNum;
}


 ?>
