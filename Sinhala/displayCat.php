<?php require "connection/connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <style> img {
  border-radius: 50%;
}
body{
  background-image: url("img/new.jpg");
}

</style>

    
</head>
<?php include("navbar/sellnavbar.php"); ?>
<body>
    <!-- navigatioon bar -->
    
<?php
    if (isset($_POST['veg'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='vegetable'");
        showData($res);
    }

    if (isset($_POST['fruits'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='fruits'");
        showData($res);
    }

    if (isset($_POST['tools'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='Agricultural tools'");
        showData($res);
    }

    if (isset($_POST['foods'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='Home made foods'");
        showData($res);
    }

    if (isset($_POST['handi'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='Handicrafts'");
        showData($res);
    }

    if (isset($_POST['other'])) {
        $res=mysqli_query($link,"SELECT * FROM products WHERE cat='other'");
        showData($res);
    }

    function showData($r){
        echo "<table style='margin-left:350px;margin-top:50px;'>";
            echo "<tr>";
            $i = 0;
            while($row=mysqli_fetch_array($r)){
                $i= $i+1;
                echo"<td>";
                ?>
                <img src="<?php echo $row["image"]; ?>" height="200" width="200">   
                <?php
                echo "<br>";

                echo"<br>"."නිෂ්පාදන නාමය: "."   ".$row["iname"];
                echo"<br>"."නිෂ්පාදන ප්‍රමාණය: ".$row["quantity"];
                echo "<br>"."ඒකක මිල: ".$row["price"]."<br>"; ?>
                 <a href="edit.php?> 
                    id=<?php echo $row["id"];?> 
                    & iname=<?php echo $row["iname"]; ?> & quantity=<?php echo $row["quantity"]; ?>
                    & price=<?php echo $row["price"];  ?> & Category=<?php echo $row["cat"];  ?>
                    & quantity=<?php echo $row["quantity"];?>">
                    <b>දත්ත වෙනස් කිරීම</b></a>
                    <?php 
                     echo"<br>";?><a href="del.php?id=<?php echo $row["id"];?>"onclick="myFunction()"><b>භාණ්ඩය ඉවත් කරන්න</b></a><?php echo"</br>";

                if($i==3){
                    echo "</tr>";
                    echo "<tr>";
                    $i=0;
                }
                
                
            }
            echo "</tr>";
            echo "</table>";
    }
?>

 </body>
</html>