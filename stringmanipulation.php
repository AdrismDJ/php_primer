<?php
$title = "PHP String Manipulation";
include 'includes/header.php';
?>

<h1><?php echo $title ?></h1>

<?php
// Concatenation of strings
$phrase1 = "student who came late";
$phrase2 = "in class, stand with Rock";
echo $phrase1 . ", named Tiffany, " . $phrase2;
echo '<br/>';
echo '<hr/>';

// String Transformation
$name = "adrian delgado";
echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br/>';
echo 'Upper case: ' . strtoupper($name) . '<br/>';
echo 'Lower case: ' . strtolower("THIS WAS ALL UPPER CASE") . '<br/>';
echo '<hr/>';
echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>';
echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
echo 'Get a Substring: ' . strpos($name, 'n') . '<br/>';

// Returns NULL
// echo 'Get position of string: ' . strpos($combine,'z').'<br/>';
echo 'Find Character "i": ' . strchr($name, 'i') . '<br/>';
echo 'Find Character "n": ' . strchr($name, 'n') . '<br/>';
echo 'Find Character "e": ' . strchr($name, 'e') . '<br/>';
echo 'Find Character "g": ' . strchr($name, 'g') . '<br/>';

echo 'Find Lenght of String: ' . strlen($name) . '<br/>';

echo 'Without Trim: ' . "A" . " B C D " . "E" . "<br/>";
echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . "<br/>";
echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . "<br/>";
echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . "<br/>";

echo ' Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';

?>

<?php require 'includes/footer.php' ?>