<?php session_start();
    include('connect.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
   $login="SELECT * FROM admins where email='$email'";
   $login=mysqli_query($conn,$login);
   $dbAdminData = mysqli_fetch_assoc($login);
   $passwordDb=$dbAdminData['password'];
   $count = mysqli_num_rows($login);
  if($count > 0 ){
        if(password_verify($password,$passwordDb)){
            $_SESSION['login']=true;
            $_SESSION['name']=$dbAdminData['name'];
            header('location: ../users.php');
        }else {
            $_SESSION['error']='password is invalid';
            header('location: ../login.php');
        }
  }else {
    $_SESSION['error']='email is invalid';
    header('location: ../login.php');

  }
?>