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
      width: 60%;
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

<h1>XKCD-Style Password Generator

<form>


</form>

<p class="pwdisplay">
 test - display - for - password
</p>

<a href= "http://xkcd.com/936/"><img src= "password_strength.png"></a>

</div>


</body>
