<!DOCTYPE html>
<html>
<head>
		<title>İzmir Hedef Belirleme Sistemleri</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="stil.css">
		
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body background="northern.jpg">
	<div class="container">
	<div class="logo">
	<img src="target.png" width="200px">
	</div>
	
	<div class="firma">
	<font color="white">İzmir Hedef Belirleme Sistemleri</font>
	</div><br><br>
		<hr>
<?php
require("connection.php");

	$username=$_POST["inputname"];
	$password=$_POST["inputpassword"];
	$isim=$_POST ["inputisim"];
	$soyisim=$_POST ["inputsoyisim"];
	
	$ekle=mysqli_query($baglan,"INSERT INTO user(username,password,name,surname) VALUES ('".$username."','".$password."','".$isim."','".$soyisim."')");
	
	if ($ekle){
		echo "Kayıt işlemi başarıyla gerçekleşmiştir. Sisteme giriş işleminizi tamamlayabilirsiniz.";
	}
	?>
<br><br>
	<form action="form.php" method="POST">
			<label for="inputname" style="color:white">Kullanıcı Adı</label>
			<input type="text" name="inputname" class="form-control" style="width:30%" required autofocus>
			<br>
			<label for="inputpassword" style="color:white">Şifre</label>
			<input type="password" name="inputpassword" class="form-control" style="width:30%" required>
			<br>
			<button type="submit" class="btn btn-info">Üye Girişi</button>
		</form><br><br>
	</div>
</body> 
</html>