<?php 
include "connection/connection.php";
if($_SESSION["user"] != true){
    ?>
    <script type="text/Javascript">
    window.location="login.php";
    exit();

    </script>
    <?php
}
$id=$_GET["id"];
$order=$_GET["order"];
$aname1=$_GET["aname"];
$pname1=$_GET["pname"];
echo $pname1;
mysqli_query($link,"UPDATE myorder SET approve ='Request  Not Approved' WHERE id=$id");
$res2=mysqli_query($link,"SELECT * FROM productS WHERE pname= '$pname1' && sellername= '$aname1'");
    
if (!$res2) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
    }

while($row=mysqli_fetch_array($res2))
        {
        $oldqty=$row["quantity"];
        
        }
        $newqty=$oldqty+$order;   
        echo $newqty; 
        echo $oldqty;
    mysqli_query($link,"UPDATE products SET quantity = '$newqty' WHERE  iname='$pname1' && sellername='$aname1' ");
        
?>
<script type="text/javascript">
    window.location="orders.php";

</script>