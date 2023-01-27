<?php 
session_start();
require '/dbconnection.php';

if(isset($_POST['save'])){
    $user_id=mysqli_real_escape_string($connect,$_POST['user_id']);
    $name= mysqli_real_escape_string($connect,$_POST['name']);
    $email= mysqli_real_escape_string($connect,$_POST['email']);
    $gender= mysqli_real_escape_string($connect,$_POST['gender']);
    $agree= mysqli_real_escape_string($connect,$_POST['agree']);
    if(isset($_POST['agree'])){
        $agree ="yes";}
      else{
        $agree="no";
      }
     $query = "UPDATE users SET  name='$name', email='$email',gender='$gender',mail_status='$agree' 
               WHERE id='$user_id'";

     $query_run = mysqli_query($connect, $query);
     if($query_run){
        $_SESSION['message']='Update Done!';
        header("Location:details.php");
        exit(0);
     }
     else{
        $_SESSION['message']='Update data Failed, try again!';
        header("Location:details.php");
        exit(0);
     }
     }

if(isset($_POST['add']) || isset($_POST['name']) || isset($_POST['email']) || isset($_POST['gender'])){
    if(!empty($_POST['name']) &&!empty($_POST['email']) &&!empty($_POST['gender']) ){
    $name= mysqli_real_escape_string($connect,$_POST['name']);
    $email= mysqli_real_escape_string($connect,$_POST['email']);
    $gender= mysqli_real_escape_string($connect,$_POST['gender']);
    $agree= mysqli_real_escape_string($connect,$_POST['agree']);
    if(isset($_POST['agree'])){
        $agree ="yes";}
      else{
        $agree="no";
      }
     $query = "INSERT INTO users (Name,Email,Gender,Mail_Status) VALUES ('$name','$email','$gender','$agree')";
     $query_run = mysqli_query($connect, $query);
     if($query_run){
        $_SESSION['message']='Login Success!';
        header("Location:login.php");
        exit(0);
     }
     else{
        $_SESSION['message']='Login Failed, try again!';
        header("Location:login.php");
        exit(0);
     }
    }
    else{
        $_SESSION['message']='Login Failed, try again!';
        header("Location:login.php");
        exit(0);
     }
}





if(isset($_POST['delete'])){
   $user_id= mysqli_real_escape_string($connect,$_POST['delete']);
   $query= "DELETE FROM users WHERE ID='$user_id'";
   $query_run = mysqli_query($connect, $query);
   if($query_run){
      $_SESSION['message']='Delete Success!';
      header("Location:details.php");
      exit(0);
   }
   else{
      $_SESSION['message']='delete user Failed, try again!';
      header("Location:details.php");
      exit(0);
   }
  }

?>