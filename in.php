<?php
session_start();

$_SESSION['cx30'] = $_POST['nvs'];
$_SESSION['cxc'] = $_POST['ows'];


header("Location: index1.php");
?>