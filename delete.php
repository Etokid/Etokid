<?php

include 'connection.php';
$did = $_GET['did'];


$sql = $db->prepare("DELETE FROM products WHERE IID='$did'");
$sql->execute();

header('location: updatedelete.php');
?>