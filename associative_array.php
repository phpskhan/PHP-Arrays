<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Associative Array - PHP</title>
  </head>
  <body>
    <div class="container" >

    	<br>
    	<h1>Associative Array - PHP</h1>
    	<br>




<?php

$person = array(
	"Name"		=>	"Sabih Khan",
	"Age"		=>	40,
	"Height"	=>	5.8,
	"City"		=>	"Karachi",
	"Phone"		=>	"+923318811416",
	"Developer" =>	true
	);


echo "<h2> Print Single Record </h2>";

echo $person["Name"];



echo "<h2> Print All Records </h2>";

echo "<h3> Using Print_r </h3>";

echo "<pre>";
print_r($person) . "<br>";
echo "</pre>";
echo "<br><br>";


echo "<h3> Using Var_dump </h3>";
var_dump($person) . "<br>";
echo "<br><br>";


echo "<h3> Foreach Loop </h3>";

echo "<ul>";
foreach ($person as $key => $value) {
	echo "<li> $key | $value </li>";
}
echo "</ul>";


?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


