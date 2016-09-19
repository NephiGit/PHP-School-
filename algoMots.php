<?php 

$myString = "web page editors now use Lorem Ipsum";
$nbrSpace = 0;


$myTab = array(' ');


foreach ($myTab as $value) {
	$nbrSpace += substr_count(strtolower($myString), $value);
}
echo($nbrSpace);


 ?>
