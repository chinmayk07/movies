<html>
<?php
session_start();
?>
<?php include('config.php');?>
<head>
	<title>Movies</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalable=0" />
	<script type="text/javascript" src="js/responsive.js"></script>
</head>
<body> 
	<div id="header">
		<div class="logo"><a href="responsive.php?page=home">Cine<span>Matine</span></a></div>
		<div class="top_info">
			<?php
				if($_SESSION["fname"]) {
			?>
			Welcome<span> <?php echo $_SESSION["fname"]; ?></span> , <a href="logout.php" tite="Logout" style="color:red; text-decoration:none" >Logout.</a>
			<?php
				}
				echo "<br>";
			?>
			Search <input type="text" id="search-box" placeholder="Movie Name" />
            <div  style="z-index:4;"id="suggesstion-box"></div>			
		</div>
	</div>

	<a class="mobile" href="#">MENU</a>

	<div id="container">
		<div class="sidebar">
			<ul id="nav">
				<li><a href="responsive.php?page=home" class="selected">Home</a></li>
				<li><a href="responsive.php?page=form">Add</a></li>
				<li><a href="responsive.php?page=login">Login</a></li>
				<li><a href="responsive.php?page=location">Nearby Theatres</a></li>
			</ul>			
		</div>
		<div class="content">
			<?php
				if(isset($_GET['page']))
				{
					$page_name = $_GET['page'];
					include($page_name.".php");
				}
				else
				{
					include("");
				}
			?>			
		</div>
	</div>

</body>
</html>