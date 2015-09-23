<?php

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

if($_POST["totalWords"] >= 2){  //check to see if a valid number of words was entered
    $numWords = $_POST["totalWords"];
}
else {
  $numWords = (int)4;
}

$randPW = array_rand($pwWords, $numWords); //randomly pick the number of words prompted by the user
$randSym = array_rand($symArray, 1); //randomly pick a symbol to be used if the user wants one

foreach ($randPW as $key => $value) {
  $finalPW .= $pwWords[$value] . " "; //add each randomized value in
};

if(isset($_POST["checkNum"])){ //check if the user wanted to add a number to the password

  $tempNum = rand(0,9);
  $finalPW .= $tempNum . " "; //append the number to the password and leave a space
}

if(isset($_POST["checkSym"])){ //check if user wanted to add a symbol to the password
  $finalPW .= $symArray[rand(0,7)]; //append a symbol
}


 ?>
