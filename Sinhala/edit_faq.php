<?php  require "connection/connection.php";

if(isset($_POST['edit_faq'])){
	$faq = $_POST['faq'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
	$sql = "UPDATE faqs SET questions='$question', answers='$answer' WHERE id='$faq'";
	$res = mysqli_query($link, $sql);
	header("Location: faq_index.php");
	exit();
}
if(isset($_POST['delete_faq'])){
	$faq = $_POST['faq'];
	$sql = "DELETE FROM faqs WHERE id='".$faq."'";
	$res = mysqli_query($link, $sql);
	header("Location: faq_index.php");
 	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit FAQ</title>
    <link rel="stylesheet" type="text/css" href="css/faqstyle.css">

	<style type="text/css">

		.faq_holder{
			text-align: right;
			width: 550px;
			margin-left: auto;
			margin-right: auto;
			padding: 4px;
		}
		.faq{
			margin-bottom: 10px;
		}
		body{
             background-image: url("img/new.jpg");}
             .container {
  border-radius: 10px;
  background-color:  #b3cccc;
  padding: 20px;
}
.questions{
			font-weight: bold;
			font-size: 16px;
			float: left;
		}
.answers{
			float: left;
		}


	</style>


</head>

<?php include("navbar/faqnav.php"); ?>

</head>
<body>
<div class="faq_holder">
	<div class="container">
<div class="hello">
<?php
	$sql = "SELECT * FROM faqs";
	$res = mysqli_query($link, $sql) or die (mysqli_error()); 
	if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_assoc($res)) {
			$id = $row['id'];
			$questions = $row['questions'];
			$answers = $row['answers'];
			echo '<div  class="faq">
			<form action="edit_faq.php"  method = "post">
			<input type="hidden" name="faq" value="'.$id.'" style="width:100%;">


			<span class="questions"><b>Question:</b></span><input style="width:100%;" type="text" name="question" value="'.$questions.'" /> 
			<br/>
			<b>
			<span class="answers">Answer:</b></span><input style="width:100%; height:100px;" type="text" name="answer" value="'.$answers.'"/>
			<input  style="width:100%; color:Black;" type="submit" name="delete_faq" value="Delete FAQ" />
			<input style="width:100%;" type="submit" name="edit_faq" value="submit changes">
			</form>';
		}
	}else{
		echo "There are no faqs to edit";
	}
?>
</div>
</div>
</div>
</body>
</html>