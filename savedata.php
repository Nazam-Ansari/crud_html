<?PHP
    $stu_Name = $_POST['sname'];
    $stu_Address = $_POST['saddress'];
    $stu_Class = $_POST['sclass'];
    $stu_Phone = $_POST['sphone'];

    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Field");

    $sql = "INSERT INTO student(sname, sadress, sclass, sphone)
    VALUES ('$stu_Name', '$stu_Address', '$stu_Class', '$stu_Phone')";



        $result = mysqli_query($conn,$sql) or die("Sql Unsuccesfull");

        header("Location:/crud_html/index.php");
    mysqli_close($conn);
?>