<?php
$stuName = $_POST['sname'];
$stuAddress = $_POST['saddress'];
$stuClass = $_POST['class'];
$stuPhone = $_POST['sphone'];

include 'connection.php';
$insertDataQuery = "INSERT INTO student(sname,saddress,sclass,sphone)
        VALUES ('{$stuName}','{$stuAddress}','{$stuClass}','{$stuPhone}')";
$insertDataResult = mysqli_query($conn,$insertDataQuery) or die("Query unsuccessfull");

header("Location: http://localhost/crud/index.php");
mysqli_close($conn);

 ?>
