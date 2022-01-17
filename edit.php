<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'connection.php';
    $stuId = $_GET['id'];
    $fetchStudentDataQuery = "SELECT * FROM student  WHERE sid = {$stuId}";
    $fetchStudentDataResult = mysqli_query($conn,$fetchStudentDataQuery) or die("Query unsuccessfull");

    if(mysqli_num_rows($fetchStudentDataResult) > 0){
      while($studentData = mysqli_fetch_assoc($fetchStudentDataResult)){
     ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $studentData['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $studentData['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $studentData['saddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
            $fetchClassDataQuery = "SELECT * FROM studentclass";
            $fetchClassDataResult = mysqli_query($conn,$fetchClassDataQuery) or die("Query unsuccessfull");

            if(mysqli_num_rows($fetchClassDataResult) > 0){
              echo "<select name='sclass'>";
              while($classData = mysqli_fetch_assoc($fetchClassDataResult)){
                if($studentData['sclass'] == $classData['cid'])
                {
                  $select = selected;
                }
                else{
                  $select = "";
                }
              echo "<option {$select} value='{$classData['cid']}'>{$classData['cname']}</option>";
            }
          echo "</select>";
        }
          ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $studentData['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }
      }
    else{
            echo "<h2>Record Not Found</h2>";
        }
     ?>
</div>
</div>
</body>
</html>
