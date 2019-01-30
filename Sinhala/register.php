<?php  require "connection/connection.php";

session_start();


    //  Escaping to avoid from SQL injection
    
if(isset($_POST["submit"])){
            $email = $link-> escape_string($_POST['email']);
            $name = $link-> escape_string($_POST['name']);
            $password=$_POST['password'];
            $result=$link->query("SELECT * FROM users WHERE email='$email' ");
            $resultname=$link->query("SELECT * FROM users WHERE name='$name' ");
            if($result->num_rows>0){
                echo"Exixting Email";
                }else{
                    if(!($_POST['password']===$_POST['confirmpassword'])){
                        echo "password Mismatching";
                    }else{
                        if($resultname->num_rows>0){
                            echo"Existing Name";
                        }else{
                       $sql1= mysqli_query($link,"INSERT INTO users VALUES('','$_POST[name]','$_POST[address]','$email', '$_POST[contact]','$password')");   
                        ?>
    <script type="text/javascript">
        window.location="login.php";  
    </script>    
<?php               }
                    }
                }
    
}
    ?>

<html>
<head>
    <title>ලියාපදිංචි ආකෘතිය</title>
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    <style type="text/css">
        body{
             background-image: url("img/new.jpg");}
    </style>
</head>
<body>
    <?php include("navbar/navbar.php");?>
    <h1> ලියාපදිංචි ආකෘතිය</h1>
    <div class="hello"> 
    <form name="reg" action="register.php" method="POST">
         නම:<br>
        <input type="text" name="name" required><br>
         ලිපිනය:<br>
        <input type="text" name="address" required><br>
        ඇමතුම් අංකය:<br>
        <input type="number" name="contact" required><br>
         විද්‍යුත් තැපෑල:<br>
        <input type="email" name="email" required><br>
        මුරපදය:<br>
        <input type="password" name="password" required><br>
        මුරපදය තහවුරු කරන්න:<br>
        <input type="password" name="confirmpassword" required><br>
        
        <input type="submit" value="ලියාපදිංචි වන්න" name="submit">
    </form>
    <!-- Enter data in to the data base -->
    
</div>
</body>
</html>