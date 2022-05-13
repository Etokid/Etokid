<?php
include 'connection.php';
$iid = $_POST['id'];
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];

$newimg = $_FILES['newimg']['name'];
$oldimg = $_POST['oldimg'];

if ($newimg != "") {
    $updatephoto = $newimg;
    move_uploaded_file($_FILES['newimg']['tmp_name'], "images/".$newimg);
}
else {
    $updatephoto = $oldimg;
}

$sql = $db->prepare("UPDATE item SET iid='$iid', name='$name', category='$category',
                price='$price', photo='$updatephoto' WHERE iid='$iid'");
$sql->execute();
header("location: updatedelete.php");
?>