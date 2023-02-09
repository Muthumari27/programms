<?php

//3. Write a program to check if the input string in Palindrome or not Palindrome a string which is same when reversed e.g. NITIN *
$text = "NITIN";

function palindrome($string){
	if(strrev($string)==$string){
		return 1;
	}else{
		return 0;
	}
}

if(palindrome($text)){
	echo "Given String is Palindrome";
}else{
	echo "Not a Palindrome";
}