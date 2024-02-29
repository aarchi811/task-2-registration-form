<?php
$a = array(
  array(
    '1'=>'abc',
	'2'=>'xyz',
  ),
  array(
    '1'=>'pqr',
	'2'=>'uvw',
  ),
  array(
    '1'=>'stu',
	'2'=>'mno',
  )
);

$myarray=array_column($a,'2');
print_r($myarray);
?>
