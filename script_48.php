<?php
function myfunction($num,$num1)
{
  return($num."-".$num1);
}
$myarray=array(1,2,3,4);
print_r(array_reduce($myarray,"myfunction"));
?>