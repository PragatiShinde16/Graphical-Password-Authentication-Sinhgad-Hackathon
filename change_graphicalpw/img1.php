<?php
session_start();
ob_start();
?>

<html>
<head>

      <title>Change Password</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

      <link rel="stylesheet" href="css/style-footer.css">
      <link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>

      <script>
            // passing the selected image reference to slice the image
            function changeIt(img)
            {
            var name = img.src;
            window.location.href = "change_slice1.php?var=" + name;
            }
      </script>

</head>

<body>

<!-- change image -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<div class="left_grid_info">
					<h1>Manage Your User Account</h1>
					<p>This system provides high security to your account through the graphical password.</p><br>
					<img class="im1" src="../images/cover.jpg" height="270" width="370">
				</div>
			</div>
			<div class="login_info">
				<h2>Update Graphical Password</h2>
				<p  class="account1">Select the 1st image for the graphical password.</p>
				<center>
				<img class="im" src="..\images\pw\java.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\python.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\web.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\image4.jpg" onclick="changeIt(this)" height="120" width="120">
				<img class="im" src="..\images\pw\image5.jpg" onclick="changeIt(this)" height="120" width="120">
				</center>
			</div>
		</div>
	</div>

</div>
                                  
      <script src="plugins/jquery.js"></script>
      <script src="plugins/bootstrap.min.js"></script>
      <script src="plugins/bootstrap-select.min.js"></script>
                                                      
      <script src="plugins/validate.js"></script>
      <script src="plugins/wow.js"></script>
      <script src="plugins/jquery-ui.js"></script>
      <script src="js/script.js"></script>   

</body>
</html>