<?php
/*first pro*/
$a = "hello";
echo $a;
echo "<br/><hr/><br/>";

/*second pro*/
$b = "world";
echo $a." ".$b;
echo "<br/><hr/><br/>";

/*third pro*/
function foo($c){
	$c = "sunlight";
 	echo "function value is :".$c;
}
//$a = "moonlight";
foo($a);
echo "<br/><hr/><br/>";

/*fourth pro*/
$n=5;
for($i=1; $i<=$n; $i++){
	
	for($j=1; $j<=$n; $j++){
		echo "j value is : ".$i;
		//echo "<br/>";
		echo "*";
	}
	//echo "i value is : ".$i;
	echo "<br/>";
}

echo "<br/><hr/><br/>";

/*fourth pro*/
$text = "I like programming";
print_r (explode(" ",$text));
$strarr = array('Pen','Pencil','Eraser');
echo implode(" ",$strarr);

echo "First program file";


?>
