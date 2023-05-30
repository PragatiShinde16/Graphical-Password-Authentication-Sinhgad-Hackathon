<?php
session_start();
ob_start(); 

include("db.php");

$username=$_SESSION['uname'];
$image1=$_SESSION['a'][5];
$image2=$_SESSION['a'][7];
$image3=$_SESSION['a'][9];
$slice1=$_SESSION['a'][6];
$slice2=$_SESSION['a'][8];
$slice3=$_SESSION['a'][10];

$newimage1 = $_GET["file1"]; 
// $newimage1 = $_GET['file2']; 
// $newimage1 = $_GET['file3']; 
// $newslice1 = 
// $newslice2 = 
// $newslice3 = 

$query1="update user set image1='$newimage1' where image1='$image1'";
// $query2="update user set newimage2='$newimage2' where image2='$image2'";
// $query3="update user set newimage3='$newimage3' where image3='$image3'";
// $query4="update user set newslice1='$newslice1' where slice1='$slice1'";
// $query5="update user set newslice2='$newslice2' where slice2='$slice2'";
// $query6="update user set newslice3='$newslice3' where slice3='$slice3'";

$result=mysqli_query($con,$query1);
// $result=mysqli_query($con,$query2);
// $result=mysqli_query($con,$query3);
// $result=mysqli_query($con,$query4);
// $result=mysqli_query($con,$query5);
// $result=mysqli_query($con,$query6);

// $target_dir = "uploads/images";
// $target_dir = "images/pw/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }
				
header("Location: set_pw.html");	

?>