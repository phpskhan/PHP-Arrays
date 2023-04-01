<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Array</title>
</head>
<body>

<h1>Index Array</h1>
<br>

</body>
</html>


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