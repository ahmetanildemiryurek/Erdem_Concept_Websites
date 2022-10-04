<?php


include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "Admin sayfasina hosgeldiniz..<br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}

?>