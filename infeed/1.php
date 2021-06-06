<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<form>
<img src="<?= $_SESSION['user1']['avatar'] ?>" width = "300px" height="250px" id="avatar2"/>
<div class ="text">
<h2><?= $_SESSION['user1']['name'] ?></h2>
<h2><?= $_SESSION['user1']['secondname'] ?> </h2>
<h2><?= $_SESSION['user1']['email'] ?> </h2>
</div>
</form>
	
							
			
		
	
    </header>
</body>
</html>