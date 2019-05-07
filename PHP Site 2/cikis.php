<?php
include 'baglanti.php';

session_destroy();
header ("Refresh: 0; url=index.php?sayfa=orta");

?>