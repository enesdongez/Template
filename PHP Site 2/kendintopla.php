<html>
<head>
<link href="css/anasayfa.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body style="">
<div class="kendintoplatum">
<div class="kendintoplaustpanel1">
<div class="kendintoplaustyazipanel1">
<b class="kendintoplayazi11">KENDİN TOPLA</b>
</div>
</div>

<div class="ortaurunsec">

<?php
include 'baglanti.php';
foreach($baglanti->query('select urunresim,urunad,urunfiyat,urunid,urunyazi from urunler') as $row){
?>
<div class="urundıspanel">
<div style="float:left; margin:-17 40 0 60;">
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['urunresim'] ).'"/>'; ?>
</div>
<div style="float:left; width:340px; margin:0 30 0 0;font-size:18px; font-family:Calibri;">
<?php echo $row['urunyazi'];?>
</div>
<div style="float:left; width:120px; margin:0 30 0 0;">
<?php echo $row['urunad'];?>
</div>
<div style="float:left;width:120px; margin:0 0 0 0;">
<?php echo $row['urunfiyat'];?> ₺<b style="font-weight:normal; font-size:12px;"> KDV Dahil</b>
</div>
<div style="float:left;">
<a href="index.php?sayfa=kendintopla&ekle=<?php echo $row['urunid']; ?>" class="listeyeekle">LİSTEYE EKLE ►</a>
</div>
</div>
<?php } ?>

</div>

<div class="ortaurungonder">
<div class="ortaurungoster">
<?php
/*
if(isset($_POST['ekle'])){
$add=$_SESSION["urun"]; 
$sql="select * from urunler where urunid='$add'";
$sorgu = $baglanti->query($sql);
while($sonuc=mysqli_fetch_assoc($sorgu) ){
    echo $sonuc["urunad"];  

}
}*/
?>
<?php

if(isset($_GET['ekle']))
{
	$id =$_GET['ekle'];
	setcookie('urun['.$id.']', $id, time()+86400);
	header('Location:'.$_SERVER['HTTP_REFERER']);
}

if(isset($_COOKIE['urun'])){
  foreach ($_COOKIE['urun'] as $key=>$val)
  {

	echo '<div style="border-bottom:1px solid black; width:90%; height:100px; font-size:20px; font-family:Calibri; float:left; margin:0 0 0 20;">';
	$sql = "SELECT urunad,urunfiyat,urunyazi,urunid FROM urunler where urunid='$val'";
	$sorgu = $baglanti->query($sql);
	while($sonuc=mysqli_fetch_assoc($sorgu) )
	{
	
	echo '<div style="float:left; height:80; padding:20 0 0 0; width:60%;">';
	echo $sonuc["urunyazi"];
	echo '</div>';
	echo '<div style="float:left; font-weight:bold;height:90; padding:10 0 0 0; text-align:right; width:34%;">';
	//echo '<input type="submit" name="cikart" value="x" style="background-color:transparent; font-family:Calibri; font-size:20px; font-weight:bold; border:0px solid black; cursor:pointer;"><br/>';
	echo '<a href="index.php?sayfa=kendintopla&cikar='.$sonuc["urunid"].'" style="text-decoration:none; color:black; ">x</a><br/>';
	echo $sonuc["urunfiyat"];echo "₺";
	echo '</div>';
	}
	echo '</div>';

  }
}
  if(isset($_GET['cikar'])){
		$id=$_GET['cikar'];
		setcookie('urun['.$id.']', $id, time()-86400);
	
	header('Location:'.$_SERVER['HTTP_REFERER']);
}

?>
</div>
<div class="ortaurunfiyatgoster">
<div style="float:left; width:445px; margin:10;  height:90px; background-color:white;">
Toplam Ürün:
<?php
$fiyat=0;
if(isset($_COOKIE['urun'])){
foreach ($_COOKIE['urun'] as $key=>$val){
$sql = "SELECT urunfiyat FROM urunler where urunid='$val'";
	$sorgu = $baglanti->query($sql);
	while($sonuc=mysqli_fetch_assoc($sorgu) )
	{
		$fiyat+=(int)$sonuc["urunfiyat"];
	}
		
}
}
echo '<b style="font-size:20px; font-family:Calibri;">';
echo $fiyat;
echo '₺</b>';
?>
</div>
<?php
if(isset($_GET['sepetekle']))
{
	foreach ($_COOKIE['urun'] as $key=>$val)
	{
	setcookie('sepeturun['.$val.']', $val, time()+86400);
	}
	foreach($_COOKIE['urun'] as $key => $val) 
		{
			setcookie('urun['.$key.']', $key, time() - 86400); 
		}
	header('Location:'.$_SERVER['HTTP_REFERER']);
	
}
?>
<a href="index.php?sayfa=kendintopla&sepetekle" style="float:right;"class="ozellestirbutton">SEPETE EKLE ►</a>
</div>
</div>
</div>


</div>
</body>
</html>