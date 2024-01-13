<html>
<head>
	   <style>label,select{border: 2px solid red}
	   </style>
       <title>Registration</title>
</head>
<body>
		
		<center>
		<form action="reg.php" method="get">
		<table bgcolor="#ffd7b5">
		<tr>
		<th colspan="2">
		<h1>Registration Form</h1>
		</th>
		</tr>
		<tr>
		<td><b>Username:</b></td>
		<td><input type="text" style="border-color:red" name="unm" required></td>
		</tr>
		
		<tr>
		<td><b>Password:</b></td>
		<td><input type="password" style="border-color:red" name="pwd" required></td>
		</tr>
		
		<tr>
		<td><b>Name:</b></td>
		<td><input type="text" style="border-color:red" name="nm" required></td>
		</tr>
		
		<tr>
		<td><b>Address:</b></td>
		<td><input type="text" style="border-color:red" name="add" required></td>
		</tr>
		
		<tr>
		<td><b>Country:</b></td>
		<td>
		<select name="country">
		<option value="disable" style="border-color:red">--(please select country)--</option>
		<option value="india">India</option>
		<option value="japan">Japan</option>
		<option value="russia">Russia</option>
		<option value="america">America</option>
		</select>
		</td>
		</tr>
		
		<tr>
		<td><b>Zip code:</b></td>
		<td><input type="text" style="border-color:red" name="zip" required></td>
		</tr>
		
		<tr>
		<td><b>E-mail:</b></td>
		<td><input type="email" style="border-color:red" name="email" required></td>
		</tr>
		
		<tr>
		<td><b>Sex:</b></td>
		<td>
		<input type="radio" name="sx" id="sx">
		<label value="male" style="border-color:red">Male</label>
		<input type="radio" name="sx" id="sx">
		<label value="female" style="border-color:red">Female</label>
		</td>
		</tr>
		
		<tr>
		<td><b>Language:</b></td>
		<td>
		<input type="checkbox" name="lg" id="sx">
		<label value="english" style="border-color:red">English</label>
		<input type="checkbox" name="lg" id="sx">
		<label value="nonenglish" style="border-color:red">Non-english</label>
		</td>
		</tr>
		
		<tr>
		<td><b>About:</b></td>
		<td>
		<textarea name="ab" rows="6"></textarea>
		</td>
		</tr>
	
		<tr>
			<td colspan="2" align="center">
			<input type="submit" value="submit" style="border-color:red"> 
		</td>
        </tr>
		</form>
		</table>
		</center>
</body>
</html>