<!DOCTYPE html>
<html>
<head>
<title>İHS | Anasayfa</title>
    <meta charset="utf-8" />
    <meta name="description" content="Etkin satış organizasyonunda yıl içerisinde bulunan çeyrek dönemler için birimlere verilecek satış hedeflerinin hesaplanması için hazırlanmıştır.">
    <meta name="keywords" content="satış, çeyrek dönem, hedef, satış hedefi, hedef belirleme">
    <meta name="author" content="İlknur Yıldırım">
	<link rel="stylesheet" type="text/css" href="stil.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>
  <script src=""https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
   <script>
var myChart = new Chart (ctx,{
	type: 'bar',
	data: {
		labels: ["1", "2", "3", "4"],
		datasets: 
		[
			{
			label: "Örnek Gösterge",
			backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
				],
			borderColor: [
				'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
				],
			borderWidth: 1,
			data: [100, 120, 80, 150],
			}
		]
	}
	options:{
		scales{
			yAxes:[{
				ticks:{
					beginAtZero:true
				}
			}]
		}
	}
});
</script>
  
</head>

<body background="northern.jpg">
	<div class="container">
	<div class="logo">
	<img src="target.png" width="200px">
	</div>
	
	<div class="firma">
	<font color="white"><b>İZMİR HEDEF BELİRLEME SİSTEMLERİ</b></font>
	</div><br><br><br>
	
<ul id="menu">
	<li><a href="http://localhost/anasayfa.php">Ana Sayfa</a></li>
	<li><a href="http://localhost/hakkimizda.php">Hakkımızda</a></li>
	<li><a href="http://localhost/chart.php">Örnek Gösterge</a></li>
	<li><a href="#">Referanslarımız</a></li>
	<li><a href="http://localhost/iletisim.php">İletişim</a></li>
</ul>	
<br>
<hr>
	<div class="dropdown" style="position:absolute; top:10px; right:50px;">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Hesabım
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li style="width:px"><a href="http://localhost/guncelle.php">Bilgilerim</a></li>
      <li style="width:10px"><a href="http://localhost/">ÇIKIŞ</a></li>
     </ul>
  </div>
  

	<canvas id="myChart" width="400" height="400"></canvas>

 
 
 </div> 
 </body>
 </html>
