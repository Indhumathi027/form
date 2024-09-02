<?
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:skyblue;
            background-image: url("https://www.clipartmax.com/png/middle/187-1876320_best-college-in-coimbatore-rathinam-college-of-arts-and-science-coimbatore-logo.png");

            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="color:black">registration form</h1>
      <form action="#" method="post">
        <label>Name:</label>
        <input type="text" id="name" name="name" >
        <br>
        <label>Age:</label>
        <input type="number" id="age" name="age">
        <br>
        <label>DOB</label>
        <input type="dob" id="dob" name="dob">
        <br>
        <input type="submit" id="submit" name="submit">
    </form>
        
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $date=new Date($_POST['DOB']);
    $dob=$date->format('y-m-d');
    echo"<table border='1'><tr><th>name:</th></tr><td>$name</td>";
    echo "</tr></table>";

}
    ?>


