<?php
function myfunction($num)
{
  return($num*$num);
}
$myarray=array(1,2,3,4);
print_r(array_map("myfunction",$myarray));
?>