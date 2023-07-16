<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> E-LIBRARY</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			<nav>
			<div class="leftmenu">
				<h4> ADMIN PANNEL </h4>
			</div>

			<div class="rightmenu">
			<ul>
					<li id="fisrtlist"><a href="admin_index.php."> HOME </a></li>
					<li> <a href="all_books.php">BOOKS</a>
					<ul  class="dropdown">
                                <li><a href="book_add.php">upload books</a></li>
                                <li><a href="bookedit.php">edit books</a></li>
								<li><a href="deletebooks.php">delete books</a></li>
						   </ul>
				    </li>
					
					<li><a href="logout.php">Log out</a></li>
			</ul>
			</div>
         </nav>
		</div>

		<div class="text">
			<br><br><br>
			<h1> WELCOME <?php echo $_SESSION['name']; ?> </h1>
			
			
		</div>
<div class="log-sign" style="--i: 1.8s">
                    <a href="feedback_check.php" class="btn transparent">Feedback</a>
                </div>
	</div>

</body>
</html>
<?php 
}else{
     header("Location: admin.php");
     exit();
}
 ?>

