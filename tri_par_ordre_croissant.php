<?php 

$a = 18;
$b = 5;
$c = 11;
$d = 0;

for ($i=0; $i <= 18; $i++) { 
	if ($a > $b) {
		$d = $a;
		$a = $b;
		$b = $d;
	}
	if ($b > $c) {
		$d = $b;
		$b = $c;
		$c = $d;
	}
	if ($c > $a) {
		$d = $c;
		$c = $a;
		$c = $d;
	}

}
echo($a." ".$b." ".$c);

 ?>
	<hr>
<?php 


$a = 18;
$b = 5;
$c = 11;
$d = 0;


for ($j=0; $j <= 18; $j++) { 
	for ($i=0; $i <= $j; $i++) { 
		$d = $a;
		$a = $b;
		$b = $c;
		$c = $d;
	}
}
echo($a." ".$b." ".$c);


 ?>
	<hr>
<?php 


$d = 0;

function ordreCroissant($a = 18, $b = 5, $c = 11)
{
	if ($a > $b) {
		$d = $a;
		$a = $b;
		$b = $c;
		$c = $d;
	}
}
echo($a." ".$b." ".$c);


 ?>
