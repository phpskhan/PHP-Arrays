<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multidimensional Index Array</title>
</head>
<body>

<h1>Multidimensional Index Array</h1>
<br>

</body>
</html>

<?php

$employees = [

	[1, "Sabih Khan", "Developer", 250000],
	[2, "Azlaan Sabih", "Student", 50000],
	[3, "Abaan Sabih", "Student", 15000],
	[4, "Ali Sabih", "Student", 10000]
];

	// [
	// "ID"		=>	1,
	// "Name"		=>	"Sabih Khan",
	// "Age"		=>	40,
	// "Height"	=>	5.8,
	// "City"		=>	"Karachi",
	// "Phone"		=>	"+923318811416",
	// "Developer" =>	true
	// ],

	// [
	// "ID"		=>	2,
	// "Name"		=>	"Azlaan Sabih",
	// "Age"		=>	18,
	// "Height"	=>	6.1,
	// "City"		=>	"Karachi",
	// "Phone"		=>	"+923101234567",
	// "Developer" =>	false
	// ],

	// [
	// "ID"		=>	3,
	// "Name"		=>	"Abaan Sabih",
	// "Age"		=>	11,
	// "Height"	=>	4.2,
	// "City"		=>	"Karachi",
	// "Phone"		=>	"+921234567890",
	// "Developer" =>	false
	// ]

	// ];


echo "<h2> Print Single Record </h2>";

echo $employees[1][1];
echo "<br><br>";



echo "<h2> Print All Records </h2>";

echo "<h3> Using Print_r </h3>";

echo "<pre>";
print_r($employees) . "<br>";
echo "</pre>";

echo "<h3> For Loop </h3>";

echo "<ul>";
for($row = 0; $row< 4; $row++){
	for($col = 0; $col< 4; $col++){
		echo $employees[$row][$col] . " ";
	}
	echo "<br>";
}
echo "</ul>";


echo "<h3> Foreach Loop </h3>";

echo "<ul>";
foreach ($employees as $v1) {
	foreach ($v1 as $v2) {
		echo " $v2 ";
	}
	echo "<br>";
}
echo "</ul>";



echo "<br>";
echo "<h2> Print in Table </h2>";

echo "<table border='2px' cellpadding='5px' cellspacing='0'>";

	echo "<thead>";
		echo "<tr>";
			echo "<th> ID </th>";
			echo "<th> Name </th>";
			echo "<th> Type </th>";
			echo "<th> Salary </th>";
		echo "</tr>";
	echo "</thead>";

	echo "<tbody>";

foreach ($employees as $v1) {
		echo "<tr>";
	foreach ($v1 as $v2) {
			echo "<td> $v2 </td>";
	}
		echo "</tr>";
	echo "</tbody>";
}

echo "</table>";
?>