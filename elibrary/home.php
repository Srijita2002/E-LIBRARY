<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> E-LIBRARY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			<nav>
			<div class="leftmenu">
				<h4> E-Library </h4>
			</div>

			<div class="rightmenu">
			<ul>
					<li id="fisrtlist"><a href="home.php"> HOME </a></li>
					<li> <a href="about.html">About us</a> </li>
					<li> <a href="s_books.php">Books</a></li>
					<li><a href="index4.php">Feedback</a></li>
					<li><a href="logout.php">Log out</a></li>
			</ul>
			</div>
         </nav>
		</div>

		<div class="text">
			<br>
			<h1> WELCOME <?php echo $_SESSION['name']; ?> </h1>
			
			
		</div>

	</div>

</body>
</html>
<?php 
}else{
     header("Location: log.php");
     exit();
}
 ?>
