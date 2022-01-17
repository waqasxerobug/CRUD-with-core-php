<?php include 'header.php';
if(isset($_POST['deletebtn'])){
  include 'connection.php';
  $stuId = $_POST['sid'];
  $deleteStudentDataQuery = "DELETE FROM student WHERE sid = {$stuId}";
  $deleteStudentDataResult = mysqli_query($conn,$deleteStudentDataQuery) or die("Query unsuccessfull");

  header("Location: http://localhost/crud/index.php");
  mysqli_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php  $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
