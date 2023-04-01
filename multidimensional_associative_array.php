<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multidimensional Associative Array</title>
</head>
<body>

<h1>Multidimensional Associative Array</h1>
<br>

</body>
</html>

<?php

$marks = [

	"Sabih"	=>[
	"Physics"	=>	85,
	"Maths"		=>	78,
	"Chemistry"	=>	89
	],

	"Arees"	=>[
	"Physics"	=>	68,
	"Maths"		=>	73,
	"Chemistry"	=>	79
	],

	"Adeel"	=>[
	"Physics"	=>	62,
	"Maths"		=>	67,
	"Chemistry"	=>	92
	]
];

echo "<h2> Print All Records </h2>";

echo "<h3> Using Print_r </h3>";

echo "<pre>";
print_r($marks) . "<br>";
echo "</pre>";



echo "<h3> Foreach Loop </h3>";

echo "<ul>";
foreach ($marks as $key => $v1) {
	echo $key . "<br>";
	foreach ($v1 as $subject => $v2) {
		echo " $subject - $v2 <br>";
	}
	echo "<br>";
}


echo "<h2> Print in Table </h2>";

echo "<table border='2px' cellpadding='5px' cellspacing='0'>";

	echo "<thead>";
		echo "<tr>";
			echo "<th> Name </th>";
			echo "<th> Physics </th>";
			echo "<th> Maths  </th>";
			echo "<th> Chemistry </th>";
		echo "</tr>";
	echo "</thead>";

	echo "<tbody>";

		echo "<tr>";
foreach ($marks as $key => $v1) {
			echo "<td> $key </td>";
			foreach ($v1 as $subject => $v2) {
			echo "<td> $v2 </td>";
	}
		echo "</tr>";
	echo "</tbody>";
}

echo "</table>";


?>