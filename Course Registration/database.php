<?php 
$cnn=mysqli_connect("localhost","root","StudentA","dbproject");
if(!$cnn){
    die("Error retriving data:".mysqli_connect_error($cnn));
}
?>