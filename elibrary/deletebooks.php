<?php include("db_conn.php");

$msg="";



if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{


  $id=$_POST['book_id'];  
  

  if($id!="")
  {  
      $sql="DELETE FROM `book` WHERE `book`.`b_id` ="."'$id'";
      
	$data = mysqli_query($conn, $sql);
	
      if($data)
	  {
	    $msg= "Book Delete Successfully";
	  }
	  else
	  {
	    $msg= "Something Went Wrong..";
	  }
}
    else
	  {
	   $msg="Book ID Required";
	  }
}
?>
<html>
<head>
<title>Delete Book</title>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
	margin:0px;
	padding:0px;
}

.bgimage{
	background-image: url('i.jpg');
	background-size: 100% 100%;
	width: 100%;
	height: 100vh;
}
nav:after{
	content: '';
	display: block;
	clear: both;
}
.menu{

	width: 100%;
	height: 100px;
	background-color: rgba(0,0,0,0.5);
}

.leftmenu{
	width: 20%;
	line-height: 100px;
	float: left;
/*	background-color: yellow;*/
}

.leftmenu h4{
	padding-left: 70px;
	font-weight: bold;
	color: white;
	font-size: 22px;
	font-family: 'Montserrat', sans-serif;
}


.rightmenu{
	
	width:70%;
	height: 100px;
	float: right;
/*	background-color: red; */
}
.rightmenu ul{
	margin-left: 200px;
	list-style: none;
    display: flex;
}
.rightmenu li {
	display: inline-block;
	list-style: none;
	position: relative;

}
.rightmenu ul li a{
	font-family: 'Montserrat', sans-serif;
	display: inline-block;
	list-style: none;
	font-size: 15px;
	color:white;
	font-weight: bold;
	line-height: 100px;
	margin-left: -20px;
	text-transform: uppercase;
	padding-left: 200px;

}

.rightmenu ul li ul{
 display:none;
}




#fisrtlist{
	color: orange;
}

.rightmenu ul li a:hover{
	color: orange;
}
.rightmenu li:hover .dropdown{
	display: block;
}
.dropdown {
	background-color: rgba(0,0,0,0.8);
	position: absolute;
	display: none;
	top: 99px;
	left: -150px;
	
	width: 340px;
}
.dropdown li{
	border: 2px solid #222;
	display: block;
	color: #fff;
}
	 


	.title
	       {
				color:#FFFFFF;
			   font-size:20px;
			 	font-weight:10px;
				
				background:rgba(0,0,0,0.5);
                margin-top: 4%;
				margin-right:56%;
				padding-left:10%;
				font-style:italic;
				}
	.title h2{
	           background:#660000;
			   border:none;
         margin-left:20px;
         margin-top: 10px;
			  padding-top:3px;
        padding-bottom: 2px;
			    padding-left:150px;
				border-radius:15px;
        width:280px;
	           }

	.container{
        margin-top: 75px;
	            margin-left:20%;

				font-weight:40px;
				height:350px;
				background:rgba(0,0,0,0.5);
				padding-left:3%;
                width:600px;
        box-shadow:0px 0px 15px lightgreen;
        border-radius:18px;
        overflow:auto;
				}

   .header input[type="submit"]
          {

		    font-size:25px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:110% ;
            margin-top: 10px;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
			}




	

</style>
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
					<li id="fisrtlist"><a href="admin_index.php"> HOME </a></li>
					<li> <a href="all_books.php">BOOKS</a>
					<ul  class="dropdown">
                                <li><a href="book_add.php">upload books</a></li>
                                <li><a href="bookedit.php">edit books</a></li>
								<li><a href="delbook.php">delete books</a></li>
						   </ul>
				    </li>
					<li><a href="logout.php">Log out</a></li>
			</ul>
			</div>
         </nav>
		</div>
		<form action="" method="POST" enctype="multipart/form-data">
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>DELETE BOOK</h2>
      </div>

  <table style= "color:#FFFFFF;padding-top:10px;">
      
       <tr>
     <td style="width:250px;text-align:center">BOOK ID:</td>
     <td><input style="width:200px;" type="text" name="book_id" placeholder="books ID"/></td>
	</tr>
      
      <tr>
	  <td><h2><input style="margin-left:100%;margin-top:30%;" type="submit" name="sub" value="Delete"/></h2></td>
	  </tr>
      
      <tr><td  style="color:red;font-weight:bold;text-align:center"><?php echo $msg; ?></td></tr>
    </table>
    </div>
   </div> 
 </form>
</body>
</html>
      