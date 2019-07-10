<?php  
function yanghui($n){
	$arr = [];
	for ($i=1; $i <$n ; $i++) { 
		# code...
		for ($j=1; $j <$i ; $j++) { 
			# code...
			if($j==1 || $j==$i){
				$arr[$i][$j]=1;
			}else{
				$arr[$i][$j] = $arr[$i-1][$j-1]+$arr[$i-1][$j];
			}
		}

	}
	return $arr;
}
echo "<pre>";
var_dump(yanghui(6));

$result = quickSort([23,3,1,7,9,6,56,2,54]);
function quickSort($arr){
	if(count($arr)<=1){
		return $arr;
	}
	$base = $arr[0];
	$min = [];
	$max = [];
	for ($i=1; $i <count($arr) ; $i++) { 
		# code...
		if($arr[$i]<=$base){
			$min[] = $arr[$i];
		}else{
			$max[] =$arr[$i];
		}
	}
	$left = quickSort($min);
	$right = quickSort($max);

	return array_merge($left,[$base],$right);
}
echo "<pre>";
var_dump($result);
?>