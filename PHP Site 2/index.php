<html>
<head>
<meta charset="UTF-8"/>
<link href="css/anasayfa.css" media="screen" rel="stylesheet" type="text/css">
<link href="css/orta.css" media="screen" rel="stylesheet" type="text/css">
<title>itopya.com</title>
<script language="JavaScript">



</script>
</head>
<body>
<div style="width:1890px;">
<div id="usticerik">
<?php
	include('ust.php');
?>
</div>
<div id="ortaicerik">
<?php

$sayfalar_klasor='./';

if(!empty($_GET['sayfa'])){
	$sayfalar=scandir($sayfalar_klasor,0);
	unset($sayfalar[0],$sayfalar[1]);
	
$sayfa=$_GET['sayfa'];

if(in_array($sayfa.'.php', $sayfalar)){
	include($sayfa.'.php');
	
	
}
else{
	echo 'Aradığınız sayfa bulunamadı';
}
}
else{
	include('orta.php');

}


?>
</div>
<div id="alticerik">
<?php
	include('alt.php');
?>

</div>
</div>
</body>
</html>
