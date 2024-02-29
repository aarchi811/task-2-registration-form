<?php
function myfunction($num)
{
  return($num & 1);
}
$myarray=array(1,2,3,2);
print_r(array_filter($myarray,"myfunction"));
?>
