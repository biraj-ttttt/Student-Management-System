<?php
require_once '../config/dv.php';
//print_r($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
     

    // Hash the password
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    //Insert into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
   
    if (mysqli_query($conn,$sql)){
        header("Location: ../login.php?success=1");
        exit();
        //echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($conn);    
   
}  } 
?>
