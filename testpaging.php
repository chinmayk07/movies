<!DOCTYPE html>
<html>
<head>
	<title>Paging test</title>
</head>
<body>
<?php  
$offset = $_GET["offset"];
?>
	<form method="post" action="" name="form1" id="form1"> 
	<input type="hidden" value="<?php echo $offset; ?>" id="offset" name="offset">
		<select id="selectbox" name="noofitem" onchange="changeFunction(this.value,form1.offset.value)">
			<option value="0">0</option>
			<option value="5">5</option>
			<option value="10">10</option>
			<option value="15">15</option>
			<option value="20">20</option>
		</select><br><br>
	</form>
	<script>
	function changeFunction(page3,offset){		
		window.location="testpaging.php?page="+page3+ "&offset="+offset; 
	}
	</script>

	<?php
	$offset;
	include("config.php");
	$page = $_GET["page"];
	$offset =$_GET["offset"];
	$result1 = mysql_query("select * from movies");
	$count = mysql_num_rows($result1);
	$i1=0;
	for($i=1;$i<$count;$i=$i+$page)
		{
			$i1++;
		
		?><a href="testpaging.php?page=<?php echo $page; ?>&offset=<?php echo $offset+$page; ?>" style="text-decoration:none"><?php echo $i1." "; ?></a><?php 
	}	
	$result = mysql_query("SELECT * from movies LIMIT ".$page." OFFSET ".$offset);
	while($row = mysql_fetch_array($result)){

		echo $row[id] ."". '<img height="213" width="213" src="uploads/'.$row["image"].'.jpg "/> ' ;
	}
	?>
</body>
</html>