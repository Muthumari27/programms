<?php
echo "PHP Developer";
echo "\n\n\n";
$n = print "Java Developer";

var_dump($n);

$var = "Hello";
$$var = "World";
echo $var.${$var};

echo $Hello;


echo "<br/><br/>";

//Numeric Array
$computer = array("Dell", "Lenavo", "HP");
//Associative Array
$color = array("Sithi"=>"Red", "Amit"=>"Blue", "Mahek"=>"Green");
//Multidimensional Array
$courses = array ( array("PHP",50), array("JQuery",15), array("AngularJS",20) );

echo "<pre>";
print_r($computer);
echo "<pre>";
print_r($color);
echo "<pre>";
print_r($courses);

if (!include("test.php")) echo "Error in file inclusion";
//if (!require(‘test.php’)) echo “Error in file inclusion”;

echo strip_tags("<b>PHP</b> is a popular <em>scripting</em> language","<em>");
?>
