<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!doctype html>
<html>
<head>

	<title>Matthew Cole P2 - XKCD Password Generator</title>
	<meta charset='utf-8'>

  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

  <style>

    img
    {
      display: block;
      margin: auto;
      width: 50%;
    }

    .pwdisplay
    {
        text-align: center;
        color: #009900;
        background-color: #D2D2D2;
        display: inline-block;
    }

    .wrapper
    {
			text-align: center;
		}

  </style>

  <?php require "pwgenerator.php"; ?>

</head>
<body>

<div class="wrapper">

<h1>XKCD-Style Password Generator</h1>
  <br>


<form method="post" action="index.php">

  <label>How many words do you want in the password? (Max 9) <input maxlength=1 type="text" name="totalWords" id="totalWords"></label>
  <br>
  <label>Add a number <input type="checkbox" name="checkNum" id="checkNum"></label>
  <br>
  <label>Add a symbol <input type="checkbox" name="checkSym" id="checkSym"></label>
  <br>
  <input type="submit" value="Generate Password">

</form>

<pre>
    <?php print_r($_POST); ?>
</pre>

<h1>
<p class="pwdisplay">
 <?php echo $finalPW; ?>
</p>
</h1>

<a href= "http://xkcd.com/936/">Link to the relevant comic!</a>

<img src= "password_strength.png">

</div>


</body>
