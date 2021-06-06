<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Friends
	</title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="home2.css">
</head>
<body>
     <header class="header">
            <div class="container">
                <div class="header_inner">
                    
                     
                      <nav class="nav">
                      <a class="nav_link"href="News.html" class="a">
				News
			</a>
				<a class="nav_link" href="Message.html" class="a">Message</a>
			
				<a  class="nav_link" href="1.php" class="a">My profile</a>
			
			
				<a  class="nav_link" href="Friends.php" class="a">Friends</a>
                          <a class="nav_link" href="index.html">Log out</a>
</nav>
                </div>
        </div>
</head>
<body>
	<form action="checkfriend.php" method="post" class="forma" enctype="multipart/form-data">
		<h1 id="name">
		<input type="text" class="form-control"  id="apearText" name="friendsname" placeholder="Enter name of your friend" style="  position: absolute; top: 10px; left: 10px; padding: 15px;" />
		</h1>
		<br>
		<br>
		<br>
		<h2 id="name2">
		<input type="text" class="form-control" id="apearText1" name="friendssname" placeholder="Enter secondname of your friend" style="position: absolute; top: 100px; left: 10px; padding: 15px;" />
		</h2>
		<br>
		<br>
		<br>
		<br>
		<br>

		<button><img src="images/search.png" style="
		height: 60px; width: 60px; position: absolute; border: none; background: transparent; top: 20px; left: 350px;"></button>
	</form>

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