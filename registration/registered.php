<?php
session_start();
ob_start();
?>

<html>
<head>
<title>Successful!</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

      <link rel="stylesheet" href="css/style-footer.css">
	<link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
      
</head>

<?php

include('db.php');

$var=$_GET['var'];
$_SESSION['a'][10]=$_GET['var'];
	
$name=$_SESSION['a'][0];
$password=$_SESSION['a'][1];
$realname=$_SESSION['a'][2];
$email=$_SESSION['a'][3];
$phone=$_SESSION['a'][4];
$image1=$_SESSION['a'][5];
$slice1=$_SESSION['a'][6];
$image2=$_SESSION['a'][7];
$slice2=$_SESSION['a'][8];
$image3=$_SESSION['a'][9];
$slice3=$_SESSION['a'][10];

$query="INSERT into `user`(`username`, `password`, `name` ,`email`, `phone`, `image1`,`slice1`, `image2`, `slice2`, `image3`, `slice3`, `userimage`) 
values('$name','$password','$realname','$email',$phone,'$image1','$slice1','$image2','$slice2','$image3','$slice3','../user/images/user/default.png')";
$result=mysqli_query($con, $query);

?>

<body>


<!-- signup form -->
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
				<h2>Account Created</h2>
                <p>You have succesfully registered !</p>
                <p class="account2">Click <a href="../log_in/login.html">here</a> to login</p>
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