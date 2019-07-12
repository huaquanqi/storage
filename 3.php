<?php  
calFn(1,100);
function calFn($n,$m){
	$shu = range($n,$m);
	echo substr_count(join($shu), '1');
}
?>