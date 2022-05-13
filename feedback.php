<?php
include 'connection.php';

try{
    $sql="INSERT INTO feedback(yourname,email,phno,feedback) VALUES (?,?,?,?)";
    $sq=$db->prepare($sql);
    $yourname=$_POST['yourname'];
    $email=$_POST['email'];
    $phno=$_POST['phno'];
    $feedback=$_POST['feedback'];
    if ($sq->execute(array($yourname,$email,$phno,$feedback))) {
        echo "<script>alert('message send');
    window.location.href='Contact.php';</script>";
    }
    else{
        
    }
} catch(Exception $e){
    $e->getMessage();
}

?>