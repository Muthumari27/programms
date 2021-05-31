<?php

/*$text = 'Mike ';
$text[7] = 'Mu';
$text[10] = 'Sam';

echo $text[0];

echo '<br/>';

echo strlen($text);*/


/*$x = NULL;
print_r($x);
if('oxFF'==255){
	$x=(int)'oxFF';
}
echo 'oxFF';*/

/*class drongonBall{
	private $ballCount;
	public function __construct(){
		$this->ballCount=0;
	}
	public function iFoundaBall(){
		$this->ballCount++;
		if($this->ballCount===7){
			echo "Muthumari D";
			$this->ballCount=0;
		}
	}
}

$obj = new drongonBall();
for($i=0; $i<=8; $i++){
 echo $obj->iFoundaBall();
}*/
/*$x=5;
echo "<br/>";
echo $x+++$x++;
echo "<br/>";
echo $x;
echo "<br/>";
echo $x---$x--;
echo "<br/>";
echo $x;*/


/*class SomeClass{
	protected $_someMember;
	public function __construct(){
		$this->_someMember=1;
	}
	public static function getSomethingStatic(){
		return $this->_someMember * 5;
	}
}

$obj1 = new SomeClass();
echo $obj1->getSomethingStatic();*/

/*
class SomeClass{
	static $_someMember;
	public function __construct(){
		self :: $_someMember=1;
	}
	public static function getSomethingStatic(){
		return self :: $_someMember * 5;
	}
}

*/


/*trait Reader{
	public function add($var1, $var2){
		return $var1 + $var2;
	}
}
trait Writer{
	public function multiplication($var1, $var2){
		return $var1 * $var2;
	}
}

class Book{
	use Reader;
	use Writer;
	public function calculate($var1, $var2){
		echo "Addition &nbsp;&nbsp;".$this->add($var1, $var2);
		echo "<br/><br/><br/>Multiplication &nbsp;&nbsp;". $this->multiplication($var1,$var2);
	}
}

$obj2 =  new Book();
$obj2->calculate(5,3);*/

$input = '1,2,3,4,5,6,7';
echo array_sum(explode(',',$input));

