<?php
$stuId = $_GET['id'];
include 'connection.php';
$deleteDataQuery = "DELETE FROM student WHERE sid = {$stuId}";
$deleteDataResult = mysqli_query($conn,$deleteDataQuery) or die("Query unsuccessfull");

header("Location: http://localhost/crud/index.php");
mysqli_close($conn);

 ?>
