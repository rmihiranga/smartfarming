<?php 
include('connection/connection.php');
session_start();


  if(isset($_POST['submit'])){
    $username= ($_POST['username']);
    $password=($_POST['password']);
    $query = "SELECT * from users WHERE name='$username' AND password = '$password'";
    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) == 1)
    {
        if ($username=='Admin' AND $password==('admin'))
        {
            $_SESSION['fromMain']="true";
            $_SESSION['admin'] = $username;
            header('location:adminpage.php');
            }

        else{
            $_SESSION['user'] = $username;
            header('location:homepage.php');
            }
    }
    else{
        header('location:login.php');
    }
} ?> 
<!DOCTYPE html>
<html>
<head>
    <title>පිවිසුම් ආකෘතිය</title>
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
        <style type="text/css">
        body{
             background-image: url("img/new.jpg");}
         </style>
</head>
<body>
    <?php include("navbar/navbar.php");?>
    <h1> පිවිසුම් ආකෘතිය </h1>

    <div class="hello"> 

    <form name="login" method="POST" action="login.php">
       නම:<br>
        <input type="text" name="username" required><br>
        මුරපදය:<br>
        <input type="password" name="password"><br>
        
        <input type="submit" name="submit" value="පුරන්න" required>
    </form>
    </div>