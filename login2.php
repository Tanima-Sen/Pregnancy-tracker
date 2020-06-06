<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $email = $_POST['email'];
 $password = $_POST['password'];

 
 require_once('db_connect.php');
 
 $sql = "select * from mytab2 where email='$email' and password='$password'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 if(isset($check)){
 echo "success";
 }else{
 echo "Invalid Username or Password";
 }
 
 }else{
 echo "error try again";
 }

