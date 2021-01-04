<?php

$con=mysqli_connect('localhost','root');
if ($con) {
	echo "Connection successful";
}
else{
	echo "No connection";
}

mysqli_select_db($con,'sample');

$name = $_POST['name'];
$email=$_POST['email'];
$message= $_POST['message'];

$query = " insert into userinfodata (name,email,message)
values ('$name','$email','$message')";

mysqli_query($con, $query);

header('location:index.php');
?>