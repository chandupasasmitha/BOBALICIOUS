<?php
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $password = $_POST['password'];

 //databse connection
$conn = new mysqli('localhost','root','','sample');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into users(Fname,Lname,Email,Password)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$fname,$lname,$email,$password);
    $stmt ->execute();
    echo "Registration Successfull!";
    $stmt->close();
    $conn->close();
}

?>