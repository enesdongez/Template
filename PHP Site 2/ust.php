<html>
<head>
<link href="css/anasayfa.css" media="screen" rel="stylesheet" type="text/css">

</head>
<body>
<div class="ustum">
<div class="ustyan1">
<div class="logo"><a  href="index.php?sayfa=orta"><img src="resim/logo.png"></a></div>
<div class="ustyan1button">
<nav class="ustmenubuttonlar">
<div style="float:left; width:800px; ">
<ul style="">
<?php 

if(isset($_GET['sayfa']) && $_GET['sayfa']!='orta')
{ 
echo '<li style="float:left;" class="urunleracilir"><b class="ustbtnbir">ÜRÜNLER <b style="font-size:12px;">▼</b></b>
<div class="urunleracilirdiv">
<ul>
               <li>Bilgisayar Parçaları ►
					<ul>
                        <div class="urunlerdizaltalt"></div>
                    </ul>
				</li>
				 <li>Bilgisayar ►
					<ul>
                        <div class="urunlerdizaltalt"></div>
                    </ul>
				</li>
				<li>Gaming / Oyun ►
				<ul>
                        <div class="urunlerdizaltalt"></div>
                    </ul>
				</li>
				<li>Çevre Birimleri ►
				<ul>
                        <div class="urunlerdizaltalt"></div>
                    </ul>
				</li>
				<li>Depolama / Disk ►
				<ul>
                        <div class="urunlerdizaltalt"></div>
                    </ul>
				</li>
				<li>Network ►
				<ul>
                        <div class="urunlerdizaltalt"></div>
                    </ul>
				</li>
				<li>Yazılım ►
				<ul>
                        <div class="urunlerdizaltalt"></div>
                    </ul>
				</li>
			
			
			
            </ul>
</div>

</li>';
} 

?>

<li style="float:left;position:relative; z-index:3; "><b class="ustbtnbir">KAMPANYALAR <b style="font-size:12px;">▼</b></b>
		<div class="acilirmenu">
            <ul>
                <li><a href="#">GÜNÜN ÜRÜNLERİ <img src="resim/listeucgen.png" style=" width:13; height:13; margin:0 0 0 120;"></a>
					 <ul>
                        <li><div style="background-color:white; width:500; height:400; border:1px solid black;">
						<?php
						include 'baglanti.php';
							$sql = "SELECT urunid,urunad,urunfiyat,urunresim FROM anasayfaurun where urunid='5' or urunid='3' or urunid='8'";
							$sorgu = $baglanti->query($sql);
							
							for($i=0;$i<3;$i++)
							{
								$sonuc=mysqli_fetch_assoc($sorgu) ;
								echo '<div style="width:160px; float:left;">';
								echo '<img style="width:130px; margin:0 0 20 0; height:130px;"src="data:image/jpeg;base64,'.base64_encode( $sonuc['urunresim'] ).'"/>';
								echo '<div style="width:120px; height:130; margin:0 0 0 10;float:left; font-size:15px; color:gray;">';
								echo $sonuc['urunad'];
								echo '</div>';
								echo '<div style="float:left; font-size:25px; height:40px; font-weight:bold; margin:20 0 30 0;color:gray;">';
								echo $sonuc['urunfiyat'];echo " ₺</br>";
								echo '</div>';
							
								echo '<a href="index.php?sayfa=orta&sepet='.$sonuc['urunid'].'" style="font-size:19px; font-weight:bold;">SEPETE EKLE  ►</a>';
							
								echo '</div>';
							}
								if(isset($_GET['sepet']))
								{
								$id =$_GET['sepet'];
								setcookie('sepeturun['.$id.']', $id, time()+86400);
								header('Location:'.$_SERVER['HTTP_REFERER']);
							}
				
				?>
						</div></li>
                    </ul>
				</li>
                <li><a href="#">FIRSAT ÜRÜNLERİ <img src="resim/listeucgen.png" style=" width:13; height:13; margin:0 0 0 130;"></a>
                    <ul>
                        <li><div style="	background-color:white;width:500; height:400; border:1px solid black;">
							<?php
						include 'baglanti.php';
							$sql = "SELECT urunid,urunad,urunfiyat,urunresim FROM anasayfaurun where urunid='7' or urunid='2' or urunid='1'";
							$sorgu = $baglanti->query($sql);
							
							for($i=0;$i<3;$i++)
							{
								$sonuc=mysqli_fetch_assoc($sorgu) ;
								echo '<div style="width:160px; float:left;">';
								//echo '<a href="index.php?sayfa=urunler&id='.$sonuc['urunid'].'"><img style="width:130px; margin:0 0 20 0; height:130px;"src="data:image/jpeg;base64,'.base64_encode( $sonuc['urunresim'] ).'"/></a>';
								echo '<img style="width:130px; margin:0 0 20 0; height:130px;"src="data:image/jpeg;base64,'.base64_encode( $sonuc['urunresim'] ).'"/>';
								echo '<div style="width:120px; height:130; margin:0 0 0 10;float:left; font-size:15px; color:gray;">';
								echo $sonuc['urunad'];
								echo '</div>';
								echo '<div style="float:left; font-size:25px; height:40px; font-weight:bold; margin:20 0 30 0;color:gray; text-align:center;">';
								echo $sonuc['urunfiyat'];echo " ₺</br>";
								echo '</div>';
								echo '<div style="float:left;">';
								echo '<a href="index.php?sayfa=orta&sepet='.$sonuc['urunid'].'" style="font-size:19px; font-weight:bold;">SEPETE EKLE  ►</a>';
								echo '</div>';
								echo '</div>';
							}
								if(isset($_GET['sepet']))
								{
								$id =$_GET['sepet'];
								setcookie('sepeturun['.$id.']', $id, time()+86400);
								header('Location:'.$_SERVER['HTTP_REFERER']);
							}
				
				?>
						</div></li>
                    </ul>
                </li>
                <li><a href="#">MARKALARA ÖZEL KAMPANYA <img src="resim/listeucgen.png" style=" width:13; height:13; margin:0 0 0 36;"></a>
                    <ul>
                        <li><div style="	background-color:white;width:500; height:400; border:1px solid black;">	<?php
						include 'baglanti.php';
							$sql = "SELECT urunid,urunad,urunfiyat,urunresim FROM anasayfaurun where urunid='4' or urunid='6' or urunid='9'";
							$sorgu = $baglanti->query($sql);
							
							for($i=0;$i<3;$i++)
							{
								$sonuc=mysqli_fetch_assoc($sorgu) ;
								echo '<div style="width:160px; float:left;">';
								//echo '<a href="index.php?sayfa=urunler&id='.$sonuc['urunid'].'"><img style="width:130px; margin:0 0 20 0; height:130px;"src="data:image/jpeg;base64,'.base64_encode( $sonuc['urunresim'] ).'"/></a>';
								echo '<img style="width:130px; margin:0 0 20 0; height:130px;"src="data:image/jpeg;base64,'.base64_encode( $sonuc['urunresim'] ).'"/>';
								echo '<div style="width:120px; height:130; margin:0 0 0 10;float:left; font-size:15px; color:gray;">';
								echo $sonuc['urunad'];
								echo '</div>';
								echo '<div style="float:left; font-size:25px; height:40px; font-weight:bold; margin:20 0 30 0;color:gray; text-align:center;">';
								echo $sonuc['urunfiyat'];echo " ₺</br>";
								echo '</div>';
								echo '<div style="float:left;">';
								echo '<a href="index.php?sayfa=orta&sepet='.$sonuc['urunid'].'" style="font-size:19px; font-weight:bold;">SEPETE EKLE  ►</a>';
								echo '</div>';
								echo '</div>';
							}
								if(isset($_GET['sepet']))
								{
								$id =$_GET['sepet'];
								setcookie('sepeturun['.$id.']', $id, time()+86400);
								header('Location:'.$_SERVER['HTTP_REFERER']);
							}
				
				?></div></li>
                    </ul>
                </li>
                
            </ul>
            
        </div>
