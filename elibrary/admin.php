<html>
<head>
    <title> Admin login </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" type="text/css" href="style1.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
     
	
</head>
    <body>
	
		<div class="menu">
			<nav>
			<div class="leftmenu">
				<h4> E-LIBRARY </h4>
			</div>

			<div class="rightmenu">
			<ul>
					<li id="fisrtlist"><a href="index.html"> HOME </a></li>
					<li> <a href="about.html">About us</a> </li>
					<li><a href="#"> Log in</a>
					<ul  class="dropdown">
                                <li><a href="admin.php">Admin login</a></li>
                                <li><a href="log.php">User login</a></li>
						   </ul>
				    </li>
					       
					
					<li><a href="index4.php">Feedback</a></li>
			</ul>
			</div>
           </nav>
		</div>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
	<form action="adlog.php" method="post">
        <h1>Welcome Admin</h1>
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
            <form>
			
            <p>Admin id</p>
			<input type="text" name="uname" placeholder="Enter Username" >
            
            <p>Password</p>
			<input type="password" name="password" placeholder="Enter Password" >
            <input type="submit" name="submit" value="Login">
            <a href="forgot.php">Forget Password</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        Wanna be new admin?<a style="color: white;" href="registration.php">Sign Up</a> 
			
            </form>
        
        
        </div>
    
    </body>
</html>