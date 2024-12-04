<?php
require('config.php');

session_start(); // Start the session

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE Email='$email'");
$row = mysqli_fetch_assoc($result); // Fetch the row from the result set

if ($row) { // Check if a row is returned
    if ($password == $row["Password"]) { // Check if the password matches
        $_SESSION["login"] = true;
        $_SESSION["id"] =  $row["id"];
        // header("Location: index.html");
        echo "<script>alert('Successful login');</script>";
        exit(); // Stop further execution of PHP script
    } else {
        echo "<script>alert('Wrong Password');</script>";
    }
} else {
    echo "<script>alert('You have not registered.');</script>";
}

$conn->close();
