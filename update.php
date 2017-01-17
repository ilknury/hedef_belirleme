<?php
session_start();
?>
<?php
require("connection.php");

	$username=$_POST["inputname"];
	$password=$_POST["inputpassword"];
	$isim=$_POST ["inputisim"];
	$soyisim=$_POST ["inputsoyisim"];
	
	$update=mysqli_query($baglan,"UPDATE user SET (username,password,name,surname) VALUES ('".$username."','".$password."','".$isim."','".$soyisim."')");
	
	if ($update){
		echo "<font color=white>Bilgileriniz başarı ile güncellenmiştir.</font>";
	}else{
		echo "İşlem esnasında bir hata oluştu.";
	}
	?>
	
	