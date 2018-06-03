<html>
<head>
<meta charset="utf-8";>
</meta>
<style type="text/css">
.ana{
width:100%;
height:500;
color:#4D4D4D;
font-weight:bold;
font-size:20;
font-family:calibri;
float:center;
}

.hr{
width:980;

color:#ddd;
}
table{
margin:0 0 0 0;
width:990;
height:500;
color:#666666;
font-weight:normal;
font-family:calibri;
font-size:14;
float:center;
}
td{

}

.check{

}
.textbox{
width:210;
height:26;
border-radius:5px;
background: white; 
border: 1px double #DDD; 
color: #666; 
outline: none;  
}
.textbox:focus{
box-shadow:0px 0px 10px 0px;

border-color:white;
}
.button1{
border: 1px double #DDD; 
background-color:#039ddf;
border-color:#039ddf;
color:white;
width:66;
height:28;
outline: none;
}
.button1:hover{
background-color:black;
border-color:black;
}
.button2{
border: 1px double #DDD; 
background-color:rgb(102, 102, 102);
border-color:rgb(102, 102, 102);
color:white;
width:57;
height:28;
outline: none;
}
.button2:hover{
background-color:#039ddf;
border-color:#039ddf;
}
.radio{
border: 1px double #DDD; 
}
.check{
border: 1px double #DDD; 
}
body{
float:center;
}
.yazi{
color:#4D4D4D;
font-weight:bold;
font-size:20;
font-family:calibri;
}
</style>
<script language="JavaScript1.2">
function rasteleSembol() {

var maske = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
var sonuc = '';
var tut='';
var tut1='';
var tut2='';
var renk=new Array("red", "purple", "orange","yellow", "blue","green","pink", "brown","maroon","grey");
for (var i = 0; i <5; i++) 
{
tut = maske[Math.floor(Math.random() * maske.length)];
tut1=tut.fontcolor(Math.random() * renk.length);
tut2=tut1.fontsize(5);
sonuc+=tut2;
}

return sonuc;
}
</script>
</head>
<body>
<center>
<div class="ana">
<table border="0" style=" width:980; height:30;">
<tr>
<td class="yazi">Yeni Üyelik<td>
</tr>
<tr>
<td>
<hr class="hr"></hr>
</td>
</tr>
<table>
<table border="0">
<tr>
<td>Adı</td>
<td>:&nbsp;<input type="text" class="textbox">&nbsp;*</td>
</tr>
<tr>
<td>Soyadı</td>
<td>:&nbsp;<input type="text" class="textbox">&nbsp;*</td>
</tr>
<tr>
<td>Email</td>
<td>:&nbsp;<input type="email" class="textbox">&nbsp;*</td>
</tr>
<tr>
<td>Şifre</td>
<td>:&nbsp;<input type="password" class="textbox">&nbsp;*</td>
</tr>
<tr>
<td>Şifre Tekrar</td>
<td>:&nbsp;<input type="password" class="textbox">&nbsp;*</td>
</tr>
<tr>
<td>Cinsiyet</td>
<td>:&nbsp;<input type="radio" name="gender" value="male" class="radio" checked>Bay&nbsp;
  <input type="radio" class="radio" name="gender" value="female">Bayan</td>
</tr>
<tr>
<td>Cep Telefonu</td>
<td>:&nbsp;<input type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" class="textbox">&nbsp;*</td>
</tr>
<tr>
<td>Güvenlik Kodu</td>
<td style=" color:black;">:&nbsp;
<script style="font-size:25;">
document.write(rasteleSembol());
</script>
</td>
</tr>
<tr>
<td>Güvenlik Kodu</td>
<td>:&nbsp;<input type="text" style="width:160" class="textbox">&nbsp;*</td>
</tr>
<tr>
<td>Mail Listesi</td>
<td>:&nbsp;<input type="checkbox" class="check" name="vehicle" class="check"> Kampanyalardan haberdar olmak istiyorum</td>
</tr>
<tr>
<td>Üyelik Sözleşmesi</td>
<td>:&nbsp;<input type="checkbox" class="check" name="vehicle" class="check"> Üyelik sözleşmesini kabul ediyorum.&nbsp;*</td>
</tr>
<tr>
<td></td>
<td>&nbsp;<input type="button" class="button1"value="Kaydet">&nbsp;&nbsp;<input type="button" value="İptal" class="button2"> </td>
</tr>
</table>


</div>
<center>
</body>
</html>