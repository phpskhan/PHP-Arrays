<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Index Functions - PHP</title>
  </head>
  <body>
    <div class="container" >

    	<br>
    	<h1>Index Functions - PHP</h1>
    	<br>



<?php

//Index Array

$colors = array('Yellow','Green','Brown','Blue','Pink','Black','Red','White' );


echo "<h2> Print Single Record </h2>";

echo $colors[0] . "<br>";



echo "<h2> Print All Records </h2>";

echo "<h3> For Loop </h3>";

echo "<ul>";
for($i = 0; $i<=7; $i++){
	echo "<li> $colors[$i] </li>";
}
echo "</ul>";




echo "<h3> Foreach Loop </h3>";

echo "<ul>";
foreach ($colors as $value) {
	echo "<li> $value </li>";
}
echo "</ul>";


// print_r($colors) . "<br>";

// echo "<pre>";
// print_r($colors) . "<br>";
// echo "</pre>";


// echo $colors[0] . "<br>";
// echo $colors[1] . "<br>";
// echo $colors[2] . "<br>";
// echo $colors[3] . "<br>";


?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


