<?php
$name="localhost";
$user="root";
$pass='';
$db="student";
$con=mysqli_connect($name,$user,$pass,$db);
if($con->connect_error){
    die("Connection Failed".$con->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add'])){
        $name=$_POST['student_name'];
        $address=$_POST['address'];
        $sql="INSERT INTO STUDENT (name,address) VALUES(?,?)";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("ss",$name,$address);
        $stmt->execute();
        $stmt->close();
        $con->close();
        header("location:..\index.php");
    }
    if(isset($_POST['del'])){
        $name=trim($_POST['student_name']," ");
        $sql="DELETE FROM STUDENT WHERE name LIKE ?";
        $stmt=$con->prepare($sql);
        $name="%".$name."%";
        $stmt->bind_param("s",$name);
        $stmt->execute();
        $stmt->close();
        $con->close();
        header("location:..\index.php");
    }
}

?>