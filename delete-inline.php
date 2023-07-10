<?php
$stu_id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Field");

        $sql = "delete from student where sid = {$stu_id}";

        $result = mysqli_query($conn,$sql) or die("Sql Unsuccesfull");

        header("Location: /crud_html/index.php");
    mysqli_close($conn);
?>