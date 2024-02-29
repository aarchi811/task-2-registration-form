<?php
$myarray=array(5,7,2,0,4,1);
sort($myarray);
$length=count($myarray);
for($i=0;$i<$length;$i++)
{
	echo $myarray[$i];
	echo "<br>";
}
?>