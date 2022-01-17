<?php
$stuId = $_POST['sid'];
$stuName = $_POST['sname'];
$stuAddress = $_POST['saddress'];
$stuClass = $_POST['sclass'];
$stuPhone = $_POST['sphone'];

include 'connection.php';
$updateDataQuery = "UPDATE  student SET sname ='{$stuName}',saddress ='{$stuAddress}',sclass ='{$stuClass}',sphone ='{$stuPhone}' WHERE sid = {$stuId}";
$updateDataResult = mysqli_query($conn,$updateDataQuery) or die("Query unsuccessfull");

header("Location: http://localhost/crud/index.php");
mysqli_close($conn);


 ?>
