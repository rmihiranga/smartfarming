<?php  require "connection/connection.php";
if (isset($_POST['create_faq'])) {
	$question = ($_POST['question']);
	$answer = ($_POST['answer']);
	$sql = "INSERT INTO faqs (questions, answers) VALUES ('$question', '$answer')";
	$res = mysqli_query($link, $sql);
	header("Location: faq_index.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add FAQs</title>
	<style type="text/css">
		body{
             background-image: url("img/new.jpg");}
             .container {
              border-radius: 10px;
               background-color:  #b3cccc;
               padding: 20px;}
               input[type=submit]{
    width:100%;
    background-color:#336699 ;
    color: black ;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:20px;
    align-content: center;
}

input[type=submit]:hover {
    background-color:#80ff80;
  border: none;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}


	</style>
</head>

<?php include("navbar/faqnav.php"); ?>

<body>
	<br> <br>
<h1 style="font-size:50px; color: #00004d;" align="center">
<b> Add New FAQ </b></h1>

<br> <h2 align="center">Submit your Questions Here..</h2><br>

<div class="container">
<div class="hello">
<img src="img/faq.jpg" width="100%">
<br> <br> 	
<form name ="faq" action="create.php" method="post" enctype="multipart/form-data">
	<b> Question: </b> <input type="text" name="question" style="width:100%; height: 50px;"><br/><br/>
	<b>Answer: </b> <input type="text" name="answer" style="width:100%; height: 100px; "><br/><br/>
	<input type="submit" name="create_faq" value="Add new FAQ" style="width:100%;">
</form>
</div>
</div>

</body>
</html>