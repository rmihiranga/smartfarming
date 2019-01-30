<?php require "connection/connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
body {
  background-image: url("img/new.jpg");
}
</style>
    
</head>
 <!-- navigatioon bar -->
<?php include("navbar/sellnavbar.php"); ?>
<body>

    <h1 style="text-align:center;"> සියළු භාණ්ඩ </h1>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/veg.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="veg" class="btn btn-primary" value="එළවළු">
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/fruit.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="fruits" class="btn btn-primary" value="පළතුරු">
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/tools.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="tools" class="btn btn-primary" value="කෘෂිකාර්මික මෙවලම්">
                </form>
            </div>
            </div>
        </div>
    </div>


<br>
<br>

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/foods.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="foods" class="btn btn-primary" value="ආහාර">
                </form>
            </div>
            </div>
    </div>



        <div class="col-md-4 ac">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/crafts.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="handi" class="btn btn-primary" value="හස්ත කර්මාන්ත">
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/other.jpg" alt="Card image cap" width="250px" height="250px">
            <div class="card-body text-center">
                <form action="displayCat.php" method="POST">
                    <input type="submit" name="other" class="btn btn-primary" value="වෙනත්">
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>

