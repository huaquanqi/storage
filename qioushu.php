<?php  
$arr = [5,2,7,6,3,41,22];
function get($arr){
	$qi = [];
	$ou = [];
	for ($i=0; $i <count($arr) ; $i++) { 
		# code...
		if($arr[$i] % 2 ==0){
			$ou[] = $arr[$i];
		}else{
			$qi[] = $arr[$i];
		}
	}
	return array_merge($qi,$ou);
}
echo "<pre>";
var_dump(get($arr));
?>