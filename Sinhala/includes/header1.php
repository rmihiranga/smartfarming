<!DOCTYPE html>
<html>
<head>
  <title>Smart Farming</title>
  <link rel="stylesheet" type="text/css" href="css/public.css">
</head>
<body>
<header>
<div class="main">

    <!-- <img src="Images/newlogo.png" class="img1"> -->
    
  </div>
  <div class="navbar1">
      <ul> <!-- navigation bar -->
        <li><a href="homepage.php">ප්‍රධාන පිටුවට</a></li>
        <li><a href="contact.php">විමසීම්</a></li>
                <ul class="topnav-right">
        <li><a href="index.php">ඉවත්ව යාම</a></li></ul>

    <div class="navbar2">
  <ul><li> 
  
  <?php
  session_start();
  $user= $_SESSION['user'];
  echo "$user";
  ?>
  </li>       

    <li> <img src="img/logo.png" width="25px" height="25px" > </li>
</ul>

  <!---<li> <img src="img/logo.png" width="25px" height="25px" > </li><!-->

</div>
</div>

</header>
</body>
</html>