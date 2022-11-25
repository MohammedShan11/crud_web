<?php
include 'connection.php';
if(isset($_POST['register'])){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $password=$_POST['password'];
        // if($conn->connect_error){
        //     die('Could not connet to the database.');
        // }else{
        //     echo "Connection OK";
            $sql1=mysqli_query($conn,"insert into login(email,password) values('$email','$password')");
            $log_id=mysqli_insert_id($conn);
            $sql2=mysqli_query($conn,"insert into register(name,phonenumber,login_id) values('$name','$number','$log_id')");
            if($sql1 && $sql2){
                echo "Registered successfully";
                echo "<script>window.location.href='login.php'; </script>";
            }else{
                echo "Registration Failed !!";
                header('location:register.php');
            }
        }
    }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    <center>
        <h1>Registration</h1>
        <form action="" method="POST">
            <label>Name: </label>   
            <input type="text" placeholder="Enter Name" name="name" > <br><br>
            <label>Email : </label>   
            <input type="email" placeholder="Enter email" name="email" required> <br><br>
            <label>PhoneNumber: </label>   
            <input type="number" placeholder="Enter PhoneNumber" name="number"> <br><br>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required> <br><br>
            <button type="submit" class="registerbtn" name="register">Register</button>
        </form>
        <a href="login.php">Already have an account ? Sign In .</a>
    </center>
</body>
</html>