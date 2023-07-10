<?php
    $stu_id = $_POST['sid'];
    $stu_Name = $_POST['sname'];
    $stu_Address = $_POST['saddress'];
    $stu_Class = $_POST['sclass'];
    $stu_Phone = $_POST['sphone'];

    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

    $sql = "UPDATE student SET sname = '$stu_Name', sadress = '$stu_Address', sclass = '$stu_Class', sphone = '$stu_Phone' WHERE sid = '$stu_id'";

    $result = mysqli_query($conn, $sql) or die("Sql Unsuccesfull");

    header("Location: /crud_html/index.php");
    mysqli_close($conn);
?>
