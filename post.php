<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

 $user_name = $_POST['username'];
 $u_city = $_POST['city'];
 $u_address = $_POST['full_address'];
 $u_password = $_POST['password'];
 
 if( $user_name == '' || $u_city == '' || $u_address == '' || $u_password == ''){
 echo 'please fill all values';
 }else{
 require_once('db_connect.php');
$sql = "SELECT * FROM mytab WHERE email ='$user_name'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$sql));
 
 if(isset($check)){
 echo 'username already exist';
 }else{ 
 $sql = "INSERT INTO mytab (email,city,address,password) VALUES ('$user_name','$u_city','$u_address','$u_password')";
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