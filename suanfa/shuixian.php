<?php  
//冒泡
// $arr = ['25','3','1','7','9','6'];
// function maopao($arr){
// 	for ($i=0; $i <count($arr) ; $i++) { 
// 		# code...
// 		$data = '';
// 		for ($j=$i; $j <count($arr)-1 ; $j++) { 
// 			# code...
// 			if($arr[$i]>$arr[$j+1]){
// 				$data = $arr[$i];
// 				$arr[$i]=$arr[$j+1];
// 				$arr[$j+1]=$data;
// 			}
// 		}
// 	}
// 	return $arr;
// }
// echo "<pre>";
// var_dump(maopao($arr));
//快排
// $result = quickSort([23,3,1,7,9,6,56,2,54]);
// function quickSort($arr){
// 	if(count($arr)<=1){
// 		return $arr;
// 	}
// 	$base = $arr[0];
// 	$min = [];
// 	$max = [];
// 	for ($i=1; $i <count($arr) ; $i++) { 
// 		# code...
// 		if($arr[$i]<=$base){
// 			$min[] = $arr[$i];
// 		}else{
// 			$max[] =$arr[$i];
// 		}
// 	}
// 	$left = quickSort($min);
// 	$right = quickSort($max);

// 	return array_merge($left,[$base],$right);
// }
// echo "<pre>";
// var_dump($result);

function yanghui($n){
	$arr = [];
	for ($i=1; $i <$n ; $i++) { 
		# code...
		for ($j=1; $j <=$i ; $j++) { 
			# code...
			if ($j==1 || $j==$i) {
				# code...
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

?>