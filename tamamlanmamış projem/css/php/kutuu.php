<html>
<head>
<meta charset="utf-8";>
</meta>
<style type="text/css">
.kutuu{
width:240;
height:400;
padding:0 0 0 0;


}

a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: none;}
a:active {text-decoration: none;}
a{
color:gray;
font-size:14;
font-family:Calibri;
}
a:hover{
color:gray;
}

.fiyat{
text-align:center;
color:#039ddf;
	font-size:17;
	font-weight:bold;
	
}
del{
	color:black;
	font-size:14;
	font-weight:normal;
	text-decoration:line-through;
}
table{
	
	border:0 double #ddd; 
	
	font-size:14;
	color:gray;
	font-family:Calibri;
	text-align:center;
	width:470;
	height:310;
}
td{
	
	border-radius:5;
}

b{
	font-size:14;
	float:left;
	color:gray;
	font-family:Calibri;
	font-weight:normal;
}
.button{
	outline: none;
border-color:none;
background-color:#039ddf;
border:0;
color:white;
cursor:pointer;
float:right;
width:49;
height:20;
margin:0 5 5 0;
font-size:14;
}
</style>
</head>
<body>
<div class="kutuu">
<table border="1" bordercolor="#ddd" cellpadding="10" cellspacing="10" >
<tr>
<td border="1">
<a href="enes/u1.html" onclick="myFunction5()" target="|blank"><img src="resim/1.png"  width="205" height="220">

Calitte Harley S3 Oyuncu Koltuğu
</a>
</br>

<p class="fiyat">
<a>
<del>
<?php
echo 1299;
?>&nbsp;TL
</del>
</a>&nbsp;&nbsp;
<?php
$fiyat=799;
echo $fiyat;
?>&nbsp;TL
</p>
<b class="yazi"><input type="checkbox" name="vehicle">&nbsp;Karşılaştır</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#"><img src="resim/2.png" width="205" height="220">

HP Omen 300 Extended MousePad
</a>
</br>

<p class="fiyat">

<?php
$fiyat2=99;
echo $fiyat2;
?>&nbsp;TL
</p>
<b class="yazi"><input type="checkbox" name="vehicle">&nbsp;Karşılaştır</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#"><img src="resim/3.png" width="205" height="220">

Corsair Glaive RGB Optik 16000DPI Siyah Gaming Mouse
</a>
</br>

<p class="fiyat">
<a>
<del>
<?php
echo 499;
?>&nbsp;TL
</del>
</a>&nbsp;&nbsp;
<?php
$fiyat3=329;
echo $fiyat3;
?>&nbsp;TL
</p>
<b class="yazi"><input type="checkbox" name="vehicle">&nbsp;Karşılaştır</b>
<input type="button" class="button" value="Sepet">
</td>
</tr>
</table>
</div>

</body>
</html>