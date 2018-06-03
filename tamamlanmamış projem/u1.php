<?php
class BaglantiHatasi extends Exception {}
try
{
	$baglanti=@mysqli_connect("localhost","root","");
}
catch(BaglantiHatasi $e)
{
	echo $e->getMessage();
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.butun{
width:850;
height:100%;
margin:auto;
}
.ana{
width:100%;
height:600;
margin:auto;
}
.table1{
float:left;
width:500;
height:524;
border:1px double #ddd;
border-collapse: collapse;
text-align:center;
margin:0 20 0 0;
}
.yazi1{
color:#039ddf;
font-size:23;
font-family:Calibri;
}
.yazi2{

font-size:18;
font-family:Calibri;
}
.table2{
font-family:Calibri;
height:280;
text-indent:;
}
a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {color:red;}
a:active {text-decoration: none;}
.a{
color:gray;
font-family:Calibri;
font-size:14;
}
.b1{
width:150;
height:40;
color:white;
background-color:red;
outline: none;
border-color:none;
border:0;
cursor:pointer;
}
.b2{
width:150;
height:40;
color:white;
background-color:black;
outline: none;
border-color:none;
border:0;
cursor:pointer;
}
.alt{
width:1000;
height:400;
border:1px solid #ddd;
border-radius:10px;
}
</style>
</head>
<body>
<div class="butun">
<div class="ana">
<a class="a" href="#">Anasayfa</a> <a style="font-size:14; color:gray;"></a>><a href="#" class="a">Oyuncu Koltukları</a><br/><br/>
<table border="1" class="table1">
<tr>
<td>
<img src="css/u1.jpg" width="350" height="520">
</td>
</tr>
</table>
<a class="yazi1">Calitte</a><br/><br/>
<a class="yazi2">Calitte Harley S3 Oyuncu Koltuğu</a>
<table class="table2">
<tr style="color:gray;">
<td>Ürün Ean Kodu
</td>
<td>
: BDPRXZ24
</td>
</tr>
<tr>
<td>
Ürünün Fiyatı
</td>
<td>
: <a  style="color:039ddf; font-size:28;">799,00 TL</a>
</td>
</tr>
<tr>
<td>
Kategori
</td>
<td>
: Oyuncu Koltukları
</td>
</tr>
<tr>
<td>
Türkiye<br/> Distribütör<br/> Garantili<br/> Üründür -<br/> Garanti Süresi
</td>
<td>
: 24 Ay
</td>
</tr>
<tr>
<td colspan="2">
<a style="color:gray;">139,82 TL</a> den başlayan taksitlerle!!
</td>
</tr>
<tr>
<td colspan="2">
<input class="b1" type="button" value="Sepete Ekle">
<input class="b2" type="button" value="Hemen Al">
</td>
</tr>
</table>
</div>
Ürün Yorumları
<div class="alt">

</div>
</div>
</body>
</html>