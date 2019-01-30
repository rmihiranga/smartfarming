<?php 
require "connection/connection.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
	<style type="text/css">
        body{
             background-image: url("img/new.jpg");}
         </style>
</head>
<body>
<div class="hello">
	<form name="inputproduct" method="POST" action="sellharvest.php" enctype="multipart/form-data">
		
		නිෂ්පාදන නාමය:<br>
		<input type="text" name="iname" ><br>
		නිෂ්පාදන ප්‍රමාණය(කිලෝග්‍රෑම්වලින්):<br>
		<input type="number" name="quantity"><br>
		ඒකක මිල(රුපියල්):<br>
        <input type="number" step="0.01" name="price"><br>
       නිෂ්පාදන වර්ගය:<br>
        <select name="select">
        	<option value="vegetable"> එළවළු </option>
        	<option value="fruits"> පළතුරු </option>
        	<option value="Agricultural tools"> කෘෂිකාර්මික මෙවලම් </option>
        	<option value="Home made foods"> ආහාර </option>
        	<option value="Handicrafts"> හස්ත කර්මාන්ත </option>
        	<option value="other"> වෙනත් </option>
        </select> <br>
        විකුණුම්කරුගේ නම:<br>
		<input type="text" name="sellername"><br> 
		පින්තුරයක් එකතු කරන්න:<br><br>
		<input type="file" value="upload" name="fileToUpload"><br><br>
		<input type="submit" name="submit" value="භාණ්ඩය එකතු කරන්න">
		
	</form>

	<?php
	$target_dir = "../Images";
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	// $username=$_SESSION["Farmer"];
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if(isset($_POST["submit"])){
		$iname = $_POST['iname'];
		$cat = $_POST['select'];
		$qty = $_POST['quantity'];
		$price = $_POST['price'];
		$sname = $_POST['sellername'];
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		$sql=mysqli_query($link,"INSERT INTO products VALUES ('','$iname','$cat','$qty','$price','$sname','$target_file')");
    
}
	
	?>
</div>