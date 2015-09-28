<!DOCTYPE html>
<html>
	<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<form method="post" action="add.php" enctype="multipart/form-data">
			<table style="background-color:white"  align="center">
				<th colspan="2" align="center">
					Add Movie Details
				</th>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" value=""><br><br></td>
				</tr>
				<tr>
					<td>Genre :</td>
					<td><select name="genre">
						<option value="comedy">Comedy</option>
						<option value="action">Action</option>
						<option value="thriller">Thriller</option>
						<option value="romance">Romantic</option>
						<option value="horror">Horror</option>	
				   </select></td>
				</tr>
				<tr>
					<td>Rating :</td>
					<td><input type="radio" name="rating" value="1">1
			<input type="radio" name="rating" value="2">2
			<input type="radio" name="rating" value="3">3
			<input type="radio" name="rating" value="4">4
			<input type="radio" name="rating" value="5">5</td>
				</tr>
				<tr>
					<td>Year :</td>
					<td><input type="text" name="year" value=""></td>
				</tr>
				<tr>
					<td>Image :</td>
					<td><input type="file" name="imageUpload" ></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><img src="captcha2.php" /></td>
				</tr>
				<tr>
					<td>Enter Image Text</td>
					<td><input name="captcha" type="text"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input name="submit" type="submit" value="Submit" onclick="add.php"></td>
				</tr>
			</table>
		</form>			
	</body>
</html>