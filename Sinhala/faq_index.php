<?php  require "connection/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
		<title> FAQ </title>
		<link rel="stylesheet" type="text/css" href="css/faqstyle.css">
		<style type="text/css">
		body {
             background-image: url("img/new.jpg");}

		.faq_holder{
			text-align: left;
			width: 800px;
			margin-left: auto;
			margin-right: auto;
			padding: 4px;
		}
		.faq{
			margin-bottom: 10px;
		}
		.questions{
			font-weight: bold;
			font-size: 16px;
		}
		.answers{
			margin-left: 20px;
		}

	</style>

</head>

<?php include("navbar/faqnav.php"); ?>

<body>
<?php
	$sql = "SELECT * FROM faqs";
	$res = mysqli_query($link, $sql) or die(mysqli_error());
	if (mysqli_num_rows($res) > 0){
		while ($row = mysqli_fetch_assoc($res)) {
			$questions = $row['questions'];
			$answers = $row['answers'];
			echo '<ol style="list-style-type:circle">
<li> <div class="faq"> <span class = "questions"> </li><br>'.$questions.'</li></span><br/><div class = "answers"></li> </ol>'.$answers.'</div></div>';
		}
	}else{
		echo "There are no FAQs available";
	}
?>



</html>