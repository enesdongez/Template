<html>
<head>
<style type="text/css">

</style>
</head>
<body>
<div style="width:100%; height:1100px; float:left;">
<div class="kendintoplaustpanel1">
<div class="kendintoplaustyazipanel1">
<b class="kendintoplayazi11">SEPET</b>
</div>
</div>
<div style="float:right; text-align:right;margin:20 290 20 0; width:100%;">
<a href="index.php?sayfa=sepet&sepetibosalt=true" style="padding:3 6 3 6; border-radius:6px; background-color:#9FC2ED; color:black; text-decoration:none; font-family:Calibri; border:1px solid black;">Sepeti Boşalt<b> X</b></a>
</div>
<div style="width:100%; height:960px;">
<div style="width:1600px; height:600px; overflow-y: auto;margin:0 0 0 0;">
<?php
if(isset($_COOKIE['sepeturun'])){
foreach ($_COOKIE['sepeturun'] as $key=>$val)
{
	$sql = "SELECT urunad,urunfiyat,urunid,urunresim FROM anasayfaurun where urunid='$val'";
	$sorgu = $baglanti->query($sql);
	while($sonuc=mysqli_fetch_assoc($sorgu) )
	{
		echo '<div style="float:left; width:80%;margin:0 0 0 290px; height:150px; border-bottom:1px solid #C3C3C3;">';
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $sonuc['urunresim'] ).'" style="float:left; margin:25 150 0 0;width:120px; height:120px;"/>';
		echo '<div style="float:left;height:90px;margin:75 150 0 0; width:440px; font-size:19px; color:#4d4d4d; font-family:Calibri;">';
		echo $sonuc["urunad"];
		echo '</div>';
		echo '<div style="float:left;height:90px;margin:75 0 0 0; width:140px; font-size:19px; color:#4d4d4d; font-family:Calibri;">';
		echo '<form method="POST">
		
		<input type="submit" value="+" name="arttir"/>
		<input type="button" value="0" name="cikti" style="background-color: transparent; border:0px solid black;"/>
		<input type="submit" value="-" name="eksi"/>
		</form>
		';
		echo '</div>';
		echo '<div style="float:right; margin:75 0 0 0; width:140px; font-size:19px; color:#4d4d4d; font-family:Calibri; font-weight:bold;">';
		echo '<div style="float:right; margin:0 25 0 0;">';
		echo 'Toplam Fiyat';
		echo '</div></br>';
		echo '<div style="float:right;margin:0 45 0 0;">';
		echo $sonuc["urunfiyat"];echo " ₺";
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	

  }
	
}
else{
		echo '<script language="javascript">';
		echo 'alert("Sepette ürün bulunmuyor!")';
		echo '</script>';
		header ("Refresh: 0; url=index.php?sayfa=orta");
}

?>

<?php
  if(isset($_GET['sepetibosalt'])){
		foreach($_COOKIE['sepeturun'] as $key => $val) 
		{
			setcookie('sepeturun['.$key.']', $key, time() - 86400); 
		}
		header('Location:'.$_SERVER['HTTP_REFERER']);


}
 if(isset($_GET['arttir'])){
	 
 }
?>
</div>
<?php 
echo '<div style="float:left; width:100%;">';
echo '<div style="float:right; width:500px; margin:10 288 50 0; height:110px; background-color:#F4F5F7; ">';
	$fiyat=0;
	if(isset($_COOKIE['sepeturun'])){
	foreach ($_COOKIE['sepeturun'] as $key=>$val){
	$sql = "SELECT urunfiyat FROM anasayfaurun where urunid='$val'";
	$sorgu = $baglanti->query($sql);
	while($sonuc=mysqli_fetch_assoc($sorgu) )
	{
		$fiyat+=(int)$sonuc["urunfiyat"];
	}
		
	}
	}
	echo '<div style="margin:10 0 0 10;">';
	echo '<b style="font-family:Calibri; font-size:17px">';
	echo "Ara Toplam:";
	echo '</b>';
	echo '<b style="font-size:17px; font-family:Calibri; margin:0 20 0 0; float:right; font-weight:normal; color:#565656;">';
	$kdv=$fiyat*18/100;
	echo $fiyat-$kdv;
	echo ' TL</b>';
	echo '</div>';
	echo '<div style="margin:10 0 0 10;">';
	echo '<b style="font-family:Calibri; font-size:17px">';
	echo "KDV:";
	echo '</b>';
	echo '<b style="font-size:17px; font-family:Calibri; margin:0 20 0 0; float:right; font-weight:normal; color:#565656;">';
	echo $kdv;
	echo ' TL</b>';
	echo '</div>';
	echo '<div style="margin:10 0 0 10;">';
	echo '<b style="font-family:Calibri; font-size:17px">';
	echo "Genel Toplam:";
	echo '</b>';
	echo '<b style="font-size:17px; font-family:Calibri; margin:0 20 0 0; float:right; font-weight:normal; color:#3F3F3F;">';
	echo $fiyat;
	echo ' TL</b>';
	echo '</div>';
	echo '</div>';
	echo '<div style="float:right; width:100%; margin:-40 300 40 0;">';
	echo '<input type="button" style="float:right;" value="Alışverişi Tamamla"\>';
	echo '</div>';
	echo '</div>';
?>

<div class="alt123">
		<center>
		<img src="resim/altresim/alt1.png" class="imgsag1">
		<img src="resim/altresim/alt2.png" class="imgsag1">
		<img src="resim/altresim/alt3.png" class="imgsag1">
		<img src="resim/altresim/alt4.png" class="imgsag1">
		</center>
		</div>
</div>
</body>
</html>