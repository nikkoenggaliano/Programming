<?php
$temp = 0;
$base = 8;
$init = 10;
for($i=10; $i>0; $i--) {
	$temp += ($init * 2);
    	for($j=1; $j<$i; $j++) {
      		$temp += ($base * 2);
    } 
}
echo $temp;