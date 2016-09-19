<?php

$myString = "Hello world";
$nbrVoyelle = 0;


$tabVoyelle = array("a", "e", "i", "o", "u", "y");


foreach($tabVoyelle as $value) {
    $nbrVoyelle += substr_count(strtolower($myString), $value);
}
echo($nbrVoyelle);



?>