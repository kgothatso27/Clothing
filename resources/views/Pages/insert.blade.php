<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
	<center>
			<form action="/insert" method="post">
				 <table>
					<tr>
						<td>picture : </td>
						<td><input type="text" name= "picture"></td>
					</tr>

					<tr>
						{{ csrf_field() }}
						<td>name : </td>
						<td><input type="text" name= "name"></td>
					</tr>

					<tr>
						<td>color : </td>
						<td><input type="text" name= "color"></td>
					</tr>

					<tr>
						<td>price : </td>
						<td><input type="text" name= "price"></td>
					</tr>

					<tr>
						<td>type : </td>
						<td><input type="text" name= "type"></td>
					</tr>

					<tr>
						<td><input type="submit" name= "submit" value="Add"></td>
					</tr>
				 </table> 
			</form> 	
	</center>
</body>
</html>