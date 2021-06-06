<?php
session_start();
$connection = mysqli_connect('127.0.0.1', 'root' , 'root' , 'register_bd');
if(!$connection)
{
	echo "Connection error" ;
}
$name = $_POST['friendsname'];
$sname = $_POST['friendssname'];
$check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `Name` = '$name' AND `secondname` = '$sname'");

if(mysqli_num_rows($check_user) > 0)
{
$user = mysqli_fetch_assoc($check_user);
$_SESSION['user'] = [
	"id" => $user['id'],
	"name" => $user['Name'],
    "secondname" => $user['secondname'],
    "avatar" => $user['avatar'] 
];

	header("Location: ../Friends1.php");

}
else{
	echo "Людей с таким именем или фамилией не существует";
}


mysqli_close($connection);
?>
