<?php
	extract($_POST);

	$to = 'vashah624@gmail.com';
	$subject = $subject;
	$txt ="This inquiry From: "."<br>".$email."<br>Message:".$message;
	$headers = "From: no-reply@silverwingteam.in";

	mail($to,$subject,$txt,$headers);
	header("location:index.html");
?>