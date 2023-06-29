<?php 
function display(){
$name="localhost";
$user="root";
$pass='';
$db="student";
$con=mysqli_connect($name,$user,$pass,$db);
if($con->connect_error){
    die("Connection Failed".$con->connect_error);
}
$sql="select * from student";
$stmt=$con->prepare($sql);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows()>0){
    $stmt->bind_result($id,$name,$address);
    while($stmt->fetch()){
        echo "<tr><td style='background-color:lightblue'>{$id}</td><td>{$name}</td><td>{$address}</td></tr>";
    }
}
$stmt->close();
$con->close();
}
?>