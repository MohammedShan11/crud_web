
<?php
include 'connection.php';
if(isset($_POST['login'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql=mysqli_query($conn,"select * from login where email='$email' && password='$password'");
        if(mysqli_num_rows($sql)>0){
            echo "<script>window.location.href='admin.php';</script>";
        }else{
            echo "<script>alert('invalid credential!');</script>";
            echo"<script>window.location.href='login.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    <center>
        <h1>Login</h1>
        <div class="container">
        <form action="" method="POST">
        <label>Email : </label>   
            <input type="email" placeholder="Enter email" name="email" required>  <br><br>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  <br><br>
            <button type="submit" name="login">Login</button>     
        </form><br>
        <a href="register.php">Don't have an account ? Sign Up .</a>
        </div>
    </center>
</body>
</html>