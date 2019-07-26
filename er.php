<?php 	
echo get();
function get(){
	$num = 100;
	$er = decbin($num);
	echo substr_count($er,'1');
}

?>