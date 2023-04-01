<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Associative Array</title>
</head>
<body>

<h1>Associative Array</h1>
<br>

</body>
</html>

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