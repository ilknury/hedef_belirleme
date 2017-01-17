<?php
require("connection.php");

	$adsoyad=$_POST["inputadsoyad"];
	$kurulus=$_POST["inputkurulus"];
	//$cinsiyet=$_POST["optradio"];
	$mesaj=$_POST["inputmesaj"];
	
	$yolla=mysqli_query($baglan,"INSERT INTO iletisim(adsoyad,kurulus,mesaj) VALUES ('".$adsoyad."','".$kurulus."','".$mesaj."')");
	
	if ($yolla===TRUE){
		echo "<font color=white>Mesajınız gönderilmiştir.</font>";
	}else{
		echo "olmadı";	}
	
?>