<html>
<head>
<meta http-equiv="Content-Type" content="text/HTML; charset=ISO-8859-9"/>


<style type="text/css">
.yazi2{
	font-family:Arial,Helvetica,sans-serif;
    font-weight: bold;
	color:#039ddf;
	font-size:16;
}
.ortaust{
	width:735;
	height:400;
	float:left;
	color:#039ddf;
	margin:20 0 0 10;
	font-family:Arial,Helvetica,sans-serif;
    font-weight: bold;
}
.kutu{
width:240;
height:400;
padding:0 0 0 0;
}

a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: none;}
a:active {text-decoration: none;}
.a11{
color:gray;
font-size:14;
font-family:Calibri;
}
.a11:hover{
color:gray;
}

.fiyat{
margin:auto;
color:#039ddf;
	font-size:17;
	font-weight:bold;
	margin:0 0 5 0;
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

.bg{
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
<script type="text/javascript" src="script.js"></script>
<link href="css/alt.css" media="screen" rel="stylesheet" type="text/css" >
</head>
<body>
<meta charset="utf-8";>
</meta>
<div style="width:100%; height:1990; background-color:; margin:0 0 0 0;">
<center>
<div class="galeri">
<p class="app"><script language="JavaScript1.2">
var slideshow_width='985px' 
var slideshow_height='300px' 
var pause=900
var fadeimages=new Array()
fadeimages[0]="css/resim/pictures_1_1.jpg"
fadeimages[1]="css/resim/pictures_1_2.jpg"
fadeimages[2]="css/resim/pictures_1_3.jpg"
fadeimages[3]="css/resim/pictures_1_5.jpg"
fadeimages[4]="css/resim/pictures_1_6.jpg"
fadeimages[5]="css/resim/pictures_1_7.jpg"
fadeimages[6]="css/resim/pictures_1_1.jpg"
fadeimages[7]="css/resim/pictures_1_5.jpg"
var preloadedimages=new Array()
for (p=0;p<fadeimages.length;p++){
preloadedimages[p]=new Image()
preloadedimages[p].src=fadeimages[p]
}
var ie4=document.all
var dom=document.getElementById
if (ie4||dom)
document.write('<div style="position:relative;width:'+slideshow_width+';height:'+slideshow_height
+';overflow:hidden"><div  id="canvas0" style="position:absolute;width:'+slideshow_width+';height:'+slideshow_height
+';top:0;left:0;filter:alpha(opacity=10);-moz-opacity:10"></div><div id="canvas1" style="position:absolute;width:'+slideshow_width+';height:'+
slideshow_height+';top:0;left:0;filter:alpha(opacity=10);-moz-opacity:10"></div></div>')
else
document.write('<img name="defaultslide" src="'+fadeimages[0]+'">')
var curpos=10
var degree=10
var curcanvas="canvas0"
var curimageindex=0
var nextimageindex=1
function fadepic(){
if (curpos<100){
curpos+=10
if (tempobj.filters)
tempobj.filters.alpha.opacity=curpos
else if (tempobj.style.MozOpacity)
tempobj.style.MozOpacity=curpos/100
}
else{
clearInterval(dropslide)
nextcanvas=(curcanvas=="canvas0")? "canvas0" : "canvas1"
tempobj=ie4? eval("document.all."+nextcanvas) : document.getElementById(nextcanvas)
tempobj.innerHTML='<img src="'+fadeimages[nextimageindex]+'">'
nextimageindex=(nextimageindex<fadeimages.length-1)? nextimageindex+1 : 0
setTimeout("rotateimage()",pause)
}
}
function rotateimage(){
if (ie4||dom){
resetit(curcanvas)
var crossobj=tempobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.style.zIndex++
var temp='setInterval("fadepic()",50)'
dropslide=eval(temp)
curcanvas=(curcanvas=="canvas0")? "canvas1" : "canvas0"
}
else
document.images.defaultslide.src=fadeimages[curimageindex]
curimageindex=(curimageindex<fadeimages.length-1)? curimageindex+1 : 0
}

function resetit(what){
curpos=10
var crossobj=ie4? eval("document.all."+what) : document.getElementById(what)
if (crossobj.filters)
crossobj.filters.alpha.opacity=curpos
else if (crossobj.style.MozOpacity)
crossobj.style.MozOpacity=curpos/100
}

function startit(){
var crossobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.innerHTML='<img src="'+fadeimages[curimageindex]+'">'
rotateimage()
}

if (ie4||dom)
window.onload=startit

else
setInterval("rotateimage()",pause)

</script>
</p>
</div>
</center>
<div class="yan1">
<b>DANI&#350;MA HATTI</b>
<hr></hr>
<img src="css/resim/danismahatti.png"  style="margin:0 0 12 0;">
<b>&#220;R&#220;N GRUPLARI</b>
<hr style="margin:0 0 12 0;"></hr>
<ul style=" margin:0 0 0 -23;">
<li class="yanli"><a href="#">Kulakl&#305;k</a></li>
<li class="yanli"><a href="#">Klavye</a></li>
<li class="yanli"><a href="#">Mouse</a></li>
<li class="yanli"><a href="#">MousePad</a></li>
<li class="yanli"><a href="#">Stream Kamera</a></li>
<li class="yanli"><a href="#">Mikrofon</a></li>
<li class="yanli"><a href="#">Ses Kartlar&#305;</a></li>
<li class="yanli"><a href="#">Oyun Bilgisayar&#305;</a></li>
<li class="yanli"><a href="#">Oyuncu Monit&#246;r&#252;</a></li>
<li class="yanli"><a href="#">Oyun Notebooku</a></li>
<li class="yanli"><a href="#">Ta&#351;&#305;ma &#199;antalar&#305;</a></li>
<li class="yanli"><a href="#">Bilgisayar Par&#231;alar&#305;</a></li>
<li class="yanli"><a href="#">Oyuncu Koltuklar&#305;</a></li>
<li class="yanli"><a href="#">Oyuncu Aksesuarlar&#305;</a></li>
<li class="yanli"><a href="#">GamePad ve Joystick</a></li>
<li class="yanli"><a href="#">Ses Sistemleri</a></li>
<li class="yanli"><a href="#">U&#231;u&#351; Similasyon &#220;r&#252;nleri</a></li>
<li class="yanli"><a href="#">Te&#351;hir &#220;r&#252;nleri</a></li>
<li class="yanli"><a href="#">&#214;zel Kampanyalar</a></li>
<li class="yanli"><a href="#">G-Man Bundle</a></li>
<li class="yanli"><a href="#">Xbox Konsol Modelleri</a></li>
</ul>
<b style="margin:18 0 0 0;">MARKA ARAMA</b>
<hr style="margin:0 0 12 0;"></hr></br>
<h5 style="color:black; text-indent:67; margin:0 0 10 0;">H&#305;zl&#305; Marka Arama</h5>
<select>
	<option>Marka Se&#231;iniz</option>
	<option>Razer</option>
	<option>Amd</option>
	<option>Dell</option>
	<option>Corsair</option>
</select>
<a class="yazi" href="#">T&#220;M MARKALAR</a></br></br></br>
<b style="margin:100 0 0 0;">TEKN&#304;K DESTEK HATTI</b>
<hr style="margin:0 0 12 0;"></hr>
<img src="css/resim/teknikdestek.png"  style="margin:0 0 12 0;">
<b style="margin:50 0 0 0;">FACEBOOK</b>
<hr style="margin:0 0 12 0;"></hr></br>
<img src="css/resim/facebook.png"  style="margin:0 0 0 30;">
</div>
<div class="ortaust">
<b style="margin:14 20 7.5 0; float:left;"><a href="populer.php" class="yazi2" target="enes">POP&#220;LER &#220;R&#220;NLER</a></b>
<b style="margin:14 20 7.5 0; float:left;"><a href="eniyi.php" class="yazi2" target="enes">EN &#304;Y&#304;LER</a></b>
<b style="float:left; margin:14 20 7.5 0;"><a href="indirim.php" class="yazi2" target="enes">&#304;ND&#304;R&#304;MDEK&#304;LER</a></b>
<hr style="float:left; width:735; margin:0 0 0 0;"></hr>

<iframe name="enes" width="780px" height="380px" src="populer.php" frameborder="0" style="opacity: 1.0; filter: alpha(opacity=100); float:left;" scrolling="no"  >
</iframe>
</div>
<div class="ortaalt">
<hr style="float:left; width:735; margin:35 0 15 0;"></hr>
<b style="">V&#304;TR&#304;NDEK&#304;LER 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
<hr style="float:left; width:735; margin:15 0 50 0;"></hr>



<div style="width:780; height:1150; margin:auto; margin:0 0 0 0; ">
<div class="kutu">
<table border="1" bordercolor="#ddd" cellpadding="10" cellspacing="10" >
<tr>
<td border="1">
<a href="#" class="a11"><img src="css\php\resim\4.png"  width="205" height="220">

SteelSeries Nimbus Kablosuz Oyun Kumandas&#305;
</a>
</br>

<p class="fiyat" style="margin:auto; text-align:center; text-decoration:none;">

<?php
$fiyat=341.02;
echo $fiyat;
?>&nbsp;TL
</p><br/><br/>
<b class="bg" style="float:left;"><input type="checkbox" name="vehicle">&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#" class="a11"><img src="css\php\resim\5.png" width="205" height="220">

Trust 21702 Muzo Wireless Bluetooth Mavi Hoparl&#246;r
</a>
</br>

<p class="fiyat">
<a>
<del>
<?php
echo 99.99;
?>&nbsp;TL
</del>
</a>&nbsp;&nbsp;
<?php
$fiyat2=73.90;
echo $fiyat2;
?>&nbsp;TL
</p>
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#" class="a11"><img src="css\php\resim\6.jpg" width="205" height="220">

Corsair HS50 Carbon Stereo Oyuncu Kulakl&#305;&#287;&#305;
</a>
</br>

<p class="fiyat">
<?php
$fiyat3=299;
echo $fiyat3;
?>&nbsp;TL
</p>
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
</tr>
<tr>
<td border="1">
<a href="#" class="a11"><img src="css\php\resim\7.jpg"  width="205" height="220">

AOC AGON 23.8'' AG241QX 144Hz 1ms ADAPT&#304;VE-SYNC 2K Oyuncu Monit&#246;r&#252;</a>
</br>

<p class="fiyat">
<a>
<del>
<?php
echo 2.323,34;
?>&nbsp;TL
</del>
</a>&nbsp;&nbsp;
<?php
$fiyat=1641.64;
echo $fiyat;
?>&nbsp;TL
</p>
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#" class="a11"><img src="css\php\resim\8.jpg" width="205" height="220">

Sapphire NITRO+ RADEON RX 580 8GB GDDR5 SPECI Ekran Kart&#305; 11265-21-20G
</a>
</br>

<p class="fiyat">

<?php
$fiyat2=3006.65;
echo $fiyat2;
?>&nbsp;TL
</p>
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#" class="a11"><img src="css\php\resim\3.png" width="205" height="220">

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
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
</tr>
<tr>
<td border="1">
<a  href="u1.php" class="a11" onclick="myFunction5()" target="|blank"><img src="css\php\resim\1.png"  width="205" height="220">

Calitte Harley S3 Oyuncu Koltu&#286;u 
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
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#" class="a11"><img src="css\php\resim\2.png" width="205" height="220">

HP Omen 300 Extended MousePad
</a>
</br>

<p class="fiyat">

<?php
$fiyat2=99;
echo $fiyat2;
?>&nbsp;TL
</p>
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
<td>
<a href="#" class="a11"><img src="css\php\resim\7.jpg" width="205" height="220">

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
<b class="bg"><input type="checkbox" name="vehicle">&nbsp;&nbsp;Kar&#351;&#305;la&#351;t&#305;r</b>
<input type="button" class="button" value="Sepet">
</td>
</tr>
</table>
</div>
</div>
</div>


</div>
</body>
</html>