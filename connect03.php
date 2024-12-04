<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];


//databse connection
$conn = new mysqli('localhost','root','','contactus');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into customers(name,email,message)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt ->execute();
    echo "Registration Successfull!";
    $stmt->close();
    $conn->close();
}
?>