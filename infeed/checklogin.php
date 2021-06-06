<?php
session_start();
$connection = mysqli_connect('127.0.0.1', 'root' , 'root' , 'register_bd');
if(!$connection)
{
	echo "Connection error" ;
}
$login = $_POST['login'];
$password = $_POST['password'];
$check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if(mysqli_num_rows($check_user) > 0)
{
$user = mysqli_fetch_assoc($check_user);

$_SESSION['user1'] = [
	"id" => $user['id'],
	"name" => $user['Name'],
    "email" => $user['email'], 
    "secondname" => $user['secondname'],
"avatar" => $user['avatar'] 
];

	header("Location: ../1.php");

}
else{
	echo "Неправильный логин или пароль";
}
mysqli_close($connection);
?>
