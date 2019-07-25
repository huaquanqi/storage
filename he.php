<?php  

echo "<pre>";
echo index();
function index(){
	$A=[1,3,6,9];
	$B=[2,4,5,8,20];
	$arr = array_merge($A,$B);
	$a = count($arr);
	for ($j=0; $i <$a-$j ; $j++) { 
		# code...
		for ($i=0; $i <$a-1 ; $i++) { 
			# code...
			if($a[$i]>$a[$i-1]){
				$b = $a[$i];
				$a[$i]= $a[$i+1];
				$b= $a[$i+1];
			}
		}
	}
	print_r($a);

}
?>