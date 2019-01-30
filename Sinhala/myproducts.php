<?php session_start(); 
require "connection/connection.php";


if($_SESSION["user"] != true){
    ?>
    <script type="text/Javascript">
    window.location="sellharvestform.php";
    exit();

    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/public.css">

    <title>Document</title>
</head>
<style> img {
  border-radius: 50%;  }
body{
  background-image: url("img/new.jpg");
}
</style>

<body >
<!-- NAvigation bar -->

<?php require "navbar/sellnavbar.php"; ?>

<h1 style="text-align:center;">මගේ භාණ්ඩ</h1>
    <div class="product-list">
         <?php
            $user=$_SESSION["user"]; 
            $i=0; 
            $res=mysqli_query($link,"SELECT * FROM products WHERE sellername ='$user'");
            echo "<table style='margin-left:150px;margin-top:50px; border-collapse: separate;
  border-spacing: 50px 50px;'>";
            echo "<tr>";
            while($row=mysqli_fetch_array($res)){
                $i= $i+1;
                echo"<td>";
                ?>
                <div class="container">
                 <div class="row">
                  <div class="col-md-12">
                <img src="<?php echo  $row["image"]; ?>" style="width:250px; height:250px";>
                <?php
                echo "<br>"; 
                echo"<b>"."නිෂ්පාදන නාමය : "."</b>".$row["iname"]."<br>";
                echo"<b>"."නිෂ්පාදන ප්‍රමාණය(කිලෝග්‍රෑම්වලින්) : "."</b>".$row["quantity"]."<br>";
                echo "<b>"."මිල :  "."</b>".$row["price"]."<br>";
                echo "<b>"."නිෂ්පාදන වර්ගය : "."</b>".$row["cat"]."</b>"."<br>" ;?>

                 <a href="edit.php?id=<?php echo $row["id"];?>&iname=<?php echo $row["iname"]; ?>&quantity=<?php echo $row["quantity"];?>&price=<?php echo $row["price"];?>&cat=<?php echo $row["cat"];?>">

                    <b>දත්ත වෙනස් කිරීම</b></a>
                </div>
            </div>
        <a href="del.php?id=<?php echo $row["id"];?>"onclick="myFunction()"><b>භාණ්ඩය ඉවත් කරන්න</b></a><?php echo"</br>";

                echo "</td>";
                if($i==3){
                    echo "</tr>";
                    echo "<tr>";
                    $i=0; }
            }
            echo "</tr>";
            echo "</table>";
              ?>

            <script>
             function myFunction(){
                 confirm("ඔබට මෙම නිෂ්පාදනය ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?");
             }
            </script>

    </div>
  </div>
    
</body>
</html>
 