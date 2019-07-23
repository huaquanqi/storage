<?php
$str = "aabbccFFdd";
function FirstNotRepeatingChar($str){
	$arr = str_split($str);
	foreach ($arr as $k => $v) {
		# code...
		if(substr_count($str,$v)==1){
			return $k+1;
		}else{

			echo "-1";die;
		}
	}
}
print_r(FirstNotRepeatingChar($str));
?>