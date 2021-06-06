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
	<link rel="stylesheet" href="Registration1.css">
</head>
<body>
	<form action="checkfriend.php" method="post" class="forma" enctype="multipart/form-data">
		<h1 id="name">
		<input type="text" id="apearText" name="friendsname" placeholder="Enter name of your friend" style="  position: absolute; top: 10px; left: 10px; padding: 15px;"/>
	    </h1>
		<br>
		<br>
		<br>
		<h2 id="name2">
		<input type="text" id="apearText1" name="friendssname" placeholder="Enter secondname of your friend" style="  position: absolute; top: 100px; left: 10px; padding: 15px;"/>
		</h2>
		<br>
		<br>
		<br>
		<br>
		<button><img src="images/search.png" style="
		height: 60px; width: 60px; position: absolute; border: none; background: transparent; top: 20px; left: 350px;"></button>
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