<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

 $user_name = $_POST['username'];
 $email = $_POST['email'];
 $u_city = $_POST['city'];
 $u_address = $_POST['full_address'];
 $u_password = $_POST['password'];
 
 if( $user_name == '' || $email == '' || $u_city == '' || $u_address == '' || $u_password == ''){
 echo 'please fill all values';
 
 }else{
 require_once('db_connect.php');
$sql = "SELECT * FROM mytab2 WHERE email ='$email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 if(isset($check)){
 echo 'username already exist';
 }else{ 
 $sql = "INSERT INTO mytab2 (name,email,city,address,password) VALUES ('$user_name','$email','$u_city','$u_address','$u_password')";
 if(mysqli_query($con,$sql)){
 echo 'successfully registered';
 }else{
 echo 'oops! Please try again!';
 }
 }
 mysqli_close($con);
 }
}else{
echo 'error';
}
?>