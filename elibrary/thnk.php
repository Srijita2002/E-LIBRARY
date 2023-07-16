<?php 
session_start(); 
$name2=$_SESSION["aname"];
$email=$_SESSION["aemail"];
?>

<?php header('Refresh: 5; URL=admin_index.html'); ?>

<!DOCTYPE html>
<html>
    <head>
       
    
    </head>
    
    <bod>
        <div style="background:rgba(84, 239, 3, 0.25);border:1px solid red;box-shadow:0px 0px 20px red;margin:5% 10%;">
        <center>
        <h1>Thank You Admin<?php echo $name2; ?> </h1>
        <h1>Your Email id <u><?php echo $email; ?></u>  is your  Login Id</h1>
        <h3>Now You Can Log in with your email id And Password</h3>
            <h2>This Page will Aoutomatically Redirect you To The Login Page</h2></center>
            </div>
            
            <?php session_destroy();  ?>
    
    </body>

</html>