<?php include("navbar/buyernavbar.php"); ?>
<div>
<?php  require "connection/connection.php";
session_start();
$pselected='Your Product Name';
if($_SESSION["user"] != true){
    ?>
    <script type="text/Javascript">
    window.location="login.php";
    exit();

    </script>
    <?php
}

    
    
if(isset($_POST["submitpurchase"])){
    $iname = $_POST['iname'];
    $aname = $_POST['aname'];
    $uniprice = $_POST['unitprice'];
    $oqty = $_POST['oqty'];
    $price = $_POST['price'];
    $user = $_SESSION['user'];
    $contact = $_POST['cnumber'];  

        $sql1 = "INSERT INTO myorder VALUES('', '$iname', '$aname', $uniprice, $oqty, $price, '$user', '$contact', 'Not Approved')";
    if ($link->query($sql1)) {
        $msg = "ඇණවුම සාර්ථකව මිලදී ගත්හ";
                echo "<script type='text/javascript'>
                 alert('$msg');
                 </script>";
    }
    else{
        echo "error".$sql1."<br>".$link->error;
    }

}   
    ?>
<html>
<head>
<title> Order</title>
<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
<style type="text/css">
        body{
             background-image: url("img/new.jpg");}
         </style>
</head>
<body>

<h1> ඇණවුම් කරන්න </h1>
<div class="hello"> 
    <form name="buyerreg" action="buyitems.php" method="POST">
        ඔබේ නිෂ්පාදනය තෝරාගන්න :<br>
        <!-- Get product list from the datbase -->
        <select name="pname1"  id="">
            <?php
      $res=mysqli_query($link,"SELECT DISTINCT iname from products");
        while($row=mysqli_fetch_array($res))
         {
             echo"<option>";
             echo $row["iname"];
            echo "</option>";
            }

            ?>
        </select>
        <input type="submit" value="ලබා ගත හැකි විකුණුම්කරුවන්" name="submitproduct" style="width:250px;"> <br>
        අලෙවිකරණ නාම ලැයිස්තුව:<br><br>
        <!-- Get available seller names -->
        <select name="sellername" id="">
            <?php
            if(isset($_POST["submitproduct"])){
                $pselected=$_POST['pname1'];
      $res=mysqli_query($link,"SELECT sellername from products where iname= '$_POST[pname1]'");
        while($row=mysqli_fetch_array($res))
         {
             echo"<option>";
             echo $row["sellername"];
            echo "</option>";
            }


        }
        
        ?>
        </select><br>
        නිෂ්පාදන නාමය:<br>
        <input type="text" value="<?php echo $pselected; ?>" name="productname"><br>
        <input type="submit" value="නිෂ්පාදිත තොරතුරු ඉල්ලීම" name="alldetails" style="width:250px;"> <br>
     <!-- get all the product details -->
     <?php
 
            if(isset($_POST["alldetails"])){
        $res=mysqli_query($link,"SELECT * FROM products WHERE iname='$_POST[productname]'&& sellername='$_POST[sellername]'");
        while($row=mysqli_fetch_array($res))
         {     
            
             
             $pname=$row["iname"];
             $quantity=$row["quantity"];
             $unitprice=$row["price"];
             $sellername=$row["sellername"]; 
        
               

     
        }
        ?>
        නිෂ්පාදන නාමය:<br>
        <input type="text" value="<?php echo $pname; ?>" name="pname" readonly><br>
        විකුණුම්කරුගේ නම:<br>
        <input type="text" value="<?php echo $sellername; ?>" name="sellername" readonly><br>
        ගැනුම්කරුගේ දු.ක.:
        <input type="number" name="bcontact"><br>
        ඒකක මිල(රුපියල්):<br>
        <input type="number" value="<?php echo $unitprice; ?>" name="unitprice" readonly><br>
        දැනට පවතින නිෂ්පාදන ප්‍රමාණය(කිලෝග්‍රෑම් හෝ ඒකක):<br>
        <input type="number" value="<?php echo $quantity; ?>" name="aqty" readonly><br>
        ඔබේ ප්‍රමාණය ඇණවුම් කරන්න(කිලෝග්‍රෑම් හෝ ඒකක):<br>
        <input type="number" name="oqty"><br>
                  
<?php
     }
        ?> 
             <input type="submit" value="මගේ මිල ගණනය කරන්න" name="pricecal" style="width:250px;"> <br>

                <?php
         if(isset($_POST["pricecal"])){
             if( $_POST['oqty']>$_POST['aqty']){
                $error = "Ordered quantity Should not exceed the available quantity";
                echo "<script type='text/javascript'>
                alert('$error');
                </script>";
               
             }elseif($_POST['oqty']==0 ||$_POST['oqty']==null){
                $error = "Ordered quantity Should be at least 1";
                echo "<script type='text/javascript'>
                alert('$error');
                </script>";
               }else
             {
                $pname1= $_POST['pname'];
                $agentname2=$_POST['sellername'];
                $unitprice=$_POST['unitprice'];
                $aqty=$_POST['aqty'];
                $oqty=$_POST['oqty'];
                $total=($_POST['unitprice']*$_POST['oqty']);
                $number = $_POST['bcontact'];
                
                ?>
                
                 

        නිෂ්පාදන නාමය:<br>
        <input type="text" value=<?php echo $pname1; ?> name="iname" readonly><br>
        විකුණුම්කරුගේ නම:<br>
        <input type="text" value=<?php echo $agentname2; ?> name="aname" readonly><br>
        ගැනුම්කරුගේ දු.ක.:
        <input type="number" value=<?php echo $number; ?> name="cnumber" readonly><br>
        ඒකක මිල:<br>
        <input type="number" value=<?php echo $unitprice; ?> name="unitprice" readonly><br>
        දැනට පවතින නිෂ්පාදන ප්‍රමාණය::<br>
        <input type="number" value="<?php echo $aqty; ?>" name="aqty" readonly><br>
        ඔබේ ප්‍රමාණය ඇණවුම් කරන්න:<br>
        <input type="number" value=<?php echo $oqty;?> name="oqty"><br>
        අවසාන මිල: <br>
        <input type="number" name="price" value=<?php echo $total; ?>><br>
        <input type="submit" value="ඇණවුම් කරන්න" name="submitpurchase">
                 <?php

             }
        
         }
        ?>

        
    </form>
    
</script>
</body>
</html>