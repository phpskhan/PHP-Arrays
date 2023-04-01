<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Array Functions - PHP</title>
  </head>
  <body>
    <div class="container" >

    	<br>
    	<h1>Array Functions - PHP</h1>
    	<br>




<?php

echo "<br>";
echo "<h2 class='text-primary'>Count Function - PHP Array</h2>";
echo "<p>The count() function returns the number of elements in an array.</p>";
echo "<br>";
?>

<h3>For Example : </h3>
<br>

<h4>$fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Guava');</h4>
<br>

<h5 class='text-primary'>count($fruits);</h5>
<br>

<?php


$fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Guava');


echo count($fruits);
echo "<br>";


?>


<?php

echo "<br>";
echo "<h2 class='text-primary'>Sizeof  Function - PHP Array</h2>";
echo "<p>The sizeof() function returns the number of elements in an array.</p>";
echo "<p>The sizeof() function is an alias of the count() function.</p>";
echo "<br>";
?>

<h3>For Example : </h3>
<br>

<h4>$fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Guava');</h4>
<br>

<h5 class='text-primary'>sizeof($fruits);</h5>
<br>

<?php


$fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Guava');


echo count($fruits);
echo "<br>";


?>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


