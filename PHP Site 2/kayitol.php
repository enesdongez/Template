<html>
<head>
<title>itopya.com</title>
<link href="css/anasayfa.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
<div style="height:1000px;">
<div class="ustpanel2">
<div class="ustyazipanel2">
<b class="yazi12">Kayit Ol</b>
</div>
</div>
<br/><br/><br/>&nbsp;
<div class="orta2">
<center>
<form method="POST">
<table border="0px" class="table12">
<tr>
<td class="tableic2">Kayıt Ol</td>
</tr>
<tr>
<td class="tableic2" colspan="2">Ad *</br><input type="text" class="text2" name="adi1"></td>
</tr>
<tr>
<td class="tableic2" colspan="2">Soyad *</br><input type="text" class="text2" name="soyadi1"></td>
</tr>
<tr>
<td class="tableic2" colspan="2">Eposta *</br><input type="text" class="text2" name="kullanici_adimm"></td>
</tr>
<tr>
<td class="tableic2" colspan="2">Şifre *</br><input type="text" class="text2" name="sifre1"></td>
</tr>
<tr>
<td class="tableic2" colspan="2">Şifre Tekrarı *</br><input type="text" class="text2" name="sifre2"></td>
</tr>
<tr>
<td class="tableic2"><input type="checkbox"> E-Bülten oanylıyorum<br/><input type="checkbox"> Sözleşmeyi kabul ediyorum</td>
<td class="tableic2"><input class="kayitbutton2" name="kayit" type="submit" value="Kayıt Ol"></td>
</tr>
<tr colspan="2">
<td style="text-align:center;">
<?php
if(isset($_POST['kayit'])){

   include 'baglanti.php';
			
			if($_POST)
			{
			$kullanici_adi = $_POST['kullanici_adimm'];
			$sifre = $_POST['sifre1'];
			$adi = $_POST['adi1'];
			$soyadi = $_POST['soyadi1'];
			$sifre2 = $_POST['sifre2'];
			
			if($kullanici_adi=="" or $sifre=="" or $sifre2=="" or $adi=="" or $soyadi=="")
			{
				echo 'Lütfen tüm alanları doldurunuz!';		
			}
			elseif($sifre != $sifre2)
			{
				echo 'Parola hatalı!';			
			}
			else{	
			$yenikayit = "INSERT INTO kullanicilar values(NULL,'$kullanici_adi', '$adi', '$soyadi', '$sifre')";
			mysqli_query($baglanti,$yenikayit);
			//$kullanici_kaydet = mysql_query("INSERT INTO kullanicilar (kullanici_adi,adi,soyadi,sifre) VALUES ('$kullanici_adi','$adi','$soyadi','$sifre')");
			echo 'Kayıt Başarılı!';
			
			}		
			}
}
?>
</td>
</tr>
</table>
</form>

<form method="POST">
<table border="0px" class="table22">
<tr>
<td class="tableic2" colspan="2">Giriş yap</td>
</tr>
<tr>
<td class="tableic2" colspan="2">Eposta</br><input type="text" name="kullanici_adi"class="text2"></td>
</tr>
<tr>
<td class="tableic2" colspan="2">Şifre</br><input type="text" name="sifre" class="text2"></td>
</tr>
<tr>
<td class="tableic2"><input type="checkbox" checked>Beni Hatırla</td>
<td class="tableic32"><input class="girisbutton1" type="submit" name="giris" value="Giriş Yap"></td>
</tr>
<tr colspan="2">
<td style="text-align:center;">
<?php
if(isset($_POST['giris'])){
			include 'baglanti.php';

			if($_POST)
			{
			$kullanici_adi = $_POST['kullanici_adi'];
			$sifre = $_POST['sifre'];
			$sql = "SELECT * FROM kullanicilar where kullanici_adi='$kullanici_adi' and sifre='$sifre'";
			$sonuc = $baglanti->query($sql);
			if ($sonuc->num_rows > 0) 
			{
				$_SESSION["Kullaniciadi"]=$kullanici_adi;
					header("Refresh: 0; url=index.php");
			}
			
			else
			{
				echo '<br> GİRİŞ BAŞARISIZ';	
			}
			}	
			}
		
?>
</td>
</tr>
</table>
</form>
</center>
</div>
<div class="alt22">
<img src="resim/altresim/alt1.png" class="imgsag2">
<img src="resim/altresim/alt2.png" class="imgsag2">
<img src="resim/altresim/alt3.png" class="imgsag2">
<img src="resim/altresim/alt4.png" class="imgsag2">
</div>
</div>
</body>
</html>