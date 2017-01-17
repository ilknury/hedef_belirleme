<!DOCTYPE html>
<html>
<head>
<title>İzmir Hedef | Üye Ol</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="stil.css">

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
	<p style="color:white"><i>Sisteme üye olmak için lütfen aşağıda istenen bilgileri doldurunuz.</i></p>
	
	<form action="uye_ekle.php" method="POST">
		<label for="inputisim" style="color:white">Adınız</label>
		<input type="text" name="inputisim" class="form-control" style="width:30%" required autofocus>
		<br>
		<label for="inputsoyisim" style="color:white">Soyadınız</label>
		<input type="text" name="inputsoyisim" class="form-control" style="width:30%" required>
		<br>
		<label for="inputname" style="color:white">Kullanıcı Adı (E-mail Adresiniz)</label>
		<input type="text" name="inputname" class="form-control" style="width:30%" required>
		<br>
		<label for="inputpassword" style="color:white">Şifre <br>
		<i>(Sisteme giriş için bir şifre belirleyiniz.)</i></label>
		<input type="password" name="inputpassword" class="form-control" style="width:30%" required>
		<br>
		
			<button type="submit" class="btn btn-info">Gönder</button>
	
	</form>
	</div>
	</body>
</html>