<?php
echo find();
function find(){
	$target =1;
	$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
	if (in_array($target,$array)) {
		# code...
		echo '存在';
	}else{
		echo '不存在';
	}
}
?>