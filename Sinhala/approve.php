<?php 
include "connection/connection.php";
 ?>

<?php

$id=$_GET["id"];
$order=$_GET["order"];
$aname1=$_GET["aname"];
$pname1=$_GET["iname"];
echo $pname1;
mysqli_query($link,"UPDATE myorder SET approve ='Request Approved' WHERE id=$id");
$res2=mysqli_query($link,"SELECT * FROM products WHERE iname= '$pname1' && sellername= '$aname1'");
    
if (!$res2) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
    }

while($row=mysqli_fetch_array($res2))
        {
        $oldqty=$row["pquantity"];
        
        }
        $newqty=$oldqty-$order;   
        echo $newqty;
    mysqli_query($link,"UPDATE products SET quantity = '$newqty' WHERE  iname='$pname1' && sellername='$aname1' ");
?>
<script type="text/javascript">
    window.location="approve.php";

</script>