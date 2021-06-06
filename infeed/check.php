<?php
session_start();
$connection = mysqli_connect('127.0.0.1', 'root' , 'root' , 'register_bd');
if(!$connection)
{
	echo "Connection error" ;
}

$login = $_POST['login'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$sname = $_POST['secondname'];
$path = $_FILES['avatar']['name'];


if(strlen($login) < 5 || strlen($login) > 90){
	echo "Длина логина недопустима";
	exit();
}
else if(strlen($name) < 1 || strlen($name) > 50 ){
	echo "Длина имени недопустима";
	exit();
}
else if(strlen($sname) < 1 || strlen($sname) > 50 ){
	echo "Длина фамилии недопустима";
	exit();
}
else if(strlen($pass) < 6 || strlen($pass) > 100 ){
	echo "Длина пароля недопустима";
	exit();
}
else{
	echo'<script> location.replace("index.html"); </script>';
}


$sql = "INSERT INTO users (`login` ,`name`, `secondname`, `email`, `password`, `avatar`) VALUES('$login' ,'$name', '$sname' , '$email', '$pass', '$path' ) ";

if (mysqli_query($connection, $sql)) {
    
header ('Location: login.html');

} 
else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);


?>
