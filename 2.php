<?php
/*Print order*/
for($i=1;$i<=4;$i++)
{
	$i1=$i+4;
	$i2=$i1+4; //$i2 = $i+8;
	echo $i." ".$i1." ".$i2;
	echo "<br />";
}
echo "<br/><hr/><br/>";

/*Factorial*/
$n = 5;
$fact = 1;
for($i=1; $i<=$n; $i++){
	$fact = $fact * $i;
}
echo $fact;
echo "<br/><hr/><br/>";

/*Fibonaaci Series*/
$first =0;
$second =1;
echo $first."&nbsp";
echo $second."&nbsp";
for($i=1; $i<=10; $i++){
	$third = $first + $second;
	echo $third."&nbsp";
	$first = $second;
	$second = $third;
}
echo "<br/><hr/><br/>";

/*Armstrong Number*/
$number = 153;
$sum = 0;
$temp = $number;
while($temp!=0){
	$remainder = $temp%10;
	//print($remainder);
	//echo "<br/>";
	//echo "temp";
	$sum = $sum + ($remainder * $remainder * $remainder);
	$temp = $temp/10;
	//print($sum);
	//echo "<br/>";
}
if($number == $sum){
	echo "Given Number is Armstrong";
}else{
	echo "Given Number is Not Armstrong";
}
echo "<br/><hr/><br/>";

/*Print below format*/
for($i=1; $i<=$n; $i++){
	//echo $i;
	//echo "<br/>";
	for($j=1; $j<=$i; $j++){
		echo $j;
	}
	echo "<br/>";
}
echo "<br/><hr/><br/>";

/*Floyds Triangle*/
$a = 1;
//echo $i;
//echo $a;
for($i = 1; $i<=5; $i++)
{
	//echo $i."--->".$a;
	//echo $ji;
	for($ji = 1; $ji<=$i; $ji++)
	{
		//echo $ji;
		echo $a;
		$a++;
	}
	echo '<br/>';
}


/* Reverse String */
$string = "Hello World";
$array =  explode(" ", $string);
$array = array_reverse($array);
echo $newstring = implode(" ", $array);

echo "2nd programms";

?>
