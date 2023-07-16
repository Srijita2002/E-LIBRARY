<?php 
include("db_conn.php");?>

<html>
<head>

	<title> E-LIBRARY</title>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
	margin:0px;
	padding:0px;
	overflow: hidden;
}

.bgimage{
	background-image: url('k.jpg');
	background-size: 100% 110%;
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

    table{
                width: 100%;
                border-collapse: collapse;
                height: auto;
        text-align: center;
        color: white;
        font-weight: bold;

            }
    
    th{
        font-size: 17px;
        text-decoration: underline;
        font-style: italic;
    }
    
    .main{
        width: 80%;
        box-shadow: 0px 0px 20px red;
        border-radius: 20px;
        overflow: auto;
        margin-left: 10%;
        margin-top: 2%;
        height:500px;
        background: rgba(0, 0, 0, 0.57);
    }


ul{
  padding: 0  ;
  list-style: none;
}

ul li a{
  text-decoration: none;
  color: white;
  display: block;
}

}

}

</style>


<title>Admin Dasboard</title>
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
                                <li><a href="">upload books</a></li>
                                <li><a href="">edit books</a></li>
								<li><a href="">delete books</a></li>
						   </ul>
				    </li>
					<li><a href="logout.php">Log out</a></li>
			</ul>
			</div>
         </nav>
		</div>
          
          
  
      

       <p style="text-align:center;color:yellow;font-weight:bold">ALL BOOKS</p>
   <div class="main">
      
       <table>
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>
                    <th>Actual Copy</th>
                    <th>Available Copy</th>
                    <th>Depertment</th>
                    <th>Ebook Name</th>
                </tr>
                
                
                
                    
                    
                    
            <?php 
           
           $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                        echo "<tr>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo $row["booksname"]; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["copies"]; echo "</td>";
                        echo "<td>"; echo $row["avl_cpy"]; echo "</td>";
                        echo "<td>"; echo $row["dept"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                    }

	            ?>
                </table>
      
      </div>   
   

  </div>
      
      
      
      
 




        

   
    </body>
  
</html>
