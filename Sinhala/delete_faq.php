<?php
session_start();
include "connection/connection.php";
	$id = $GET["id"];
	echo "$id";
	$sql = "DELETE FROM faqs WHERE id=$id";
	$res = mysqli_query($link, $sql);
	header("Location: faq_index.php");