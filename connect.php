<?php

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$password=$_POST['password'];

//database connection

$conn= new mysqli('localhost','root','','job');
if($conn -> connect_error){
    die ("connection failed: ",$conn->connection_error);
}
else
{
    $stmt=$conn->prepare("Insert into registration(fullname,email,phone_no,password) value (?,?,?,?)")
    $stmt->bind_param("ssis",$fullname,$email,$phone_no,$password);
    $stmt->execute();
    echo "Registration Sucessfully...";
    $stmt->close();
    $conn->close();
}