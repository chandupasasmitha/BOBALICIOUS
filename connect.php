<?php
 $Name = $_POST['Name'];
 $EmailAdress = $_POST['EmailAdress'];
 $ContactNumber = $_POST['ContactNumber'];
 $Adress = $_POST['Adress'];

 //databse connection
$conn = new mysqli('localhost','phpmyadmin','','checkin');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into adddata(Name,EmailAddress,ContactNumber,Address)
    values(?,?,?,?)");
    $stmt->bind_param("ssis",$Name,$EmailAdress,$ContactNumber,$Adress);
    $stmt ->execute();
    echo "Regist";
    $stmt->close();
    $connt->close();
}



?>