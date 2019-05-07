<html>
<link href="css/anasayfa.css" media="screen" rel="stylesheet" type="text/css">

<body>
<div style="width:100%; height:800px;">

<div style="width:100%; float:left; height:50px;border-bottom:1px solid #CACACA; background-color:#F7F7F7;">
</div>

<?php
$id=$_GET['id'];

if(isset($_GET['id']))
{
	
	$sql = "SELECT urunid,urunad,urunfiyat,urunresim FROM anasayfaurun where urunid='$id'";
	$sorgu = $baglanti->query($sql);
	$sonuc=mysqli_fetch_assoc($sorgu) ;
	echo '<div style="width:100%; float:left;">';
	echo '<div style="float:left;margin:20 100 0 170; width:400px; height:400px;">';
	echo '<img style="width:400px; height:400px;"src="data:image/jpeg;base64,'.base64_encode( $sonuc['urunresim'] ).'"/>';
	echo '</div>';
	echo '<div style="float:left; margin:20 100 0 0;font-size:20px; font-family:Calibri;width:500px;" >';
	echo $sonuc['urunad'];
	echo '<hr style="background-color:#F5F5F5; margin:20px 0 20px 0; width:570px;"></hr>
	<b>Arayüz: </b>***<br/>
	<b>Bağlantı: </b>***<br/>
	<b>Tasarım: </b>***<br/>
	<b>Renk: </b>***<br/>
	<b>Mouse: </b>***<br/>
	';
	echo '</div>';
	echo '<div style="float:left; background-color:#F7F7F7; margin:20 0 0 0; border:1px solid #CACACA; width:500px; height:150px;">';
	echo '<div style="text-align:right; font-size:25px; background-color:white; width:480px; height:80px; margin:10 0 0 10; font-family:Calibri; font-weight:bold;">';
	echo $sonuc['urunfiyat'];echo " ₺</br>";
	echo '<b style="font-weight:normal; font-size:15px">';echo "KDV Dahil";echo '</b>';
	echo '</div>';
	echo '<div style="float:right; margin:15 0 0 0;">';
	echo '<a href="index.php?sayfa=urunler&sepetekleme='.$id.'" class="ozellestirbutton" style="font-size:18px; margin:15 10 0 0; padding:5 80;">SEPETE EKLE ►</a>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '<div style="float:left; width:100%; height:600px;">';
?>
	<div style="margin:20 0 0 170; float:left;">
	<div class="tabs">
		<div class="tab">
			<input name="checkbox-tabs-group" type="radio" id="checkbox1" class="checkboxtab" checked>
			<label for="checkbox1">Teknik Özellikleri</label>
			<div class="content">
			<?php
			$sql = "SELECT urunid,urunad,urunfiyat,urunresim FROM anasayfaurun where urunid='$id'";
			$sorgu = $baglanti->query($sql);
			$sonuc=mysqli_fetch_assoc($sorgu) ;
			echo '<div style="width:95%;">';
			echo '
			
			<table class="tekniktable" border="0px">
			<tr><td colspan="2" style="font-size:20px;border:0px solid black;">Model</td></tr>
			<tr>
			<td style="background-color:#F5F5F5;">
			Marka
			</td>
			<td>
			'.$sonuc['urunad'].'
			</td>
			</tr>
			<tr>
			<td style="background-color:#F5F5F5;">
			Urun Kod
			</td>
			<td>
			*****
			</td>
			</tr>
			<tr><td colspan="2" style="font-size:20px;border:0px solid black;">Detay</td></tr>
			<tr>
			<td style="background-color:#F5F5F5;">
			Bağlantı Tipi
			</td>
			<td>
			*****
			</td>
			</tr>
			<tr>
			<td style="background-color:#F5F5F5;">
			Kullanım Tipi
			</td>
			<td>
			*****
			</td>
			</tr>
			<tr>
			<td style="background-color:#F5F5F5;">
			Bağlantı Tipi
			</td>
			<td>
			*****
			</td>
			</tr>
			<tr>
			<td style="background-color:#F5F5F5;">
			Tasarım
			</td>
			<td>
			*****
			</td>
			</tr>
			<tr>
			<td style="background-color:#F5F5F5;">
			Bağlantı Girişi
			</td>
			<td>
			*****
			</td>
			</tr>
			</table>
			
			';
			echo '</div>'
			
			?>
			</div>
		</div>
		
		<div class="tab">
			<input name="checkbox-tabs-group" type="radio" id="checkbox2" class="checkboxtab">
			<label for="checkbox2">Yorumlar</label>
			<div class="content">
			<div style="padding:10 0 10 10; margin:0 0 0 0; width:96%; height:150px;">
			<form method="POST">
			<input type="text" class="yorumtext" name="yorumum" width="400px" height="60px"/><br/>
			<input class="yorumbutton" type="submit" name="yorumyap" value="Yorum Yap">
			</form>
			</div>
			<div style="width:100%;">
			<?php
			
			$sorgum="select yorumum,urun,kullanici from yorum where urun='$id'";
			foreach($baglanti->query($sorgum) as $row2)
			{
				echo '
				<div style="width:95%; height:80px; margin:0 0 5 20; border-bottom:1px solid #EAEAEA;">
				<p class="yorumyazi">'.$row2['yorumum'].'</p>
				<p class="yorumkullanici">'.$row2['kullanici'].'</p>
				
				</div>
				';
			}
			?>
			</div>
			
		
			</div>
		</div>
		
		<div class="tab">
			<input name="checkbox-tabs-group" type="radio" id="checkbox3" class="checkboxtab">
			<label for="checkbox3">Taksit Seçenekleri</label>
			<div class="content">
			<center>
			<img src="resim/taksit.png">
			</center>
			</div>
		</div>
	</div>
<?php
	echo '</div>';
	echo '</div>';

	echo '<div style="float:left; height:150px;width:100%;">
	<div class="alt123">
<center>
<img src="resim/altresim/alt1.png" class="imgsag1">
<img src="resim/altresim/alt2.png" class="imgsag1">
<img src="resim/altresim/alt3.png" class="imgsag1">
<img src="resim/altresim/alt4.png" class="imgsag1">
</center>
</div>
	</div>';
	
}
?>
</div>
<?php

if(isset($_GET['sepetekleme']))
{
	$idim=$_GET['sepetekleme'];
	setcookie('sepeturun['.$idim.']', $idim, time()+86400);
	header('Location:'.$_SERVER['HTTP_REFERER']);
}
if(isset($_POST['yorumyap'])){
	$yorum = $_POST['yorumum'];
	$urun=$id;
	$kullanici=$_SESSION["Kullaniciadi"]; 
	
	if($yorum!="" && $kullanici!=""){
	if($_POST)
			{
	
			$yenikayit = "INSERT INTO yorum values(NULL,'$yorum', '$kullanici','$urun' )";
			mysqli_query($baglanti,$yenikayit);
			header('Location:'.$_SERVER['HTTP_REFERER']);
			}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Yorum yapabilmen için giriş yapmalısın!")';
		echo '</script>';
		Exit;
		
	}
	
}
?>
</body>
</html>