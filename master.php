<DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">		
	</head>
	<body>
		<div>
			<div id="header">
				<div id="logo">
					<a href="master.php?page=disp"><img height="100" width="100" src="images/logo.png" alt="Image not displayed"></a>		
				</div>
				<div id="heading">
					<h1>Movie Gallery</h1>
				</div>
				<div id="search">
					<form method="post" enctype="multipart/form-data">
					   Search  <input type="text" id="search-box" placeholder="Movie Name" />
					   <div id="suggesstion-box"></div>    
					</form>
				</div>
			</div>
			<div id="displaybody">
				<div id="nav">
					<a href="master.php?page=disp"><li><b>Home</b></li></a><br>
					<a href="master.php?page=form"><li><b>Add</b></li></a><br>
					<a href="master.php?page=login"><li>Login</li></a><br>
					<a href="master.php?page=location"><li>Nearby Theaters</li></a><br>
				</div>

				<div id="body">
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
					<!--<a href="form.php"><img height="250" width="250" src="images/add.png "/></a>-->
						
				</div>			
			</div>

			<div id="footer">
				<?php echo $no ?>
				Copyright &copy; sjinnovation.com &amp; designed by CK &#153;
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script>
		    $(document).ready(function(){
		        $("#search-box").keyup(function(){
		            $.ajax({
		                type: "POST",
		                url: "readMovies.php",
		                data:'keyword='+$(this).val(),
		                beforeSend: function(){
		                    $("#search-box").css("background","#FFF url(images/LoaderIcon.gif) no-repeat 165px");
		                },
		                success: function(data){
		                    $("#suggesstion-box").show();
		                    $("#suggesstion-box").html(data);
		                    $("#search-box").css("background","#FFF");
		                }
		            });
		        });
		    });

		    function selectMovie(val) {
		        $("#search-box").val(val);
		        $("#suggesstion-box").hide();
		    }
		</script>
	</body>
</html>
