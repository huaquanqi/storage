<?php
$x=7;
$y=3;
function CountSteps($x,$y){
	for ($i=0; $i <$x ; $i++) { 
		# code...
		for ($j=0; $j <$y ; $j++) { 
			# code...
			return count($x,$y);
		}
	}
}
var_dump(CountSteps($x,$y));
?>