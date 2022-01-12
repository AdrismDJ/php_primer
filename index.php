<!-- It needs it, but still works without it -->
<?php
$title = "Index";
include 'includes/header.php';
?>


<!-- Basic HTML-->
<h1>Hello HTML - PHP Primer</h1>
<br>
<?php
echo 'Hello PHP!';
echo '<br>';
echo 'Second Line';
echo '<br>';

// declare variable
$name = 'Adrian Delgado';
$age = '30';
// echo variable. 
echo $name;
echo '<h1>My Name Is: ' . $name . ' and my age is: ' . $age . '.</h1>';

// Double quotation does not need periods to work for interpolation. . 
echo "<h1> My Name is: $name </h1>";
?>

<button type="button" class="btn btn-dark">CLICK ME!</button>
<button type="button" class="btn btn-primary">CLICK ME!</button>
<button type="button" class="btn btn-success">CLICK ME!</button>
<a href="https://www.heroku.com" class="btn btn-danger">Heroku.com</a>
<!-- It demands it-->
<?php require 'includes/footer.php' ?>