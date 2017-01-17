<?php
require("connection.php");

	$username=$_POST["inputname"];
	$password=$_POST["inputpassword"];
	
	session_start();
	
	$sorgula=mysqli_query($baglan,"SELECT * from user WHERE username='".$username."' AND password='".$password."'");
	
	if (mysqli_num_rows($sorgula)>0) 
	{
	header ("Location:http://localhost/anasayfa.php");
	}
	else{
		echo "Kullanıcı adı ya da şifre hatalı.";
	}
	
	session_register ('inputname');
	
?>