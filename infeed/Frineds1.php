<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Friends
	</title>
	<link rel="stylesheet" href="Main.css">
</head>
<body>
	<form action="checkfriend.php" method="post" class="forma" enctype="multipart/form-data">

		<input type="text" name="friendsname" placeholder="Enter name of your friend"/>
		<br>
		<input type="text" name="friendssname" placeholder="Enter secondname of your friend"/>
		<br>
		<button>Find</button>
	</form>

<h2><?= $_SESSION['user']['name'] ?></h2>
<h2><?= $_SESSION['user']['secondname'] ?> </h2>
<img src="<?= $_SESSION['user']['avatar'] ?>" width = "300px" height="250px" id="avatar2"/>
<h2><?= $_SESSION['user']['email'] ?> </h2>


<table>
		<tr>
			<td class="firstbar">
				<a href="News.html" class="a">
				News
			</a>
			</td>
			<td class="secondbar">
				<a href="Message.html" class="a">Message</a>
			</td>
			<td class="thirdbar">
				<a href="1.php" class="a">My profile</a>
			</td>
			<td class="fourthbar">
				<a href="Friends.php" class="a">Friends</a>
			</td>
		</tr>
	</table>  
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>  
<br>
<br>   
</body>
</html>