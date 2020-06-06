<?php
//open connection to mysql db
$connection = mysqli_connect("localhost","root","","pregnancytanima")
or die("Error " . mysqli_error($connection));
// recieved from app
$title= $_POST['title'];
$name = $_POST['name'];
$problem = $_POST['problem'];
$answer = $_POST['answer'];
echo "Response: ".$name." ";
$sql_query = "INSERT INTO answer (title,name,problem,answer) VALUES ('".$title."','".$name."','".$problem."','".$answer."')";
if (mysqli_query($connection, $sql_query)) {
echo "We just posted a vua news from cool app!";
} else {
echo "Error: " . $sql_query . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
?>