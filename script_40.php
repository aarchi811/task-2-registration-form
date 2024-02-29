<?php
$myarray=array(0=>1,1=>2,2=>3,3=>4);
$myarray1=array(0=>5,1=>6);
array_splice($myarray,0,2,$myarray1);
print_r($myarray);
?>