<?php 
session_start();
$baglanti=mysqli_connect("localhost","root","","sinav"); 
if(empty($_SESSION["kullanici"])){
?>
<div style="width:100%; height:60px;">
<form method="POST">
<input type="text" name="ad" placeholder="ad"/>
<input type="text" name="sifre"placeholder="sifre"/>
<input type="submit" name="giris" value="Giriş"/>

</form>
</div>
<?php
}else{
?>
<div style="width:100%; height:60px;">
<form method="POST">
<input type="text" name="yazi"/>
<input type="submit" name="yorum" value="Yorum Yap"/>
<a href="giris.php?cikis">Çıkış Yap</a>
</form>
</div>
<?php } 
$sql3="select * from yorum";
$sorgu=mysqli_query($baglanti,$sql3);
while($sonuc3=mysqli_fetch_assoc($sorgu)){
	echo '<div style="width:100%; height:100px; margin:5 0 0 0; border:1px solid black;">';
	echo '<div style="width:100%; height:20px; border:1px solid black;">';
	echo $sonuc3['kullaniciadi'];echo " yorum yaptı.";
	echo '</div>';
	echo $sonuc3['yazi'];
	echo '</br>';
	$yorumum=$sonuc3['id'];
	$sql7="select * from begeni where yorum_id='$yorumum'";
	$sorgu3=mysqli_query($baglanti,$sql7);
	echo "Begeni(";echo mysqli_num_rows($sorgu3);echo ")";
	echo '</br>';
	while($sonuc4=mysqli_fetch_assoc($sorgu3)){
		echo $sonuc4['kullanici'];echo "-";
	}
	
	echo '</br>';
	if(!empty($_SESSION["kullanici"])){
	$kullanici=$_SESSION["kullanici"];
	$yorumum=$sonuc3['id'];
	$sql6="select * from begeni where kullanici='$kullanici' and yorum_id='$yorumum'";
	$kontrol=mysqli_num_rows(mysqli_query($baglanti,$sql6));
	if($kontrol<1){
			echo '<a href="giris.php?begen='.$sonuc3['id'].'">Begen</a>';
	}else{
	 	    echo '<a href="giris.php?begenme='.$sonuc3['id'].'">Begenmekten Vazgeç</a>';

	}
	}
	echo '</div>';
}

?>

<?php 
	if(isset($_POST["giris"])){
		$kullanici_adi = $_POST['ad'];
		$sifre = $_POST['sifre'];
		$sql = "SELECT * FROM kullanici where ad='$kullanici_adi' and sifre='$sifre'";
		$sonuc = mysqli_query($baglanti,$sql);
			if ($sonuc->num_rows > 0) 
			{
				$_SESSION["kullanici"]=$kullanici_adi;
			    header ("Location:giris.php");
			}
	}
	
	if(isset($_GET["cikis"])){
		session_destroy();
		header ("Location:giris.php");
	}
	
	if(isset($_POST["yorum"])){
		$yorum = $_POST['yazi'];
    	$kullanici=$_SESSION["kullanici"];
		$sql2="insert into yorum (yazi,kullaniciadi) value('$yorum','$kullanici')";
		mysqli_query($baglanti,$sql2);
		header ("Location:giris.php");
	}
	
	if(isset($_GET["begen"])){
		$yorum=$_GET["begen"];
		$kullanici=$_SESSION["kullanici"];
		$sql5="insert into begeni(kullanici,yorum_id) values('$kullanici','$yorum')";
		mysqli_query($baglanti,$sql5);
		header ("Location:giris.php");
	}
	if(isset($_GET["begenme"])){
		$yorum=$_GET["begenme"];
		$kullanici=$_SESSION["kullanici"];
		$sql6="DELETE FROM `begeni` WHERE yorum_id='$yorum' and kullanici='$kullanici'";
		mysqli_query($baglanti,$sql6);
		header ("Location:giris.php");
		
	}
	
?>