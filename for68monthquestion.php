<?php
//open connection to mysql db
$connection = mysqli_connect("localhost","root","","pregnancytanima")
or die("Error " . mysqli_error($connection));
// recieved from app
$title= $_POST['title'];
$name = $_POST['name'];
$age = $_POST['age'];
$problem = $_POST['problem'];
echo "Response: ".$name." ";
$sql_query = "INSERT INTO question2 (title,name,age,problem) VALUES ('".$title."','".$name."','".$age."','".$problem."')";
if (mysqli_query($connection, $sql_query)) {
echo "We just posted a vua news from cool app!";
} else {
echo "Error: " . $sql_query . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
?>