</li>
<li style="float:left; position:relative; "><b class="ustbtnbir"><a href="index.php?sayfa=kendintopla" style="text-decoration:none; color:black;">KENDİN TOPLA</a></b></li>
</ul>
</div>

</nav>
<div style="left;">

</div>
</div>
</div>
<div class="ustyan2">
<div class="ustyan2link">
<?php
include 'baglanti.php';
$a=0;
$sayac=0;
if(isset($_COOKIE['sepeturun'])){
foreach ($_COOKIE['sepeturun'] as $key=>$val)
{
	$sql = "SELECT urunad,urunfiyat,urunid FROM anasayfaurun where urunid='$val'";
	$sorgu = $baglanti->query($sql);
	while($sonuc=mysqli_fetch_assoc($sorgu) )
	{
		$sayac+=1;
		 $a+=$sonuc["urunfiyat"];
	}
}
}

if(empty($_SESSION["Kullaniciadi"])){
	
?>
<a href="#" class="ustyan2yazi">Kolay Topla</a>
<a href="index.php?sayfa=magazamiz" class="ustyan2yazi">Mağazamız</a>
<a href="index.php?sayfa=kayitol" class="ustyan2yazi">Kayıt Ol</a>
<a href="index.php?sayfa=giris" class="ustyan2yazi">Giriş Yap</a>
<a href="#" class="ustyan2yazi">Karşılaştır</a>
<a href="index.php?sayfa=sepet" class="ustyan2yazi"><?php echo $a; echo " ₺ "; echo "($sayac Ürün)";?> </a>
<a href="#" class="ustyan2yazi">İstek Listesi</a>
<?php
}
else{
?>
<a href="#" class="ustyan2yazi">Kolay Topla</a>
<a href="index.php?sayfa=magazamiz" class="ustyan2yazi">Mağazamız</a>
<a href="index.php?sayfa=profil" class="ustyan2yazi">Hoşgeldiniz 
<?php 

$add=$_SESSION["Kullaniciadi"]; 
$sql="select adi,soyadi from kullanicilar where kullanici_adi='$add'";
$sorgu = $baglanti->query($sql);
while( $sonuc=mysqli_fetch_assoc($sorgu) ){
    echo $sonuc["adi"];  
echo " ";	
    echo $sonuc["soyadi"];     
  
}

?></a>
<a href="index.php?sayfa=profil" class="ustyan2yazi">Profil</a>
<a href="index.php?sayfa=cikis" class="ustyan2yazi">Çıkış Yap</a>
<a href="#" class="ustyan2yazi">Karşılaştır</a>
<a href="index.php?sayfa=sepet" class="ustyan2yazi"><?php echo $a; echo " ₺ "; echo "($sayac Ürün)";?> </a>
<a href="#" class="ustyan2yazi">İstek Listesi</a>

<?php
}
?>
</div>
<div class="ustyan2simge">
<img src="resim/simge.png" style="float:right;"/>
</div>
<div class="ustyan2arama"><input type="text" class="sitearama" style="text-indent:10px;" placeholder="Anahtar kelime, model # veya ürün #"></div>
</div>
</div>
</body>
</html>
