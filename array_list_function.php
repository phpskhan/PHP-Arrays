<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array List Function</title>
</head>
<body>

<h1>Array List Function</h1>
<br>

</body>
</html>

<?php

$emp = [

	[1, "Sabih Khan", "Developer", 250000],
	[2, "Azlaan Sabih", "Student", 50000],
	[3, "Abaan Sabih", "Student", 15000],
	[4, "Ali Sabih", "Student", 10000]
];


echo "<h2> List Function Index Array</h2>";

foreach ($emp as list($id,$name, $type, $salary)) {
	echo $id . ' ' . $name . ' ' . $type . ' ' . $salary;
	echo "<br>";
};
echo "<br>";



echo "<h3> Print in Table </h3>";

echo "<table border='2px' cellpadding='5px' cellspacing='0'>";

	echo "<thead>";
		echo "<tr>";
			echo "<th> ID </th>";
			echo "<th> Name </th>";
			echo "<th> Type </th>";
			echo "<th> Salary  </th>";
		echo "</tr>";
	echo "</thead>";

	echo "<tbody>";
	foreach ($emp as list($id,$name, $type, $salary)) {
		echo "<tr>";
			echo "<td> $id </td>";
			echo "<td> $name </td>";
			echo "<td> $type </td>";
			echo "<td> $salary </td>";
		echo "</tr>";
	echo "</tbody>";
	}

echo "</table>";


$data = [

	[
		"ID"	=>	1,
		"Name"	=>	"Sabih Khan",
		"Type"	=>	"Developer",
		"Salary"=>	250000
	],


	[
		"ID"	=>	2,
		"Name"	=>	"Azlaan Sabih",
		"Type"	=>	"Developer",
		"Salary"=>	50000
	],

	[
		"ID"	=>	3,
		"Name"	=>	"Abaan Sabih",
		"Type"	=>	"Student",
		"Salary"=>	15000
	],

	[
		"ID"	=>	4,
		"Name"	=>	"Ali Khan",
		"Type"	=>	"Student",
		"Salary"=>	10000
	]

];





echo "<br>";
echo "<br>";
echo "<h2> List Function Associative Array</h2>";

foreach ($data as list(
	"ID" 	=>	$id,
	"Name"	=>	$name,
	"Type"	=>	$type,
	"Salary"=>	$salary

	)) {
	echo $id . ' ' . $name . ' ' . $type . ' ' . $salary;
	echo "<br>";
};
echo "<br>";



echo "<h3> Print in Table </h3>";

echo "<table border='2px' cellpadding='5px' cellspacing='0'>";

	echo "<thead>";
		echo "<tr>";
			echo "<th> ID </th>";
			echo "<th> Name </th>";
			echo "<th> Type </th>";
			echo "<th> Salary  </th>";
		echo "</tr>";
	echo "</thead>";

	echo "<tbody>";

	foreach ($data as list(
		"ID" 	=>	$id,
		"Name"	=>	$name,
		"Type"	=>	$type,
		"Salary"=>	$salary
	)) {
		echo "<tr>";
			echo "<td> $id </td>";
			echo "<td> $name </td>";
			echo "<td> $type </td>";
			echo "<td> $salary </td>";
		echo "</tr>";
	echo "</tbody>";
	}

echo "</table>";



?>