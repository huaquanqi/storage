<?php  
$array = [2,4,3,6,3,2,5,5];
$arr = FindNumsAppearOnce($array);
var_dump($arr);
function FindNumsAppearOnce($array){
	$arr = array_count_values($array);
	asort($arr);
	$key = array_keys($arr);
	return [$key[0],$key[1]];
}
?>