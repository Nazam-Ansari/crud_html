<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?PHP
        $conn = mysqli_connect("localhost","root","","crud") or die("Connection Field");
        $stu_id = $_GET['id'];
        $sql = "select * from student where sid = {$stu_id}";

        $result = mysqli_query($conn,$sql) or die("Sql Unsuccesfull");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ 
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?PHP echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?PHP echo $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?PHP echo $row['sadress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?PHP
            $sql1 = "select * from StudentClass";
            $result1 = mysqli_query($conn,$sql1) or die("Sql Unsuccesfull");

            if(mysqli_num_rows($result1) > 0){
            echo '<select name="sclass">';
            while($row1 = mysqli_fetch_assoc($result1)){
                if($row['sclass'] == $row1['cid'])
                    $select = "selected";
                else
                    $select = "";
            echo "<option {$select} value={$row1['cid']} > {$row1['cname']}</option>";
            }
          echo' </select>';
        }
          ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?PHP echo $row['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?PHP } 
        }
    ?>
</div>
</div>
</body>
</html>
