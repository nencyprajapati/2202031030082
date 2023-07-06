<?php
$cars=array("Volvo","BMW","Toyota");
echo sizeof($cars)."<br>";

$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));

$a=array("red","green","blue");
array_pop($a);
print_r($a);

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?>                                    