<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>LATEST RELEASE</h1>
	<p>The new movies are shown first</p>

	<div id="box">
		<div class="box-top">Showbiz News</div>
		<div class="box-panel">
			This is some news
		</div>				
	</div>

	<div id="box">
		<div class="box-top">Pagination</div>
		<div class="box-panel">
			<?php					
			$uploadmessage = "return confirm('Data will be updated');";
			$deletemessage = "return confirm('Are u sure to delete');";
			$sql =" SELECT * FROM movies Order by id desc ";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				$idrow = $row[0]; 

				echo '<div class="show-image"><img height="213" width="213" src="uploads/'.$row[5].'.jpg "/>';
				echo '<a href="updateform.php?id='.$idrow.'" ><input class="update_button" type="button" value="Update" onclick="'.$uploadmessage.'" /></a>';
				echo '<a href="delete.php?id='.$idrow.'"><input class="delete_button" type="button" value="Delete" onclick="'.$deletemessage.'"/></a></div>';
			}
			mysql_close($conn);   
			?>
		</div>				
	</div>
</body>
</html>