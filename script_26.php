<html>
<body>
<form>
Enter starting value:<input type="text" name="val1"><br>
Enter ending value:<input type="text" name="val2"><br>
<input type="submit">

<?php
$a=$_REQUEST['val1'];
$b=$_REQUEST['val2'];
echo "<br><br>";
echo rand($a,$b);


?>