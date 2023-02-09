<?php

//2. Write a program to find the prime numbers between 1 to 100 *


function checkPrime($num){
	if($num == 1)
		return 0;
	for($i=2; $i<=$num/2; $i++){
		if($num%$i == 0){
			return 0;
		}
	}
	return 1;
}

for($num=1; $num<=100; $num++){
	$checkfunc = checkPrime($num);
	if($checkfunc == 1){
		echo $num;
		echo "<br/>";
	}
}