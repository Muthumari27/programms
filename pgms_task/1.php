<?php 
//1. Write a program to sort the array below in ascending order A = { 9,15,5,4,7,2,1,3,10,13,11,6 } You can use any of the loops like for, for each, while Note :- Do not use any inbuilt methods like .sort or orderby etc *

$array = array(9,15,5,4,7,2,1,3,10,13,11,6);

//sort($A);

$arrlength = count($array);

for($i=0; $i<$arrlength; $i++){
	for($j=0; $j<$arrlength-1; $j++){
		if($array[$j]>$array[$j+1]){
			$temp = $array[$j+1];
			$array[$j+1] = $array[$j];
			$array[$j] = $temp;
		}
	}
}
echo '<pre>';
print_r($array);

?>