<html>
<head>
<title>itopya.com</title>
<link href="../css/index.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
<div style="height:820px;">
<div class="ustpanel1">
<div class="ustyazipanel1">
<b class="yazi11">Giriş Yap</b>
</div>
</div>
<br/><br/><br/>&nbsp;
<div class="orta1">
<center>
<form method="POST">
<table border="0px" class="table21">
<tr>
<td class="tableic1" colspan="2">Giriş yap</td>
</tr>
<tr>
<td class="tableic1" colspan="2">Eposta</br><input type="text" <?php if(isset($_COOKIE['kadi'])) {?>value="<?php echo $_COOKIE['kadi']; ?>"<?php } else{?>placeholder="Kullanıcı adınızı giriniz.."<?php }?> name="kullanici_adi" class="text1"></td>
</tr>
<tr>
<td class="tableic1" colspan="2">Şifre</br><input type="text"<?php if(isset($_COOKIE['sifre'])) {?>value="<?php echo $_COOKIE['sifre']; ?>"<?php } else{?>placeholder="Şifrenizi giriniz.."<?php }?> name="sifre"class="text1"></td>
</tr>
<tr>
<td class="tableic1"><input type="checkbox" checked name="benihatirla">Beni Hatırla</td>
<td class="tableic31"><input class="girisbutton1" type="submit" name="giris" value="Giriş Yap"></td>
</tr>
<tr>
<td class="tableic41" colspan="2"><input type="submit" class="kayitbutton1" name="kayitgit" value="Kayıt Olmak İçin Tıklayınız!"></td>
</tr>
</table>
</form>
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
				if(isset($_POST['benihatirla'])){
					setcookie("kadi",$kullanici_adi,strtotime("+1 day"));
					setcookie("sifre",$sifre,strtotime("+1 day"));
				}
				else{
					setcookie("kadi",$kullanici_adi,strtotime("-1 day"));
					setcookie("sifre",$sifre,strtotime("-1 day"));
				}
					$_SESSION["Kullaniciadi"]=$kullanici_adi;
					
					header ("Refresh: 0; url=index.php?sayfa=orta");
			}
			
			else
			{
				echo '<br> GİRİŞ BAŞARISIZ';	
			}
			}
			}
			
			if(isset($_POST['kayitgit'])){
				header ("Refresh: 0; url=index.php?sayfa=kayitol");
			}
?>
</center>
</div>

<div class="alt12">
<img src="resim/altresim/alt1.png" class="imgsag1">
<img src="resim/altresim/alt2.png" class="imgsag1">
<img src="resim/altresim/alt3.png" class="imgsag1">
<img src="resim/altresim/alt4.png" class="imgsag1">
</div>
</div>
</body>
</html>
