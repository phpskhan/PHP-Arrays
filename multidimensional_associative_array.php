<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Multidimensional Associative - PHP</title>
  </head>
  <body>
    <div class="container" >

    	<br>
    	<h1>Multidimensional Associative - PHP</h1>
    	<br>


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

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>