<?php 

$myString = "Lorem ipsum lorem lpsum lorem lorem ipsum";
$nbrSpace = 0;


$myTab = array(' ');


foreach ($myTab as $value) {
	$nbrSpace += substr_count(strtolower($myString), $value);
}
echo($nbrSpace);


 ?>
