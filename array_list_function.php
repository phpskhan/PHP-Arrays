<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Array List Function - PHP</title>
  </head>
  <body>
    <div class="container" >

    	<br>
    	<h1>Array List Function - PHP</h1>
    	<br>




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

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>