<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>İHS | İletişim</title>
        <meta charset="utf-8" />
        <meta name="description" content="Etkin satış organizasyonunda yıl içerisinde bulunan çeyrek dönemler için birimlere verilecek satış hedeflerinin hesaplanması için hazırlanmıştır.">
        <meta name="keywords" content="satış, çeyrek dönem, hedef, satış hedefi, hedef belirleme">
        <meta name="author" content="İlknur Teke">
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
	<font color="white"><b>İZMİR HEDEF BELİRLEME SİSTEMLERİ</b></font>
	</div><br><br>
	
	<hr>

<form action="mesaj.php" method="post">

	<label for="inputadsoyad" style="color:white">Adınız Soyadınız</label>
		<input type="text" name="inputadsoyad" class="form-control" style="width:30%" required autofocus>
	<br>
	
	<label for="inputkurulus" style="color:white">Hangi Kuruluşta Çalışıyorsunuz?</label>
		<input type="text" name="inputkurulus" class="form-control" style="width:30%" required>
	<br>
	
	<!--div class="form-group" name="iller">
      <label for="sel1">Bulunduğunuz İl:</label>
      <select class="form-control" id="sel1" style="width:30%" required>
        <option><i>(Seçiniz...)</i></option>
		<option>İzmir</option>
        <option>İstanbul</option>
        <option>Ankara</option>
        <option>Antalya</option>
      </select VERİTABANINA SEÇENEKLERE GÖRE DEĞER ATANIP YAZDIRMA İŞLEMİ YAPILAMADIĞI İÇİN KOD PASİFE ALINDI-->
	<br>
	
	<!--p style="font-size:15px"><b>Cinsiyetiniz</b></p>
		<div class="radio">
			<label><input type="radio" name="optradio">Kadın</label>
		</div>
	<div class="radio">
		<label><input type="radio" name="optradio">Erkek</label>
	</div-->
	<br>
	
	<div class="form-group">
  <label for="comment">Mesajınız:</label>
  <textarea class="form-control" name="inputmesaj" rows="5" id="comment" style="width:30%"></textarea>
</div>
	
	<button type="submit" class="btn btn-info">Mesajı Gönder</button>
			
</form>
<hr>
	<div>
	<footer style="color:white">
	<address>9 Eylül Üniversitesi Dokuzçeşmeler Yerleşkesi Buca/İzmir</address>
    İletişim İçin: <a href="mailto:ilknuryldrm@gmail.com">ilknuryldrm@gmail.com</a>
	</footer>
	</div>
</div>
</body>
</html>