<?php
$servername ='localhost';
$username='root';
$password="";
$db="indhu";
$conn = mysqli_connect($servername,$username,$password,$db);
if(mysqli_connect_error($conn)){
    echo "Error";
}
?>